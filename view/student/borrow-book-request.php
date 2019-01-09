<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "../allTemplateLayout/student_head.php" ?>
</head>

<body>
<!-- Start Page Loading -->
<?php /*require_once "../allTemplateLayout/admin_loader.php" */ ?>
<!-- End Page Loading -->

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header fix nav-->
    <?php require_once "../allTemplateLayout/student_nav.php" ?>
    <!-- end header nav-->
</header>
<!-- END HEADER -->


<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <?php require_once "../allTemplateLayout/student_left_nav.php" ?>
        <!-- END LEFT SIDEBAR NAV-->


        <!-- START CONTENT -->
        <section id="content">

            <!--start container-->
            <div class="container" style="min-height: 563px; max-height: 100%">

                <ul id="tabs-swipe-demo" class="tabs tabs-icon">
                    <li class="tab col s3 "><a class="active" href="#test-swipe-1"><i style="font-size: 20px"
                                                                                      class="mdi mdi-account-alert prefix"></i>
                            Book Request</a></li>
                    <li class="tab col s3 "><a href="#test-swipe-2"><i style="font-size: 20px"
                                                                       class="mdi mdi-format-list-checks prefix"></i>Borrowed
                            List</a></li>
                    <li class="tab col s3 "><a href="#test-swipe-3"><i style="font-size: 20px"
                                                                       class="mdi mdi-history prefix"></i> Borrowed
                            History</a>
                    </li>
                    <!--<li class="tab col s3 "><a href="#test-swipe-4"><i class="mdi-editor-publish prefix"></i> Publisher</a>
                    </li>-->
                </ul>

                <div id="test-swipe-1" class="col s12">

                    <div id="table-datatables">

                        <div class="col s12 m8 l8 ">
                            <h4 class="header">Book Request Lists</h4>
                            <hr>
                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Book Name</th>
                                    <th>User Name</th>
                                    <th>User ID</th>
                                    <th>Request Date</th>
                                    <th>Position</th>
                                    <th>Actions</th>

                                </tr>
                                </thead>

                                <tbody>
                                <?php include_once "../../model/borrow_book.php";

                                $bok = new \borrow\borrow_book();

                                $all_req = $bok->all_book_req_by_user(0,$_SESSION['std_id']);

                                $serial = 1;
                                foreach ($all_req as $req) { ?>
                                    <tr>
                                        <td><?php echo $serial++; ?></td>
                                        <td><?php echo $req['name'] ?></td>
                                        <td><?php echo $req['user_name'] ?></td>
                                        <td><?php echo $req['user_id'] ?></td>
                                        <td><?php echo $req['submit_date'] ?></td>
                                        <td>Pending</td>

                                        <td>
                                            <a data-position="left" data-delay="50" data-tooltip="Reject"
                                               href="../../controller/borrow_book_ctrl.php?delete=<?php echo $req['id'] ?>"
                                               class="btn-floating btn-flat waves-effect waves-ripple delete_dilg tooltipped"
                                               style="">
                                                <i class="mdi mdi-window-close red-text "></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

                <div id="test-swipe-2" class="col s12 ">

                    <div id="table-datatables">

                        <div class="col s12 m8 l8 ">
                            <h4 class="header">Book Request Lists</h4>
                            <hr>
                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                <thead>
                                <tr>
                                    <th style="width:10px">Serial</th>
                                    <th>Book Name</th>
                                    <th>User Name</th>
                                    <th>User ID</th>
                                    <th>Borrow Date</th>
                                    <th>Return Date</th>
                                    <th>Extra Day</th>
                                    <th>Fine</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php include_once "../../model/borrow_book.php";

                                $bok = new \borrow\borrow_book();

                                $all_req = $bok->all_book_req_by_user(1,$_SESSION['std_id']);

                                $serial = 1;
                                foreach ($all_req as $req) { ?>
                                    <tr>
                                        <td><?php echo $serial++; ?></td>
                                        <td><?php echo $req['name'] ?></td>
                                        <td><?php echo $req['user_name'] ?></td>
                                        <td><?php echo $req['user_id'] ?></td>
                                        <td><?php echo $req['borrow_date'] ?></td>
                                        <td><?php echo $req['return_date'] ?></td>
                                        <td><?php echo $req['extra_day'] ?></td>
                                        <td><?php echo $req['fine'] ?></td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

                <div id="test-swipe-3" class="col s12 ">

                    <div id="table-datatables">

                        <div class="col s12 m8 l8 ">
                            <h4 class="header">Book Request Lists</h4>
                            <hr>
                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                <thead>
                                <tr>
                                    <th style="width:10px">Serial</th>
                                    <th>Book Name</th>
                                    <th>User Name</th>
                                    <th>User ID</th>
                                    <th>Borrow Date</th>
                                    <th>Return Date</th>
                                    <th>Extra Day</th>
                                    <th>Fine</th>
                                    <th>Returned Date</th>

                                </tr>
                                </thead>

                                <tbody>
                                <?php include_once "../../model/borrow_book.php";

                                $bok = new \borrow\borrow_book();

                                $all_req = $bok->all_book_req_by_user(2,$_SESSION['std_id']);

                                $serial = 1;
                                foreach ($all_req as $req) { ?>
                                    <tr>
                                        <td><?php echo $serial++; ?></td>
                                        <td><?php echo $req['name'] ?></td>
                                        <td><?php echo $req['user_name'] ?></td>
                                        <td><?php echo $req['user_id'] ?></td>
                                        <td><?php echo $req['borrow_date'] ?></td>
                                        <td><?php echo $req['return_date'] ?></td>
                                        <td><?php echo $req['extra_day'] ?></td>
                                        <td><?php echo $req['fine'] ?></td>
                                        <td><?php echo $req['returned_date'] ?></td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->


        <!-- START RIGHT SIDEBAR NAV-->
        <?php require_once "../allTemplateLayout/student_right_nav.php" ?>
        <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->


<!-- START FOOTER -->
<?php require_once "../allTemplateLayout/student_footer.php" ?>
<!-- END FOOTER -->


<!-- ================================================
Scripts
================================================ -->

<?php require_once "../allTemplateLayout/student_script.php" ?>

<?php

if (isset($_SESSION['msg']) and $_SESSION['msg'] === '1') { ?>
    <script>
        swal({
            title: "Successfully Added!",
            text: "Thanks for using BOOK CLOUD!",
            icon: "success",
            button: "OK!"
        });
    </script>
    <?php $_SESSION['msg'] = '0';
} ?>

<script>
    function con() {
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function () {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
                return true;
            });
    }


    function getMailAdress(t) {
        var user_id = t.id;

        var post_key = {"getMailById": user_id};
        $.ajax({
                url: '../../controller/borrow_book_ctrl.php',
                type: 'post',
                data: post_key,
                //dataType: 'JSON',
                success: function (res) {
                    console.log(res);
                    document.getElementById("mail").value=res;

                }

            }
        )
    }

    function sendMail() {
        var mail = document.getElementById("mail").value;
        var subject = document.getElementById("subject").value;
        var text = myEditor.getData();
        //var text =  document.getElementById("editor").value;

        var post_key = {"mail": mail,
                        "subject" : subject,
                        "text": text};
        $.ajax({
                url: '../../controller/warningMailSend.php',
                type: 'post',
                data: post_key,
                //dataType: 'JSON',
                success: function (res) {
                    console.log(res);
                   //document.getElementById("mail").value=res;

                }

            }
        )
    }
</script>

</body>

</html>