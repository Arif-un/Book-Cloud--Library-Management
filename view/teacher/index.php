<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once "../allTemplateLayout/teacher_head.php" ?>

</head>

<body>
<!-- Start Page Loading -->
<?php /*require_once "../allTemplateLayout/teacher_loader.php" */ ?>
<!-- End Page Loading -->


<!-- START HEADER -->
<?php require_once "../allTemplateLayout/teacher_nav.php" ?>
<!-- END HEADER -->


<!-- START MAIN -->
<div id="main" style="height: 500px">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <?php require_once "../allTemplateLayout/teacher_left_nav.php" ?>
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--start container-->
            <div class="container">


                <div style="width: 100%;background-color: #f4f4f4;border-radius: 10px">
                    <h5 style="text-align:center;padding:20px" class="">All Programing Related Books</h5>
                    <?php include_once "../../model/books.php";
                    $obj = new \books\books();
                    $allbooks = $obj->all_books();
                    ?>
                    <div class="crsl" style="width: 90%;display: block;margin-left:auto;margin-right:auto">
                        <?php foreach ($allbooks

                        as $books){ ?>

                        <div style="margin: 5px">
                            <div id="card-widgets">

                                <div class="row">
                                    <!-- book-card -->
                                    <div class="col s12 m12 l4">
                                        <div class="product-card">
                                            <div class="card" style="width: 175px;border-radius: 10px;height: 302px">
                                                <div class="card-image waves-effect waves-block waves-light"
                                                     style="height: 251px">
                                                    <!--<a href="#" class="btn-floating btn btn-price waves-effect waves-light  pink accent-2">$189</a>-->
                                                    <img src="../../resource/photos/book/<?php echo $books['photo'] ?>"
                                                         alt="book-img" style="">
                                                </div>
                                                <ul class="card-action-buttons" style="margin:-36px 10px 0 0">
                                                    <!--<li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                                                    </li>-->
                                                    <li><a class="btn-floating waves-effect waves-light red accent-2"
                                                           style="height: 30px;width: 30px;"><i
                                                                    class="mdi-action-favorite"
                                                                    style="font-size: 15px;line-height: 33px"></i></a>
                                                    </li>
                                                    <li><a class="btn-floating waves-effect waves-light light-blue"
                                                           style="height: 30px;width: 30px;"><i
                                                                    class="mdi-action-info activator"
                                                                    style="font-size: 18px;line-height: 0px"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="card-content">

                                                    <div class="row">
                                                        <div class="col s12 l12">
                                                            <p class="card-title grey-text text-darken-4"><a
                                                                        href="bookDetails.php?book_id=<?php echo $books['id'] ?>"
                                                                        class="grey-text text-darken-4"
                                                                        style="font-size: 15px"><?php echo $books['name'] ?>
                                                                    <span style="color:#7a7a7a;font-size: 13px"> - <?php echo substr($books['author'],0,50) ?>...</span></a>
                                                            </p>
                                                            <!--<p style="color: #607d8b;border-top: 1px solid #e6e6e6;margin-top: 2px;font-size: 13px">
                                                                ৳ </p>-->
                                                        </div>
                                                        <!--<div class="col s4 no-padding">
                                                            <a href=""></a><img src="../../resource/images/amazon.jpg" alt="amazon" class="responsive-img">

                                                        </div>-->
                                                    </div>
                                                </div>
                                                <div class="card-reveal">
                                                    <span class="card-title grey-text text-darken-4"><i
                                                                class="mdi-navigation-close right"></i> <?php echo $books['name'] ?>
                                                    </span>
                                                    <p>by <?php echo $books['author'] ?></p>
                                                    <hr>
                                                    <a href="bookDetails.php?sbn=<?php echo $books['sbn'] ?>"
                                                       class="waves-effect" style="left: 50px;bottom: 5px;position: absolute;display: block;padding: 5px;background-color: #ededed;border: 1px solid #95c7fd;border-radius: 20px;color: #66a6fd;width: 80px;text-align: center">More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <?php }?>
                    </div>
                    <div style="padding:10px;text-align:center;display:block;margin-left:auto;margin-right:auto"><a
                                style="font-size: 18px;">View All ►</a></div>
                </div>
            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->


        <!-- START RIGHT SIDEBAR NAV-->
        <?php require_once "../allTemplateLayout/teacher_right_nav.php" ?>

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->


<!-- START FOOTER -->
<?php require_once "../allTemplateLayout/teacher_footer.php" ?>
<!-- END FOOTER -->


<!-- ================================================
Scripts
================================================ -->

<?php require_once "../allTemplateLayout/teacher_script.php" ?>
</body>

</html>