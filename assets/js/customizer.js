/**
 * WesCar Health - Customizer Preview
 *
 * Live preview updates for customizer settings.
 *
 * @package WescarHealth
 */

( function( $ ) {
	'use strict';

	// Site title
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-header__title a' ).text( to );
		} );
	} );

	// Site description
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-header__description' ).text( to );
		} );
	} );

	// Header CTA text
	wp.customize( 'wescarhealth_header_cta_text', function( value ) {
		value.bind( function( to ) {
			$( '.site-header__cta .button' ).text( to );
		} );
	} );

	// Header CTA URL
	wp.customize( 'wescarhealth_header_cta_url', function( value ) {
		value.bind( function( to ) {
			$( '.site-header__cta .button' ).attr( 'href', to );
		} );
	} );

	// Footer copyright
	wp.customize( 'wescarhealth_footer_copyright', function( value ) {
		value.bind( function( to ) {
			var text = to
				.replace( '{year}', new Date().getFullYear() )
				.replace( '{site}', wp.customize( 'blogname' ).get() );
			$( '.site-footer__copyright' ).html( text );
		} );
	} );

	// Phone number
	wp.customize( 'wescarhealth_phone', function( value ) {
		value.bind( function( to ) {
			$( '.contact-phone' ).text( to );
		} );
	} );

	// Email address
	wp.customize( 'wescarhealth_email', function( value ) {
		value.bind( function( to ) {
			$( '.contact-email' ).text( to );
		} );
	} );

} )( jQuery );
