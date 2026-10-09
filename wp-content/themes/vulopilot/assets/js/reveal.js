/**
 * Generic scroll-reveal system for [data-reveal] elements.
 * Adds .is-visible once an element enters the viewport.
 */
(function () {
	'use strict';

	var prefersReduced = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	function init() {
		var items = document.querySelectorAll( '[data-reveal]' );

		if ( prefersReduced || ! ( 'IntersectionObserver' in window ) ) {
			items.forEach( function ( el ) {
				el.classList.add( 'is-visible' );
			} );
			return;
		}

		items.forEach( function ( el ) {
			var delay = el.getAttribute( 'data-reveal-delay' );
			if ( delay ) {
				el.style.transitionDelay = delay + 'ms';
			}
		} );

		var observer = new IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						entry.target.classList.add( 'is-visible' );
						observer.unobserve( entry.target );
					}
				} );
			},
			{ threshold: 0.2, rootMargin: '-10% 0px' }
		);

		items.forEach( function ( el ) {
			observer.observe( el );
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
