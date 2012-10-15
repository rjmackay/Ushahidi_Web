<?php if(Kohana::config('riverid.enable') == TRUE AND $user_id == FALSE) { ?>
	$( function () {
		$("#email").focusout(function() {
			$.getJSON('<?php echo url::site('riverid/registered'); ?>', {email: $("#email").val()}, function(response) {
				if (response.response) {
					$('.row-name').hide();
					$('.row-password').hide();
					$('.row-password_again').hide();
					$(".riverid_email_already_set").show(0);
				} else {
					$('.row-name').show();
					$('.row-password').show();
					$('.row-password_again').show();
					$(".riverid_email_already_set").hide(0);
				}
			});
	
		});
	});
<?php } ?>