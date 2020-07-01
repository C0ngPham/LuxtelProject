@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header"><h1>Dashboard</h1></div>

                <div class="card-body">
<div class="row">
    <div style="margin: 10px;">
        <table>
            <h3>Guest</h3>
            <tr>
              <th>Customer</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Arrival Date</th>
              <th>Departure Date</th>
              <th>Room(s)</th>
              <th>Guest(s)</th>
              <th>Note</th>
            </tr>
            @foreach($guest as $guest)
            <tr>
                <th>{{$guest->name}}</th>
                <th>{{$guest->phone}}</th>
                <th>{{$guest->email}}</th>
                <th>{{$guest->arrival}}</th>
                <th>{{$guest->departure}}</th>
                <th>{{$guest->room}}</th>
                <th>{{$guest->guest}}</th>
                <th>{{$guest->note}}</th>
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
              <th>Customer</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Arrival Date</th>
              <th>Departure Date</th>
              <th>Room(s)</th>
              <th>Guest(s)</th>
              <th>Note</th>
            </tr>
            @foreach($premiere as $premiere)
            <tr>
                <th>{{$premiere->name}}</th>
                <th>{{$premiere->phone}}</th>
                <th>{{$premiere->email}}</th>
                <th>{{$premiere->arrival}}</th>
                <th>{{$premiere->departure}}</th>
                <th>{{$premiere->room}}</th>
                <th>{{$premiere->guest}}</th>
                <th>{{$premiere->note}}</th>
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
              <th>Customer</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Arrival Date</th>
              <th>Departure Date</th>
              <th>Room(s)</th>
              <th>Guest(s)</th>
              <th>Note</th>
            </tr>
            @foreach($suite as $suite)
            <tr>
                <th>{{$suite->name}}</th>
                <th>{{$suite->phone}}</th>
                <th>{{$suite->email}}</th>
                <th>{{$suite->arrival}}</th>
                <th>{{$suite->departure}}</th>
                <th>{{$suite->room}}</th>
                <th>{{$suite->guest}}</th>
                <th>{{$suite->note}}</th>
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2 >Reservation Form</h2></div>

                    <div class="card-body">
                        
          <form action="booking" method="POST">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="type">Room Option</label>
                    <select name="type" id="type">
                        <option value="1">Guest Room</option>
                        <option value="2">Premiere Room</option>
                        <option value="3">Suite</option>
                    </select>
                </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                  <label for="name">Full Name</label>
                    <div style="color:red">{{$errors->first('name')}} </div>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}"/>


                </div>
                </div>
                <div class="row">
                <div class="col-md-12 form-group">
                    <label for="phone">Phone</label>
                    <div style="color:red">{{$errors->first('phone')}}</div>
                    <input type="tel" name="phone" class="form-control" value="{{old('phone')}}"
                    />
                </div>
                </div>

                <div class="row">
                <div class="col-md-12 form-group">
                    <label for="email">Email</label>
                    <div style="color:red">{{$errors->first('email')}}</div>
                    <input type="email" name="email"value="{{old('email')}}"class="form-control" />
                </div>
                </div>
                <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="">Arrival Date</label>
                    <div style="color:red">{{$errors->first('arrival')}}</div>
                    <div style="position: relative;">
                    <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                    <input type="text" class="form-control" name="arrival"value="{{old('ardate')}}" />
                    </div>
                </div>

                <div class="col-sm-6 form-group">
                    <label for="">Departure Date</label>
                    <div style="color:red">{{$errors->first('departure')}}</div>
                    <div style="position: relative;">
                    <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                    <input type="text" class="form-control" name="departure"value="{{old('dpdate')}}" />
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-6 form-group">
                    <label for="room">Number of room</label>
                    <div style="color:red">{{$errors->first('noroom')}}</div>
                    <select name="room" class="form-control">
                    <option value="1">1 Room</option>
                    <option value="2">2 Rooms</option>
                    <option value="3">3 Rooms</option>
                    <option value="4">4 Rooms</option>
                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label for="room">Guests (Max 8)</label>
                    <div style="color:red">{{$errors->first('noguest')}}</div>
                    <select name="guest" class="form-control">
                        <option value="1">1 Guest</option>
                        <option value="2">2 Guests</option>
                        <option value="3">3 Guests</option>
                        <option value="4">4 Guests</option>
                        <option value="5">5 Guests</option>
                        <option value="6">6 Guests</option>
                        <option value="7">7 Guests</option>
                        <option value="8">8 Guests</option>
                    </select>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Write a Note</label>
                    <div style="color:red">{{$errors->first('note')}}</div>
                    <textarea type="text" name="note" class="form-control" cols="30" rows="8" value="{{old('note')}}"></textarea>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 form-group">
                    <input type="submit" value="Reserve Now" class="btn btn-primary" />
                </div>
                </div>

                @csrf
            </form>

                    </div>
                </div>
            </div>
        </div>
        
    </div>


@endsection
