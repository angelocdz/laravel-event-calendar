<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
  <title>Event Calendar</title>
</head>

<body>
  <div class="container">

    <div class="main-nav">
      <h1>Event Calendar</h1>
    </div>

    <div class="two-columns">
      <div class="event-container">
        <form id="form" action="{{action('EventController@store')}}" method="POST">
          {{ csrf_field() }}
          <label for="">Event</label>
          <input type="text" class="form-control" name="title" placeholder="Event Name" />

          <label for="">Color</label>
          <input type="color" class="form-control" name="color" />

          <label for="">Start Date of Event</label>
          <input type="datetime-local" class="form-control" name="start_date" class="date" />

          <label for="">End Date of Event</label>
          <input type="datetime-local" class="form-control" name="end_date" class="date">

          <input type="submit" name="submit" class="btn" value="Save" />
        </form>

        @if(count($errors) > 0)
        <div class="alert-error">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif
        @if(\Session::has('success'))
        <div id="hide-alert-success" class="alert-success">
          <p>{{ \Session::get('success') }}</p>
        </div>
        @endif
      </div>

      <div class="calendar-container">
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
      </div>
    </div>

  </div>

</body>

</html>
