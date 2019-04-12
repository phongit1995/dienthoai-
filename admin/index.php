<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="style/css.css">-->
    <!-- favicon
		============================================ -->

    <?php require_once("modules/particles/header.php"); ?>
</head>
<?php include("modules/config.php") ?>
<body>
    <!-- Start Header Top Area -->
    <?php require_once("modules/particles/top_bar.php"); ?>
    <!-- End Header Top Area -->
    <?php require_once("modules/particles/menu.php"); ?>
    <!-- Start Status area -->
    <?php require_once("modules/content.php"); ?>
    <!-- jquery
		============================================ -->
    <!-- bootstrap JS
		============================================ -->
    <?php require_once("modules/particles/scripts.php"); ?>
</body>

</html>