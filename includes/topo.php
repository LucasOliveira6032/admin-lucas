<?php require(dirname(__FILE__) . "/../config.php");
// $session = new SESSION();
// $session->LucasAdminLogado();
?>
<!DOCTYPE html>
<html class=" ">

<head>
    <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: B4-1.3
         * This file is part of Ultra Admin Theme.
        -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Ultra Admin Bootstrap 4 : Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link rel="shortcut icon" href="<?php echo PATH ?>assets/images/favicon.png" type="image/x-icon" /> <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo PATH ?>assets/images/apple-touch-icon-57-precomposed.png"> <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo PATH ?>assets/images/apple-touch-icon-114-precomposed.png"> <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo PATH ?>assets/images/apple-touch-icon-72-precomposed.png"> <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo PATH ?>assets/images/apple-touch-icon-144-precomposed.png"> <!-- For iPad Retina display -->




    <!-- CORE CSS FRAMEWORK - START -->
    <link href="<?php echo PATH ?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo PATH ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo PATH ?>assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo PATH ?>assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo PATH ?>assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <link href="<?php echo PATH ?>assets/plugins/icheck/skins/square/orange.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo PATH ?>assets/plugins/morris-chart/css/morris.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo PATH ?>assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo PATH ?>assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo PATH ?>assets/plugins/icheck/skins/minimal/white.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->



    <!-- CORE CSS TEMPLATE - START -->
    <link href="<?php echo PATH ?>assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo PATH ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->
    <link rel="stylesheet" href="<?php echo PATH ?>assets/js/lucascustom.css">

    <base href="<?php echo PATH; ?>" target="">


</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<?php
$name_page_topo = basename($_SERVER['PHP_SELF']);
if ($name_page_topo != 'index.php') {
    echo '<body class=" ">';
} else {
    echo '<body class=" login_page">';
}
?>