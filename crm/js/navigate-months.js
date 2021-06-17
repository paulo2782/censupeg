$(document).ready(function(){
    var d = new Date();

    function myCalendar() {
    var month = d.getUTCMonth();
    var day = d.getUTCDate();
    var year = d.getUTCFullYear();

    // Displays the current month in Strings and the actual year 
    switch(month) {
        case 0: $('.month-year').append('<h2> ' + 'Janeiro' + ' ' + "de " +  year + ' </h2>' ); break;
        case 1: $('.month-year').append('<h2> ' + 'Fevereiro' + ' ' + "de " + year + ' </h2>' ); break;
        case 2: $('.month-year').append('<h2> ' + 'Março' + ' ' + "de " + year + ' </h2>' ); break;
        case 3: $('.month-year').append('<h2> ' + 'Abril' + ' ' + "de " + year + ' </h2>' ); break;
        case 4: $('.month-year').append('<h2> ' + 'Maio' + ' ' + "de " + year + ' </h2>' ); break;
        case 5: $('.month-year').append('<h2> ' + 'Junho' + ' ' + "de " + year + ' </h2>' ); break;
        case 6: $('.month-year').append('<h2> ' + 'Julho' + ' ' + "de " + year + ' </h2>' ); break;
        case 7: $('.month-year').append('<h2> ' + 'Agosto' + ' ' + "de " + year + ' </h2>' ); break;
        case 8: $('.month-year').append('<h2> ' + 'Setembro' + ' ' + "de " + year + ' </h2>' ); break;
        case 9: $('.month-year').append('<h2> ' + 'Outubro' + ' ' + "de " + year + ' </h2>' ); break;
        case 10: $('.month-year').append('<h2> ' + 'Novembro' + ' ' + "de " + year + ' </h2>' ); break;
        case 11: $('.month-year').append('<h2> ' + 'Dezembro' + ' ' + "de " + year + ' </h2>' ); break;
    default:
    break;

    }
};

    myCalendar();   

    //Navigation Buttons
    $('.prev-month').click(function(){
        $('.month-year').empty();
        d.setUTCMonth(d.getUTCMonth() - 1);
        myCalendar();
    });

    $('.next-month').click(function(){
        $('.month-year').empty();
        d.setUTCMonth(d.getUTCMonth() + 1);
        myCalendar();
    });

});
