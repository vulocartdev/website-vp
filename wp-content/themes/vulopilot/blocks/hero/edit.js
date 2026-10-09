( function ( blocks, blockEditor, element, components, i18n ) {
	var el = element.createElement;
	var useBlockProps = blockEditor.useBlockProps;
	var TextControl = components.TextControl;
	var TextareaControl = components.TextareaControl;
	var InspectorControls = blockEditor.InspectorControls;
	var PanelBody = components.PanelBody;
	var __ = i18n.__;

	blocks.registerBlockType( 'vulopilot/hero', {
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
						{ title: __( 'Hero content', 'vulopilot' ) },
						el( TextControl, {
							label: __( 'Eyebrow', 'vulopilot' ),
							value: attributes.eyebrow,
							onChange: function ( v ) { setAttributes( { eyebrow: v } ); },
						} ),
						el( TextControl, {
							label: __( 'Headline start', 'vulopilot' ),
							value: attributes.headlineStart,
							onChange: function ( v ) { setAttributes( { headlineStart: v } ); },
						} ),
						el( TextareaControl, {
							label: __( 'Subhead', 'vulopilot' ),
							value: attributes.subhead,
							onChange: function ( v ) { setAttributes( { subhead: v } ); },
						} ),
						el( TextControl, {
							label: __( 'Primary CTA text', 'vulopilot' ),
							value: attributes.ctaPrimaryText,
							onChange: function ( v ) { setAttributes( { ctaPrimaryText: v } ); },
						} ),
						el( TextControl, {
							label: __( 'Secondary CTA text', 'vulopilot' ),
							value: attributes.ctaSecondaryText,
							onChange: function ( v ) { setAttributes( { ctaSecondaryText: v } ); },
						} )
					)
				),
				el(
					'div',
					{ style: { padding: '24px', background: '#f5f7fc', borderRadius: '16px', textAlign: 'center' } },
					el( 'div', { style: { fontSize: '11px', textTransform: 'uppercase', color: '#002991' } }, attributes.eyebrow ),
					el( 'h2', { style: { fontWeight: 600 } }, attributes.headlineStart + ' ' + ( attributes.headlineRotating[0] || '' ) ),
					el( 'p', { style: { color: '#5d6784' } }, attributes.subhead ),
					el( 'p', { style: { fontSize: '12px', color: '#5d6784' } }, __( 'Live animated gauge, floating badges and rotating headline render on the front end.', 'vulopilot' ) )
				)
			);
		},
		save: function () {
			return null;
		},
	} );
} )( window.wp.blocks, window.wp.blockEditor, window.wp.element, window.wp.components, window.wp.i18n );
