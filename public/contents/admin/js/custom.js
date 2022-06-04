$(document).ready(function() {
    $('#dataTable').DataTable({
        "info": true,
        "ordering": false,
        "searching": true,
        "paging": true,
    });
});
$(document).ready(function(){
	$(document).on("click", "#delete", function () {
		 var deleteID = $(this).data('id');
		 $(".modal_body #modal_id").val( deleteID );
	});
});
