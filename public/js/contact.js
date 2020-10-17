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
$('.btnToView').click(function(event) {
  // id = this.id
  // $.ajax({
  //   url: "viewData",
  //   method: 'GET',
  //   dataType: 'json',
  //   data: {id:id},
  //   success:function(data){
  //     $('#myModalViewData').modal('toggle')
  //     $('#viewDataName').val(data.name);
  //     $('#viewDataEmail').val(data.email);
  //     $('#viewDataPhone').val(data.phone);
  //     $('#viewDataContact_origin').val(data.contact_origin);
  //     $('#viewDataDate_contact').val(data.date_contact);
  //     $('#viewDataScheduled_return').val(data.scheduled_return);
  //     $('#viewDataSchedule').val(data.schedule);
  //     $('#viewDataStatus').val(data.status);
  //     $('#viewDataAdditional_information').html(data.additional_information);
  //     $('#outro-curso').val(data.other_course);

  //     i = data.interest_course.split(",");

  //     for(x = 0 ; x <= i.length-1 ; x++){
  //       value = i[x];   
  //       if($('.form-check').val(value)) {
  //         $('#'+value).attr('checked',true)
  //       }
  //     }
  //   }
  // });
});

function habilitar_outros() {
    var checkBox = document.getElementById("outra-opcao");
    var text = document.getElementById("outro-curso");
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}
