( function ( blocks, blockEditor, element, components, i18n ) {
	var el = element.createElement;
	var useBlockProps = blockEditor.useBlockProps;
	var TextControl = components.TextControl;
	var InspectorControls = blockEditor.InspectorControls;
	var PanelBody = components.PanelBody;
	var __ = i18n.__;

	blocks.registerBlockType( 'vulopilot/meet-vulopilot', {
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
						{ title: __( 'Meet VuloPilot', 'vulopilot' ) },
						el( TextControl, {
							label: __( 'Heading', 'vulopilot' ),
							value: attributes.heading,
							onChange: function ( v ) { setAttributes( { heading: v } ); },
						} ),
						el( TextControl, {
							label: __( 'Subhead', 'vulopilot' ),
							value: attributes.subhead,
							onChange: function ( v ) { setAttributes( { subhead: v } ); },
						} )
					)
				),
				el(
					'div',
					{ style: { padding: '24px', background: '#f5f7fc', borderRadius: '16px' } },
					el( 'div', { style: { fontSize: '11px', textTransform: 'uppercase', color: '#002991' } }, 'Meet VuloPilot' ),
					el( 'h2', { style: { fontWeight: 600 } }, attributes.heading ),
					el( 'p', { style: { color: '#5d6784' } }, attributes.subhead ),
					el( 'p', { style: { fontSize: '12px', color: '#5d6784' } }, __( 'The five question/answer rows render on the front end.', 'vulopilot' ) )
				)
			);
		},
		save: function () {
			return null;
		},
	} );
} )( window.wp.blocks, window.wp.blockEditor, window.wp.element, window.wp.components, window.wp.i18n );
