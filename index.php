<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    /* index design */

    .container,
    .row,
    .h2 {
        text-align: center;
    }

    .imglogo {
        margin: auto;
        padding: 5% 5%;
        width: 70%;
        
    }
    .login-form-1 {
        padding: 5%;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }

    .login-form-1 {
        background: linear-gradient(-45deg, #f9c449, #e73c7e, #3c4cad, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    .login-form-1 h3 {
        text-align: center;
        color: white;
    }

    .login-form-2 {
        padding: 5%;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }

    .login-form-2 {
        background: linear-gradient(-45deg, #f36f38, #ef4648, #f99e4c, #cc2a49);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    .login-form-2 h3 {
        text-align: center;
        color: white;
    }

    .login-container form {
        padding: 10%;
    }

    .btnSubmit {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        border: none;
        cursor: pointer;
    }

    .login-form-1 .btnSubmit {
        font-weight: 600;
        color: white;
        background-color: #240e8b;
    }

    .login-form-2 .btnSubmit {
        font-weight: 600;
        color: indigo;
        background-color: #fff;
    }

    .login-form-2 .ForgetPwd {
        color: #fff;
        font-weight: 600;
        text-decoration: underline;
    }

    .login-form-1 .ForgetPwd {
        color: white;
        font-weight: 600;
        text-decoration: underline;
    }

    .login-form-1 .newuser {
        color: #23d5ab;
        font-weight: 600;
        text-decoration: underline;
    }
}


* {
	padding: 0;
}
body {
	font-family: 'Poppins', sans-serif;
}
.wrapper {
	width: 1170px;
	margin: auto;
}
header {
	background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://tse4.mm.bing.net/th?id=OIP.zRQrbjdimbH_T5IquPsrNQHaEu&pid=Api&P=0&w=239&h=153);
	height: 180vh;
	background-position: center center;
	position: relative;
}
.nav-area {
	float: right;
	list-style: none;
	margin-top: 10px;
}
.nav-area li {
	display: inline-block;
}
.nav-area li a {
	color: #fff;
	text-decoration: none;
	padding: 5px 10px;
	font-family: poppins;
	font-size: 16px;
	text-transform: uppercase;
}
.nav-area li a:hover {
	background: #fff;
	color: #333;
}
.logo {
	float: left;
}
.logo img {
	width: 30%;
	padding: 15px 0;
}
.welcome-text {
	position: absolute;
	width: 600px;
	height: 300px;
	margin: 5% 30%;
	text-align: center;
}
.welcome-text h1 {
	text-align: center;
	color: #fff;
	text-transform: uppercase;
	font-size: 60px;
}
.welcome-text h1 span {
	color: #00fecb;
}
.welcome-text a {
	border: 1px solid #fff;
	padding: 5px 15px;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 14px;
	display: inline-block;
	color: #fff;
}
.welcome-text a:hover {
	background: #fff;
	color: #333;
}
/*resposive*/

@media (max-width:600px) {
	.wrapper {
		width: 100%;
	}
	.logo {
		float: left;
		width: 70%;
		text-align: center;
		margin: auto;
	}
	img {
		width:100%;
	}
	.nav-area {
		float: none;
	}
	.nav-area li a {
		padding: 5px;
		font-size: 11px;
	}
	.nav-area {
		text-align: center;
	}
	.welcome-text {
		width: 100%;
		height: auto;
		margin: 30%;
	}
	.welcome-text h1 {
		font-size: 30px;
	}
}


/* Dashboard Design */
</style>



<body>
    <header>
        <div class="wrapper">
            <div class="logo">
                <img src="https://swecha.org/sites/default/files/styles/image_card/public/2020-06/12440262_631208043697894_8825607645865489741_o.png?itok=tFnQ--TY" alt="">
            </div>
    <ul class="nav-area">
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Services</a></li>
    </ul>
    </div>
    
    <?php
    $emailmsg="";
    $pasdmsg="";
    $msg="";

    $ademailmsg="";
    $adpasdmsg="";


    if(!empty($_REQUEST['ademailmsg'])){
        $ademailmsg=$_REQUEST['ademailmsg'];
    }

    if(!empty($_REQUEST['adpasdmsg'])){
        $adpasdmsg=$_REQUEST['adpasdmsg'];
    }

    if(!empty($_REQUEST['emailmsg'])){
        $emailmsg=$_REQUEST['emailmsg'];
    }

    if(!empty($_REQUEST['pasdmsg'])){
    $pasdmsg=$_REQUEST['pasdmsg'];
    }

    if(!empty($_REQUEST['msg'])){
        $msg=$_REQUEST['msg'];
    }

    ?>



    <div class="container login-container">
        <div class="row"><img class="imglogo" src="https://tse1.mm.bing.net/th?id=OIP.L4I5vqIYCm_oPkRj_VQHzgHaCo&pid=Api&P=0&w=452&h=162" /></div>
        <div class="row">
            <h4><?php echo $msg?></h4>
        </div>
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Student/Teacher Login</h3>
                <form action="login_server_page.php" method="get">
                    <div class="form-group">
                        <label>Email</label>
                        <Label style="color:red">*</label>
                        <input type="text" name="login_email" placeholder="Your Email *"
                            value="" />
                    </div>
                    <Label style="color:red"><?php echo $emailmsg?></label>
                    <div class="form-group">
                        <label>Password</label>
                        <Label style="color:red">*</label>
                        <input type="password" name="login_pasword" placeholder="Your Password *"
                            value="" />
                    </div>
                    <Label style="color:red"><?php echo $pasdmsg?></label>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd" value="Login">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <a href="newuser.html" class="newuser" >Create account</a>
                    </div>
                </form>
            </div>

            <div class="col-md-6 login-form-2">
                <h3>Admin Login</h3>
                <form action="loginadmin_server_page.php" method="get">
                    <div class="form-group">
                        <label>Email</label>
                        <Label style="color:red">*</label>
                        <input type="text" name="login_email" placeholder="Your Email *"
                            value="" />
                    </div>
                    <Label style="color:red"><?php echo $ademailmsg?></label>
                    <div class="form-group">
                        <label>Password</label>
                        <Label style="color:red">*</label>
                        <input type="password" name="login_pasword" placeholder="Your Password *"
                            value="" />
                    </div>
                    <Label style="color:red"><?php echo $adpasdmsg?></label>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">

                        <a href="#" class="ForgetPwd" value="Login">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="welcome-text">
        <a href="#">Contact US</a>
        <Label>dheeraj</label>
    </div>

    <div><label> DHEERAJ VENU</label></div>
    </header>

    <script src="" async defer></script>
</body>

</html>