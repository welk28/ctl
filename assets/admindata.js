
function CargarRolcargo(val) {
  //alert(val);
  $.ajax({
    type: "POST",
    url: $('#dirolcargo').val(),
    data: "idrg=" + val,
    success: function (resp) {
      $("#idrc").html(resp);

    }
  });
  if ($('#idrg').val() != "") {
    divA = document.getElementById("cargo");
    divA.style.display = "";

  } else {
    divD = document.getElementById("cargo");
    divD.style.display = "none";
    divA = document.getElementById("departamento");
    divA.style.display = "none";
    divC = document.getElementById("puesto");
    divC.style.display = "none";

  }
  if (val == 4) {
    divB = document.getElementById("publicidad");
    divB.style.display = "";
    //poner required
    $('#idedo').prop("required", true);
    $('#idgi').prop("required", true);
  } else {
    divB = document.getElementById("publicidad");
    divB.style.display = "none";
    //quitar required
    $('#idedo').removeAttr("required");
    $('#idgi').removeAttr("required");
  }
}
/// fin de carga de puesto
//carga de departamento
function CargarDepartamento(val) {
  //alert(val);

  if ($('#idrc').val() != "") {
    divA = document.getElementById("departamento");
    divA.style.display = "";
    // 	divA = document.getElementById("matec");
    // 	divA.style.display="none";
    // 	divC = document.getElementById("doch");
    // 	divC.style.display="none";
    // 	divB = document.getElementById("botonh");
    // 	divB.style.display="none";
  } else {
    divD = document.getElementById("departamento");
    divD.style.display = "none";
    divA = document.getElementById("puesto");
    divA.style.display = "none";
    // divC = document.getElementById("doch");
    // divC.style.display="none";
    // divB = document.getElementById("botonh");
    // divB.style.display="none";
  }

}
//fin carga de departamento
//carga de puesto
function CargarPuesto(val) {
  //alert(val);
  $.ajax({
    type: "POST",
    url: $('#dirpuesto').val(),
    data: "idepto=" + val,
    success: function (resp) {
      $("#idpuesto").html(resp);

    }
  });
  if ($('#idepto').val() != "") {
    divA = document.getElementById("puesto");
    divA.style.display = "";
    // 	divA = document.getElementById("matec");
    // 	divA.style.display="none";
    // 	divC = document.getElementById("doch");
    // 	divC.style.display="none";
    // 	divB = document.getElementById("botonh");
    // 	divB.style.display="none";
  } else {
    divD = document.getElementById("puesto");
    divD.style.display = "none";
    // divA = document.getElementById("matec");
    // divA.style.display="none";
    // divC = document.getElementById("doch");
    // divC.style.display="none";
    // divB = document.getElementById("botonh");
    // divB.style.display="none";
  }
}
//fin carga de puesto
function agregaform(datos) {
  //alert("dentro de modificar");
  $('#frmupdateBasemenu')[0].reset();
  d = datos.split('||');

  $('#idbu').val(d[0]);
  $('#descbu').val(d[1]);


  var status = d[2];
  if (status == 1) {
    $("#statusup").prop("checked", true);
  }
}
function agregaformdepto(datos) {
  //alert("dentro de modificar");
  $('#frmaddDepto')[0].reset();
  d = datos.split('||');

  $('#idepto').val(d[0]);
  $('#nomdeptou').val(d[1]);


  var status = d[2];
  if (status == 1) {
    $("#statusu").prop("checked", true);
  }
}
function agregaformCargo(datos) {
  //alert("dentro de modificar");
  $('#frmupdateCargo')[0].reset();
  d = datos.split('||');

  $('#idrcu').val(d[0]);
  $('#desccu').val(d[1]);


  var status = d[2];
  if (status == 1) {
    $("#statusu").prop("checked", true);
  }
}

function agregaformGiro(datos) {
  //alert("dentro de modificar");
  $('#frmupdateGiroemp')[0].reset();
  d = datos.split('||');

  $('#idgi').val(d[0]);
  $('#descg').val(d[1]);


  var status = d[2];
  if (status == 1) {
    $("#statusu").prop("checked", true);
  }
}

