// Turn radios into btn-group
jomresJquery(document).ready(function() {
	jomresJquery('.radio.btn-group label').addClass('btn');
	jomresJquery('.btn-group label:not(.active)').click(function()
	{
		var label = jomresJquery(this);
		var input = jomresJquery('#' + label.attr('for'));
	
		if (!input.prop('checked')) {
			label.closest('.btn-group').find('label').removeClass('active btn-success btn-danger btn-primary');
			if (input.val() == '') {
				label.addClass('active btn-primary');
			} else if (input.val() == 0) {
				label.addClass('active btn-danger');
			} else {
				label.addClass('active btn-success');
			}
			input.prop('checked', true);
			input.trigger('change');
		}
	});
	jomresJquery('.btn-group input[checked=checked]').each(function()
	{
		if (jomresJquery(this).val() == '') {
			jomresJquery('label[for=' + jomresJquery(this).attr('id') + ']').addClass('active btn-primary');
		} else if (jomresJquery(this).val() == 0) {
			jomresJquery('label[for=' + jomresJquery(this).attr('id') + ']').addClass('active btn-danger');
		} else {
			jomresJquery('label[for=' + jomresJquery(this).attr('id') + ']').addClass('active btn-success');
		}
	});
});