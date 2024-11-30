
<!DOCTYPE html>
<html class="loading bordered-layout" lang="pt-br" data-layout="bordered-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
<meta name="description" content="Painel de gerenciamento vpn">
<meta name="keywords" content="vpn, ssh, user, servidor">
<meta name="author" content="crazy">
<title>EMPRESA</title>
<link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/animate/animate.min.css">
<link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css">
<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
<link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
<link rel="stylesheet" type="text/css" href="../app-assets/css/themes/bordered-layout.css">
<link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.css">
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/form-validation.css">
<link rel="stylesheet" type="text/css" href="../app-assets/css/pages/authentication.css">
<!-- END: Page CSS-->
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<!-- END: Custom CSS-->
</head>
<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
<style>
@media (max-width: 320px) {
.reduzcel{
max-width:90%;
}
}
</style>
<section id="wrapper">
<!-- BEGIN: Content-->
<div class="app-content content ">
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
<div class="content-header row">
</div>
<div class="content-body">
<div class="auth-wrapper auth-basic px-2">
<div class="auth-inner my-2">
<!-- Login basic -->
<div class="card mb-0">
<div class="card-body">
<h2 class="text-primary text-center"><a class="nav-link nav-link-style"><b>EMPRESA</b></h2></a>
<br>
<div align="center" class="login-logo">
<a ><img src="../app-assets/images/pages/Tempo.gif" width="180" height="295" class="reduzcel" border="0"></a>
</div>
<!-- /.login-logo -->
<div align="center" class="login-box-body">
<p class="login-box-msg">Tempo de inatividade expirou!<br>Favor entrar com o usuário novamente<br>para realizar nova <b class="text-primary"> sessão</b><b>!</b></p>
<form action="validacao.php" method="post">
<div class="col-12">
<div class="mb-1"></div>
</div>
<a href="../index.php" class="btn btn-primary btn-block"><b>Voltar</b></a>
<br>
<br><br>
<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light mt-5">
<div class="text-center">
<p class="clearfix blue-grey lighten-2 mb-0">
<span class="center">

<a class="text-bold-800 " href="#" target="_blank">EMPRESA&copy; <script>
document.write(new Date().getFullYear())
</script>.</a><br>Todos os direitos reservados.<br> SEU IP:</span>
<script>

function myIP() {
    if (window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
    else xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

    xmlhttp.open("GET","http://api.hostip.info/get_html.php",false);
    xmlhttp.send();

    hostipInfo = xmlhttp.responseText.split("\n");

    for (i=0; hostipInfo.length >= i; i++) {
        ipAddress = hostipInfo[i].split(":");
        if ( ipAddress[0] == "IP" ) return ipAddress[1];
    }

    return false;
}

document.write(myIP());

</script>
</p>
</div>
</footer>
<!-- END: Footer-->
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<script>
$(document).ready(function(){
$("#minhaPesquisa").on("keyup", function() {
var value = $(this).val().toLowerCase();
$("#MeuServidor tr").filter(function() {
$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
});
});
});
</script>
<script>
if (localStorage.getItem("toggled") === null) {
localStorage.setItem("toggled", " ");
}
$("#dark-layout").click(function(){$("body").toggleClass("dark-layout")}),$("body").toggleClass(localStorage.toggled),$("#dark-layout").click(function(){"dark-layout"!=localStorage.toggled?($("body").toggleClass("dark-layout",!0),localStorage.toggled="dark-layout"):($("body").toggleClass("dark-layout",!1),localStorage.toggled="")});
if (localStorage.getItem("toggled") === "dark-layout") {
document.getElementById("dark-layout").checked = true;
} else {
document.getElementById("dark-layout").checked = false;
}
</script>
<!-- BEGIN: Vendor JS-->
<script src="../app-assets/vendors/js/vendors.min.js"></script>
<script src="../app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="../app-assets/vendors/js/extensions/tether.min.js"></script>
<script src="../app-assets/js/core/app-menu.js"></script>
<script src="../app-assets/js/core/app.js"></script>
<script src="../app-assets/js/scripts/components.js"></script>
<script src="../app-assets/js/scripts/pages/dashboard-analytics.js"></script>
<script src="../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script>
<script src="../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<script src="../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="../app-assets/js/scripts/pages/auth-login.js"></script>
<!-- END: Page JS-->
</body>
<!-- END: Body-->
</html>
