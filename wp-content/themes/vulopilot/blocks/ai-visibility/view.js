/**
 * AI visibility block: animate the three mini gauges on scroll into view.
 */
(function () {
	'use strict';

	function animateGauge( gaugeEl ) {
		var circle = gaugeEl.querySelector( '.vp-gauge-fill' );
		var counter = gaugeEl.querySelector( '[data-counter]' );
		if ( ! circle ) return;

		var target = parseFloat( circle.getAttribute( 'data-target-offset' ) );
		requestAnimationFrame( function () {
			circle.style.transition = 'stroke-dashoffset 1.2s cubic-bezier(.16,1,.3,1)';
			circle.style.strokeDashoffset = target;
		} );

		if ( counter ) {
			var end = parseInt( counter.getAttribute( 'data-target' ), 10 ) || 0;
			var duration = 1200;
			var startTime = null;

			function step( ts ) {
				if ( ! startTime ) startTime = ts;
				var progress = Math.min( 1, ( ts - startTime ) / duration );
				counter.textContent = Math.round( end * progress );
				if ( progress < 1 ) requestAnimationFrame( step );
			}
			requestAnimationFrame( step );
		}
	}

	function init() {
		var section = document.querySelector( '.vp-ai' );
		if ( ! section ) return;

		var gauges = section.querySelectorAll( '[data-gauge]' );
		if ( ! gauges.length ) return;

		if ( 'IntersectionObserver' in window ) {
			var obs = new IntersectionObserver(
				function ( entries ) {
					entries.forEach( function ( entry ) {
						if ( entry.isIntersecting ) {
							animateGauge( entry.target );
							obs.unobserve( entry.target );
						}
					} );
				},
				{ threshold: 0.4 }
			);
			gauges.forEach( function ( g ) { obs.observe( g ); } );
		} else {
			gauges.forEach( animateGauge );
		}
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
