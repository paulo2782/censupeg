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
                                            <i class="fa fa-angle-down rotate-icon"></i>
                                        </a>
                                        <span class="export-file-day text-4">
                                            <a href="#" class="export" id="export`+i+`" 
                                            data-reference="`+object[i].date_contact+`" 
                                            data-user_id="`+object[i].user_id+`">
                                            Exportar</a>
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
        var level   = $('#level').val()    
        date_contact = $(this).attr('id')  

        table_id = $(this).attr('data-id')
        $('.table-details'+table_id).html('')
        num = 1
        
        for(i = 0 ; i <= dataDayMonth.length ; i++){
                
            if(dataDayMonth[i].date_contact == date_contact){
                if(dataDayMonth[i].date_return == null)
                    { date_return = '' }
                else
                    { 
                    if(dataDayMonth[i].schedule != null)
                    {
                        date_return = moment(dataDayMonth[i].date_return).format('DD-MM-YY')+' / '+dataDayMonth[i].schedule 

                    }
                else
                    {
                        date_return = moment(dataDayMonth[i].date_return).format('DD-MM-YY')
                    }
                }

                if(level == 1){
                    $('.table-details'+table_id).append(
                        "<tr>"+
                        "<td><strong>"+num+"</strong></td>"+
                        "<td>"+dataDayMonth[i].name+"</td>"+
                        "<td>"+moment(dataDayMonth[i].date_contact).format('DD-MM-YY')+' / '+dataDayMonth[i].time+"</td>"+
                        "<td>"+date_return+"</td>"+
                        "<td>"+dataDayMonth[i].course+"</td>"+
                        "<td>"+dataDayMonth[i].status+"</td>"+
                        "<td>"+
                        "    <i class='fa fa-pencil editMailing'  title='Editar registro'  data-id="+dataDayMonth[i].call_id+"></i>"+
                        "    <i class='fa fa-trash deleteMailing' title='Excluir registro' data-id="+dataDayMonth[i].call_id+"></i></td>"
                    )
                }else{
                    $('.table-details'+table_id).append(
                        "<tr>"+
                        "<td><strong>"+num+"</strong></td>"+
                        "<td>"+dataDayMonth[i].name+"</td>"+
                        "<td>"+moment(dataDayMonth[i].date_contact).format('DD-MM-YY')+' / '+dataDayMonth[i].time+"</td>"+
                        "<td>"+date_return+"</td>"+
                        "<td>"+dataDayMonth[i].course+"</td>"+
                        "<td>"+dataDayMonth[i].status+"</td>"
                    )
                }
                num++    

            }
           
        }  
    });
    $('.export').click(function(event) {
    /* Act on the event */
        var date    = $(this).attr('data-reference')
        var user_id = $(this).attr('data-user_id')   
        var level   = $('#level').val()   

        window.location.href='csvMailing?date='+date+'&user_id='+user_id+'+&level='+level+''

    });

}

if($('#alert').is(':visible')){
    $('#alert').fadeOut(4000);
}
