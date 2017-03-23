$(function() {
      var now =new Date()
	  now.setDate(new Date().getDate());
	  var tripstart = $('#tripstart').datepicker({
	        minDate: now,
	        dateFormat: "dd-M-yy",
	      	onSelect: function(dateText, inst) {
	    	// Get the selected date
	    	var inDate = new Date($(this).val());
	    		// Set the minimum date for the check out option to the selected date
	    		$("#tripend").datepicker('option', 'minDate', inDate);
			}
		}).data('datepicker');

	    var tripend = $('#tripend').datepicker({
	        minDate: now,
	        dateFormat: "dd-M-yy"
	    }).data('datepicker');
});