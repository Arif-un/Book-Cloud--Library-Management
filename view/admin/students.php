<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "../allTemplateLayout/admin_head.php" ?>
</head>

<body>
<!-- Start Page Loading -->
<?php /*require_once "../allTemplateLayout/admin_loader.php"  */ ?>
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

                <!-- Modal Trigger -->
                <a class="btn-floating tooltipped btn-large waves-effect waves-light modal-trigger" href="#modal1"
                   data-position="right" data-delay="50" data-tooltip=" Add New Student " style="position: absolute;margin-left: 180px;margin-top: -10px"><i
                            class="mdi-social-person-add"></i> Add</a>

                <!-- Modal Structure -->
                <div id="modal1" class="modal" style="width: 80%;">
                    <div class="modal-content">
                        <h5>Add New Student</h5>
                        <hr>
                        <form action="../../controller/studentCtrl.php" method="post" enctype="multipart/form-data">
                            <div class="" style="padding: 10px; ">

                                <div class="row">
                                    <div class="input-field col l4">
                                        <i class="mdi-action-account-circle prefix"></i>
                                        <input name="name" id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Full Name</label>
                                    </div>
                                    <div class="input-field col l4">
                                        <i class="mdi-communication-phone prefix"></i>
                                        <input name="phone" id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Phone</label>
                                    </div>
                                    <div class="input-field col l4">
                                        <i class="mdi-communication-quick-contacts-mail prefix"></i>
                                        <input name="email" id="mailChek" onkeyup="mail_chek()" type="text"
                                               class="validate">
                                        <label for="icon_prefix">EMail</label>
                                        <h5 id="alert_mail" style="color: red;font-size: 100%; display: none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                                    class="mdi-alert-error"></i> Already Exsist this Email !</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col l3">
                                        <i class="mdi-action-account-balance prefix"></i>
                                        <input name="dept" id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Department</label>
                                    </div>
                                    <div class="input-field col l3">
                                        <i class="mdi-social-group prefix"></i>
                                        <input name="batch" id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Batch</label>
                                    </div>
                                    <div class="input-field col l3">
                                        <i class="mdi mdi-timetable prefix"></i>
                                        <input name="session" id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Session</label>
                                    </div>
                                    <div class="input-field col l3">
                                        <i class="mdi mdi-textbox-password prefix"></i>
                                        <input name="password" id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Password</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col l4">
                                        <i class="mdi-image-timelapse prefix"></i>
                                        <input name="shift" id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Shift</label>
                                    </div>
                                    <div class="input-field col l4">
                                        <i class="mdi-notification-event-note prefix"></i>
                                        <input name="program" id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Program</label>
                                    </div>
                                    <div class="input-field col l4">
                                        <div class="file-field input-field">
                                            <div class="btn blue waves-effect">
                                                <span>Photo <i class="mdi mdi-camera"></i></span>
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
                                        <button id="chek" class="btn cyan waves-effect waves-light right "
                                                type="submit">
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

                                </div>
                            </div>
                        </form>
                    </div>

                </div>


                <div id="table-datatables" >

                    <div class="col s12 m8 l8 ">
                        <h4 class="header">Student Lists</h4>
                        <hr>
                        <table id="data-table-simple" class="responsive-table display table" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Name</th>
                                <th>ID</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Batch</th>
                                <th>Department</th>
                                <th>Session</th>
                                <th>Shift</th>
                                <th>Program</th>
                                <th>Oparations</th>

                            </tr>
                            </thead>

                            <tbody>
                            <?php include_once "../../model/student_info.php";
                            $std = new student_info();
                            $all_std=$std->all_srudents();

                            $serial = 1;
                            foreach ($all_std as $student) { ?>
                                <tr>

                                    <td><?php echo $serial++; ?></td>
                                    <td><?php echo $student['full_name'] ?></td>
                                    <td><?php echo $student['std_id'] ?></td>
                                    <td><?php echo $student['mobile'] ?></td>
                                    <td><?php echo $student['email'] ?></td>
                                    <td><?php echo $student['password'] ?></td>
                                    <td><?php echo $student['batch'] ?></td>
                                    <td><?php echo $student['dept'] ?></td>
                                    <td><?php echo $student['session'] ?></td>
                                    <td><?php echo $student['shift'] ?></td>
                                    <td><?php echo $student['program'] ?></td>

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
<script type="text/javascript">
    function mail_chek() {
        var mail = document.getElementById("mailChek").value;
        var xhr;
        if (window.XMLHttpRequest) { // Mozilla, Safari, ...
            xhr = new XMLHttpRequest();
        } else if (window.ActiveXObject) { // IE 8 and older
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
        var data = "email=" + mail;
        xhr.open("POST", "../../controller/studentCtrl.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(data);
        xhr.onreadystatechange = display_data;

        function display_data() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    //alert(xhr.responseText);
                    //document.getElementById("alert_mail").innerHTML = xhr.responseText;
                    var msg = xhr.responseText['0'];
                    var alrt = document.getElementById("alert_mail");
                    if (msg === "t") {
                        alrt.style.display = "block";
                    }
                    else {
                        alrt.style.display = "none";
                    }

                } else {
                    alert('There was a problem with the request.');
                }
            }
        }
    }

</script>

<?php

if(isset($_SESSION['msg']) and $_SESSION['msg']==='1'){ ?>
    <script>
        swal({
            title: "Successfully Added!",
            text: "Thanks for using BOOK CLOUD!",
            icon: "success",
            button: "OK!"
        });
    </script>
    <?php $_SESSION['msg']='0';} ?>

</body>

</html>