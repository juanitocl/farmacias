$(function(){

  let comuna;

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      string = JSON.parse(this.responseText);
      var selector_comuna = document.getElementById('comuna');
      $('#comuna').prepend(string);
      $.ajax({
        type:'GET',
        dataType: 'json',
        url: 'utils/listadoComunas.php',
        success:function(respuesta,status,xhr){
          if (xhr.readyState == 4 && xhr.status == 200) {
            $.each(respuesta, function(iteml) {
              var optl = document.createElement('option');
              optl.appendChild( document.createTextNode(respuesta[iteml].nombre) );
              optl.value = respuesta[iteml].id;
              selector_comuna.appendChild(optl);
            });
          }else if (xhr.readyState != 4) {
            selector_comuna.appendChild("<option value=''>Espere un momento...</option>");
          }

        },error: function(){
          selector_comuna.appendChild("<option value=''> Error al cargar listado de comunas</option>");
        }
      });
    }
  };
  xmlhttp.open("GET", "utils/postapi.php", true);
  xmlhttp.send();


  $('#comuna').on('change',function(e){
    e.preventDefault();
    comuna = Number($(this).val());
    $("#locales").html('<option value="">Cargando...</option>');
    if (comuna != 0) {
      $.ajax({
        data: 'comuna='+comuna,
        type:'POST',
        dataType: "json",
        url: 'utils/comunas_locales.php',
        success:function(respuesta,status,xhr){

          if (xhr.readyState == 4 && xhr.status == 200) {
            $("#locales").html('<option value="">Elija local</option>');
            $.each(respuesta, function(iteml) {
              var select_locales = document.getElementById('locales');
              var optl = document.createElement('option');
              optl.appendChild( document.createTextNode(respuesta[iteml].local +" ("+respuesta[iteml].direccion+")") );
              optl.value = respuesta[iteml].local_id;
              select_locales.appendChild(optl);
            });

          }else if (xhr.readyState != 4) {
            $("#locales").html('<option value="">Espere un momento...</option>');
          }
        },
        error:function(xhr,status,error){
          $("#locales").html('<option value="">Ha ocurrido un error: '+ xhr.status +' '+ xhr.statusText + '</option>');
        }
      });
    }else {
      $("#locales").html('<option value="">Elija local</option>');
    }
  });

  $('#btnBuscar').on('click',function(e){
    e.preventDefault();
    var locales = document.getElementById('locales').value;
    var validar = document.forms['formBuscador'].reportValidity();
    comuna = document.getElementById('comuna').value;
    if (validar == true) {
      if (comuna != 0 && locales == '') {
        window.location.href = 'resultados.php?com_id='+comuna;
      }else if (comuna !='' && locales != '') {
        window.location.href = 'local.php?com_id='+comuna+'&lcl='+locales;
      }

    }

  });



});
