( function ( blocks, blockEditor, element, components, i18n ) {
	var el = element.createElement;
	var useBlockProps = blockEditor.useBlockProps;
	var TextControl = components.TextControl;
	var InspectorControls = blockEditor.InspectorControls;
	var PanelBody = components.PanelBody;
	var __ = i18n.__;

	blocks.registerBlockType( 'vulopilot/final-cta', {
		edit: function ( props ) {
			var attributes = props.attributes;
			var setAttributes = props.setAttributes;
			var blockProps = useBlockProps( { className: 'vp-editor-preview' } );

			return el(
				'div',
				blockProps,
				el(
					InspectorControls,
					{},
					el(
						PanelBody,
						{ title: __( 'Final CTA', 'vulopilot' ) },
						el( TextControl, {
							label: __( 'Heading', 'vulopilot' ),
							value: attributes.heading,
							onChange: function ( v ) { setAttributes( { heading: v } ); },
						} ),
						el( TextControl, {
							label: __( 'Button text', 'vulopilot' ),
							value: attributes.buttonText,
							onChange: function ( v ) { setAttributes( { buttonText: v } ); },
						} ),
						el( TextControl, {
							label: __( 'Helper text', 'vulopilot' ),
							value: attributes.helperText,
							onChange: function ( v ) { setAttributes( { helperText: v } ); },
						} )
					)
				),
				el(
					'div',
					{ style: { padding: '24px', background: '#f5f7fc', borderRadius: '16px', textAlign: 'center' } },
					el( 'h2', { style: { fontWeight: 600 } }, attributes.heading ),
					el( 'p', { style: { color: '#5d6784' } }, attributes.buttonText + ' — ' + attributes.helperText )
				)
			);
		},
		save: function () {
			return null;
		},
	} );
} )( window.wp.blocks, window.wp.blockEditor, window.wp.element, window.wp.components, window.wp.i18n );
