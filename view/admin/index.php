<?php session_start();
    include_once "../../model/Dashborad_state.php";

    $dash = new Dashboard_state();

    $books = $dash->count_books();
    $stock = $dash->count_stock();
    $publisher = $dash->count_publisher();
    $author = $dash->count_author();
    $students = $dash->count_student();
    $teachers = $dash->count_teacher();
    $borrow_book = $dash->count_borrow_book();
    $book_req = $dash ->count_book_req();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php require_once "../allTemplateLayout/admin_head.php"?>

   <?php require_once "../allTemplateLayout/admin_script.php"?>
</head>

<body>
    <!-- Start Page Loading -->
    <?php require_once "../allTemplateLayout/admin_loader.php"?>
    <!-- End Page Loading -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header fix nav-->
        <?php require_once "../allTemplateLayout/admin_nav.php" ?>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->



    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <?php require_once "../allTemplateLayout/admin_left_nav.php"?>
            <!-- END LEFT SIDEBAR NAV-->



            <!-- START CONTENT -->
            <section id="content" style="min-height:580px">

                <!--start container-->
                <div class="container">

                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  purple white-text ">
                                    <p><i class="mdi mdi-book medium"></i></p>
                                        <p class="card-stats-title">Total Books</p>
                                        <h4 class="card-stats-number"><?= $books['books'] ?></h4>
                                        </p>
                                    </div>
                                    <div class="card-action  purple darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                            <div class="card">
                                    <div class="card-content  blue white-text ">
                                    <p><i class="mdi-device-storage medium"></i></p>
                                        <p class="card-stats-title">Stock</p>
                                        <h4 class="card-stats-number"><?= $stock['stock'] ?></h4>
                                        </p>
                                    </div>
                                    <div class="card-action  blue darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                            <div class="card">
                                    <div class="card-content  green white-text ">
                                    <p><i class="mdi-editor-publish medium"></i></p>
                                        <p class="card-stats-title">Publisher</p>
                                        <h4 class="card-stats-number"><?= $publisher['publisher'] ?></h4>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                            <div class="card">
                                    <div class="card-content  pink white-text ">
                                    <p><i class="mdi-social-person medium"></i></p>
                                        <p class="card-stats-title">Author</p>
                                        <h4 class="card-stats-number"><?= $author['author'] ?></h4>
                                        </p>
                                    </div>
                                    <div class="card-action  pink darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  teal white-text ">
                                    <p><i class="mdi-social-group medium"></i></p>
                                        <p class="card-stats-title">Students</p>
                                        <h4 class="card-stats-number"><?= $students['student'] ?></h4>
                                        </p>
                                    </div>
                                    <div class="card-action  teal darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                            <div class="card">
                                    <div class="card-content  brown white-text ">
                                    <p><i class="mdi-social-person-outline medium"></i></p>
                                        <p class="card-stats-title">Teachers</p>
                                        <h4 class="card-stats-number"><?= $teachers['teacher'] ?></h4>
                                        </p>
                                    </div>
                                    <div class="card-action  brown darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                            <div class="card">
                                    <div class="card-content  lime white-text ">
                                    <p><i class="mdi mdi-book-plus medium"></i></p>
                                        <p class="card-stats-title">Book Request</p>
                                        <h4 class="card-stats-number"><?= $book_req['book_request'] ?></h4>
                                        </p>
                                    </div>
                                    <div class="card-action  lime darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                            <div class="card">
                                    <div class="card-content amber white-text ">
                                    <p><i class=" mdi-file-file-download medium"></i></p>
                                        <p class="card-stats-title">Borrow Request</p>
                                        <h4 class="card-stats-number"><?= $borrow_book['borrow_book'] ?></h4>
                                        </p>
                                    </div>
                                    <div class="card-action amber darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--card stats end-->

                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- START FOOTER -->
    <?php require_once "../allTemplateLayout/admin_footer.php"?>
    <!-- END FOOTER -->




</body>

</html>