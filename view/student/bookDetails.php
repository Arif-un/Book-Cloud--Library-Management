<?php include_once "../../model/books.php";
include_once "../../controller/functions.php";
include_once "../../model/comment.php";
$cmnt_obj = new comment();
$object = new \books\books();
$book = $object->singl_books($_GET['book_id']);
$author = explode(',', $book['author']);
$cat = explode(',', $book['cat']);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once "../allTemplateLayout/student_head.php" ?>

</head>

<body>
<!-- Start Page Loading -->
<?php /*require_once "../allTemplateLayout/student_loader.php" */ ?>
<!-- End Page Loading -->


<!-- START HEADER -->
<?php require_once "../allTemplateLayout/student_nav.php" ?>
<!-- END HEADER -->


<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <?php require_once "../allTemplateLayout/student_left_nav.php" ?>
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--start container-->
            <div class="container">
                <div class="row" style="padding-top:50px">
                    <div class="col l3 ">
                        <div class="card waves-effect js-tilt "
                             style="display:block;margin:auto;width: 200px;height:286px;border-radius:10px;"><img
                                    src="../../resource/photos/book/<?php echo $book['photo'] ?>" style="width: 200px">
                        </div>
                        <div class="row">
                            <div class="col l6" style="padding-top: 6px">
                                <button class="btn-floating waves-effect waves-light red accent-2 right"><i
                                            class="mdi-action-favorite"></i></button>
                            </div>
                            <div class="col l6"><p>25</p></div>
                        </div>
                    </div>
                    <div>

                    </div>
                    <div class="col l7">
                        <h4><?php echo $book['name'] ?></h4>
                        <h5>
                            <?php
                            foreach ($author as $a) { ?>
                                <a href=""><?php echo $a ?></a>,
                            <?php } ?>
                        </h5>
                        <hr>
                        <div style="background-color: #e6e6e6;width: 200px;border-radius: 10px;padding: 10px">
                            <p style="display: inline;font-size: 20px">Available</p>
                        </div>
                        <p style="padding: 10px;font-size: 17px;color: #919191">In Stock</p>
                        <div class="row"
                             style="border-top: 1px solid #e0e0e0;border-bottom: 1px solid #e0e0e0;padding: 10px">
                            <div class="col l3 ">
                                <button onclick="" class="btn waves-effect waves-light"><i
                                            class="mdi-action-bookmark"></i> Save
                                </button>
                            </div>
                            <div class="col l3">
                                <a class="btn waves-effect waves-light confirm_borrow"><i
                                            class="mdi-action-book"></i> Borrow
                                </a>
                            </div>
                            <div class="col l3">
                                <button class="btn waves-effect waves-light"><i class="fa fa-file-pdf"></i> Download
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <div style="width: 100%;background-color: #f4f4f4;border-radius: 10px">
                    <h5 style="text-align:center;padding:20px" class="">All Programing Related Books</h5>
                    <?php
                    $object = new \books\books();
                    $allbooks = $object->suggest_by_cat_books($_GET['book_id']);
                    ?>
                    <div class="crsl" style="width: 90%;display: block;margin-left:auto;margin-right:auto">
                        <?php foreach ($allbooks
                                       as $books) { ?>

                            <div style="margin: 5px">
                                <div id="card-widgets">

                                    <div class="row">
                                        <!-- book-card -->
                                        <div class="col s12 m12 l4">
                                            <div class="product-card">
                                                <div class="card js-til"
                                                     style="width: 175px;border-radius: 10px;height: 302px;transform-style: preserve-3d">
                                                    <div class="card-image waves-effect waves-block waves-light"
                                                         style="height: 251px">
                                                        <!--<a href="#" class="btn-floating btn btn-price waves-effect waves-light  pink accent-2">$189</a>-->
                                                        <img src="../../resource/photos/book/<?php echo $books['photo'] ?>"
                                                             alt="book-img" style="">
                                                    </div>
                                                    <ul class="card-action-buttons" style="margin:-36px 10px 0 0">
                                                        <!--<li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                                                        </li>-->
                                                        <li>
                                                            <a class="btn-floating waves-effect waves-light red accent-2"
                                                               style="height: 30px;width: 30px;transform: translateZ(70px)"><i
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
                                                                            class=""
                                                                            style="font-size: 15px"><?php echo $books['name'] ?>
                                                                        <span style="color:#7a7a7a;font-size: 13px"> - <?php echo substr($books['author'], 0, 50) ?>
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
                                                                class="mdi-navigation-close right"></i> <?php echo $books['name'] ?>
                                                        </span>
                                                        <p>by <?php echo $books['author'] ?></p>
                                                        <hr>
                                                        <a href="bookDetails.php?sbn=<?php echo $books['sbn'] ?>"
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

                        <?php } ?>
                    </div>
                    <div style="padding:10px;text-align:center;display:block;margin-left:auto;margin-right:auto"><a
                                style="font-size: 18px;">View All ►</a></div>
                </div>

                <!--book details-->
                <div class="row"
                     style="background-color: #ececec;margin-right:10%;margin-left: 10%;margin-top: 20px;border-radius: 20px;padding: 15px ">
                    <div class="col l3">
                        <p style="color: #636363; font-size: 25px;border-bottom: 1px solid #c6c6c6"><b>Book Details</b>
                        </p>
                        <p style="color: #636363; font-size: 18px"><b>Book Name :</b></p>
                        <p style="color: #636363; font-size: 18px"><b>Category :</b></p>
                        <p style="color: #636363; font-size: 18px"><b>Author :</b></p>
                        <p style="color: #636363; font-size: 18px"><b>ISBN :</b></p>
                        <p style="color: #636363; font-size: 18px"><b>Publisher :</b></p>
                        <p style="color: #636363; font-size: 18px"><b>Publishe Year :</b></p>
                        <p style="color: #636363; font-size: 18px"><b>Description :</b></p>
                    </div>
                    <div class="col l9">
                        <p style="font-size: 25px;margin-top: 88px"></p>
                        <p style="font-size: 18px"><?php echo $book['name'] ?></p>
                        <p style="font-size: 18px"><?php foreach ($cat as $c) {
                                echo "<a>$c</a>, ";
                            } ?></p>
                        <p style="font-size: 18px"><?php foreach ($author as $a) {
                                echo "<a>$a</a>, ";
                            } ?></p>
                        <p style="font-size: 18px">v<?php echo $book['sbn'] ?></p>
                        <p style="font-size: 18px"><?php echo $book['publisher_name'] ?></p>
                        <p style="font-size: 18px"><?php echo $book['pub_year'] ?></p>
                        <p style="font-size: 18px;word-break: break-all"><?php echo $book['description'] ?></p>
                    </div>
                </div>
            </div>

            <div style="width: 100%;background-color: #ececec;margin:0px;margin-top: 5px;min-height: 500px">
                <h5 style="text-align: center;color: #7e838e;padding: 10px 0px 0px 0px;border-bottom: 1px solid #b9c1d1">
                    Some Reviews</h5>
                <div class="row" style="padding: 10px;margin-bottom: 0px">
                    <div class="col l1">
                        <div style="width: 100%">&nbsp;</div>
                    </div>
                    <div class="col l2">
                        <div style="width: 100%"><img id="img"
                                                      src="../../resource/photos/student/<?php echo $_SESSION['photo'] ?>"
                                                      alt="image"
                                                      style="float: right;width: 70px;height: 70px;border-radius: 50%;border: 3px solid #0ba2ff;">
                        </div>
                    </div>
                    <div class="col l6">
                        <p id="user" style="color:#89a2bc;margin: 0px"><?php echo $_SESSION['name'] ?></p>
                        <textarea id="cmnt" class="a" onkeydown="if (event.keyCode == 13)
                        document.getElementById('cmnt_btn').click()"
                                  style=""></textarea>
                    </div>
                    <div class="col l2">
                        <button onclick="save_cmnt();comnt()" id="cmnt_btn"
                                class="btn btn-floating btn-flat waves-effect left"
                                style="bottom: -85px"><i
                                    class="mdi mdi-send blue-grey-text"></i></button>
                    </div>
                </div>
                <div id="oldComments">
                    <?php
                    $all_cmnt = $cmnt_obj->allCmntByBook($_GET['book_id']);
                    foreach ($all_cmnt as $cmnt) {
                        ?>
                        <div class="row" style="padding: 10px;margin-bottom: 0px">
                            <div class="col l1">
                                <div style="width: 100%">&nbsp;</div>
                            </div>
                            <div class="col l2">
                                <div style="width: 100%"><img src='<?PHP
                                    $path1 = "../../resource/photos/student/" . $cmnt->user_photo;
                                    $path2 = "../../resource/photos/teacher/" . $cmnt->user_photo;
                                    echo file_exists($path1) ? $path1 : $path2;
                                    ?>' alt="image"
                                                              style="float: right;width: 70px;height: 70px;border-radius: 50%;border: 3px solid #0ba2ff;">
                                </div>
                            </div>
                            <div class="col l5">
                                <div style="width: 700px;height: auto;background-color: #ffffff;border-radius: 0px 20px 20px 20px;padding: 1px 10px 1px 10px">
                                    <p style="color:#89a2bc;"><?php echo $cmnt->user_name?><span
                                                style="float: right;color: #b7babc">
                                            <?php echo get_time_ago($cmnt->comment_time)?></span>
                                    </p>

                                    <p><?php echo $cmnt->comment?></p>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
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
<script>
    function book_req() {

        var book_id = "<?php echo $book['id'] ?>";
        var user_id = "<?php echo $_SESSION['std_id']?>";
        var post = {
            "borrow_req": "key",
            "book_id": book_id,
            "user_id": user_id
        };
        $.ajax({
            //cache : false,
            url: "../../controller/borrow_book_ctrl.php",
            type: "POST",
            //dataType : 'JSON',
            data: post,
            success: function (success) {
                if (success === "success") {
                    console.log("ok");
                }
            }

        })
    }

</script>

<script src="../../resource/js/tilt.jquery.js"></script>
<script>
    $('.js-tilt').tilt({
        glare: true,
        maxGlare: .5,
        scale: 1.1
    });

    $('.js-til').tilt({});

    function comnt() {
        var img = document.getElementById("img").src;
        var user = document.getElementById("user").innerHTML;
        var cmnt = document.getElementById("cmnt").value;

        $("#oldComments").prepend('<div class="row" style="padding: 10px;margin-bottom: 0px">\n' +
            '                        <div class="col l1">\n' +
            '                            <div style="width: 100%">&nbsp;</div>\n' +
            '                        </div>\n' +
            '                        <div class="col l2">\n' +
            '                            <div style="width: 100%"><img src="' + img + '" alt="image"\n' +
            '                                                          style="border-radius: 50%;border: 3px solid #0ba2ff;float: right;width: 70px;height: 70px;border-radius: 50%">\n' +
            '                            </div>\n' +
            '                        </div>\n' +
            '                        <div class="col l5">\n' +
            '                            <div style="width: 700px;height: auto;background-color: #ffffff;border-radius: 0px 20px 20px 20px;padding: 1px 10px 1px 10px">\n' +
            '                                <p style="color:#89a2bc;">' + user + '<span style="float: right;color: #b7babc">just now</span> </p>\n' +
            '\n' +
            '                                <p>' + cmnt + '</p>\n' +
            '                            </div>\n' +
            '                        </div>\n' +
            '                    </div>');

        document.getElementById("cmnt").value = "";

    }

    function save_cmnt() {
        var user_id = "<?php echo $_SESSION['std_id']?>";
        var user_name = "<?php echo $_SESSION['name']?>";
        var book_id = "<?php echo $_GET['book_id']?>";
        var photo = "<?php echo $_SESSION['photo']?>";
        var cmnt = document.getElementById("cmnt").value;

        var post = {
            "comment": cmnt,
            "book_id": book_id,
            "user_id": user_id,
            "user_name": user_name,
            "photo": photo
        };
        $.ajax({
            //cache : false,
            url: "../../controller/comment_ctrl.php",
            type: "POST",
            //dataType : 'JSON',
            data: post,
            success: function (success) {
                if (success === "success") {
                    console.log("ok");
                }
            }

        })
    }
</script>

<script>
    $("#oldComments").showMore({
        minheight: 300, // measured in px
        buttontxtmore: 'show more...',
        buttontxtless: 'show less',
        buttoncss: 'show_more_btn',
        animationspeed: 1500
    });
</script>


</body>

</html>