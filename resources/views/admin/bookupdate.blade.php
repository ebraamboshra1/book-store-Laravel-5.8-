@extends('layouts.adminlayout')
@section('content')

<h4 style="margin-left:20%">Edit Book</h4>
<br><br>
<form action="/book-edit/{{$book->id}}" method="GET" role="form" enctype="multipart/form">
{{ csrf_field() }}
<div>
        <div>
        <div>
            <label class="col-md-2" for="name" >Book name</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" style="width:30%;" data-val-required="The full name is required" id="name" name="name" type="text" value="{{$book->name}}">
            </div>
        </div>
        <br><br><br>
        <div>
        <div>
            <label class="col-md-2" for="Description" >Description</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" style="width:30%;" data-val-email="Invalid Email Address" data-val-required="The email address is required" id="Description" name="Description" type="text" value="{{$book->Description}}">
            </div>
        </div>
        <br><br><br>
        <div>
            <label class="col-md-2" for="image" >image</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" style="width:30%;" data-val-email="Invalid Email Address" data-val-required="The email address is required" id="img" name="img" type="text" value="{{$book->img}}">
            </div>
        </div>
        <br><br><br>
        <div>
            <label class="col-md-2" for="quantity" >quantity</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" style="width:30%;" data-val-email="Invalid Email Address" data-val-required="The email address is required" id="quantity" name="quantity" type="number" value="{{$book->quantity}}">
            </div>
        </div>
        <br><br><br>
        <div>
            <label class="col-md-2" for="price" >price</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" style="width:30%;" data-val-email="Invalid Email Address" data-val-required="The email address is required" id="price" name="price" type="number" step="0.01" value="{{$book->price}}">
            </div>
        </div>
        <br><br><br>
        <div>
            <label class="col-md-2" for="auther_name" >Auther Name</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" style="width:30%;" data-val-email="Invalid Email Address" data-val-required="The email address is required" id="auther_name" name="auther_name" type="text" value="{{$book->auther_name}}">
            </div>
        </div>
        <br><br><br>
        
         <div>
                <div class="col-md-offset-2 col-md-10">
                  <input type="submit" value="Edit" class="btn" style="margin-right:100px;"><br><br>
                </div>
            </div>
            <br>
</div>
</form>
<br><br>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@endSection