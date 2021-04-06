$(document).ready(function () {
  //Swal.fire('Any fool can use a computer');

  $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');


    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
      $('.dropdown-submenu .show').removeClass("show");
    });


    return false;
  });


  //borrar soft una opción de menú
  $(".frmborramenu").submit(function (e) {
    e.preventDefault();
    //Swal.fire('mensaje');

    Swal.fire({
      title: 'Está seguro de borrar?',
      text: "Esta acción borrará el menú, con ello tambien los submenú y base menú ligados!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, Eliminar!'
    }).then((result) => {
      if (result.isConfirmed) {

        swal.fire("aqui debera estar la validacion del Ajax");
        $.ajax({
          url: $(".frmborramenu").attr("action"),
          type: $(".frmborramenu").attr("method"),
          data: $(".frmborramenu").serialize(),
          success: function (response) {
            //alert(response);

            if (response == 1) {
              Swal.fire(
                'Eliminado!', 'Eliminado con éxito!', 'success');

              setTimeout(function () {
                location.reload();
              }, 800);
            } else {
              swal.fire("Error al borrar", "Verifique los datos ingresados", "warning");
            }
          }
        });


      }
    })
  });
  //fin de borrado de menu

  //INICIO de actualización de menú
  $("#frmupdateMenu").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmupdateMenu").attr("action"),
      type: $("#frmupdateMenu").attr("method"),
      data: $("#frmupdateMenu").serialize(),
      success: function (response) {
        //alert(response);

        if (response == 0) {
          alertify.error('Error al guardar');
        } else {
          //alert(ruta);
          //$(location).attr('href',ruta);

          var date = new Date();
          var d = date.getDate();
          var day = (d < 10) ? '0' + d : d;
          var m = date.getMonth() + 1;
          var month = (m < 10) ? '0' + m : m;
          var yy = date.getYear();
          var year = (yy < 1000) ? yy + 1900 : yy;
          var hora = date.getHours();
          var minut= date.getMinutes();
          var segund= date.getSeconds();

          var fecha =year + "-" + month + "-" + day + " " + hora + ":" + minut + ":"+segund;
          $("#updated_at").val(fecha);
          $("#modifica").val($("#nombre").val());

          alertify.success('Guardado');
          //alertify.success(fecha);
        }
      }
    });
  });
  //FIN de actualización de menú



  //INICIO de AGREGAR SUBmenú
  $("#frmaddSubmenu").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmaddSubmenu").attr("action"),
      type: $("#frmaddSubmenu").attr("method"),
      data: $("#frmaddSubmenu").serialize(),
      success: function (response) {
        //alert(response);

        if (response == 0) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Hubo un error al guardar el registro!'
          });
        } else {
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Guardado con exito!',
            showConfirmButton: false,
            timer: 2000
          });
          location.reload();
        }
      }
    });
  });
  //FIN de AGREGAR SUBmenú

});