@extends('layouts.userlayout')
@section('content')

<article style="padding-top:150px"> 
      <h3 class="heading">Welcome to Book Store</h3>
      <p>Here you can buy or borrow books, as we own many books in all fields (medicine, science, coding, literature, arts, etc.).</p>
      <p class="font-x1 uppercase bold">We Wish you find what you looking for</p>
      @if(!Auth::Check())
      <footer><a class="btn" href="/login">Login now</a></footer>
      @else
      <p class="font-x1 uppercase bold">Welcome {{$user->first_name}} {{$user->last_name}}</p> 
      @endif
  </article>

@endSection