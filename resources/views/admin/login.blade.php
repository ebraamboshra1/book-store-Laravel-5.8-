@extends('layouts.adminlayout')
@section('content')

<h4 style="margin-left:20%">Login</h4>
<br><br>
<form action="admin-login" method="POST" role="form" enctype="multipart/form">
{{ csrf_field() }}
<div>
        <div style="margin-top:15px;">
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
         <br><br><br><br>
         <div>
                <div class="col-md-offset-2 col-md-10">
                  <input type="submit" value="Log in" class="btn" style="margin-right:100px;"><br><br>
                  
                </div>
            </div>
            <a href="/register" style="color:#FFFFFF;margin-left:12%;">Don't have account Signup now?</a>
</div>
</form>

@endSection