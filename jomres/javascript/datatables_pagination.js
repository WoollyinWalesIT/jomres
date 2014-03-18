/* For datatables bootstrap implementation */

/* Default class modification */

if ('undefined' != typeof(jomresJquery.fn.dataTableExt )) {
	jomresJquery.extend(jomresJquery.fn.dataTableExt.oStdClasses, {
		"sWrapper": "dataTables_wrapper form-inline"
	});
};

/* Filtering delay */
if ('undefined' != typeof(jomresJquery.fn.dataTableExt )) {
	jomresJquery.fn.dataTableExt.oApi.fnSetFilteringDelay = function ( oSettings, iDelay ) {
		var _that = this;
	 
		if ( iDelay === undefined ) {
			iDelay = 750;
		}
		  
		this.each( function ( i ) {
			jomresJquery.fn.dataTableExt.iApiIndex = i;
			var
				$this = this,
				oTimerId = null,
				sPreviousSearch = null,
				anControl = jomresJquery( 'input', _that.fnSettings().aanFeatures.f );
			  
				anControl.unbind( 'keyup' ).bind( 'keyup', function() {
				var $$this = $this;
	  
				if (sPreviousSearch === null || sPreviousSearch != anControl.val()) {
					window.clearTimeout(oTimerId);
					sPreviousSearch = anControl.val(); 
					oTimerId = window.setTimeout(function() {
						jomresJquery.fn.dataTableExt.iApiIndex = i;
						_that.fnFilter( anControl.val() );
					}, iDelay);
				}
			});
			  
			return this;
		} );
		return this;
	};
};

/* API method to get paging information */
if ('undefined' != typeof(jomresJquery.fn.dataTableExt )) {

	jomresJquery.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings) {
		return {
			"iStart": oSettings._iDisplayStart,
			"iEnd": oSettings.fnDisplayEnd(),
			"iLength": oSettings._iDisplayLength,
			"iTotal": oSettings.fnRecordsTotal(),
			"iFilteredTotal": oSettings.fnRecordsDisplay(),
			"iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
			"iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
		};
	}

	/* Bootstrap style pagination control */
	jomresJquery.extend(jomresJquery.fn.dataTableExt.oPagination, {
		"bootstrap": {
			"fnInit": function (oSettings, nPaging, fnDraw) {
				var oLang = oSettings.oLanguage.oPaginate;
				var fnClickHandler = function (e) {
					e.preventDefault();
					if (oSettings.oApi._fnPageChange(oSettings, e.data.action)) {
						fnDraw(oSettings);
					}
				};

				jomresJquery(nPaging).addClass('pagination').append(
					'<ul>' +
						'<li class="prev disabled"><a href="#">&larr; ' + oLang.sPrevious + '</a></li>' +
						'<li class="next disabled"><a href="#">' + oLang.sNext + ' &rarr; </a></li>' +
						'</ul>'
				);
				var els = jomresJquery('a', nPaging);
				jomresJquery(els[0]).bind('click.DT', { action: "previous" }, fnClickHandler);
				jomresJquery(els[1]).bind('click.DT', { action: "next" }, fnClickHandler);
			},

			"fnUpdate": function (oSettings, fnDraw) {
				var iListLength = 5;
				var oPaging = oSettings.oInstance.fnPagingInfo();
				var an = oSettings.aanFeatures.p;
				var i, j, sClass, iStart, iEnd, iHalf = Math.floor(iListLength / 2);

				if (oPaging.iTotalPages < iListLength) {
					iStart = 1;
					iEnd = oPaging.iTotalPages;
				}
				else if (oPaging.iPage <= iHalf) {
					iStart = 1;
					iEnd = iListLength;
				} else if (oPaging.iPage >= (oPaging.iTotalPages - iHalf)) {
					iStart = oPaging.iTotalPages - iListLength + 1;
					iEnd = oPaging.iTotalPages;
				} else {
					iStart = oPaging.iPage - iHalf + 1;
					iEnd = iStart + iListLength - 1;
				}

				for (i = 0, iLen = an.length; i < iLen; i++) {
					// Remove the middle elements
					jomresJquery('li:gt(0)', an[i]).filter(':not(:last)').remove();

					// Add the new list items and their event handlers
					for (j = iStart; j <= iEnd; j++) {
						sClass = (j == oPaging.iPage + 1) ? 'class="active"' : '';
						jomresJquery('<li ' + sClass + '><a href="#">' + j + '</a></li>')
							.insertBefore(jomresJquery('li:last', an[i])[0])
							.bind('click', function (e) {
								e.preventDefault();
								oSettings._iDisplayStart = (parseInt(jomresJquery('a', this).text(), 10) - 1) * oPaging.iLength;
								fnDraw(oSettings);
							});
					}

					// Add / remove disabled classes from the static elements
					if (oPaging.iPage === 0) {
						jomresJquery('li:first', an[i]).addClass('disabled');
					} else {
						jomresJquery('li:first', an[i]).removeClass('disabled');
					}

					if (oPaging.iPage === oPaging.iTotalPages - 1 || oPaging.iTotalPages === 0) {
						jomresJquery('li:last', an[i]).addClass('disabled');
					} else {
						jomresJquery('li:last', an[i]).removeClass('disabled');
					}
				}
			}
		}
	});
};