<?php include_once "../../model/books.php";
/**
 * Copyright (c) arifunctg@gmail.com
 */

?>
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
<div id="main">
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

                <ul id="tabs-swipe-demo" class="tabs tabs-icon" style="background-color: transparent" >
                    <li class="tab col s3 "><a class="active" href="#swipe-1"><i style="font-size: 20px"
                                    class="mdi mdi-file-pdf-box prefix"></i> Lectures</a></li>
                    <li class="tab col s3 "><a href="#swipe-2"><i class="mdi-file-cloud-upload prefix" style="font-size: 20px"></i> Uploaded</a>
                    </li>
                </ul>

                <div id="swipe-1" class="col s12">

                    <a class="btn-floating tooltipped btn-large waves-effect waves-light modal-trigger right scale-transition"
                       href="#modal1"
                       style="margin-top: 0px"
                       data-position="left" data-delay="50" data-tooltip=" Add A Lecture File"><i
                                class="mdi mdi-file-pdf"></i> Add
                    </a>
                    <!-- ADD lecture MODAL-->
                    <div id="modal1" class="modal" style="width: 70%; max-height: 85%">
                        <div class="modal-content">
                            <h5>Upload Lectures</h5>
                            <button
                                    class="btn-flat btn-floating waves-effect waves-ripple  modal-action modal-close right"
                                    type="button" style="margin-top: -45px ">
                                <i class="mdi mdi-close-circle " style="color: gray"></i>
                            </button>

                            <hr>
                            <form action="../../controller/lecture-ctrl.php" method="post"
                                  enctype="multipart/form-data">
                                <div class="row" style="padding: 10px; ">

                                    <div class="col l6 center-align ">
                                        <img id="output" class="card"
                                             src="../../resource/photos/lecture/PDF%20Placeholder.png"
                                             style="margin: auto; width: 250px;height: 300px;">
                                    </div>

                                    <div class="input-field col l6">
                                        <div class="input-field ">
                                            <i class="mdi-av-my-library-books prefix"></i>
                                            <input name="lec_title" id="icon_prefix" type="text" class="validate">
                                            <label for="icon_prefix">Lecture Title</label>
                                        </div>


                                        <div class="input-field col l12">
                                            <div class="file-field input-field">
                                                <div class="btn blue waves-effect">
                                                    <i class="mdi-image-camera"></i>
                                                    <span> Photo</span>
                                                    <input name="photo" type="file" accept="image/*"
                                                           onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text"">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="input-field col l12">
                                            <div class="file-field input-field">
                                                <div class="btn blue waves-effect">
                                                    <i class="mdi mdi-file-pdf"></i>
                                                    <span>PDF</span>
                                                    <input name="pdf" type="file" accept="application/pdf">

                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text"">

                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div>
                                        <div class="input-field col l12">
                                            <span class="mdi mdi-details prefix"></span>
                                            <textarea name="des" class="materialize-textarea"></textarea>
                                            <label for="icon_prefix">Description</label>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <br>
                                        <div class="col l6">
                                            <button id="chek" class="btn cyan waves-effect waves-light right "
                                                    type="submit">
                                                Save
                                                <i class="mdi-content-send right"></i>
                                            </button>
                                        </div>
                                        <div class="col l6 ">
                                            <button
                                                    class="btn red waves-effect waves-ripple  modal-action modal-close"
                                                    type="button">
                                                <i class="mdi-navigation-close left"></i>
                                                Cancel
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="section">
                        <div id="products" class="row">
                            <div class="product-sizer"></div>

                            <?php
                            include_once "../../model/lecture.php";
                            $obj = new lecture();
                            $all = $obj->allLec();

                            foreach ($all as $single) { ?>
                                <div style="width:17%;float: left">
                                    <div id="card">

                                        <div class="row" style="">
                                            <!-- book-card -->
                                            <div class="col s12 m12 l4">
                                                <div class="product-card">
                                                    <div class="card"
                                                         style="width: 175px;border-radius: 10px;height: 302px">
                                                        <div class="card-image waves-effect waves-block waves-light"
                                                             style="height: 251px">
                                                            <img src="../../resource/photos/lecture/<?php echo $single['pic'] ?>"
                                                                 alt="pdf-img" style="">
                                                        </div>
                                                        <ul class="card-action-buttons" style="margin:-36px 10px 0 0">
                                                            <li>
                                                                <a class="btn-floating waves-effect waves-light light-blue"
                                                                   style="height: 30px;width: 30px;"><i
                                                                            class="mdi-action-info activator"
                                                                            style="font-size: 18px;line-height: 0px"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="card-content">

                                                            <div class="row">
                                                                <div class="col s12 l12">
                                                                    <p class="card-title grey-text text-darken-4"><a href=""
                                                                                class="grey-text text-darken-4"
                                                                                style="font-size: 15px"><?php echo $single['name'] ?>
                                                                            <span style="color:#7a7a7a;font-size: 13px"> - <?php echo substr($single['uploader'], 0, 50) ?>
                                                                                ...</span></a>
                                                                    </p>
                                                                
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="card-reveal">
                                                    <span class="card-title grey-text text-darken-4"><i
                                                                class="mdi-navigation-close right"></i> <?php echo $single['name'] ?>
                                                        </span>
                                                            <p>by <?php echo $single['uploader'] ?></p>
                                                            <hr>
                                                            <p><?= $single['description'] ?></p>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--card widgets end-->

                                    </div>
                                </div>

                            <?php }
                            ?>

                        </div>
                    </div>
                </div>

                <div id="swipe-2" class="col s12">

                    <div class="section">
                        <div id="products" class="row">
                            <div class="product-sizer"></div>

                            <?php
                            $al = $obj->allLecByUpldr($_SESSION['name']);

                            foreach ($al as $singl) { ?>
                                <div style="width:17%;float: left">
                                    <div id="card">

                                        <div class="row" style="">
                                            <!-- book-card -->
                                            <div class="col s12 m12 l4">
                                                <div class="product-card">
                                                    <div class="card"
                                                         style="width: 175px;border-radius: 10px;height: 302px">
                                                        <div class="card-image waves-effect waves-block waves-light"
                                                             style="height: 251px">
                                                            <!--<a href="#" class="btn-floating btn btn-price waves-effect waves-light  pink accent-2">$189</a>-->
                                                            <img src="../../resource/photos/lecture/<?php echo $singl['pic'] ?>"
                                                                 alt="pdf-img" style="">
                                                        </div>
                                                        <ul class="card-action-buttons" style="margin:-36px 10px 0 0">
                                                            <!--<li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                                                            </li>-->
                                                            <li><a class="btn-floating waves-effect waves-light red accent-2"
                                                                   style="height: 30px;width: 30px;"><i
                                                                            class="mdi mdi-delete-empty"
                                                                            style="font-size: 15px;line-height: 33px"></i></a>
                                                            </li>
                                                            <li>
                                                                <a class="btn-floating waves-effect waves-light light-blue"
                                                                   style="height: 30px;width: 30px;"><i
                                                                            class="mdi-action-info activator"
                                                                            style="font-size: 18px;line-height: 0px"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="card-content">

                                                            <div class="row">
                                                                <div class="col s12 l12">
                                                                    <p class="card-title grey-text text-darken-4"><a
                                                                                href="bookDetails.php?sbn=<?php ?>"
                                                                                class="grey-text text-darken-4"
                                                                                style="font-size: 15px"><?php echo $singl['name'] ?>
                                                                            <span style="color:#7a7a7a;font-size: 13px"> - <?php echo substr($singl['uploader'], 0, 50) ?>
                                                                                ...</span></a>
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
                                                                class="mdi-navigation-close right"></i> <?php echo $singl['name'] ?>
                                                        </span>
                                                            <p>by <?php echo $singl['uploader'] ?></p>
                                                            <hr>
                                                            <a href="bookDetails.php?sbn=<?php ?>"
                                                               class="btn btn-flat blue waves-effect"
                                                               style="margin-left: 15px;bottom: 5px;position: absolute">More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--card widgets end-->

                                    </div>
                                </div>

                            <?php }
                            ?>

                        </div>
                    </div>

                </div>
                <!--end container-->
        </section>
        <!-- END CONTENT -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START RIGHT SIDEBAR NAV-->
        <?php require_once "../allTemplateLayout/teacher_right_nav.php" ?>
        <!-- LEFT RIGHT SIDEBAR NAV-->

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
<script>

</script>

</body>

</html>