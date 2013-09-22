
function start_tour()
	{
    var tour = new Tour({
		backdrop: true
	});

	var target = 'tour_target_switcher_active_property_initials';
	var id = tour_strings.tour_target_switcher_active_property_initials;
	add_tour_step(tour,id,target);

	var target = 'found_properties';
	var id = tour_strings.found_properties;
	add_tour_step(tour,id,target);

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