function createGraph(labels,values,type,legend,thediv)
	{
	var graph = new BAR_GRAPH(type);
	if (thediv.length==0)
		thediv='divGraph';
		
		graph.legend = legend;
		graph.values = values;
		graph.labels = labels;	
		graph.showValues = 2;
		graph.barWidth = 10;
		graph.labelSize = 12;
		graph.absValuesSize = 12;
		graph.percValuesSize = 12;
		graph.graphPadding = 5;
		graph.graphBGColor = "#E8EAEE";
		graph.graphBorder = "1px solid #913638";
		graph.barColors = "#913638";
		graph.barBGColor = "#F1F3F5";
		graph.barBorder = "2px outset white";
		graph.labelColor = "#FFFFFF";
		graph.labelBGColor = "#913638";
		graph.labelBorder = "2px groove white";
		graph.absValuesColor = "#000000";
		graph.absValuesBGColor = "#FFFFFF";
		graph.absValuesBorder = "2px groove white";
		document.getElementById(thediv).innerHTML = graph.create();
	}
	