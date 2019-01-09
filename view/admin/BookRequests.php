<?php
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
                                <th>Request From</th>
                                <!--<th>Photo</th>-->
                                <th>Oparations</th>

                            </tr>
                            </thead>

                            <tbody>
                            <?php include_once "../../model/bookRequest.php";

                            $bok = new bookRequest();

                            $all_req = $bok->allreq();

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
                                    <td><?php echo $req->request_by ?></td>

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

            </div><!--end container-->
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
                    console.log(res);
                    document.getElementById("mail").value = res;

                }

            }
        )
    }

    function sendMail() {
        var mail = document.getElementById("mail").value;
        var subject = document.getElementById("subject").value;
        var text = myEditor.getData();
        //var text =  document.getElementById("editor").value;

        var post_key = {
            "mail": mail,
            "subject": subject,
            "text": text
        };
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