<?php
header
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center w-100 h-100 m-0 p-0">
            <div class="col d-none d-lg-flex justify-content-center align-items-center h-auto mt-5">
                <a class="menu" href="#about-us">ABOUT</a>
            </div>
            <div class="col d-none d-lg-flex justify-content-center align-items-center mt-5">
                <a class="menu" href="#gallery">GALLERY</a>
            </div>
            <div class="col-2 d-none d-lg-flex justify-content-center align-items-center mt-5">
                <a class="menu" href="#before-after">BEFORE & AFTER</a>
            </div>
            <div class="col d-none d-lg-flex justify-content-center align-items-center mt-5">
                <a class="menu" href="#guide">GUIDE</a>
            </div>
            <div class="col-3 d-none d-lg-flex justify-content-center align-items-center">
                <a href="#home" class="d-flex justify-content-center"><img class="logo" src="<?php echo get_template_directory_uri()?>/assets/img/logohouses.png" alt="img"></a>
            </div>
            <div class="col d-none d-lg-flex justify-content-center align-items-center mt-5">
                <a class="menu" href="#stay">STAY</a>
            </div>
            <div class="col-2 d-none d-lg-flex justify-content-center align-items-center mt-5">
                <a class="menu" href="#favorite">FAVORITE THINGS</a>
            </div>
            <div class="col d-none d-lg-flex justify-content-center align-items-center mt-5">
                <a class="menu" href="#oder">ODER</a>
            </div>
            <div class="col d-none d-lg-flex justify-content-center align-items-center mt-5">
                <a class="menu" href="#oder">CONTACT</a>
            </div>
            <!--mob-menu-->
            <div class="col d-lg-none d-xl-none justify-content-center align-items-center w-100 h-50 a">
                <div class="cont b">
                    <input type="checkbox" id="hmt" class="hidden-menu-ticker">
                    <a href="#home"><img class="logo-mob" src="<?php echo get_template_directory_uri()?>/assets/img/logohouses.png" alt="img"></a>
                    <label class="btn-menu" for="hmt">
                        <span class="first"></span>
                        <span class="second"></span>
                        <span class="third"></span>
                    </label>
                    <ul class="hidden-menu">
                        <div class="row d-flex justify-content-center align-items-between w-100">
                            <li class="col-10 d-flex justify-content-center align-items-center"><a class="menu-mob" href="#home">HOME</a></li>
                            <li class="col-10 d-flex justify-content-center align-items-center"><a class="menu-mob" href="#about-us">ABOUT</a></li>
                            <li class="col-10 d-flex justify-content-center align-items-center"><a class="menu-mob" href="#gallery">GALLERY</a></li>
                            <div class="col-10 d-flex justify-content-center align-items-center"><a class="menu-mob" href="http://houses.cr76669.tmweb.ru/#before-after">BEFORE & AFTER</a></div>
                            <li class="col-10 d-flex justify-content-center align-items-center"><a class="menu-mob" href="#guide">GUIDE</a></li>
                            <li class="col-10 d-flex justify-content-center align-items-center"><a class="menu-mob" href="#stay">STAY</a></li>
                            <li class="col-10 d-flex justify-content-center align-items-center"><a class="menu-mob" href="#favorite">FAVORITE THINGS</a></li>
                            <li class="col-10 d-flex justify-content-center align-items-center"><a class="menu-mob" href="#oder">ODER</a></li>
                            <li class="col-10 d-flex justify-content-center align-items-center"><a class="menu-mob" href="#oder">CONTACT</a></li>
                        </div>
                    </ul>
                </div>
            </div>