$(document).ready(function () {
  $("#escribe").keyup(function () {
    $("#parrafo").text("Tecla soltada");
  });

  //inicia valida usuario
  $("#usuario").keyup(function () {
    // var contra = $('#contra').val();
    var usuario = $('#usuario').val();
    //alert(usuario);
    $.ajax({
      type: "POST",
      url: $('#dirusuario').val(),
      data: "usuario=" + usuario,
      success: function (resp) {
        //alert(resp);
        //$("#idrc").html(resp);
        if (resp == 0) {
          $("#usuario").removeClass("is-invalid");
          $("#usuario").addClass("is-valid");
          $('#btnGuardaus').prop('disabled', false);
        } else {
          $("#usuario").removeClass("is-valid");
          $("#usuario").addClass("is-invalid");
          $('#btnGuardaus').prop('disabled', true);
          //$('#btnGuardaus').attr("disabled","disabled") 
        }
      }
    });
  });
  //fin validar usuario
  //inicia valida email
  $("#email").keyup(function () {
    // var contra = $('#contra').val();
    var email = $('#email').val();
    //alert(usuario);
    $.ajax({
      type: "POST",
      url: $('#diremail').val(),
      data: "email=" + email,
      success: function (resp) {
        //alert(resp);
        //$("#idrc").html(resp);
        if (resp == 0) {
          $("#email").removeClass("is-invalid");
          $("#email").addClass("is-valid");
          $('#btnGuardaus').prop('disabled', false);
        } else {
          $("#email").removeClass("is-valid");
          $("#email").addClass("is-invalid");
          $('#btnGuardaus').prop('disabled', true);
          //$('#btnGuardaus').attr("disabled","disabled") 
        }
      }
    });
  });
  //fin validar email
  $("#contrav").keyup(function () {
    var contra = $('#contra').val();
    var contrav = $('#contrav').val();
    if (contra == contrav) {
      $("#contrav").removeClass("is-invalid");
      $("#contrav").addClass("is-valid");
      $("#contra").removeClass("is-invalid");
      $("#contra").addClass("is-valid");
    } else {
      $("#contrav").removeClass("is-valid");
      $("#contrav").addClass("is-invalid");
      $("#contra").removeClass("is-valid");
      $("#contra").addClass("is-invalid");
    }
    //alert(contra);
    //$("#parrafo").text("Tecla soltada");
  });
  $("#contra").keyup(function () {

    $("#contrav").val("");
    $("#contrav").removeClass("is-valid");
    $("#contrav").removeClass("is-invalid");
    $("#contra").removeClass("is-valid");
    $("#contra").removeClass("is-invalid");
    //alert(contra);
    //$("#parrafo").text("Tecla soltada");
  });

  $('.solo-numero').keyup(function () {
    this.value = (this.value + '').replace(/[^0-9]/g, '');
  });
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
          var minut = date.getMinutes();
          var segund = date.getSeconds();

          var fecha = year + "-" + month + "-" + day + " " + hora + ":" + minut + ":" + segund;
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

  //INICIO de actualización de SUBmenú
  $("#frmupdatesSubmenu").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmupdatesSubmenu").attr("action"),
      type: $("#frmupdatesSubmenu").attr("method"),
      data: $("#frmupdatesSubmenu").serialize(),
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
          var minut = date.getMinutes();
          var segund = date.getSeconds();

          var fecha = year + "-" + month + "-" + day + " " + hora + ":" + minut + ":" + segund;
          $("#updated_at").val(fecha);
          $("#modifica").val($("#nombre").val());

          alertify.success('Guardado');
          //alertify.success(fecha);
        }
      }
    });
  });
  //FIN de actualización de SUBmenú

  //INICIO de actualización de BASEmenú
  $("#frmupdateBasemenu").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmupdateBasemenu").attr("action"),
      type: $("#frmupdateBasemenu").attr("method"),
      data: $("#frmupdateBasemenu").serialize(),
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
  //FIN de actualización de BASEmenú

  //INICIO de ALTA de BASEmenú
  $("#frmnewBasemenu").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmnewBasemenu").attr("action"),
      type: $("#frmnewBasemenu").attr("method"),
      data: $("#frmnewBasemenu").serialize(),
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
  //FIN de ALTA de BASEmenú
  //------------------------------------------------------------------------------------------
  //SECCION DE BORRADO DE REGISTROS


  //INICIO DE BORRA BASEMENU
  $(document).on("click", "#listax .btn-borrabm", function () {
    var idb = $(this).closest("tr").find(".idb").val();
    var base_url = $(this).closest("tr").find(".base_urlb").val();
    //alertify.success(base_url);
    Swal.fire({
      title: 'Está seguro de borrar?',
      text: "Esta acción borrará el registro, con ello tambien los que tenga ligados!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, Eliminar!'
    }).then((result) => {
      if (result.isConfirmed) {

        //     swal.fire("aqui debera estar la validacion del Ajax");
        cadena = "idb=" + idb +
          "&base_url=" + base_url;
        $.ajax({
          url: base_url,
          type: "POST",
          data: cadena,
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
  //FIN DE BORRADO BASEMENU


  //borrar de SUBmenú
  $(".frmborrasubmenu").submit(function (e) {
    e.preventDefault();
    //Swal.fire('mensaje');

    Swal.fire({
      title: 'Está seguro de borrar?',
      text: "Esta acción borrará el submenú, con ello tambien las basemenú ligados!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, Eliminar!'
    }).then((result) => {
      if (result.isConfirmed) {

        //swal.fire("aqui debera estar la validacion del Ajax");
        $.ajax({
          url: $(".frmborrasubmenu").attr("action"),
          type: $(".frmborrasubmenu").attr("method"),
          data: $(".frmborrasubmenu").serialize(),
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
  //fin de borrado de SUBmenu


  //borrar de MENU
  $(".frmborramenu").submit(function (e) {
    e.preventDefault();
    //Swal.fire('mensaje');

    Swal.fire({
      title: 'Está seguro de borrar?',
      text: "Esta acción borrará el Menú, así como los submenú y con ello tambien las basemenú ligados!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, Eliminar!'
    }).then((result) => {
      if (result.isConfirmed) {

        //swal.fire("aqui debera estar la validacion del Ajax");
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
  //fin de borrado de MENU
  //INICIO de actualización de SATESITE
  $("#frmDatesiteupdate").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmDatesiteupdate").attr("action"),
      type: $("#frmDatesiteupdate").attr("method"),
      data: $("#frmDatesiteupdate").serialize(),
      success: function (response) {
        //alert(response);

        if (response == 0) {
          alertify.error('Error al guardar');
        } else {
          alertify.success('Guardado');
          //alertify.success(fecha);
        }
      }
    });
  });
  //FIN de actualización de DATESITE
  // INICIO ALTA DE DEPARTAMENTO 
  $("#frmaddDepto").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmaddDepto").attr("action"),
      type: $("#frmaddDepto").attr("method"),
      data: $("#frmaddDepto").serialize(),
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
  //FIN DE ALTA DE DEPARTAMENTO

  // INICIO MODIFICA DE DEPARTAMENTO 
  $("#frmupdateDepto").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmupdateDepto").attr("action"),
      type: $("#frmupdateDepto").attr("method"),
      data: $("#frmupdateDepto").serialize(),
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
  //FIN DE MODIFICA DE DEPARTAMENTO
  //INICIO DE BORRA DEPARTAMENTO
  $(document).on("click", "#listax .btn-borrabm", function () {
    var idepto = $(this).closest("tr").find(".idepto").val();
    var base_url = $(this).closest("tr").find(".base_urlb").val();
    //alertify.success(base_url);
    Swal.fire({
      title: 'Está seguro de borrar?',
      text: "Esta acción borrará el registro, con ello tambien los que tenga ligados!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, Eliminar!'
    }).then((result) => {
      if (result.isConfirmed) {

        //     swal.fire("aqui debera estar la validacion del Ajax");
        cadena = "idepto=" + idepto +
          "&base_url=" + base_url;
        $.ajax({
          url: base_url,
          type: "POST",
          data: cadena,
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
  //FIN DE BORRADO DEPARTAMENTO
  // INICIO ALTA DE ROL GENERAL 
  $("#frmaddRolgral").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmaddRolgral").attr("action"),
      type: $("#frmaddRolgral").attr("method"),
      data: $("#frmaddRolgral").serialize(),
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
  //FIN DE ALTA DE ROL GENERAL

  // INICIO ALTA DE CARGO 
  $("#frmaddCargo").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmaddCargo").attr("action"),
      type: $("#frmaddCargo").attr("method"),
      data: $("#frmaddCargo").serialize(),
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
  //FIN DE ALTA DE CARGO
  // INICIO ACTUALIZACION  DE CARGO 
  $("#frmupdateCargo").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmupdateCargo").attr("action"),
      type: $("#frmupdateCargo").attr("method"),
      data: $("#frmupdateCargo").serialize(),
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
  //FIN DE ACTUALIZACION  DE CARGO
  //INICIO DE BORRA cargo
  $(document).on("click", "#listax .btn-borracargo", function () {
    var idrc = $(this).closest("tr").find(".idrc").val();
    var base_url = $(this).closest("tr").find(".base_urlb").val();
    //alertify.success(base_url);
    Swal.fire({
      title: 'Está seguro de borrar?',
      text: "Esta acción borrará el registro, con ello tambien los que tenga ligados!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, Eliminar!'
    }).then((result) => {
      if (result.isConfirmed) {

        //     swal.fire("aqui debera estar la validacion del Ajax");
        cadena = "idrc=" + idrc +
          "&base_url=" + base_url;
        //alert(base_url);
        $.ajax({
          url: base_url,
          type: "POST",
          data: cadena,
          success: function (response) {


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
  //FIN DE BORRADO rolgeneral

  //borrar de ROL GENERAL
  $(".frmborrRolgral").submit(function (e) {
    e.preventDefault();
    //Swal.fire('mensaje');

    Swal.fire({
      title: 'Está seguro de borrar?',
      text: "Esta acción borrará el submenú, con ello tambien las basemenú ligados!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, Eliminar!'
    }).then((result) => {
      if (result.isConfirmed) {

        //swal.fire("aqui debera estar la validacion del Ajax");
        $.ajax({
          url: $(".frmborrRolgral").attr("action"),
          type: $(".frmborrRolgral").attr("method"),
          data: $(".frmborrRolgral").serialize(),
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
  //fin de borrado de rolgeneral
  // INICIO ACTUALIZACION DE  ROL GENERAL
  $("#frmupdateRole").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmupdateRole").attr("action"),
      type: $("#frmupdateRole").attr("method"),
      data: $("#frmupdateRole").serialize(),
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
  //FIN DE ACTUALIZACION DE ROL GENERAL

  // INICIO ALTA DE GIRO EMPRESARIAL 
  $("#frmaddEmpre").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmaddEmpre").attr("action"),
      type: $("#frmaddEmpre").attr("method"),
      data: $("#frmaddEmpre").serialize(),
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
  //FIN DE ALTA DE GIRO EMPRESARIAL

  // INICIO ACTUALIZACION DE GIRO EMPRESARIAL 
  $("#frmupdateGiroemp").submit(function (e) {
    e.preventDefault();
    //let ruta=$('#ruta').val();
    $.ajax({
      url: $("#frmupdateGiroemp").attr("action"),
      type: $("#frmupdateGiroemp").attr("method"),
      data: $("#frmupdateGiroemp").serialize(),
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
  //FIN DE ACTUALIZACION DE GIRO EMPRESARIAL

  //INICIO DE BORRA GIRO EMPRESARIAL
  $(document).on("click", "#listax .btn-borraGiro", function () {
    var idgi = $(this).closest("tr").find(".idgi").val();
    var base_url = $(this).closest("tr").find(".base_urlb").val();
    //alertify.success(base_url);
    Swal.fire({
      title: 'Está seguro de borrar?',
      text: "Esta acción borrará el registro, con ello tambien los que tenga ligados!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, Eliminar!'
    }).then((result) => {
      if (result.isConfirmed) {

        //     swal.fire("aqui debera estar la validacion del Ajax");
        cadena = "idgi=" + idgi +
          "&base_url=" + base_url;
        //alert(base_url);
        $.ajax({
          url: base_url,
          type: "POST",
          data: cadena,
          success: function (response) {


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
  //FIN DE BORRADO GIRO EMPRESARIAL
  // INICIO ALTA DE GIRO PERSONAL 
  $("#frmGuardaPersonal").submit(function (e) {
    e.preventDefault();
    
    var urlpersonal=$('#urlpersonal').val();
		
    var idrg=$('#idrg').val();
    var url=urlpersonal+"/"+idrg;

    $.ajax({
      url: $("#frmGuardaPersonal").attr("action"),
      type: $("#frmGuardaPersonal").attr("method"),
      data: $("#frmGuardaPersonal").serialize(),
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
          //location.reload();
          $(location).attr('href',url);
        }
      }
    });
  });
  //FIN DE ALTA DE GIRO PERSONAL
});