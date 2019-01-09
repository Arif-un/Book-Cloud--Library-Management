<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "../allTemplateLayout/admin_head.php" ?>
</head>

<body>
<!-- Start Page Loading -->
<?php /*require_once "../allTemplateLayout/admin_loader.php" */ ?>
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
        <?php require_once "../allTemplateLayout/admin_left_nav.php" ?>
        <!-- END LEFT SIDEBAR NAV-->


        <!-- START CONTENT -->
        <section id="content">

            <!--start container-->
            <div class="container" style="min-height: 563px; max-height: 100%">

                <a class="btn-floating tooltipped btn-large waves-effect waves-light modal-trigger" href="#modal1"
                   data-position="right" data-delay="50" data-tooltip=" Add New Teacher " style="position: absolute;margin-left: 200px;margin-top: 20px"><i
                            class="mdi-social-person-add"></i> Add</a>

                <div id="modal1" class="modal" style="width: 60%;">
                    <div class="modal-content">
                        <h5>Teacher Registration</h5>
                        <hr>

                        <form action="../../controller/teacherCtrl.php" method="post" enctype="multipart/form-data">

                            <div class="row">
                                <div class="input-field col l3">
                                    <i class="mdi-action-account-circle prefix"></i>
                                    <input name="name" id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Full Name</label>
                                </div>
                                <div class="input-field col l3">
                                    <i class="mdi-communication-phone prefix"></i>
                                    <input name="mobile" id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Phone</label>
                                </div>
                                <div class="input-field col l3">
                                    <i class="mdi-communication-quick-contacts-mail prefix"></i>
                                    <input name="email" id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">EMail</label>
                                </div>
                                <div class="input-field col l3">
                                    <i class="mdi-communication-quick-contacts-mail prefix"></i>
                                    <input name="pass" id="icon_prefix" type="password" class="validate">
                                    <label for="icon_prefix">Password</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col l4">
                                    <i class="mdi-action-account-balance prefix"></i>
                                    <input name="dept" id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Department</label>
                                </div>
                                <div class="input-field col l4">
                                    <i class="mdi-action-event prefix"></i>
                                    <input name="j_date" id="icon_prefix" type="text" class="datepicker">
                                    <label for="icon_prefix">Join Date</label>
                                </div>
                                <div class="input-field col l4">
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>Photo</span>
                                            <input name="photo" type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <br>
                                <div class="col l6">
                                    <button class="btn cyan waves-effect waves-light right " type="submit">
                                        Save
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>
                                <div class="col l6 ">
                                    <button id="chek"
                                            class="btn red waves-effect waves-ripple  modal-action modal-close"
                                            type="button">
                                        <i class="mdi-navigation-close left"></i>
                                        Cancel
                                    </button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>

            <div id="table-datatables" class="card-panel">

                <div class="col s12 m8 l8 ">
                    <h4 class="header">Teachers Lists</h4>
                    <hr>
                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>ID</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Department</th>
                            <th>Join Date</th>
                            <th>Oparations</th>

                        </tr>
                        </thead>

                        <tbody>
                        <?php include_once "../../model/teacher_info.php";
                        $tea = new teacher_info();
                        $all_tchr = $tea->all_teacher();

                        $serial = 1;
                        foreach ($all_tchr as $tchr) { ?>
                            <tr>

                                <td><?php echo $serial++; ?></td>
                                <td><?php echo $tchr['name'] ?></td>
                                <td><?php echo $tchr['teacher_id'] ?></td>
                                <td><?php echo $tchr['mobile'] ?></td>
                                <td><?php echo $tchr['email'] ?></td>
                                <td><?php echo $tchr['pass'] ?></td>
                                <td><?php echo $tchr['dept'] ?></td>
                                <td><?php echo $tchr['j_date'] ?></td>
                                <td>
                                    <button class="btn-floating btn-flat waves-effect waves-ripple"
                                            style="">
                                        <i class="mdi-editor-border-color blue-grey-text"></i>
                                    </button>
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



</div>
<!-- END WRAPPER -->

</div>
<!-- END MAIN -->


<!-- START FOOTER -->
<?php require_once "../allTemplateLayout/admin_footer.php" ?>
<!-- END FOOTER -->


<!-- ================================================
Scripts
================================================ -->

<?php require_once "../allTemplateLayout/admin_script.php" ?>

<?php

if(isset($_SESSION['msg']) and $_SESSION['msg']==='1'){ ?>
    <script>
        swal({
            title: "Successfully Added!",
            text: "Thanks for using BOOK CLOUD!",
            icon: "success",
            button: "OK!",
        });
    </script>
    <?php $_SESSION['msg']='0';} ?>
</body>

</html>