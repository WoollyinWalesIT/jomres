function addToCart(plugin_name, price) {
	jomresJquery("#cart_wrapper").dialog({
		show: "slide",
		hide: "slide",
		minWidth: '600',
		dialogClass: 'fixed-dialog'
	});
	price = parseFloat(price).toFixed(2);
	already_exists = false;
	jomresJquery('#cart').children().each(
		function () {
			id = jomresJquery(this).attr('id');
			if (id == plugin_name && id != "") {
				already_exists = true;
			}
		});
	if (!already_exists) {
		if (!jomres_using_bootstrap) {
			addition_hidden_input = '<input type="hidden" id="cart' + plugin_name + '" type="text" value="' + price + '" />';
			cart_row = '<div id="row' + plugin_name + '" class="ui-widget-content ui-corner-all"><label for="' + plugin_name + '"><strong>Plugin :</strong> ' + plugin_name + ' <strong>Price :</strong> &pound;' + price + '  <a style="float:right" href="#" onClick=\'removeFromCart(\"' + plugin_name + '\"); return false;\'>Remove</a><br/></div>';
		}
		else {
			addition_hidden_input = '<input type="hidden" id="cart' + plugin_name + '" type="text" value="' + price + '" autocomplete="off" />';
			cart_row = '<div id="row' + plugin_name + '" class="ui-widget-content ui-corner-all"><label for="' + plugin_name + '"  style="padding:3px"><strong>Plugin :</strong> ' + plugin_name + ' <strong>Price :</strong> &pound;' + price + '  <a style="float:right" href="#" class="btn btn-warning btn-mini" onClick=\'removeFromCart(\"' + plugin_name + '\"); return false;\'>Remove</a><br/></div>';
		}
		// Oddly, when in a dialog, you cannot remove from the cart, so we'll put a hidden input somewhere else in the form.
		jomresJquery(addition_hidden_input).appendTo('#hidden_inputs');
		jomresJquery(cart_row).appendTo('#cart');

		total = 0;
		jomresJquery('#hidden_inputs').children().each(
			function () {
				value = jomresJquery(this).val();
				if (value != "")
					total = total + parseFloat(value);
			});
		jomresJquery('#total').html(total.toFixed(2));
	}
}

function showCart() {
	jomresJquery("#cart_wrapper").dialog({
		show: "slide",
		hide: "slide",
		minWidth: '600',
		dialogClass: 'fixed-dialog'
	});
}

function removeFromCart(plugin_name) {
	jomresJquery("#cart" + plugin_name).remove();
	jomresJquery("#row" + plugin_name).remove();
	console.log(jomresJquery("#row" + plugin_name).val());
	total = 0;
	jomresJquery('#hidden_inputs').children().each(
		function () {
			value = jomresJquery(this).val();

			if (value != "")
				total = total + parseFloat(value);

		});
	jomresJquery('#total').html(total);
}

function purchase() {
	var items = '';
	jomresJquery('#hidden_inputs').children().each(
		function () {
			value = jomresJquery.trim(jomresJquery(this).attr('id'));
			if (value.substr(0, 3) != "" && value.substr(0, 3) != "row")
				items = items + "," + value;
			if (items.length > 0)
				jomresJquery("#username_input").dialog({modal: true});
		});
}

function sumbint() //Deliberate typo
{
	original_url = window.location.href;
	var items = '';
	var username_str = "&username=" + jomresJquery("#name").val() + "&";
	var password_str = "&password=" + jomresJquery("#password").val() + "&";
	jomresJquery("#username_input").dialog("close");
	jomresJquery('#hidden_inputs').children().each(
		function () {
			value = jomresJquery.trim(jomresJquery(this).attr('id'));

			if (value.substr(0, 3) != "" && value.substr(0, 3) != "row") {
				value = value.substr(4, value.length)
				items = items + value + ",";
			}
		});
	url = original_url + "&purchase=1" + username_str + password_str + "items=" + items;
	window.location = url;
}