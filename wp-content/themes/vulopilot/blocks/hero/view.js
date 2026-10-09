/**
 * Hero block front-end behaviour:
 * - rotateX flip on entrance + cycling through rotating phrases
 * - animated gauge stroke-dashoffset + number counter
 */
(function () {
	'use strict';

	function animateGauge( el ) {
		var circle = el.querySelector( '.vp-gauge-fill' );
		var counter = el.querySelector( '[data-counter]' );
		if ( ! circle ) return;

		var target = parseFloat( circle.getAttribute( 'data-target-offset' ) );
		requestAnimationFrame( function () {
			circle.style.strokeDashoffset = target;
		} );

		if ( counter ) {
			var end = parseInt( counter.getAttribute( 'data-target' ), 10 ) || 0;
			var start = 0;
			var duration = 1200;
			var startTime = null;

			function step( ts ) {
				if ( ! startTime ) startTime = ts;
				var progress = Math.min( 1, ( ts - startTime ) / duration );
				counter.textContent = Math.round( start + ( end - start ) * progress );
				if ( progress < 1 ) requestAnimationFrame( step );
			}
			requestAnimationFrame( step );
		}
	}

	function initRotatingHeadline( hero ) {
		var wrap = hero.querySelector( '.vp-rotating-word' );
		if ( ! wrap ) return;

		var words;
		try {
			words = JSON.parse( hero.getAttribute( 'data-rotating' ) || '[]' );
		} catch ( e ) {
			words = [];
		}
		if ( ! words.length ) return;

		// Entrance flip for the first word.
		wrap.style.opacity = '0';
		wrap.style.transform = 'rotateX(-60deg)';
		requestAnimationFrame( function () {
			requestAnimationFrame( function () {
				wrap.style.opacity = '1';
				wrap.style.transform = 'rotateX(0)';
			} );
		} );

		if ( words.length < 2 ) return;

		var index = 0;
		setInterval( function () {
			index = ( index + 1 ) % words.length;
			wrap.style.transition = 'opacity .35s, transform .35s';
			wrap.style.opacity = '0';
			wrap.style.transform = 'rotateX(-60deg)';
			setTimeout( function () {
				wrap.textContent = words[ index ];
				wrap.style.opacity = '1';
				wrap.style.transform = 'rotateX(0)';
			}, 350 );
		}, 3200 );
	}

	function init() {
		var hero = document.querySelector( '.vp-hero' );
		if ( ! hero ) return;

		initRotatingHeadline( hero );

		var gauge = hero.querySelector( '.vp-gauge' );
		if ( gauge && 'IntersectionObserver' in window ) {
			var obs = new IntersectionObserver(
				function ( entries ) {
					entries.forEach( function ( entry ) {
						if ( entry.isIntersecting ) {
							animateGauge( hero );
							obs.disconnect();
						}
					} );
				},
				{ threshold: 0.4 }
			);
			obs.observe( gauge );
		} else if ( gauge ) {
			animateGauge( hero );
		}
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
