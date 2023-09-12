
(function(win, doc){
  'use strict';

  let calendarEl=doc.querySelector('.calendar');
  let calendar = new FullCalendar.Calendar(calendarEl, {
    //plugins: [dayGridPlugin],
    initialView: 'dayGridMonth',

    headerToolbar:{
      start: 'prev,next,today', // will normally be on the left. if RTL, will be on the right
      center: 'title',
      end: 'dayGridMonth,timeGridWeek,timeGridDay' // will normally be on the right. if RTL, will be on the left
    },

    buttonText: {
      today:    'hoje',
      month:    'mês',
      week:     'semana',
      day:      'dia',
      list:     'lista'
    },

    locale:'pt-br',

    dateClick: function(info) {
      alert('Clicked on: ' + info.dateStr);
      alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
      alert('Current view: ' + info.view.type);
      // change the day's background color just for fun
      info.dayEl.style.backgroundColor = 'red';
    },

    events: '../../controllers/ControllerEvents.php',

  });
  
  calendar.render();
  
  })(window, document)
  