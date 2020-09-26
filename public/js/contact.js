$('#btnAdd').click(function(event) {
    $('#status').val($('#hiddenStatus').val());
    $('#contact_origin').val($('#hiddenContact_origin').val());
    $('#myModal').modal('toggle')

});
$('.btnDelete').click(function(event) {
   if(confirm('Confirma Excluir?')){
    
   }else{
    return false;
   }
 });
$('.btnToView').click(function(event) {
  id = this.id
  $.ajax({
    url: "bekykData",
    method: 'GET',
    dataType: 'json',
    data: {id:id},
    success:function(data){
      $('#myModalBekykData').modal('toggle')
      $('#bekykDataName').val(data.name);
      $('#bekykDataEmail').val(data.email);
      $('#bekykDataPhone').val(data.phone);
      $('#bekykDataContact_origin').val(data.contact_origin);
      $('#bekykDataDate_contact').val(data.date_contact);
      $('#bekykDataScheduled_return').val(data.scheduled_return);
      $('#bekykDataSchedule').val(data.schedule);
      $('#bekykDataStatus').val(data.status);
      $('#bekykDataAdditional_information').html(data.additional_information);
      $('#outro-curso').val(data.other_course);

      i = data.interest_course.split(",");

      for(x = 0 ; x <= i.length-1 ; x++){
        value = i[x];   
        if($('.form-check').val(value)) {
          $('#'+value).attr('checked',true)
        }
      }
    }
  });
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
