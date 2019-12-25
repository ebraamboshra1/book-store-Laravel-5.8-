@extends('layouts.userlayout')
@section('content')

<div class="row" style="margin-top:20px;">
@foreach($book as $b)
<div class="col-lg-4 bg-danger" style="width:300px;height:400px;margin:10px;background:Url('{{$b->img}}')">
 <div style="margin-top:40%">
    <lable>{{$b->name}}</lable><br><br><br>
    <lable>{{$b->Description}}</label><br><br>
    <lable>{{$b->auther_name}}</lable><br><br>
    <form Method="GET" action="buy/{{$b->id}}" >
    <center><input type="submit"  class="btn" value="buy"><center>
    </form>
 </div>
 
</div>
@endforeach
</div>

@endSection