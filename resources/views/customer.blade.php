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
                      <th>Customer Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                    </tr>
                    @foreach($customer as $customer)
                    <tr>
                        <th>{{$customer->name}}</th>
                        <th>{{$customer->phone}}</th>
                        <th>{{$customer->email}}</th>
                      </tr>
                    @endforeach
                </table>
            </div>
        </div>
    
        
        
    
    
    
    </div>
</div>

@endsection