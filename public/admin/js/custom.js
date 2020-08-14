//Select Feild open
function bs_input_file() {
	$(".input-file").before(
		function () {
			if (!$(this).prev().hasClass('input-ghost')) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name", $(this).attr("name"));
				element.change(function () {
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function () {
					element.click();
				});
				$(this).find("button.btn-reset").click(function () {
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor", "pointer");
				$(this).find('input').mousedown(function () {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function () {
	bs_input_file();
});
//Select Feild open
//Date picker open
$(document).ready(function () {
	$('#fromdate').datepicker({
		uiLibrary: 'bootstrap'
	});
	$('#todate').datepicker({
		uiLibrary: 'bootstrap'
	});
});
//Date picker end


// Wizard Open
$(document).ready(function () {
	//Initialize tooltips
	$('.nav-tabs > li a[title]').tooltip();

	//Wizard
	$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

		var $target = $(e.target);

		if ($target.parent().hasClass('disabled')) {
			return false;
		}
	});

	$(".next-step").click(function (e) {

		var $active = $('.wizard .nav-tabs li.active');
		$active.next().removeClass('disabled');
		nextTab($active);

	});
	$(".prev-step").click(function (e) {

		var $active = $('.wizard .nav-tabs li.active');
		prevTab($active);

	});
});

function nextTab(elem) {
	$(elem).next().find('a[data-toggle="tab"]').click();
}

function prevTab(elem) {
	$(elem).prev().find('a[data-toggle="tab"]').click();
}
// Wizard End



// Password show hide Open
$(document).ready(function () {
	$("#show_hide_password a").on('click', function (event) {
		event.preventDefault();
		if ($('#show_hide_password input').attr("type") == "text") {
			$('#show_hide_password input').attr('type', 'password');
			$('#show_hide_password .show_pass').addClass("fa-eye-slash");
			$('#show_hide_password .show_pass').removeClass("fa-eye");
		} else if ($('#show_hide_password input').attr("type") == "password") {
			$('#show_hide_password input').attr('type', 'text');
			$('#show_hide_password .show_pass').removeClass("fa-eye-slash");
			$('#show_hide_password .show_pass').addClass("fa-eye");
		}
	});
});
// Password show hide End


// Language Open End
jQuery().ready(function () {
	/* Custom select design */
	jQuery('.drop-down').append('<div class="button-flag"></div>');
	jQuery('.drop-down').append('<ul class="select-list"></ul>');
	jQuery('.drop-down select option').each(function () {
		var bg = jQuery(this).css('background-image');
		jQuery('.select-list').append('<li class="clsAnchor"><span value="' + jQuery(this).val() + '" class="' + jQuery(this).attr('class') + '" style=background-image:' + bg + '>' + jQuery(this).text() + '</span></li>');
	});
	jQuery('.drop-down .button-flag').html('<span style=background-image:' + jQuery('.drop-down select').find(':selected').css('background-image') + '>' + jQuery('.drop-down select').find(':selected').text() + '</span>' + '<a href="javascript:void(0);" class="select-list-link"><i class="fa fa-sort-desc"></i></a>');
	jQuery('.drop-down ul li').each(function () {
		if (jQuery(this).find('span').text() == jQuery('.drop-down select').find(':selected').text()) {
			jQuery(this).addClass('active');
		}
	});
	jQuery('.drop-down .select-list span').on('click', function () {
		var dd_text = jQuery(this).text();
		var dd_img = jQuery(this).css('background-image');
		var dd_val = jQuery(this).attr('value');
		jQuery('.drop-down .button-flag').html('<span style=background-image:' + dd_img + '>' + dd_text + '</span>' + '<a href="javascript:void(0);" class="select-list-link"><i class="fa fa-sort-desc"></i></a>');
		jQuery('.drop-down .select-list span').parent().removeClass('active');
		jQuery(this).parent().addClass('active');
		$('.drop-down select[name=options]').val(dd_val);
		$('.drop-down .select-list li').slideUp();
	});
	jQuery('.drop-down .button-flag').on('click', 'a.select-list-link', function () {
		jQuery('.drop-down ul li').slideToggle(300);
	});	
// Language End

// ROW Remove OPEN
$('.remove_row').click(function () {
	$(this).parents('tr').first().remove();
	if ($("#ManageUser tbody tr").length == 0) {
		$("#ManageUser tbody").append('<tr><td colspan="8" class="text-center"><h4 class="text-red">No records found</h4></td></tr>')
	}
	if ($("#PersonalDetails tbody tr").length == 0) {
		$("#PersonalDetails tbody").append('<tr><td colspan="11" class="text-center"><h4 class="text-red">No records found</h4></td></tr>')
	}
});
// ROW Remove END
	
});



