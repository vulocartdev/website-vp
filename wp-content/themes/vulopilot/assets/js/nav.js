/**
 * Fixed nav: scroll progress bar + mobile menu toggle.
 */
(function () {
	'use strict';

	function init() {
		var progress = document.querySelector( '.nav-progress' );
		if ( progress ) {
			window.addEventListener(
				'scroll',
				function () {
					var doc = document.documentElement;
					var max = doc.scrollHeight - doc.clientHeight;
					var pct = max > 0 ? doc.scrollTop / max : 0;
					progress.style.transform = 'scaleX(' + Math.min( 1, Math.max( 0, pct ) ) + ')';
				},
				{ passive: true }
			);
		}

		var toggle = document.querySelector( '.nav-toggle' );
		var links = document.querySelector( '.nav-links-mobile' );
		if ( toggle && links ) {
			toggle.addEventListener( 'click', function () {
				links.classList.toggle( 'is-open' );
			} );
		}
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
