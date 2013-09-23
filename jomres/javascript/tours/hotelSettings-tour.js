
function start_tour()
	{
    var tour = new Tour({
		backdrop: true
	});

	var target = 'tab_Bookingrooms';
	var id = tour_strings.tab_Bookingrooms;
	add_tour_step(tour,id,target);

	var target = 'tab_Yourbusinessdetails';
	var id = tour_strings.tab_Yourbusinessdetails;
	add_tour_step(tour,id,target);

	var target = 'tab_Externallink';
	var id = tour_strings.tab_Externallink;
	add_tour_step(tour,id,target);

	var target = 'tab_Gateways';
	var id = tour_strings.tab_Gateways;
	add_tour_step(tour,id,target);

	var target = 'tab_Misc';
	var id = tour_strings.tab_Misc;
	add_tour_step(tour,id,target);

	var target = 'tab_Propertydetails';
	var id = tour_strings.tab_Propertydetails;
	add_tour_step(tour,id,target);

	var target = 'tab_Required';
	var id = tour_strings.tab_Required;
	add_tour_step(tour,id,target);

	var target = 'tab_SRPs';
	var id = tour_strings.tab_SRPs;
	add_tour_step(tour,id,target);

	var target = 'tab_Supplements';
	var id = tour_strings.tab_Supplements;
	add_tour_step(tour,id,target);

	var target = 'tab_TariffsCurrency';
	var id = tour_strings.tab_TariffsCurrency;
	add_tour_step(tour,id,target);

	var target = 'tab_Touristtax';
	var id = tour_strings.tab_Touristtax;
	add_tour_step(tour,id,target);

	var target = 'tab_Micromanage';
	var id = tour_strings.tab_Micromanage;
	add_tour_step(tour,id,target);

	var target = 'tab_Wiseprice';
	var id = tour_strings.tab_Wiseprice;
	add_tour_step(tour,id,target);
	


    tour.start();

    jomresJquery(document).on("click", ".start", function(e) {
		e.preventDefault();
	if (jomresJquery(this).hasClass("disabled")) {
		return false;
		}
		tour.restart();
		return jomresJquery(".alert").alert("close");
		});
	};

function add_tour_step(tour,id,target)
	{
	if (typeof id.id != 'undefined')
		{
		tour.addStep({
			element: "#"+id.id,
			placement: id.position,
			title: id.title,
			content: id.content,
			orphan : false
			});
		}
	else
		{
		console.log ("Error, "+target+"'s id is not defined, it's likely that you haven't added the code required to the build tour strings script");
		}
	}