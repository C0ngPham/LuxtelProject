@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header"><h3>{{$title}}</h3></div>

<div class="card-body">

    <div class="row">
        <div  style="margin: 10px;">
            <table>
                <h3>Guest</h3>
                <tr>
                    <th>ID</th>
                  <th>Email</th>
                  <th>Arrival Date</th>
                  <th>Departure Date</th>
                  <th>Room(s)</th>
                  <th>Guest(s)</th>
                  <th>Note</th>
                  <th>Bill($)</th>
                  
                </tr>
                @foreach($guest as $guest)
                <tr>
                    <th>{{$guest->id}}</th>
                    <th>{{$guest->email}}</th>
                    <th>{{$guest->arrival}}</th>
                    <th>{{$guest->departure}}</th>
                    <th>{{$guest->room}}</th>
                    <th>{{$guest->guest}}</th>
                    <th>{{$guest->note}}</th> 
                    <th>{{$guest->cost}}</th> 
                  </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="row">
        <div style="margin: 10px;">
            <table>
                <h3>Premiere</h3>
                <tr>
                    <th>ID</th>
                  <th>Email</th>
                  <th>Arrival Date</th>
                  <th>Departure Date</th>
                  <th>Room(s)</th>
                  <th>Guest(s)</th>
                  <th>Note</th>
                  <th>Bill($)</th>
                </tr>
                @foreach($premiere as $premiere)
                <tr>
                    <th>{{$premiere->id}}</th>
                    <th>{{$premiere->email}}</th>
                    <th>{{$premiere->arrival}}</th>
                    <th>{{$premiere->departure}}</th>
                    <th>{{$premiere->room}}</th>
                    <th>{{$premiere->guest}}</th>
                    <th>{{$premiere->note}}</th>
                    <th>{{$premiere->cost}}</th> 
                  </tr>
                @endforeach
            </table>
        </div>
    </div>
    
    
    <div class="row">
        <div style="margin: 10px;">
            <table>
                <h3>Suite</h3>
                <tr>
                    <th>ID</th>
                  <th>Email</th>
                  <th>Arrival Date</th>
                  <th>Departure Date</th>
                  <th>Room(s)</th>
                  <th>Guest(s)</th>
                  <th>Note</th>
                  <th>Bill($)</th>
                </tr>
                @foreach($suite as $suite)
                <tr>
                    <th>{{$suite->id}}</th>
                    <th>{{$suite->email}}</th>
                    <th>{{$suite->arrival}}</th>
                    <th>{{$suite->departure}}</th>
                    <th>{{$suite->room}}</th>
                    <th>{{$suite->guest}}</th>
                    <th>{{$suite->note}}</th>
                    <th>{{$suite->cost}}</th>
                  </tr>
                @endforeach
            </table>
        </div>
    </div>



</div>
</div>
</div>
</div>
</div>
@endsection