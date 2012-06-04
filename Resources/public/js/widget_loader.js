$(document).bind("striide_widget_loader_show", function(event,data) {
	if(data.id)
	{
		$("#loader_"+data.id).show();
	}
});
$(document).bind("striide_widget_loader_hide", function(event,data) {
	if(data.id)
	{
		$("#loader_"+data.id).hide();
	}
});
$(document).bind("striide_widget_loader_load", function(event,data) {
	if(data.id)
	{
		$(document).trigger("striide_widget_loader_show",{id: data.id});
	}

	if(data.callback)
	{
		data.callback();
	}

	if(data.id)
	{
		if(! data.delay)
		{
			data.delay = 1000; // default delay to hide
		}
		setTimeout(
			function(){ $(document).trigger("striide_widget_loader_hide",{id: data.id}); }
			,data.delay
		);
	}
});
