@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{$title}}</h3></div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="row"></div>
                        <div class="row"></div>
                        <div class="row"></div>
                        <div class="row">
                        </div>
                    
                        <div class="row">
                            <div  style="margin: 10px;">
                                <table>
                                    <tr>
                                      <th>Room ID</th>
                                      <th>Phone</th>
                                      <th>Type</th>
                                      <th>Bed(s)</th>
                                      <th>Guest(s)</th>
                                      <th>Availible</th>
                                    {{-- </tr>
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
                                    @endforeach --}}
                                </table>
                            </div>
                        </div>
                    
                        
                        
                    
                    
                    
                    </div>
                </div>
<div class="card-body">
    <div class="row">
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
  
                  </div>
                  <div class="row">
                  <div class="col-md-6 form-group">
                      <input type="submit" value="Add Room" class="btn btn-primary" />
                  {{-- </div>
                  <h2 id="price" >$100</h2>
                  </div> --}}
              
                  @csrf
              </form>
  
                      </div>
                  </div>
              </div>
          </div>



    </div>
    <div class="row"></div>
</div>
</div>
</div>
</div>
</div>
@endsection