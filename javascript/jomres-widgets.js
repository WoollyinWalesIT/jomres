jomresJquery(document).ready(function() {
	jomresJquery( '#jr_widgets_dropdown a' ).on( 'click', function( event ) {
		var $target = jomresJquery( event.currentTarget ),
		val = $target.attr( 'data-value' ),
		$inp = $target.find( 'input' ),
		idx;

		if ( ( idx = jr_widgets_selected.indexOf( val ) ) > -1 ) {
			jr_widgets_selected.splice( idx, 1 );
			setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
			toggle_jomres_widget(val, 0);
		} else {
			jr_widgets_selected.push( val );
			setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
			toggle_jomres_widget(val, 1);
		}

		return false;
	});

	jomresJquery( '.jr-widget-column' ).sortable({
		connectWith: '.jr-widget-column',
		dropOnEmpty: true,
		handle: '.jr-widget-heading',
		cancel: '.jr-widget-toggle',
		placeholder: 'jr-widget-placeholder',
		start: function(e, ui){
			ui.placeholder.width(ui.item.width());
			ui.placeholder.height(ui.item.height());
		},
		stop: function(e, ui){
			add_placeholders();
			toggle_jomres_widget(ui.item.data('id'), 1, ui.item.parent().data('id'), ui.item.index());
		}
	});

	jomresJquery( '.jr-widget-toggle' ).on( "click", function() {
		var icon = jomresJquery( this );
		icon.toggleClass( 'fa-toggle-off fa-toggle-on' );
		icon.closest( '.jr-widget-panel' ).find( '.jr-widget-content' ).toggle();
	});
	
	add_placeholders();
});

function add_placeholders() {
	jomresJquery('.jr-widget-column.ui-sortable').each(function () {
		if (jomresJquery.trim(jomresJquery(this).html()) == '') {
			jomresJquery(this).html('<div class="jr-widget-empty"></div>');
		} else {
			if (jomresJquery.trim(jomresJquery(this).html()) != '<div class="jr-widget-empty"></div>') {
				jomresJquery(this).find('.jr-widget-empty').remove();
			}
		}
	});
}

function toggle_jomres_widget(jr_w, jr_w_enabled, jr_w_col, jr_w_pos) {

	parent_div = '.jr-widget-col'+jr_w_col+' > div';
	jomresJquery(parent_div).map(function() {
		divs  = divs + this.id+",";
	});

	jomresJquery.ajax({
		type: 'GET',
		dataType: 'html',
		url: live_site_ajax + '&task=toggle_jomres_widget_ajax',
		data: {
			jr_widget: jr_w,
			jr_widget_enabled: jr_w_enabled,
			jr_widget_column: jr_w_col,
			jr_widget_position: jr_w_pos,
			jr_widget_order: divs,
		},
		success: function(data) {
			var jr_widget_response = JSON && JSON.parse(data) || jomresJquery.parseJSON(data);
			
			if (jr_widget_response.enabled == 1) {
				jomresJquery('.jr-widget-col1').find('.jr-widget-empty').remove();

				if (jomresJquery('#jr_widget_' + jr_widget_response.widget).length === 0) {
					jomresJquery('.jr-widget-col1').append(jr_widget_response.content);
				}
			} else {
				if (jomresJquery('#jr_widget_' + jr_widget_response.widget).length) {
					jomresJquery('#jr_widget_' + jr_widget_response.widget).remove();
					add_placeholders();
				}
			}
			
			jomresJquery(".jr-widget-column").sortable('refresh');
		}
	});
}

