$(document).ready(function () {
	//$('.preloader').fadeOut('fast');
	
	$("#frmauth").submit(function (e) { 
		e.preventDefault();
    let ruta=$('#ruta').val();
		 $.ajax({
			url: $("#frmauth").attr("action"),
			type: $("#frmauth").attr("method"),
			 data: $("#frmauth").serialize(),
			 success: function (response) {
				 //alert(response);
				 
				 if(response==0){
					alertify.error('Verifique sus datos ');
				 }else{
					//alert(ruta);
          $(location).attr('href',ruta);
				 }
			 }
		});
	});


});