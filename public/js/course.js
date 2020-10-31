

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