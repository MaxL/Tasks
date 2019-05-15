/**
 * Localizations
 * Only translate the text between the single quotes on lines 7 through 10.
 * Do NOT modify any code below line 10.
 **/

var validEmailReq 		= 'Bitte gültige E-Mail Adresse eingeben.';
var passNoMatch 		= 'Passwörter stimmen nicht überein';
var accUpdated 			= 'Profil wurde aktualisiert.';
var errorText 			= 'Unbekannter Fehler, Profil konnte nicht gespeichert werden.';

/** END Localizations **/

jQuery(document).ready(function($) {

	$('#updProfile').click(function(e) {
		e.preventDefault();

		var userEmail		= $("#userEmail").val();
		var password1		= $("#password1").val();
		var password2		= $("#password2").val();
		var old				= $("#old").val();
		var now				= $("#now").val();

		if (userEmail == '') {
			Meowsa.addNotification({
				color: 'warning',
				text: validEmailReq,
				icon: '<i class="fa fa-warning"></i>',
				timeout: 10000
			});
			$("#userEmail").focus();
			return false;
		}

		if (password1 != password2) {
			Meowsa.addNotification({
				color: 'warning',
				text: passNoMatch,
				icon: '<i class="fa fa-warning"></i>',
				timeout: 10000
			});
			$("#password1, #password2").val('')
			return false;
		}

		// Start the AJAX
		post_data = {
			'userEmail':userEmail,
			'password1':password1,
			'password2':password2,
			'old':old,
			'now':now
		};
		$.post('ajax/profile_ajax.php', post_data, function(data) {
			if (data == '1') {
				// All is good!
				Meowsa.addNotification({
					color: 'success',
					text: accUpdated,
					icon: '<i class="fa fa-check"></i>',
					timeout: 12000
				});
				$("#password1, #password2").val('')
			} else {
				// Unknown error
				Meowsa.addNotification({
					color: 'danger',
					text: errorText,
					icon: '<i class="fa fa-warning"></i>',
					timeout: 12000
				});
				$("#password1, #password2").val('')
			}
		});

	});

});