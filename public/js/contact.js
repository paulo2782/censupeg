$('#btnAdd').click(function(event) {
    $('#myModal').modal('toggle')
});
$('.btnDelete').click(function(event) {

   if(confirm('Confirma Excluir?')){
    
   }else{
    return false;
   }
 });
$('#search').keyup(function(event) {
  search = $('#search').val();
  window.location.href='search?search='+search;
  
});
$('.btnToView').click(function(event) {
	$('#myModal').modal('toggle')
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
