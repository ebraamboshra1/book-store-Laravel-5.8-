@extends('layouts.adminlayout')
@section('content')

<h4 style="margin-left:20%">Add Admin</h4>
<br><br>
<form action="admin-create" method="POST" role="form" enctype="multipart/form">
{{ csrf_field() }}
<div>
        <div>
        <div>
            <label class="col-md-2" for="full_name" >Full name</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" style="width:30%;" data-val-required="The full name is required" id="full_name" name="full_name" type="text">
                <span class="field-validation-valid text-danger" data-valmsg-for="full_name" data-valmsg-replace="true"></span>
            </div>
        </div>
        <br><br><br>
        <div>
        <div>
            <label class="col-md-2" for="email" >Email address</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" style="width:30%;" data-val-email="Invalid Email Address" data-val-required="The email address is required" id="email" name="email" type="email">
                <span class="field-validation-valid text-danger" data-valmsg-for="email" data-valmsg-replace="true"></span>
            </div>
        </div>
        <br><br><br>
        <div>
                <label class="col-md-2" for="password">password</label>
                <div class="col-md-10">
                    <input class="form-control text-box single-line" data-val="true" style="width:30%;" data-val-required="The password is required" id="password" name="password" type="password">
                    <span class="field-validation-valid text-danger" data-valmsg-for="password" data-valmsg-replace="true"></span>
                </div>
         </div>
         <br><br><br>
         <div class="form-group">
                <label class="col-md-2" for="confirm password">confirm password</label>
                <div class="col-md-10" style="margin-bottom:10px">
                    <input class="form-control text-box single-line" data-val="true" style="width:30%;" data-val-equalto="passwords not match!" data-val-equalto-other="*.password" id="passwordConfirmation" name="passwordConfirmation" type="password" value="" >
                    <span class="field-validation-valid text-danger" data-valmsg-for="passwordConfirmation" data-valmsg-replace="true"></span>
                </div>
            </div>
            <br><br><br>
         <div>
                <div class="col-md-offset-2 col-md-10">
                  <input type="submit" value="Add" class="btn" style="margin-right:100px;"><br><br>
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