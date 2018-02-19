/**
 *    Chained Selects for jQuery
 *    Copyright (C) 2008 Ziadin Givan www.CodeAssembly.com
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see http://www.gnu.org/licenses/
 *
 *
 *   settings = { usePost : true, before:function() {}, after: function() {}, default: null, parameters : { parameter1 : 'value1', parameter2 : 'value2'} }
 *   if usePost is true, then the form will use POST to pass the parameters to the target, otherwise will use GET
 *   "before" function is called before the ajax request and "after" function is called after the ajax request.
 *   If defaultValue is not null then the specified option will be selected.
 *   You can specify additional parameters to be sent to the the server in settings.parameters.
 *
 */
jomresJquery.fn.chainSelect = function (target, url, settings) {
	return this.each(function () {
		jomresJquery(this).change(function () {
			settings = jomresJquery.extend(
				{
					after: null,
					before: null,
					usePost: false,
					defaultValue: null,
					parameters: {'_id': jomresJquery(this).attr('id'), '_name': jomresJquery(this).attr('name')}
				}, settings);

			settings.parameters._value = jomresJquery(this).val();

			if (settings.before != null) {
				settings.before(target);
			}

			ajaxCallback = function (data, textStatus) {
				jomresJquery(target).html("");//clear old options
				data = eval(data);//get json array

				for (i = 0; i < data.length; i++)//iterate over all options
				{

					for (key in data[i])//get key => value
					{
						//  How on earth this is happening, I don't know. Probably down to something that mootools does, but as I know nothing about mootools, I don't know how to switch it off. Therefore, we'll just check for the keys that are returned by mootools and exclude them.
						// copy remove contains associate extend merge include getRandom getLast each test rgbToHext hexToRgb rgbToHsb hsbToRgb $family clean link combine erase empty flatten
						if (-1 == data[i][key].toString().toLowerCase().lastIndexOf('object') && -1 == data[i][key].toString().toLowerCase().lastIndexOf('function'))
							jomresJquery(target).get(0).add(new Option(data[i][key], [key]), document.all ? i : null);
					}
				}

				if (settings.defaultValue != null) {
					jomresJquery(target).val(settings.defaultValue);//select default value
				} else {
					jomresJquery("option:first", target).attr("selected", "selected");//select first option
				}

				if (settings.after != null) {
					settings.after(target);
				}

				jomresJquery(target).change();//call next chain
			};

			if (settings.usePost == true) {
				jomresJquery.post(url, settings.parameters, ajaxCallback);
			} else {
				jomresJquery.get(url, settings.parameters, ajaxCallback);
			}
		});
	});
};