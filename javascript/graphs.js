/*
 +-------------------------------------------------------------------+
 |                   H T M L - G R A P H S   (v4.6)                  |
 |                                                                   |
 | Copyright Gerd Tentler               www.gerd-tentler.de/tools    |
 | Created: Sep. 17, 2002               Last modified: Mar. 14, 2009 |
 +-------------------------------------------------------------------+
 | This program may be used and hosted free of charge by anyone for  |
 | personal purpose as long as this copyright notice remains intact. |
 |                                                                   |
 | Obtain permission before selling the code for this program or     |
 | hosting this software on a commercial website or redistributing   |
 | this software over the Internet or in any other medium. In all    |
 | cases copyright must remain intact.                               |
 +-------------------------------------------------------------------+

 ======================================================================================================
 Example:

 graph = new BAR_GRAPH("hBar");
 graph.values = new Array(234, 125, 289, 147, 190);
 document.write(graph.create());

 Returns HTML code
 ------------------------------------------------------------------------------------------------------
 This script was tested with the following systems and browsers:

 - Windows XP: IE 6, NN 7, Opera 7 + 9, Firefox 2 + 3
 - Mac OS X:   IE 5, Safari 1

 If you use another browser or system, this script may not work for you - sorry.
 ======================================================================================================
 */
