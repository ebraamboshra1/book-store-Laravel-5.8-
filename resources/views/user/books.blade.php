@extends('layouts.userlayout')
@section('content')

<div class="row" style="margin-top:20px;">
@foreach($book as $b)


<div class="col-lg-4 bg-danger" style="width:200px;height:300px;margin:10px;background:Url('{{$b->img}}')">
 <div style="margin-top:40%;color:#FFFFFF">
 <center><lable>{{$b->name}}</lable></center><br><br>
 <center><lable>{{$b->Description}}</label></center><br><br>
    <center><lable>{{$b->auther_name}}</lable></center><br><br>
  
    <center><a href="/buy/{{$b->id}}" class="btn">Buy</a><center>
  
 </div>
 
</div>

@endforeach
</div>

@endSection