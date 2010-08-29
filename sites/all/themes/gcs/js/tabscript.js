
	$(function() {
		$("#accordion").accordion({
			fillSpace: true
		});
	});
	$(function() {
		$("#accordionResizer").resizable({
			resize: function() {
				$("#accordion").accordion("resize");
			},
			minHeight: 140
		});
	});
	