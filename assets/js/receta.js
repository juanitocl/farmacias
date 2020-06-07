$(function(){
  $('#btnReceta').on('click', function(){
    swal({
      title:"RECETAS MÉDICAS",
      text: "Ingresa tú email para enviar el test que permite evaluar tu estado de salud.",
      content: 'input',
      buttons: {
        cancel: {
          text: "Cancelar",
          value: null,
          visible: true,
          className: "",
          closeModal: true,
        },
        confirm: {
          text: "Enviar",
          value: true,
          visible: true,
          className: "",
          closeModal: true
        }
      },
    });
  });

});
