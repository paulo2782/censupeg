$('#btnAddCourse').click(function(event) {
  $('#myModalCourse').modal('toggle')
  $('#nameModalCourse').val($('#nameContact').val())

});

$('#btnAddSchedule').click(function(event) {
  $('#myModalSchedule').modal('toggle')
  
});

$('#btnAdd').click(function(event) {
    $('#status').val($('#hiddenStatus').val());
    $('#contact_origin').val($('#hiddenContact_origin').val());
    $('#myModal').modal('toggle')
    

    $('#state').change(function(event) {
        let state = $('#state').val();
        $.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+state+'/distritos', function(data) {
          $('#city').html('');
          $.each(data,function(index, el) {
            $('#city').append('<option>'+data[index].nome)
          });
        });
    });


});

$('.btnDelete').click(function(event) {
  if(confirm('Confirma Excluir?')){
       
  }else{
    return false;
  }
});

$('#schooling').val($('#schoolingData').val())
$('#state').val($('#stateData').val())
$('#city').append("<option value='"+$('#cityData').val()+"'>"+$('#cityData').val())
$('#contactOrigin').val($('#contactOriginData').val())

function habilitar_outros() {
    var checkBox = document.getElementById("outra-opcao");
    var text = document.getElementById("outro-curso");
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}

/* VALIDATION PHONE */
$(document).ready(function($){ 
   $('input[id=phone]').mask('(00)0000-00009');
});