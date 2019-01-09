<html lang="en">

<head>
    <?php require_once "../allTemplateLayout/login_head.php"; ?>
</head>

<body class="cyan">


<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <form class="login-form" action="../../controller/login.php" method="post">
            <div class="row">
                <div class="input-field col s12 center">
                    <img src="../../resource/images/login-logo.png" alt=""
                         class="circle responsive-img valign profile-image-login">
                    <p class="center login-form-text">Material Design Admin Template</p>
                </div>
            </div>
            <div class="row ">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input name="mail" id="username" type="text">
                    <label for="username" class="center-align">Email/Username</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input name="pass" id="password" type="password">
                    <label for="password">Password</label>
                </div>
            </div>

            <div class="row">

                <div class="input-field col s12 l11 m11 right">
                    <select name="role">
                        <option value="" disabled selected>Select Character</option>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m12 l12  login-text">
                    <input type="checkbox" id="remember-me"/>
                    <label for="remember-me">Remember me</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button type="submit" class="btn waves-effect waves-light col s12">Login</button>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 m6 l6">
                    <p class=" medium-small"><a href="page-register.html">Register Now!</a></p>
                </div>
                <div class="input-field col s6 m6 l6">
                    <p class=" right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a>
                    </p>
                </div>
            </div>

        </form>
    </div>
</div>


<!-- ================================================
  Scripts
  ================================================ -->
<!-- jQuery Library -->
<script type="text/javascript" src="../../resource/js/plugins/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="../../resource/js/materialize.min.js"></script>
<!--prism-->
<script type="text/javascript" src="../../resource/js/plugins/prism/prism.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="../../resource/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="../../resource/js/plugins.min.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="../../resource/js/custom-script.js"></script>




</body>

</html>