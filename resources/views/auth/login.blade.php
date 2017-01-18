<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <link href="../assets/font/Titillium/Titillium-Light.otf" rel="stylesheet" type="text/css" charset="utf-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 

    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../assets/sass/custom.min.css" rel="stylesheet">
    <link href="../assets/sass/custom.min.css" rel="stylesheet">

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">



    </head>
<body>

<style>
    /*
 *
 * Awesome Flat Login Form
 * http://lunarpixel.deviantart.com/
 * Copyright 2014, LunarPixel
 *
 */

    @import "http://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css";
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700);

    body {
        font: 13px/20px "Titillium" , sans-serif;
        color: #a7a599;
        background: #31302b;
    }

    /* === Form === */
    .form {
        width: 100%;
        margin-top: 30px;
    }

    .form .field {
        position: relative;
        margin: 0 50px;

    }

    .form .field i {
        font-size: 14px;
        left: 0px;
        top: 0px;
        position: absolute;
        height: 44px;
        width: 44px;
        color: #f7f3eb;
        background: #676056;
        text-align: center;
        line-height: 44px;
        transition: all 0.3s ease-out;
        pointer-events: none;
    }

    /* === Logo === */
    .logo {
        margin: 100px auto 30px auto;
    }

    /* === Login === */
    .login {
        position: relative;
        margin: 0 auto;
        width: 370px;
        height: 315px;
        background: white;
        border-radius: 3px;
    }

    .login:before {
        content: '';
        position: absolute;
        top: -8px;
        right: -8px;
        bottom: -8px;
        left: -8px;
        z-index: -1;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 4px;
    }

    .login h1 {
        line-height: 55px;
        font-size: 15px;
        font-weight: bold;
        font-family: 'Titillium', sans-serif;
        text-transform: uppercase;
        color: #fff;
        text-align: center;
        background: #f2672e;

        -webkit-border-top-left-radius: 3px;
        -webkit-border-top-right-radius: 3px;
        -moz-border-radius-topleft: 3px;
        -moz-border-radius-topright: 3px;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .login p:first-child {
        margin-top: 30px;
    }

    .login p.remember {
        float: left;
    }

    .login p.remember label {
        color: #a7a599;
        font-size: 12px;
        cursor: pointer;
    }

    .login p.submit {
        text-align: center;
    }

    .login p.forgot {
        float: right;
        margin-right: 50px;
    }

    .login p.forgot a {
        color: #a7a599;
        font-size: 12px;
        text-decoration: none;
        font-style: italic;
        transition: all 0.3s ease-out;
    }

    .login p.forgot a:hover {
        color: #f2672e;
    }

    /* === Input Form === */
    ::-webkit-input-placeholder {
        color: #ded9cf;
        font-family:'Open Sans';
    }

    :-moz-placeholder {
        color: #ded9cf !important;
        font-family:'Open Sans';
    }

    .form input[type=text],
    .form input[type=password] {
        font-family: 'Titillium', sans-serif;
        font-size: 12px;
        font-weight: 400;
        padding: 10px 15px 10px 55px;
        position: relative;
        width: 100%;
        height: 24px;
        color: #676056;
        border: none;
        background: #f7f3eb;
        color: #777;
        transition: color 0.3s ease-out;
        height: 44px;
    }

    .form input[type=text] {
        margin-bottom: 15px;
    }

    .form input[type=text]:hover ~ i,
    .form input[type=password]:hover ~ i {
        color: #ded9cf;
    }

    .form input[type=text]:focus ~ i,
    .form input[type=password]:focus ~ i {
        color: #f2672e;
    }

    .form input[type=text]:focus,
    .form input[type=password]:focus,
    .form button[type=submit]:focus {
        outline: none;
    }

    .form input[type=submit] {
        margin-top: 15px;
        width: 270px;
        text-align: center;
        font-size: 14px;
        font-family: 'Open Sans',sans-serif;
        font-weight: bold;
        padding: 12px 0;
        letter-spacing: 0;

        -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
        -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
        box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);

        color: #fff;
        background-color: #f2672e;
        text-shadow: none;
        text-transform: uppercase;
        border: none;
        cursor: pointer;
        position: relative;
        margin-bottom: 20px;
        -webkit-animation: shadowFadeOut 0.4s;
        -moz-animation: shadowFadeOut 0.4s;
    }

    .form input[type=submit]:hover,input[type=submit]:focus{
        color: #fff;
        -webkit-box-shadow: inset 0px 46px 0px 0px rgba(204,86,15,1);
        -moz-box-shadow:    inset 0px 46px 0px 0px rgba(204,86,15,1);
        box-shadow:         inset 0px 46px 0px 0px rgba(204,86,15,1);
        -webkit-animation: shadowFade 0.4s;
        -moz-animation: shadowFade 0.4s;
    }

    @keyframes shadowFade {
        0% {
            -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
            -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
            box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);
            color: #fff;
        }
        100% {
            -webkit-box-shadow: inset 0px 46px 0px 0px rgba(204,86,15,1);
            -moz-box-shadow:    inset 0px 46px 0px 0px rgba(204,86,15,1);
            box-shadow:         inset 0px 46px 0px 0px rgba(204,86,15,1);
            color: #fff;
        }
    }

    @keyframes shadowFadeOut {
        0% {
            -webkit-box-shadow: inset 0px 46px 0px 0px rgba(204,86,15,1);
            -moz-box-shadow:    inset 0px 46px 0px 0px rgba(204,86,15,1);
            box-shadow:         inset 0px 46px 0px 0px rgba(204,86,15,1);
            color: #fff;
        }
        100% {
            -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
            -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
            box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);
            color: #fff;
        }
    }

    @-webkit-keyframes shadowFade {
        0% {
            -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
            -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
            box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);
            color: #fff;
        }
        100% {
            -webkit-box-shadow: inset 0px 46px 0px 0px rgba(204,86,15,1);
            -moz-box-shadow:    inset 0px 46px 0px 0px rgba(204,86,15,1);
            box-shadow:         inset 0px 46px 0px 0px rgba(204,86,15,1);
            color: #fff;
        }
    }

    @-webkit-keyframes shadowFadeOut {
        0% {
            -webkit-box-shadow: inset 0px 46px 0px 0px rgba(204,86,15,1);
            -moz-box-shadow:    inset 0px 46px 0px 0px rgba(204,86,15,1);
            box-shadow:         inset 0px 46px 0px 0px rgba(204,86,15,1);
            color: #fff;
        }
        100% {
            -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
            -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
            box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);
            color: #fff;
        }
    }

    @-moz-keyframes shadowFade {
        0% {
            -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
            -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
            box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);
            color: #fff;
        }
        100% {
            -webkit-box-shadow: inset 0px 46px 0px 0px rgba(204,86,15,1);
            -moz-box-shadow:    inset 0px 46px 0px 0px rgba(204,86,15,1);
            box-shadow:         inset 0px 46px 0px 0px rgba(204,86,15,1);
            color: #fff;
        }
    }

    @-moz-keyframes shadowFadeOut {
        0% {
            -webkit-box-shadow: inset 0px 44px 0px 0px rgba(204,86,15,1);
            -moz-box-shadow:    inset 0px 44px 0px 0px rgba(204,86,15,1);
            box-shadow:         inset 0px 44px 0px 0px rgba(204,86,15,1);
            color: #fff;
        }
        100% {
            -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
            -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
            box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);
            color: #fff;
        }
    }

    .form input[type="checkbox"] {
        display:none;
    }

    .form input[type="checkbox"] + label span {
        display:inline-block;
        width:16px;
        height:16px;
        margin: -2px 4px 0 50px;
        vertical-align:middle;
        background:url("https://www.dropbox.com/sh/3kmitwavpcm721g/rDv1UvRmhG/checkbox.png?dl=1") left top no-repeat;
        cursor:pointer;
    }
    .form input[type="checkbox"]:checked + label span {
        background:url("https://www.dropbox.com/sh/3kmitwavpcm721g/rDv1UvRmhG/checkbox.png?dl=1") -16px top no-repeat;
    }

    /* === Copyright === */
    .copyright {
        margin-top: 30px;
        text-align: center;
    }

    .copyright p, a {
        color: #828078;
        font-size: 12px;
        text-decoration: none;
        transition: color 0.3s ease-out;
    }

</style>


<div class="logo"></div>
<div class="login"> <!-- Login -->
    <h1>Login to your account</h1>

    <form class="form" method="post" action="{{url('login')}}">
        {{csrf_field()}}

        <p class="field">
            <input type="text" name="name" placeholder="Username" required/>
            <i class="fa fa-user"></i>
        </p>

        <p class="field">
            <input type="password" name="password" placeholder="Password" required/>
            <i class="fa fa-lock"></i>
        </p>

        <p class="submit"><input type="submit" name="commit" value="Login"></p>

        <p class="remember">
            <input type="checkbox" id="remember" name="remember" />
            <label for="remember"><span></span>Remember Me</label>
        </p>

        <p class="forgot">
            <a href="#">Forgot Password?</a>
        </p>

    </form>
</div> <!--/ Login-->

</body>
</html>



