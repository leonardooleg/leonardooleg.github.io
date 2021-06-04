<!doctype html>
<html class="no-js h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$lang["title"]?></title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<body class="h-100">

<div class="container-fluid">
    <div class="row">
        <!-- Main Sidebar -->
        <?php include_once "left_menu.php" ?>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
            <div class="main-navbar sticky-top bg-white">
                <!-- Main Navbar -->
                <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                    <div class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">

                    </div>
                    <ul class="navbar-nav border-left flex-row ">
                        <li class="nav-item border-right dropdown notifications">
                            <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="nav-link-icon__wrapper">
                                    <i class="material-icons">&#xe894</i>
                                    <span class="badge badge-pill badge-danger"><?=$site_lang?></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">

                                <a class="dropdown-item" id="ua">
                                    <div class="notification__icon-wrapper">
                                        <div class="notification__icon">
                                            <i class="material-icons">UA</i>
                                        </div>
                                    </div>
                                    <div class="notification__content">
                                        <span class="notification__category">Вибрати українську мову</span>
                                    </div>
                                </a>
                                <!--<a class="dropdown-item" id="en" >
                                    <div class="notification__icon-wrapper">
                                        <div class="notification__icon">
                                            <i class="material-icons">EN</i>
                                        </div>
                                    </div>
                                    <div class="notification__content">
                                        <span class="notification__category">Set language English</span>
                                    </div>
                                </a>-->
                                <a class="dropdown-item" id="ru">
                                    <div class="notification__icon-wrapper">
                                        <div class="notification__icon">
                                            <i class="material-icons">RU</i>
                                        </div>
                                    </div>
                                    <div class="notification__content">
                                        <span class="notification__category">Установить русский язык</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle mr-2" src="images/avatars/0.jpg" alt="User Avatar">
                                <span class="d-none d-md-inline-block">Avdeenko Oleg</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-small">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="material-icons">&#xE7FD;</i> Profile</a>
                                <a class="dropdown-item" href="works-ua.php">
                                    <i class="material-icons">vertical_split</i> Blog Posts</a>
                                <a class="dropdown-item" href="add-new-post.html">
                                    <i class="material-icons">note_add</i> Add New Post</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">
                                    <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                            </div>
                        </li>
                    </ul>
                    <nav class="nav">
                        <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                            <i class="material-icons">&#xE5D2;</i>
                        </a>
                    </nav>
                </nav>
            </div>