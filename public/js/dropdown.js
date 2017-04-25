$("#branch").change(event => {
	$.get(`users/${event.target.value}`, function(res, sta){
		$("#user").empty();
		res.forEach(element => {
			$("#user").append(`<option value=${element.id}> ${element.name} ${element.last_name} </option>`);
		});
	});
});
