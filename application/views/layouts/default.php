<!DOCTYPE html>
<html lang="en">
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the Compatible of your site -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>Botanical - HTML5 Ecommerce Template</title>
    <!-- include the site Google Fonts stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- include the site bootstrap stylesheet -->
    <link rel="stylesheet" href="../../../public/css/bootstrap.css">
    <!-- include the site fontawesome stylesheet -->
    <link rel="stylesheet" href="../../../public/css/fontawesome.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="../../../public/styles/main.css">
    <!-- include theme plugins setting stylesheet -->
    <link rel="stylesheet" href="../../../public/css/plugins.css">
    <!-- include theme color setting stylesheet -->
    <link rel="stylesheet" href="../../../public/css/color.css">
    <!-- include theme responsive setting stylesheet -->
    <link rel="stylesheet" href="../../../public/css/responsive.css">
</head>

<body>

<!-- pageWrapper -->
<div id="pageWrapper" style="height: 100%">
    <!-- header -->
    <header id="header" class="position-relative">
        <!-- headerHolderCol -->
        <div class="headerHolderCol pt-lg-4 pb-lg-5 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <!-- langListII -->
                        <ul class="nav nav-tabs langListII justify-content-start border-bottom-0">
                            <li class="dropdown">
                                <span>Currency: </span>
                                <a class="d-inline dropdown-toggle text-uppercase" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">USD</a>
                                <div class="dropdown-menu text-uppercase pl-4 pr-4 border-0">
                                    <a class="dropdown-item" href="javascript:void(0);">USD</a>
                                    <a class="dropdown-item" href="javascript:void(0);">VND</a>
                                    <a class="dropdown-item" href="javascript:void(0);">euro</a>
                                </div>
                            </li>
                            <li class="dropdown m-0">
                                <span>Languages: </span>
                                <a class="d-inline dropdown-toggle text-uppercase" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">EN</a>
                                <div class="dropdown-menu pl-4 pr-4">
                                    <a class="dropdown-item" href="javascript:void(0);">English</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Vietnamese</a>
                                    <a class="dropdown-item" href="javascript:void(0);">French</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 nav nav-tabs justify-content-end">




                        <?php if (empty($_SESSION)): ?>
                            <a class="txt d-block mr-10" href="/account/login">Login</a>
                            <a class="txt d-block" href="/account/register">Registration</a>
                        <?php else: ?>
                            <a class="txt d-block ml-10" href="/account/logout">Logout</a>
                        <?php endif; ?>







<!--                        <a class="txt d-block mr-10" href="/account/login">Login</a>-->
<!--                        <a class="txt d-block" href="/account/register">Registration</a>-->
<!--                        <a class="txt d-block ml-10" href="/account/logout">Logout</a>-->
<!--                        --><?php //var_dump($_SESSION); ?>
                    </div>
                </div>





            </div>
        </div>
        <!-- headerHolder -->
        <div class="headerHolder container pt-lg-5 pb-lg-7 py-4">
            <div class="row">
                <div class="col-6 col-sm-2">
                    <!-- mainLogo -->
                    <div class="logo">
                        <a href="/"><img src="../../../public/images/logo.png" alt="Botanical" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-6 col-sm-7 col-lg-8 static-block">
                    <!-- mainHolder -->
                    <div class="mainHolder pt-lg-5 pt-3 justify-content-center">
                        <!-- pageNav2 -->
                        <nav class="navbar navbar-expand-lg navbar-light p-0 pageNav2 position-static">
                            <button type="button" class="navbar-toggle collapsed position-relative" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav mx-auto text-uppercase d-inline-block">
                                    <li class="nav-item">
                                        <a class="d-block" href="/">home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="d-block" href="/shop">Store</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="d-block" href="/about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="d-block" href="/blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="d-block" href="/pages">Pages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="d-block" href="/contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-2">
                    <!-- wishListII -->
                    <ul class="nav nav-tabs wishListII pt-5 justify-content-end border-bottom-0">
                        <li class="nav-item ml-0"><a class="nav-link icon-search" href="javascript:void(0);"></a></li>
                        <li class="nav-item ml-0"><a class="nav-link position-relative icon-cart" href="javascript:void(0);"><span class="num rounded d-block">2</span></a></li>
                        <li class="nav-item ml-0"><a class="nav-link icon-profile" href="javascript:void(0);"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <?php echo $content; ?>

    <!-- footer -->
    <footer id="footer" class="overflow-hidden bg-dark vw-100">
        <div class="container">
            <div class="row">
                <div class="col-12 copyRightHolder v-II text-center pt-md-3 pb-md-4 py-2">
                    <p class="mb-0">Coppyright 2019 by <a href="javascript:void(0);">Botanical Store</a> - All right reserved</p>
                </div>
            </div>
        </div>
    </footer>
</div>


    <!-- include jQuery library -->
    <script src="../../../public/scripts/jquery.js"></script>
    <!-- include bootstrap popper JavaScript -->
    <script src="../../../public/scripts/popper.js"></script>
    <!-- include bootstrap JavaScript -->
    <script src="../../../public/scripts/bootstrap.js"></script>
    <!-- include custom JavaScript -->
    <script src="../../../public/scripts/jqueryCustome.js"></script>

    <script src="../../../public/scripts/form.js"></script>
</body>
</html>