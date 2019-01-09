<?php session_start();

include_once "../../model/borrow_book.php";
$obzect = new \borrow\borrow_book();
$allDateDiff = $obzect->getDateDifference();
if (isset($allDateDiff[0]['difference'])) {
    foreach ($allDateDiff as $one) {
        if ($one['difference'] > 0) {
            $fine = $one['difference'] * 10;
            $obzect->fineANDExtraday($one['difference'], $fine, $one['id']);
        }
    }
}
?>

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
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php include_once "../../model/borrow_book.php";

                                $bok = new \borrow\borrow_book();

                                $all_req = $bok->all_book_req(0);

                                $serial = 1;
                                foreach ($all_req as $req) { ?>
                                    <tr>
                                        <td><?php echo $serial++; ?></td>
                                        <td><?php echo $req['name'] ?></td>
                                        <td><?php echo $req['user_name'] ?></td>
                                        <td><?php echo $req['user_id'] ?></td>
                                        <td><?php echo $req['submit_date'] ?></td>

                                        <td>
                                            <a data-position="left" data-delay="50"
                                               data-tooltip="Approve"
                                               href="../../controller/borrow_book_ctrl.php?updateID=<?php echo urlencode(base64_encode($req['id'])) ?>&bookID=<?php echo $req['book_id'] ?>&user_id=<?php echo $req['user_id']?>"
                                               class="btn-floating btn-flat waves-effect waves-ripple tooltipped approv_dilg"
                                               onclick="approved()">
                                                <i class="mdi mdi-check blue-text"></i>
                                            </a>
                                            <a data-position="left" data-delay="50" data-tooltip="Reject"
                                               href="../../controller/borrow_book_ctrl.php?delete=<?php echo $req['id'] ?>&user_id=<?php echo $req['user_id']?>"
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


                    <div id="mail_modal" class="modal" style="width: 600px">
                        <div class="mail_modal">
                            <h6 class="mail_modal">Sent a mail</h6>
                            <div class="divider"></div>
                            <div class="input-field ">
                                <i class="mdi-content-send prefix"></i>
                                <input id="mail" name="book_name" type="text" class="validate" value="" readonly>
                                <label for="icon_prefix">To</label>
                            </div>
                            <div class="input-field ">
                                <i class="mdi mdi-view-headline prefix"></i>
                                <input name="book_name" id="subject" type="text" class="validate"
                                       value="Please, Return Your borrowed book or renew !!">
                                <label for="icon_prefix">Subject</label>
                            </div>
                            <div class="">
                                <i class="mdi mdi-details prefix"></i>
                                <label for="">Details</label>
                            </div>
                            <textarea id="editor" name="book_name" type="text" class="validate" rows="10" cols="5"
                                      style="height: 190px"></textarea>

                            <div class="modal-footer">
                                <a onclick="sendMail()" href="#" class="modal-action  waves-effect waves-green btn-flat"><i
                                            class="mdi mdi-file-send"></i> Send</a>
                            </div>
                        </div>
                    </div>

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
                                    <th>Actions</th>

                                </tr>
                                </thead>

                                <tbody>
                                <?php include_once "../../model/borrow_book.php";

                                $bok = new \borrow\borrow_book();

                                $all_req = $bok->all_book_req(1);

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

                                        <td style="width:140px">
                                            <a
                                                    href="../../controller/borrow_book_ctrl.php?renewId=<?php echo $req['id'] ?>&user_id=<?php echo $req['user_id']?>"
                                                    class="btn-floating btn-flat waves-effect waves-ripple tooltipped confirm_renew"
                                                    style="" data-position="top" data-delay="10"
                                                    data-tooltip=" Renew Book">
                                                <i class=" mdi-action-autorenew blue-text"></i>
                                            </a>
                                            <a
                                                    href="../../controller/borrow_book_ctrl.php?returnBookId=<?php echo $req['id'] ?>&book_id=<?php echo $req['book_id']?>&user_id=<?php echo $req['user_id']?>"
                                                    class="btn-floating btn-flat waves-effect waves-ripple tooltipped confirm_return"
                                                    style="" data-position="top" data-delay="10"
                                                    data-tooltip=" Recieve This Book">
                                                <i class="mdi mdi-book-plus green-text"></i>
                                            </a>
                                            <a href="#mail_modal" id="<?php echo $req['user_id'] ?>"
                                               onclick="getMailAdress(this)"
                                               class="btn-floating btn-flat waves-effect waves-ripple tooltipped modal-trigger"
                                               style="" data-position="top" data-delay="10" data-tooltip=" Sent Mail">
                                                <i class="mdi mdi-email-open red-text"></i>
                                            </a>
                                        </td>
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

                                $all_req = $bok->all_book_req(2);

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
                    //console.log(res);
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