@extends('layouts.adminlayout')
@section('content')
<a href="/book-c" style="margin-left:10px;">Add new<a>
    <br> <br>
<table class="table table-responsive table-striped">
    <thead class="thead-dark">
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Auther Name</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($book as $a)
        <tr>
        <th scope="row">{{$a->id}}</th>
        <td style="color:#000000;">{{$a->name}}</td>
        <td style="color:#000000;">{{$a->Description}}</td>
        <td style="color:#000000;"><img src="{{$a->img}}" style="width:80px;height:120px;"/></td>
        <td style="color:#000000;">{{$a->quantity}}</td>
        <td style="color:#000000;">{{$a->price}}</td>
        <td style="color:#000000;">{{$a->auther_name}}</td>
        <td style="color:#000000;"><center><a href="/book-update/{{$a->id}}">Edit</a>  || <a href="/book-delete/{{$a->id}}">Delete</a></center></td>
        </tr>
        @endforeach
  </tbody>
</table>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@endSection