(function(win,doc){
    'use strict';

    function exibir_calendario(perfil, div)
    {
        let calendarEl=doc.querySelector(div);
        let calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar:{
                start: 'prev,next,today',
                center: 'title',
                end: 'dayGridMonth, timeGridWeek, timeGridDay'
            },
            buttonText:{
                today:    'hoje',
                month:    'mês',
                week:     'semana',
                day:      'dia'
            },
            locale:'pt-br',
            dateClick: function(info) {
                if(perfil == 'manager'){
                    alert('vai pra pagina do manager');
                }else{
                    if(info.view.type == 'dayGridMonth'){
                        calendar.changeView('timeGrid', info.dateStr);
                    }else{
                        win.location.href='../view/add_evento.php?date='+info.dateStr;
                    }
                }
                /*alert('Clicked on: ' + info.dateStr);
                alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
                alert('Current view: ' + info.view.type);*/
            },
            events: '../controller/EventoController.php?acao=exibir_eventos',
            eventClick: function(info) {
                if(perfil == 'manager'){
                    win.location.href=`/view/manager/editar?id=${info.event.id}`;
                }
            }
        });
        calendar.render();
    }

    if(doc.querySelector('.calendarUser')){
        exibir_calendario('user','.calendarUser');
    }else if(doc.querySelector('.calendarManager')){
        exibir_calendario('manager','.calendarManager');
    }

})(window,document);