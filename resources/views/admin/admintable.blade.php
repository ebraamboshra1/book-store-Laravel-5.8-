@extends('layouts.adminlayout')
@section('content')
<a href="/admin-c" style="margin-left:10px;">Add new<a>
    <br> <br>
<table class="table table-responsive table-striped">
    <thead class="thead-dark">
        <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($admin as $a)
        <tr>
        <th scope="row">{{$a->id}}</th>
        <td style="color:#000000;">{{$a->full_name}}</td>
        <td style="color:#000000;">{{$a->email}}</td>
        <td style="color:#000000;">{{$a->password}}</td>
        <td style="color:#000000;"><center><a href="/admin-update/{{$a->id}}">Edit</a>  || <a href="/admin-delete/{{$a->id}}">Delete</a></center></td>
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