function BAR_GRAPH(type) {
//----------------------------------------------------------------------------------------------------
// Configuration
//----------------------------------------------------------------------------------------------------
	this.type = 'hBar';                        // graph type: "hBar", "vBar", "pBar", or "fader"
	if (type) this.type = type;
	this.values;                               // graph data: array or string with comma-separated values

	this.graphBGColor = '';                    // graph background color: string
	this.graphBorder = '';                     // graph border: string (CSS specification; doesn't work with NN4)
	this.graphPadding = 0;                     // graph padding: integer (pixels)

	this.titles;                               // titles: array or string with comma-separated values
	this.titleColor = 'black';                 // title font color: string
	this.titleBGColor = '#C0E0FF';             // title background color: string
	this.titleBorder = '2px groove white';     // title border: string (CSS specification)
	this.titleFont = 'Arial, Helvetica';       // title font family: string (CSS specification)
	this.titleSize = 12;                       // title font size: integer (pixels)
	this.titleAlign = 'center';                // title text align: "left", "center", or "right"
	this.titlePadding = 2;                     // title padding: integer (pixels)

	this.labels;                               // label names: array or string with comma-separated values
	this.labelColor = 'black';                 // label font color: string
	this.labelBGColor = '#C0E0FF';             // label background color: string
	this.labelBorder = '2px groove white';     // label border: string (CSS specification)
	this.labelFont = 'Arial, Helvetica';       // label font family: string (CSS specification)
	this.labelSize = 12;                       // label font size: integer (pixels)
	this.labelAlign = 'center';                // label text align: "left", "center", or "right"
	this.labelSpace = 0;                       // additional space between labels: integer (pixels)

	this.barWidth = 20;                        // bar width: integer (pixels)
	this.barLength = 1.0;                      // bar length ratio: float (from 0.1 to 2.9)
	this.barColors;                            // bar colors OR bar images: array or string with comma-separated values
	this.barBGColor;                           // bar background color: string
	this.barBorder = '2px outset white';       // bar border: string (CSS specification)
	this.barLevelColors;                       // bar level colors: ascending array (bLevel, bColor[,...]); draw bars >= bLevel with bColor

	this.showValues = 0;                       // show values: 0 = % only, 1 = abs. and %, 2 = abs. only, 3 = none
	this.baseValue = 0;                        // base value: integer or float (only hBar and vBar)

	this.absValuesColor = 'black';             // abs. values font color: string
	this.absValuesBGColor = '#C0E0FF';         // abs. values background color: string
	this.absValuesBorder = '2px groove white'; // abs. values border: string (CSS specification; doesn't work with NN4)
	this.absValuesFont = 'Arial, Helvetica';   // abs. values font family: string (CSS specification)
	this.absValuesSize = 12;                   // abs. values font size: integer (pixels)
	this.absValuesPrefix = '';                 // abs. values prefix: string (e.g. "$")
	this.absValuesSuffix = '';                 // abs. values suffix: string (e.g. " kg")

	this.percValuesColor = 'black';            // perc. values font color: string
	this.percValuesFont = 'Arial, Helvetica';  // perc. values font family: string (CSS specification)
	this.percValuesSize = 12;                  // perc. values font size: integer (pixels)
	this.percValuesDecimals = 0;               // perc. values number of decimals: integer

	this.charts = 1;                           // number of charts: integer

	// hBar/vBar only:
	this.legend;                               // legend items: array or string with comma-separated values
	this.legendColor = 'black';                // legend font color: string
	this.legendBGColor = '#F0F0F0';            // legend background color: string
	this.legendBorder = '2px groove white';    // legend border: string (CSS specification)
	this.legendFont = 'Arial, Helvetica';      // legend font family: string (CSS specification)
	this.legendSize = 12;                      // legend font size: integer (pixels)

	// debug mode: false = off, true = on; just shows some extra information
	this.debug = false;

	// default bar colors; only used if barColors isn't set
	this.colors = new Array('#0000FF', '#FF0000', '#00E000', '#A0A0FF', '#FFA0A0', '#00A000');

	// error messages
	this.err_type = 'ERROR: Type must be "hBar", "vBar", "pBar", or "fader"';

	// CSS names (don't change)
	this.cssGRAPH = '';
	this.cssBAR = '';
	this.cssBARBG = '';
	this.cssTITLE = '';
	this.cssLABEL = '';
	this.cssLABELBG = '';
	this.cssLEGEND = '';
	this.cssLEGENDBG = '';
	this.cssABSVALUES = '';
	this.cssPERCVALUES = '';

//----------------------------------------------------------------------------------------------------
// Class Methods
//----------------------------------------------------------------------------------------------------
	this.set_styles = function () {
		if (this.graphBGColor) this.cssGRAPH += 'background-color:' + this.graphBGColor + ';';
		if (this.graphBorder) this.cssGRAPH += 'border:' + this.graphBorder + ';';
		if (this.barBorder) this.cssBAR += 'border:' + this.barBorder + ';';
		if (this.barBGColor) this.cssBARBG += 'background-color:' + this.barBGColor + ';';
		if (this.titleColor) this.cssTITLE += 'color:' + this.titleColor + ';';
		if (this.titleBGColor) this.cssTITLE += 'background-color:' + this.titleBGColor + ';';
		if (this.titleBorder) this.cssTITLE += 'border:' + this.titleBorder + ';';
		if (this.titleFont) this.cssTITLE += 'font-family:' + this.titleFont + ';';
		if (this.titleAlign) this.cssTITLE += 'text-align:' + this.titleAlign + ';';
		if (this.titleSize) this.cssTITLE += 'font-size:' + this.titleSize + 'px;';
		if (this.titleBGColor) this.cssTITLE += 'background-color:' + this.titleBGColor + ';';
		if (this.titlePadding) this.cssTITLE += 'padding:' + this.titlePadding + 'px;';
		if (this.labelColor) this.cssLABEL += 'color:' + this.labelColor + ';';
		if (this.labelBGColor) this.cssLABEL += 'background-color:' + this.labelBGColor + ';';
		if (this.labelBorder) this.cssLABEL += 'border:' + this.labelBorder + ';';
		if (this.labelFont) this.cssLABEL += 'font-family:' + this.labelFont + ';';
		if (this.labelAlign) this.cssLABEL += 'text-align:' + this.labelAlign + ';';
		if (this.labelSize) this.cssLABEL += 'font-size:' + this.labelSize + 'px;';
		if (this.labelBGColor) this.cssLABELBG += 'background-color:' + this.labelBGColor + ';';
		if (this.legendColor) this.cssLEGEND += 'color:' + this.legendColor + ';';
		if (this.legendFont) this.cssLEGEND += 'font-family:' + this.legendFont + ';';
		if (this.legendSize) this.cssLEGEND += 'font-size:' + this.legendSize + 'px;';
		if (this.legendBGColor) this.cssLEGENDBG += 'background-color:' + this.legendBGColor + ';';
		if (this.legendBorder) this.cssLEGENDBG += 'border:' + this.legendBorder + ';';
		if (this.absValuesColor) this.cssABSVALUES += 'color:' + this.absValuesColor + ';';
		if (this.absValuesBGColor) this.cssABSVALUES += 'background-color:' + this.absValuesBGColor + ';';
		if (this.absValuesBorder) this.cssABSVALUES += 'border:' + this.absValuesBorder + ';';
		if (this.absValuesFont) this.cssABSVALUES += 'font-family:' + this.absValuesFont + ';';
		if (this.absValuesSize) this.cssABSVALUES += 'font-size:' + this.absValuesSize + 'px;';
		if (this.percValuesColor) this.cssPERCVALUES += 'color:' + this.percValuesColor + ';';
		if (this.percValuesFont) this.cssPERCVALUES += 'font-family:' + this.percValuesFont + ';';
		if (this.percValuesSize) this.cssPERCVALUES += 'font-size:' + this.percValuesSize + 'px;';
	}

	this.level_color = function (value, color) {
		if (this.barLevelColors) {
			for (var i = 0; i < this.barLevelColors.length; i += 2) {
				if (i + 1 < this.barLevelColors.length) {
					if ((this.barLevelColors[i] > 0 && value >= this.barLevelColors[i]) ||
						(this.barLevelColors[i] < 0 && value <= this.barLevelColors[i])) {
						color = this.barLevelColors[i + 1];
					}
				}
			}
		}
		return color;
	}

	this.build_bar = function (value, width, height, color) {
		var title = this.absValuesPrefix + value + this.absValuesSuffix;
		var bg = (color.search(/\.(jpg|jpeg|jpe|gif|png)$/i) != -1) ? 'background' : 'bgcolor';
		var bar = '<table border=0 cellspacing=0 cellpadding=0><tr>';
		bar += '<td style="' + this.cssBAR + '" ' + bg + '="' + color + '"';
		bar += ((value != '') ? ' title="' + title + '">' : '>');
		bar += '<div style="width:' + width + 'px; height:' + height + 'px;';
		bar += ' line-height:1px; font-size:1px;"></div>';
		bar += '</td></tr></table>';
		return bar;
	}

	this.build_fader = function (value, width, height, x, color) {
		var fader = '<table border=0 cellspacing=0 cellpadding=0><tr>';
		x -= Math.round(width / 2);
		if (x > 0) fader += '<td width=' + x + '></td>';
		fader += '<td>' + this.build_bar(value, width, height, color) + '</td>';
		fader += '</tr></table>';
		return fader;
	}

	this.build_value = function (val, max_dec, sum, align) {
		val = _number_format(val, max_dec);
		if (sum) sum = _number_format(sum, max_dec);
		var value = '<td style="' + this.cssABSVALUES + '"';
		if (align) value += ' align=' + align;
		value += ' nowrap>';
		value += '&nbsp;' + this.absValuesPrefix + val + this.absValuesSuffix;
		if (sum) value += ' / ' + this.absValuesPrefix + sum + this.absValuesSuffix;
		value += '&nbsp;</td>';
		return value;
	}

	this.build_legend = function (barColors) {
		var legend = '<table border=0 cellspacing=0 cellpadding=0><tr>';
		legend += '<td style="' + this.cssLEGENDBG + '">';
		legend += '<table border=0 cellspacing=4 cellpadding=0>';
		var l = (typeof(this.legend) == 'string') ? this.legend.split(',') : this.legend;

		for (var i = 0; i < barColors.length; i++) {
			legend += '<tr>';
			legend += '<td>' + this.build_bar('', this.barWidth, this.barWidth, barColors[i]) + '</td>';
			legend += '<td style="' + this.cssLEGEND + '" nowrap>' + _trim(l[i]) + '</td>';
			legend += '</tr>';
		}
		legend += '</table></td></tr></table>';
		return legend;
	}

	this.build_hTitle = function (titleLabel, titleValue, titleBar) {
		var title = '<tr>';
		title += '<td style="' + this.cssTITLE + '">' + titleLabel + '</td>';
		if (titleValue != '') title += '<td style="' + this.cssTITLE + '">' + titleValue + '</td>';
		title += '<td style="' + this.cssTITLE + '">' + titleBar + '</td>';
		title += '</tr>';
		return title;
	}

	this.create_hBar = function (value, percent, mPerc, mPerc_neg, max_neg, mul, valSpace, bColor, border, spacer, spacer_neg) {
		var bar = '<table border=0 cellspacing=0 cellpadding=0 height=100%><tr>';

		if (percent < 0) {
			percent *= -1;
			bar += '<td style="' + this.cssLABELBG + '" height=' + this.barWidth + ' width=' + Math.round((mPerc_neg - percent) * mul + valSpace) + ' align=right nowrap>';
			if (this.showValues < 2) bar += '<span style="' + this.cssPERCVALUES + '">' + _number_format(percent, this.percValuesDecimals) + '%</span>';
			bar += '&nbsp;</td><td style="' + this.cssLABELBG + '">';
			bar += this.build_bar(value, Math.round(percent * mul), this.barWidth, bColor);
			bar += '</td><td width=' + spacer + '></td>';
		}
		else {
			if (max_neg) {
				bar += '<td style="' + this.cssLABELBG + '" width=' + spacer_neg + '>';
				bar += '<table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td>';
			}
			if (percent) {
				bar += '<td>';
				bar += this.build_bar(value, Math.round(percent * mul), this.barWidth, bColor);
				bar += '</td>';
			}
			else bar += '<td width=1 height=' + (this.barWidth + (border * 2)) + '></td>';

			bar += '<td style="' + this.cssPERCVALUES + '" width=' + Math.round((mPerc - percent) * mul + valSpace) + ' align=left nowrap>';
			if (this.showValues < 2) bar += '&nbsp;' + _number_format(percent, this.percValuesDecimals) + '%';
			bar += '&nbsp;</td>';
		}
		bar += '</tr></table>';

		return bar;
	}

	this.create_vBar = function (value, percent, mPerc, mPerc_neg, max_neg, mul, valSpace, bColor, border, spacer, spacer_neg) {
		var bar = '<table border=0 cellspacing=0 cellpadding=0 width=100%><tr align=center>';

		if (percent < 0) {
			percent *= -1;
			bar += '<td height=' + spacer + '></td></tr><tr align=center valign=top><td style="' + this.cssLABELBG + '">';
			bar += this.build_bar(value, this.barWidth, Math.round(percent * mul), bColor);
			bar += '</td></tr><tr align=center valign=top>';
			bar += '<td style="' + this.cssLABELBG + '" height=' + Math.round((mPerc_neg - percent) * mul + valSpace) + ' nowrap>';
			bar += (this.showValues < 2) ? '<span style="' + this.cssPERCVALUES + '">' + _number_format(percent, this.percValuesDecimals) + '%</span>' : '&nbsp;';
			bar += '</td>';
		}
		else {
			bar += '<td style="' + this.cssPERCVALUES + '" valign=bottom height=' + Math.round((mPerc - percent) * mul + valSpace) + ' nowrap>';
			if (this.showValues < 2) bar += _number_format(percent, this.percValuesDecimals) + '%';
			bar += '</td>';
			if (percent) {
				bar += '</tr><tr align=center valign=bottom><td>';
				bar += this.build_bar(value, this.barWidth, Math.round(percent * mul), bColor);
				bar += '</td>';
			}
			else bar += '</tr><tr><td width=' + (this.barWidth + (border * 2)) + ' height=1></td>';
			if (max_neg) {
				bar += '</tr><tr><td style="' + this.cssLABELBG + '" height=' + spacer_neg + '>';
				bar += '<table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td>';
			}
		}
		bar += '</tr></table>';

		return bar;
	}

	this.create = function () {
		this.type = this.type.toLowerCase();
		var d = (typeof(this.values) == 'string') ? this.values.split(',') : this.values;
		if (this.titles) var t = (typeof(this.titles) == 'string') ? this.titles.split(',') : this.titles;
		else var t = new Array();
		if (this.labels) var r = (typeof(this.labels) == 'string') ? this.labels.split(',') : this.labels;
		else var r = new Array();
		var label = graph = bColor = '';
		var percent = value = rowspan = colspan = 0;
		if (this.barColors) var drc = (typeof(this.barColors) == 'string') ? this.barColors.split(',') : this.barColors;
		else var drc = new Array();
		var drv, val = new Array();
		var bc = new Array();
		if (this.barLength < 0.1) this.barLength = 0.1;
		else if (this.barLength > 2.9) this.barLength = 2.9;
		var bars = (d.length > r.length) ? d.length : r.length;

		if (this.type == 'pbar' || this.type == 'fader') {
			if (!this.barBGColor) this.barBGColor = this.labelBGColor;
			if (this.labelBGColor == this.barBGColor && t.length == 0) {
				this.labelBGColor = '';
				this.labelBorder = '';
			}
		}

		this.set_styles();

		graph += '<table border=0 cellspacing=0 cellpadding=' + this.graphPadding + '><tr>';
		graph += '<td' + (this.cssGRAPH ? ' style="' + this.cssGRAPH + '"' : '') + '>';

		if (this.legend && this.type != 'pbar' && this.type != 'fader')
			graph += '<table border=0 cellspacing=0 cellpadding=0><tr valign=top><td>';

		if (this.charts > 1) {
			divide = Math.ceil(bars / this.charts);
			graph += '<table border=0 cellspacing=0 cellpadding=6><tr valign=top><td>';
		}
		else divide = 0;

		var sum = max = max_neg = max_dec = ccnt = lcnt = chart = 0;
		val[chart] = new Array();

		for (var i = 0; i < bars; i++) {
			if (divide && i && !(i % divide)) {
				lcnt = 0;
				chart++;
				val[chart] = new Array();
			}
			if (typeof(d[i]) == 'string') drv = d[i].split(';');
			else {
				drv = new Array();
				drv[0] = d[i];
			}
			val[chart][lcnt] = new Array();

			for (var j = v = 0; j < drv.length; j++) {
				if (drv[j]) {
					val[chart][lcnt][j] = parseFloat(drv[j]);
					v = val[chart][lcnt][j] ? val[chart][lcnt][j] - this.baseValue : 0;
				}
				else val[chart][lcnt][j] = v = 0;

				if (v > max) max = v;
				else if (v < max_neg) max_neg = v;

				if (v < 0) v *= -1;
				sum += v;

				if (v.toString().indexOf('.') != -1) {
					v = (Math.round(v * 1000000000000) / 1000000000000).toString();
					v = v.substr(v.indexOf('.') + 1);
					dec = v.length;
					if (dec > max_dec) max_dec = dec;
				}

				if (!bc[j]) {
					if (ccnt >= this.colors.length) ccnt = 0;
					bc[j] = (!drc[j] || drc[j].length < 3) ? this.colors[ccnt++] : _trim(drc[j]);
				}
			}
			lcnt++;
		}

		var border = parseInt(this.barBorder);
		var mPerc = sum ? Math.round(max * 100 / sum) : 0;
		if (this.type == 'pbar' || this.type == 'fader') var mul = 2;
		else var mul = mPerc ? 100 / mPerc : 1;
		mul *= this.barLength;

		if (this.showValues < 2) {
			if (this.type == 'hbar')
				valSpace = (this.percValuesDecimals * (this.percValuesSize / 1.6)) + (this.percValuesSize * 3.2);
			else valSpace = this.percValuesSize * 1.2;
		}
		else valSpace = this.percValuesSize;
		var spacer = maxSize = Math.round(mPerc * mul + valSpace + border * 2);

		if (max_neg) {
			var mPerc_neg = sum ? Math.round(-max_neg * 100 / sum) : 0;
			var spacer_neg = Math.round(mPerc_neg * mul + valSpace + border * 2);
			maxSize += spacer_neg;
		}

		var titleLabel = titleValue = titleBar = '';

		if (t.length > 0) {
			titleLabel = (t[0] == '') ? '&nbsp;' : t[0];

			if (this.showValues == 1 || this.showValues == 2) {
				titleValue = (t[1] == '') ? '&nbsp;' : t[1];
				titleBar = (t[2] == '') ? '&nbsp;' : t[2];
			}
			else titleBar = (t[1] == '') ? '&nbsp;' : t[1];
		}

		for (chart = lcnt = 0; chart < val.length; chart++) {
			graph += '<table border=0 cellspacing=2 cellpadding=0>';

			if (this.type == 'hbar') {
				if (t.length > 0) graph += this.build_hTitle(titleLabel, titleValue, titleBar);

				for (i = 0; i < val[chart].length; i++, lcnt++) {
					label = (lcnt < r.length) ? _trim(r[lcnt]) : lcnt + 1;
					rowspan = val[chart][i].length;
					graph += '<tr><td style="' + this.cssLABEL + '"' + ((rowspan > 1) ? ' rowspan=' + rowspan : '') + '>';
					graph += '&nbsp;' + label + '&nbsp;</td>';

					for (j = 0; j < val[chart][i].length; j++) {
						value = val[chart][i][j] ? val[chart][i][j] - this.baseValue : 0;
						percent = sum ? value * 100 / sum : 0;
						value = _number_format(val[chart][i][j], max_dec);
						bColor = this.level_color(val[chart][i][j], bc[j]);

						if (this.showValues == 1 || this.showValues == 2)
							graph += this.build_value(val[chart][i][j], max_dec, 0, 'right');

						graph += '<td' + (this.cssBARBG ? ' style="' + this.cssBARBG + '"' : '') + ' height=100% width=' + maxSize + '>';
						graph += this.create_hBar(value, percent, mPerc, mPerc_neg, max_neg, mul, valSpace, bColor, border, spacer, spacer_neg);
						graph += '</td></tr>';
						if (j < val[chart][i].length - 1) graph += '<tr>';
					}
					if (this.labelSpace && i < val[chart].length - 1) graph += '<tr><td colspan=3 height=' + this.labelSpace + '></td></tr>';
				}
			}
			else if (this.type == 'vbar') {
				graph += '<tr align=center valign=bottom>';

				if (titleBar != '') {
					titleBar = titleBar.replace(/-/g, '-<br>');
					graph += '<td style="' + this.cssTITLE + '" valign=middle>' + titleBar + '</td>';
				}
				for (i = 0; i < val[chart].length; i++) {
					for (j = 0; j < val[chart][i].length; j++) {
						value = val[chart][i][j] ? val[chart][i][j] - this.baseValue : 0;
						percent = sum ? value * 100 / sum : 0;
						value = _number_format(val[chart][i][j], max_dec);
						bColor = this.level_color(val[chart][i][j], bc[j]);

						graph += '<td' + (this.cssBARBG ? ' style="' + this.cssBARBG + '"' : '') + '>';
						graph += this.create_vBar(value, percent, mPerc, mPerc_neg, max_neg, mul, valSpace, bColor, border, spacer, spacer_neg);
						graph += '</td>';
					}
					if (this.labelSpace) graph += '<td width=' + this.labelSpace + '></td>';
				}
				if (this.showValues == 1 || this.showValues == 2) {
					graph += '</tr><tr align=center>';
					if (titleValue != '') graph += '<td style="' + this.cssTITLE + '">' + titleValue + '</td>';

					for (i = 0; i < val[chart].length; i++) {
						for (j = 0; j < val[chart][i].length; j++) {
							graph += this.build_value(val[chart][i][j], max_dec);
						}
						if (this.labelSpace) graph += '<td width=' + this.labelSpace + '></td>';
					}
				}
				graph += '</tr><tr>';
				if (titleLabel != '') graph += '<td style="' + this.cssTITLE + '">' + titleLabel + '</td>';

				for (i = 0; i < val[chart].length; i++, lcnt++) {
					label = (lcnt < r.length) ? _trim(r[lcnt]) : lcnt + 1;
					colspan = val[chart][i].length;
					graph += '<td style="' + this.cssLABEL + '"' + ((colspan > 1) ? ' colspan=' + colspan : '') + '>';
					graph += '&nbsp;' + label + '&nbsp;</td>';
					if (this.labelSpace) graph += '<td width=' + this.labelSpace + '></td>';
				}
				graph += '</tr>';
			}
			else if (this.type == 'pbar' || this.type == 'fader') {
				if (t.length > 0) graph += this.build_hTitle(titleLabel, titleValue, titleBar);

				for (i = 0; i < val[chart].length; i++, lcnt++) {
					label = (lcnt < r.length) ? _trim(r[lcnt]) : '';
					graph += '<tr>';

					if (label) {
						graph += '<td style="' + this.cssLABEL + '">';
						graph += '&nbsp;' + label + '&nbsp;</td>';
					}
					sum = val[chart][i][1] ? val[chart][i][1] : 0;
					percent = sum ? val[chart][i][0] * 100 / sum : 0;
					value = _number_format(val[chart][i][0], max_dec);

					if (this.showValues == 1 || this.showValues == 2)
						graph += this.build_value(val[chart][i][0], max_dec, sum, 'right');

					graph += '<td' + (this.cssBARBG ? ' style="' + this.cssBARBG + '"' : '') + '>';

					this.barColors = drc[i] ? _trim(drc[i]) : this.colors[0];
					bColor = this.level_color(val[chart][i][0], this.barColors);
					graph += '<table border=0 cellspacing=0 cellpadding=0><tr><td>';
					if (this.type == 'fader') graph += this.build_fader(value, Math.round(this.barWidth / 2), this.barWidth, Math.round(percent * mul), bColor);
					else graph += this.build_bar(value, Math.round(percent * mul), this.barWidth, bColor);
					graph += '</td><td width=' + Math.round((100 - percent) * mul) + '></td>';
					graph += '</tr></table></td>';
					if (this.showValues < 2) graph += '<td style="' + this.cssPERCVALUES + '" nowrap>&nbsp;' + _number_format(percent, this.percValuesDecimals) + '%</td>';
					graph += '</tr>';
					if (this.labelSpace && i < val[chart].length - 1) graph += '<td colspan=3 height=' + this.labelSpace + '></td>';
				}
			}
			else graph += '<tr><td>' + this.err_type + '</td></tr>';

			graph += '</table>';

			if (chart < this.charts - 1 && val[chart + 1].length) {
				graph += '</td>';
				if (this.type == 'vbar') graph += '</tr><tr valign=top>';
				graph += '<td>';
			}
		}

		if (this.charts > 1) graph += '</td></tr></table>';

		if (this.legend && this.type != 'pbar' && this.type != 'fader') {
			graph += '</td><td width=10>&nbsp;</td><td>';
			graph += this.build_legend(bc);
			graph += '</td></tr></table>';
		}

		if (this.debug) {
			graph += '<br>sum=' + sum + ' max=' + max + ' max_neg=' + max_neg + ' max_dec=' + max_dec;
			graph += ' mPerc=' + mPerc + ' mPerc_neg=' + mPerc_neg + ' mul=' + mul + ' valSpace=' + valSpace;
		}

		graph += '</td></tr></table>';

		return graph;
	}
}

//----------------------------------------------------------------------------------------------------
// Global Functions
//----------------------------------------------------------------------------------------------------
function _number_format(val, dec) {
	if (dec) {
		if (val == 0) {
			val = '0.';
			for (var i = 0; i < dec; i++) val += '0';
		}
		else {
			if (val < 0) {
				var neg = true;
				val *= -1;
			}
			else var neg = false;
			val = (Math.round(val * Math.pow(10, dec))).toString();
			if (val.length <= dec) for (var i = 0; i < dec - val.length + 1; i++) val = '0' + val;
			val = val.substr(0, val.length - dec) + '.' + val.substr(val.length - dec);
			if (val.substr(0, 1) == '.') val = '0' + val;
			if (neg) val = '-' + val;
		}
	}
	else val = Math.round(val);
	return val;
}

function _trim(str) {
	return str.replace(/^\s+|\s+$/, '');
}
