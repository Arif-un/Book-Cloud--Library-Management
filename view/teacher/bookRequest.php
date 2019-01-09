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
<?php /*ddfrequire_once "../allTemplateLayout/teacher_loader.php" */ ?>
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
        <section id="content" style="min-height: 560px">

            <!--start container-->
            <div class="container">


                <a class="btn-floating tooltipped btn-large waves-effect waves-light modal-trigger right scale-transition"
                   href="#modal1"
                   style="margin-top: 0px"
                   data-position="left" data-delay="50" data-tooltip=" Request For A Book"><i
                            class="mdi mdi-book-plus"></i> Add
                </a>
                <!-- ADD book MODAL-->

                <div id="modal1" class="modal" style="width: 60%; max-height: 85%">
                    <div class="modal-content">
                        <h5>Request for a Book</h5>
                        <button
                                class="btn-flat btn-floating waves-effect waves-ripple  modal-action modal-close right"
                                type="button" style="margin-top: -45px ">
                            <i class="mdi mdi-close-circle " style="color: gray"></i>
                        </button>

                        <hr>
                        <form action="../../controller/bookRequest_ctrl.php" method="post" enctype="multipart/form-data">
                            <div class="" style="padding: 10px; ">

                                <div class="row">

                                    <div class="input-field col l6">
                                        <i class="mdi-av-my-library-books prefix"></i>
                                        <input name="book_name" id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Book Name</label>
                                    </div>


                                    <div class="input-field col l6">
                                        <i class="mdi-editor-format-list-numbered prefix"></i>
                                        <input name="sbn" id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">SBN</label>
                                    </div>

                                    <div class="input-field col l6">
                                        <i class="mdi-social-person-outline prefix"></i>
                                        <input name="author" id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Author</label>
                                    </div>

                                    <div class="input-field col l6">
                                        <i class="mdi mdi-group prefix"></i>
                                        <input name="publisher" id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Publisher</label>
                                    </div>
                                    <div class="input-field col l6">
                                        <i class="mdi mdi-calendar prefix"></i>
                                        <input name="pub_year" id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Publish Year</label>
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


                <div id="table-datatables">

                    <div class="col s12 m8 l8 ">
                        <h4 class="header">Request List</h4>
                        <hr>
                        <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Book Name</th>
                                <th>ISBN</th>
                                <th>Author</th>
                                <th>Publisher</th>
                                <th>Publish Year</th>
                                <th>Description</th>
                                <!--<th>Photo</th>-->
                                <th>Oparations</th>

                            </tr>
                            </thead>

                            <tbody>
                            <?php include_once "../../model/bookRequest.php";

                            $bok = new bookRequest();

                            $all_req = $bok->req($_SESSION['name']);

                            $serial = 1;
                            foreach ($all_req as $req) { ?>
                                <tr>

                                    <td><?php echo $serial++; ?></td>
                                    <td><?php echo $req->book_name ?></td>
                                    <td><?php echo $req->sbn ?></td>
                                    <td><?php echo $req->author ?></td>
                                    <td><?php echo $req->publisher?></td>
                                    <td><?php echo $req->publish_year ?></td>
                                    <td><?php echo $req->description ?></td>

                                    <td>
                                        <button class="btn-floating btn-flat waves-effect waves-ripple"
                                                style="">
                                            <i class="mdi mdi-delete blue-grey-text"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
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