
function start_tour()
	{
    var tour = new Tour({

	});

	var target = 'tour_target_property_header';
	var id = tour_strings.tour_target_property_header;
	add_tour_step(tour,id,target);

	var target = 'gallerywrapper';
	var id = tour_strings.gallerywrapper;
	add_tour_step(tour,id,target);

	var target = 'tour_target_property_details_buttons';
	var id = tour_strings.tour_target_property_details_buttons;
	add_tour_step(tour,id,target);

	var target = 'tour_target_inline_calendar';
	var id = tour_strings.tour_target_inline_calendar;
	add_tour_step(tour,id,target);

	var target = 'tour_target_property_details_main_details';
	var id = tour_strings.tour_target_property_details_main_details;
	add_tour_step(tour,id,target);
	
	var target = 'tour_target_property_details_moreinfo';
	var id = tour_strings.tour_target_property_details_moreinfo;
	add_tour_step(tour,id,target);
	
	var target = 'tour_target_property_details_booking_form';
	var id = tour_strings.tour_target_property_details_booking_form;
	add_tour_step(tour,id,target);

	var target = 'tour_target_property_details_map';
	var id = tour_strings.tour_target_property_details_map;
	add_tour_step(tour,id,target);

	var target = 'tour_target_reviews_list';
	var id = tour_strings.tour_target_reviews_list;
	add_tour_step(tour,id,target);
	
	var target = 'tour_target_rooms_list';
	var id = tour_strings.tour_target_rooms_list;
	add_tour_step(tour,id,target);

	var target = 'tour_target_property_details_tariffs';
	var id = tour_strings.tour_target_property_details_tariffs;
	add_tour_step(tour,id,target);

	var target = 'tour_target_local_attractions';
	var id = tour_strings.tour_target_local_attractions;
	add_tour_step(tour,id,target);

	var target = 'tour_target_local_events';
	var id = tour_strings.tour_target_local_events;
	add_tour_step(tour,id,target);
	
	var target = 'jomres_auction_house_content_body';
	var id = tour_strings.jomres_auction_house_content_body;
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