/**
 * Problem block: sliding tab toggle between "Without" and "With" panels.
 */
(function () {
	'use strict';

	function init() {
		document.querySelectorAll( '[data-tabs]' ).forEach( function ( tabs ) {
			var buttons = tabs.querySelectorAll( '[data-tab]' );
			var card = tabs.parentElement.querySelector( '.vp-scatter-card' );
			if ( ! card ) return;

			buttons.forEach( function ( btn, i ) {
				btn.addEventListener( 'click', function () {
					buttons.forEach( function ( b ) { b.classList.remove( 'is-active' ); } );
					btn.classList.add( 'is-active' );

					var pill = tabs.querySelector( '.vp-toggle-pill' );
					if ( pill ) {
						if ( i === 0 ) {
							pill.parentElement.insertBefore( pill, buttons[0] );
							buttons[0].prepend( pill );
						} else {
							buttons[1].prepend( pill );
						}
					}

					card.querySelectorAll( '[data-tab-panel]' ).forEach( function ( panel ) {
						panel.hidden = panel.getAttribute( 'data-tab-panel' ) !== btn.getAttribute( 'data-tab' );
					} );
				} );
			} );
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
