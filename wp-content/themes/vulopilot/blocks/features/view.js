/**
 * Features block: sidebar tab switching.
 */
(function () {
	'use strict';

	function init() {
		document.querySelectorAll( '[data-features]' ).forEach( function ( block ) {
			var tabs = block.querySelectorAll( '[data-feature]' );
			var panels = block.querySelectorAll( '[data-feature-panel]' );

			tabs.forEach( function ( tab ) {
				tab.addEventListener( 'click', function () {
					tabs.forEach( function ( t ) { t.classList.remove( 'is-active' ); } );
					tab.classList.add( 'is-active' );
					panels.forEach( function ( panel ) {
						panel.hidden = panel.getAttribute( 'data-feature-panel' ) !== tab.getAttribute( 'data-feature' );
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
