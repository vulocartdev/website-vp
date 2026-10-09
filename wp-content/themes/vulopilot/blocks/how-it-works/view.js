/**
 * How it works: step switching + checklist progress-bar animation.
 */
(function () {
	'use strict';

	var stepTitles = [ 'Find', 'Understand', 'Prioritize', 'Fix', 'Verify' ];

	function animateChecklist( container ) {
		container.querySelectorAll( '[data-progress]' ).forEach( function ( bar, i ) {
			var target = bar.getAttribute( 'data-target' );
			var row = bar.closest( '.vp-check-row' );
			setTimeout( function () {
				bar.style.width = target + '%';
				setTimeout( function () {
					var mark = row.querySelector( '[data-checkmark]' );
					if ( mark ) mark.classList.add( 'is-done' );
				}, 1000 );
			}, i * 150 );
		} );
	}

	function init() {
		var block = document.querySelector( '[data-how]' );
		if ( ! block ) return;

		var steps = block.querySelectorAll( '.vp-step' );
		var panels = block.querySelectorAll( '.vp-panel-view' );
		var numEl = block.querySelector( '[data-panel-step-num]' );
		var titleEl = block.querySelector( '[data-panel-step-title]' );

		steps.forEach( function ( step, i ) {
			step.addEventListener( 'click', function () {
				steps.forEach( function ( s ) { s.classList.remove( 'is-active' ); } );
				step.classList.add( 'is-active' );

				panels.forEach( function ( panel ) {
					panel.hidden = panel.getAttribute( 'data-panel' ) !== String( i );
				} );

				if ( numEl ) numEl.textContent = '0' + ( i + 1 );
				if ( titleEl ) titleEl.textContent = stepTitles[ i ] || '';

				if ( i === 0 ) {
					var checklist = block.querySelector( '[data-panel="0"]' );
					if ( checklist ) animateChecklist( checklist );
				}
			} );
		} );

		// Animate initial checklist (step 0) once in view.
		var initialChecklist = block.querySelector( '[data-panel="0"]' );
		if ( initialChecklist && 'IntersectionObserver' in window ) {
			var obs = new IntersectionObserver(
				function ( entries ) {
					entries.forEach( function ( entry ) {
						if ( entry.isIntersecting ) {
							animateChecklist( initialChecklist );
							obs.disconnect();
						}
					} );
				},
				{ threshold: 0.3 }
			);
			obs.observe( initialChecklist );
		} else if ( initialChecklist ) {
			animateChecklist( initialChecklist );
		}
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
