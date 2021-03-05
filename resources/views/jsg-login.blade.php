@extends('jsg-login0')
@extends('co-version')

@section('login-css')
    <link rel="stylesheet" href="../css/jsg-login.css">
@endsection
@section('login-main')
        <div class="main-box d-flex">
            <div class="login-pic col-6">
                <img src="../images/jsg-pic/Mask Group 104@2x.png" alt="">
            </div>
            <div class="login col-6">
                <div class="logo-email">
                    <p class="login-txt">EMAIL ADDRESS</p>
                    <input type="text" class="input-email">
                </div>
                <div class="login-pwd">
                    <p class="login-txt">PASSWORD</p>
                    <input type="text" class="input-pwd">
                </div>
                <div class="agree-checked d-flex">
                    <label for="s" class="d-flex">
                        <input type="checkbox" name="" id="s"><p>I agree to the <b>terms of services</b></p>
                    </label>

                    <a href="javascript:;">
                        <p>Forget Password</p>
                    </a>
                </div>
                <div class="login-btn d-flex">
                    <button class="login-in btn">Login</button>
                    <button class="sign-up btn">Sign up</button>
                </div>
            </div>
            <!--  -->
            <div class="jsg-boy">
                <img src="../images/jsg-icon/boy-shoping@2x.png" alt="">
            </div>
            <div class="jsg-girl">
                <img src="../images/jsg-icon/girl-shoping@2x.png" alt="">
            </div>
            <div class="jsg-leaf">
                <img src="../images/jsg-icon/leaf@2x.png" alt="">
            </div>
        </div>
@endsection
