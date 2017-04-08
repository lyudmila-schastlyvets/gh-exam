/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
	wp.customize( 'contact_section_show', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '.contact-us-section' ).hide() : $( '.contact-us-section' ).show();
		} );
	} );
	wp.customize( 'hero_section_show', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '.contact-us-section' ).hide() : $( '.contact-us-section' ).show();
		} );
	} );
	wp.customize( 'hero_section_show', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '.hero' ).hide() : $( '.hero' ).show();
		} );
	} );
	wp.customize( 'hero_section_show', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '.hero' ).hide() : $( '.hero' ).show();
		} );
	} );
	wp.customize( 'services_section_show', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '.services-section-homepage' ).hide() : $( '.services-section-homepage' ).show();
		} );
	} );
	wp.customize( 'about_us_section_show', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '.about-us-section-homepage' ).hide() : $( '.about-us-section-homepage' ).show();
		} );
	} );
} )( jQuery );
