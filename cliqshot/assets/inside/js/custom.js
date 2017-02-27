var package_id;

$("document").ready(function(){

	
	$(".view_det_package").click(function(){

				$("#package_details").html("");

				var package_id=  ($(this).attr('id'));

					$.post(  "http://localhost:90/shot/cliqshot/CustomerController/get_package_info_ajax", { package_id: package_id}, 

						function(data, status){

							$("#package_details").html(data);


				});

	});

});

