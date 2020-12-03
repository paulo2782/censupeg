function details(iCount, iMonth, object, iCountDayMonth, dataDayMonth){
    if(iMonth < 10){ iM = '0'+iMonth }else{ iM = iMonth }
    
    for(i = 0 ; i <= iCount-1 ; i++){

        if(i < 10){ ii = '0'+i }else{ ii = i }

        $('#details').append(`
                <div class="show-details-block">
                    <div class = "container">
                        <div class = "panel-group">
                            <div class = "panel panel-default">
                                <div class = "panel-heading">
                                    <div class = "panel-title date_contact" id="`+object[i].date_contact+`" data-id="`+i+`">
                                        <a data-toggle = "collapse" href = "#show`+i+`">
                                            <span>`+object[i].date_contact.substr(8,2)+` / `+iM+` </span>
                                            <i class="fas fa-angle-down rotate-icon"></i>
                                        </a>
                                        <span class="export-file text-4">
                                            <a href="#">Exportar</a>
                                        </span>
                                    </div>
                                </div>
                           
                            <div id = "show`+i+`" class="panel-collapse collapse">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nome</th>
                                                <th>Contato data/hora</th>
                                                <th>Retorno data/hora</th>
                                                <th>Curso de interesse</th>
                                                <th>Status</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-details`+i+`" id="`+i+`">
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>                                
        `)        
    }

    $('.date_contact').click(function(event) {
 
        date_contact = $(this).attr('id')  

        table_id = $(this).attr('data-id')
        $('.table-details'+table_id).html('')
        num = 1
        
        for(i = 0 ; i <= dataDayMonth.length ; i++){

            if(dataDayMonth[i].date_contact == date_contact){
                $('.table-details'+table_id).append(
                    "<tr>"+
                    "<td>"+num+"</td>"+
                    "<td></td>"+
                    "<td>"+dataDayMonth[i].date_contact+"</td>"+
                    "<td>"+dataDayMonth[i].date_return+"<td>"+
                    "<td>"+dataDayMonth[i].status+"</td>"+
                    "<td><a href='#'><i class='fas fa-pen-square'></i></a>"+
                    "       <a href='#'><i class='fas fa-times'></i></a></td>"
                )
                 num++    
            }
           
        }  
    });
}

$(document).ready(function(){
    $('#btnPrev').click(function(event) {

        $('#details').html('')

        $.get("{{ route('mailingAjax') }}", {month:auxMonth,btn:0}, function( data ) {
            object = JSON.parse(data.dataJson);
            auxMonth = data.month

            $('#nameMonth').html(data.nameMonth+' de ')

            if(data.month >= 1){
                $('#btnNext').show();
            }
            if(data.month == 1){
                $('#btnPrev').hide();
            }
    details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
        });
    });

    $('#btnNext').click(function(event) {

        $('#details').html('')

        $.get("{{ route('mailingAjax') }}", {month:auxMonth,btn:1}, function( data ) {
        console.log(auxMonth)
            object = JSON.parse(data.dataJson);
            auxMonth = data.month

            $('#nameMonth').html(data.nameMonth+' de ')

            if(data.month >= 12){
                $('#btnNext').hide();
            }
            if(data.month > 1){
               $('#btnPrev').show();
            }
    details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
        });
    });


    
})