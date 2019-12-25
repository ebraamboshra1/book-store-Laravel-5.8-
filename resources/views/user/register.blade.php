@extends('layouts.userlayout')
@section('content')
<h4 style="margin-left:20%">Register</h4>
<br><br>
<form action="register-user" method="POST" role="form" enctype="multipart/form">
{{ csrf_field() }}
<div>
        <div style="margin-top:15px;">
            <label class="col-md-2" for="first_name" >First name</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" style="width:30%;" data-val-required="The first name is required" id="first_name" name="first_name" type="text">
                <span class="field-validation-valid text-danger" data-valmsg-for="first_name" data-valmsg-replace="true"></span>
            </div>
        </div>
        <br><br><br>
        <div>
        <div>
            <label class="col-md-2" for="last_name" >Last name</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" style="width:30%;" data-val-required="The last name is required" id="last_name" name="last_name" type="text">
                <span class="field-validation-valid text-danger" data-valmsg-for="last_name" data-valmsg-replace="true"></span>
            </div>
        </div>
        <br><br><br>
        <div class="form-group">
                <label class="col-md-2" for="Phone">Phone</label>
                <div class="col-md-10"  style="margin-bottom:10px">
                    <input class="form-control text-box single-line" data-val="true" style="width:30%;" data-val-phone="Invalid Phone Number" id="phone" name="phone" type="tel">
                    <span class="field-validation-valid text-danger" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
                </div>
            </div>
            <br><br>
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
                  <input type="submit" value="Register" class="btn" style="margin-right:100px;"><br><br>
                  
                </div>
            </div>
            <a href="/register" style="color:#FFFFFF;margin-left:12%;">Already have account Login now?</a>
</div>
</form>
<br><br>
@endSection