@extends('frontend.layouts.app')

@section('content')
<div class="header-base mt30">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="text-left">
          <h1>Appointment</h1>
        </div>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb b white">
          <li><a href="/dashboard">Dashboard</a></li>
          <li class="active">Appointment</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="section-empty inner_page">
  <div class="container content">
    <div id='calendar'></div>
  </div>
</div>
@endsection

@section('after-styles')
<style>
  .fc-view-container table td, .fc-view-container table {
      padding: 0 !important;
      margin: 0 !important;
  }
  
</style>
  <link href='https://unpkg.com/@fullcalendar/core@4.4.0/main.min.css' rel='stylesheet' />
  <link href='https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.css' rel='stylesheet' />
  <link href='https://unpkg.com/@fullcalendar/timegrid@4.4.0/main.min.css' rel='stylesheet' />
  <link href='https://unpkg.com/@fullcalendar/list@4.4.0/main.min.css' rel='stylesheet' />
  
@endsection

@section('after-scripts')
  <script src='https://unpkg.com/@fullcalendar/core@4.4.0/main.min.js'></script>
  <script src='https://unpkg.com/@fullcalendar/interaction@4.4.0/main.min.js'></script>
  <script src='https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.js'></script>
  <script src='https://unpkg.com/@fullcalendar/timegrid@4.4.0/main.min.js'></script>
  <script src='https://unpkg.com/@fullcalendar/list@4.4.0/main.min.js'></script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      height: 'parent',
      // aspectRatio: 2,
      eventLimit: 4,
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
      defaultView: 'dayGridMonth',
      defaultDate: new Date(),
      header: {
        center: 'timeGridWeek,dayGridMonth',
        left: 'title',
        right: 'prev,next today'
      },
      buttonText: {
        today:    'Today',
        month:    'Month',
        week:     'Week',
        list:     'List'
      },
      selectable: true,
      events: [
        @foreach($appointments as $appointment)
          {
              title : '{{ $appointment->first_name . ' ' . $appointment->last_name }}',
              start : '{{ date("Y-m-d", strtotime($appointment->slot_date))."T".$appointment->slot_time }}',
          },
        @endforeach
      ]
    });

    calendar.render();
  });
</script>
@endsection