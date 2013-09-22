
function start_tour()
	{
    var tour = new Tour({
		backdrop: true
	});

	var target = 'jomres_alternate_menu_position';
	var id = tour_strings.jomres_alternate_menu_position;
	add_tour_step(tour,id,target);

	var target = 'tour_target_property_name';
	var id = tour_strings.tour_target_property_name;
	add_tour_step(tour,id,target);

	var target = 'tour_target_timezone_dropdown';
	var id = tour_strings.tour_target_timezone_dropdown;
	add_tour_step(tour,id,target);

	var target = 'tour_target_lang_dropdown';
	var id = tour_strings.tour_target_lang_dropdown;
	add_tour_step(tour,id,target);

	var target = 'tour_target_editing_mode_dropdown';
	var id = tour_strings.tour_target_editing_mode_dropdown;
	add_tour_step(tour,id,target);

	var target = 'tour_target_content';
	var id = tour_strings.tour_target_content;
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