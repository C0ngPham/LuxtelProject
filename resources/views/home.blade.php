@extends('layouts.app')



@section('content')

</div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2 >Reservation Form</h2></div>

                    <div class="card-body">
                        
          <form action="payment" method="POST">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="type">Room Option</label>
                    <select name="type" id="type" onchange="showPrice()">
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
                      <input type="text" class="form-control" name="arrival" id="arrival_date" autocomplete="off" onchange="showPrice()"/>
                      </div>
                  </div>
  
                  <div class="col-sm-6 form-group">
                      <label for="">Departure Date</label>
                      <div style="color:red">{{$errors->first('departure')}}</div>
                      <div style="position: relative;">
                      <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                      <input type="text" class="form-control" name="departure"id="departure_date" autocomplete="off" onchange="showPrice()"/>
                      </div>
                  </div>
                  </div>
  
                  <div class="row">
                  <div class="col-md-6 form-group">
                      <label for="room">Number of room</label>
                      <div style="color:red">{{$errors->first('room')}}</div>
                      <select id="room" name="room" class="form-control" onchange="showPrice()">
                      <option value="1">1 Room</option>
                      <option value="2">2 Rooms</option>
                      <option value="3">3 Rooms</option>
                      <option value="4">4 Rooms</option>
                      </select>
                  </div>
  
                  <div class="col-md-6 form-group">
                      <label for="room">Guests (Max 16 guest/room)</label>
                      <div style="color:red">{{$errors->first('guest')}}</div>
                      <input type="number" id="guest" name="guest" class="form-control" onchange="showPrice()" value="1" />
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
                      
                      <input type="hidden" id="cost" name="cost" class="form-control"/>
                     <input id="button" onclick="return confirm('Are you sure to order?');" type="submit" value="Reserve Now" class="btn btn-primary" />
   
                      
                   </div>
                   <h2 id="price" >$100</h2>
                   </div>
                   <h3 id="alert" style="color:red"></h3>
                   <p id = "cal"></p>
                  @csrf
              </form>

                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script> 
        function showPrice() {
        var vroom = parseInt(document.getElementById("room").value);
        var vguest = parseInt(document.getElementById("guest").value);
        var button = document.getElementById("button");
      
        var varr = parseInt(document.getElementById("arrival_date").value.split("/")[1]);
        var m_varr = parseInt(document.getElementById("arrival_date").value.split("/")[0]);
        var y_varr = parseInt(document.getElementById("arrival_date").value.split("/")[2]);
      
        var vdpt = parseInt(document.getElementById("departure_date").value.split("/")[1]);
        var m_vdpt = parseInt(document.getElementById("departure_date").value.split("/")[0]);
        var y_vdpt = parseInt(document.getElementById("departure_date").value.split("/")[2]);
        
        var rtype = parseInt(document.getElementById("type").value);

        


        var ldate = new Date(y_varr,m_varr,0).getDate();
        var range = vdpt - varr;
        var ss = 100;
        var mrange = m_vdpt - m_varr;
        var vprice = 0;
        if (rtype = 1){
            ss = 100;
            vprice = 100;
        }else if (rtype = 2){
            ss = 200;
            vprice = 200;
        }else if (rtype = 3){
            ss = 300;
            vprice = 300;
        }

        document.getElementById("price").innerHTML = "$" + vprice;
        
        if (isNaN(range)){
          document.getElementById("price").innerHTML = ""
          button.style.display = "none";
          document.getElementById("alert").innerHTML = "Date fields are blank!";
        }
        else if (m_vdpt < m_varr || y_vdpt < y_varr){
          document.getElementById("price").innerHTML = ""
          button.style.display = "none";
          document.getElementById("alert").innerHTML = "Departure Date should after Arrival Date!";
        }
        else if(m_vdpt == m_varr && vdpt <= varr){
          document.getElementById("price").innerHTML = ""
          button.style.display = "none";
          document.getElementById("alert").innerHTML = "Departure Date should after Arrival Date!";
      
        }
        else if (vguest < 1) {
          document.getElementById("price").innerHTML = ""
          button.style.display = "none";
          document.getElementById("alert").innerHTML = "Number of guest have to be greater than 0!";
        }
        else if (vguest > vroom*12){
          document.getElementById("price").innerHTML = ""
          button.style.display = "none";
          document.getElementById("alert").innerHTML = "Maximum number of guests per room is 12!";
        }
      
        else{
          if (m_vdpt > m_varr ){
            range = ldate - varr + vdpt;
      
            if (range > 30|| mrange > 1 ){
              document.getElementById("price").innerHTML = ""
              button.style.display = "none";
              document.getElementById("alert").innerHTML = "The maximum rental day is 30";
            }
            else{
      
              button.style.display = "block";
              document.getElementById("alert").innerHTML = "";
              if (vguest <= vroom*(rtype +1)) {
                vprice = ss*vroom*range ;
              } else {
                vprice = (ss*vroom + (50 + (rtype-1)*25)*vguest - (50 + (rtype-1)*25)*vroom)*range;
              }
              document.getElementById("price").value = vprice;
              document.getElementById("price").innerHTML = "$" + vprice;
            }
          }
          else{
      
            button.style.display = "block";
            document.getElementById("alert").innerHTML = "";
            if (vguest <= vroom*(rtype +1)) {
              vprice = ss*vroom*range ;
            } else {
              vprice = (ss*vroom + (50 + (rtype-1)*25)*vguest - (50 + (rtype-1)*25)*(rtype +1)*vroom)*range;
            }
            document.getElementById("cost").value = vprice;
            document.getElementById("price").innerHTML = "$" + vprice;
          }
          
      
          
        }
      
        
      }
    </script>
     <script src="{{asset('js/main.js')}}"></script>
     {{-- href="{{ asset(' --}}
@endsection
