function addToCart(plugin_name,price) {
	already_exists = false;
	jomresJquery('#cart').children().each(
		function(){
		id = jomresJquery(this).attr('id');
		if (id == plugin_name && id != "")
			{
			already_exists = true;
			}
		});
	if (!already_exists) {
		addition = '<input type="hidden" id="'+plugin_name+'" type="text" value="'+price+'" /><div id="row'+plugin_name+'" class="ui-widget-content ui-corner-all"><label for="' + plugin_name + '"><strong>Plugin :</strong> '+plugin_name+' <strong>Price :</strong> &pound;'+price+'  <a  href="#" onClick=\'removeFromCart(\"' + plugin_name +'\"); return false;\'>Remove</a><br/></div>';

		jomresJquery(addition).appendTo('#cart');
		
		total = 0;
		jomresJquery('#cart').children().each(
			function(){
			value = jomresJquery(this).val();
			if (value != "")
				total=total+parseFloat(value);
			});
		jomresJquery('#total').html(total);
		}
	}

function removeFromCart(plugin_name) {
	jomresJquery("#"+plugin_name).remove();
	jomresJquery("#row"+plugin_name).remove();
	total = 0;
	jomresJquery('#cart').children().each(
		function(){
		value = jomresJquery(this).val();
		if (value != "")
			total=total+parseFloat(value);
		});
	jomresJquery('#total').html(total);
	}
	
function purchase() {
	var items = '';
	jomresJquery('#cart').children().each(
		function(){
		value = jomresJquery.trim(jomresJquery(this).attr('id'));
		if (value.substr(0,3) != "" && value.substr(0,3) != "row")
			items = items +","+value;
		if (items.length>0)
			jomresJquery( "#username_input" ).dialog({modal:true});
		});
	}
	
function sumbint() //Deliberate typo
	{
	original_url = window.location.href;
	var items = '';
	var username_str = "&username="+jomresJquery("#name").val()+"&";
	var password_str = "&password="+jomresJquery("#password").val()+"&";
	jomresJquery( "#username_input" ).dialog("close");
	jomresJquery('#cart').children().each(
		function(){
		value = jomresJquery.trim(jomresJquery(this).attr('id'));
		if (value.substr(0,3) != "" && value.substr(0,3) != "row")
			items = items +value+",";
		});
	url =  original_url+"&purchase=1"+username_str+password_str+"items="+items;
	window.location = url;
	}