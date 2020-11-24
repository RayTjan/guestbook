@extends('layout/main')

@section('judul','Schedule')

@section('isi_utama')
<div class="main">
  <link href="css/style.css" rel="stylesheet">

  {{-- <style>
    html{
      background-color: rebeccapurple;
    }
  </style> --}}
  <div class="scheduleTableBG">
    <div class="sides">
      <h1>SCHEDULE</h1>
      <table class="table table-bordered scheduletable">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Day</th>
            <th scope="col">Time</th>
            <th scope="col">Lesson</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td rowspan="2">Monday</td>
          <td>08:20:00 - 10:50:00</td>
          <td>Mobile Application Development</td>
        </tr>
        <tr>
          <td>13:20:00 - 15:50:00</td>
          <td>Discrete Mathematics</td>
        </tr>
        <tr>
          <td rowspan="2">Tuesday</td>
          <td>09:10:00 - 11:40:00</td>
          <td>Game Design</td>
        </tr>
        <tr>
          <td>13:20:00 - 16:40:00</td>
          <td>Database</td>
        </tr>
        <tr>
          <td>Wednesday</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Thursday</td>
          <td>10:50:00 - 13:20:00</td>
          <td>Mobile Application Development</td>
        </tr>
        <tr>
          <td rowspan="2">Friday</td>
          <td>07:30:00 - 10:50:00</td>
          <td>Web Development</td>
        </tr>
        <tr>
          <td>13:20:00 - 15:50:00</td>
          <td>Becoming Indonesia</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="BGschedBottom">
    <div class="sides schooldesc">
      <div class="school">
        <img src="{{asset('images/potato.png')}}" class="float-left">  
      </div>
      <div class="schoolText">
        <br>
        <p><strong>I like potato</strong></p>
        <p>got a problem with that?</p>
        <br>
      </div>
    </div>
  </div>

</div>
@endsection