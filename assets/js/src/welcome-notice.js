/* global eduacademyData, jQuery */

import { installPlugin, activatePlugin } from './common/plugin-install';

function handleWelcomeNotice( $ ) {
	const {
		activating,
		installing,
		done,
		activationUrl,
		redirectUrl,
		ajaxUrl,
		nonce,
		wpfpRefNonce,
		wpfpStatus,
	} = eduacademyData;

	const installBtn = $(
		'.eduacademy-welcome-notice #eduacademy-install-wpfp'
	);
	const dismissBtn = $( '.eduacademy-welcome-notice .notice-dismiss' );
	const notice = $( '.eduacademy-welcome-notice' );
	const installText = installBtn.find( '.text' );
	const installSpinner = installBtn.find( '.dashicons' );

	const hideAndRemoveNotice = () => {
		notice.fadeTo( 100, 0, () => {
			notice.slideUp( 100, () => {
				notice.remove();
			} );
		} );
	};

	const activateWpfp = async () => {
		installText.text( activating );
		await activatePlugin( activationUrl );

		await $.post( ajaxUrl, {
			nonce: wpfpRefNonce,
			action: 'eduacademy_set_wpfp_ref',
		} );

		installSpinner.removeClass( 'dashicons-update' );
		installSpinner.addClass( 'dashicons-yes' );
		installText.text( done );
		setTimeout( hideAndRemoveNotice, 1500 );
		window.location.replace( redirectUrl );
	};

	$( installBtn ).on( 'click', async () => {
		installSpinner.removeClass( 'hidden' );
		installBtn.attr( 'disabled', true );

		if ( wpfpStatus === 'active' ) {
			return;
		}

		if ( wpfpStatus === 'installed' ) {
			await activateWpfp();
			return;
		}

		installText.text( installing );
		await installPlugin( 'wp-full-stripe-free' );
		await activateWpfp();
	} );

	$( dismissBtn ).on( 'click', () => {
		$.post( ajaxUrl, {
			nonce,
			action: 'eduacademy_dismiss_welcome_notice',
			success: hideAndRemoveNotice,
		} );
	} );
}

document.addEventListener( 'DOMContentLoaded', () => {
	handleWelcomeNotice( jQuery );
} );
