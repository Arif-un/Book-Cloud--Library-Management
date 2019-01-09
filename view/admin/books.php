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

                <ul id="tabs-swipe-demo" class="tabs tabs-icon">
                    <li class="tab col s3 "><a class="active" href="#test-swipe-1"><i
                                    class="mdi-av-my-library-books prefix"></i> Books</a></li>
                    <li class="tab col s3 "><a href="#test-swipe-2"><i class="mdi-action-group-work prefix"></i> Book
                            Category</a></li>
                    <li class="tab col s3 "><a href="#test-swipe-3"><i class="mdi-social-person prefix"></i> Authors</a>
                    </li>
                    <li class="tab col s3 "><a href="#test-swipe-4"><i class="mdi-editor-publish prefix"></i> Publisher</a>
                    </li>

                </ul>

                <div id="test-swipe-1" class="col s12">

                    <a class="btn-floating tooltipped btn-large waves-effect waves-light modal-trigger right scale-transition"
                       href="#modal1"
                       style="margin-top: -15px"
                       data-position="left" data-delay="50" data-tooltip=" Add A New Book"><i
                                class="mdi mdi-book-plus"></i> Add
                    </a>

                    <!-- ADD BOOK MODAL-->
                    <div id="modal1" class="modal" style="width: 90%; max-height: 85%">
                        <div class="modal-content">
                            <h5>Add A New Book</h5>
                            <button
                                    class="btn-flat btn-floating waves-effect waves-ripple  modal-action modal-close right"
                                    type="button" style="margin-top: -45px ">
                                <i class="mdi mdi-close-circle " style="color: gray"></i>
                            </button>

                            <hr>
                            <form action="../../controller/bookCtrl.php" method="post" enctype="multipart/form-data">
                                <div class="" style="padding: 10px; ">

                                    <div class="row">
                                        <div class="col l6 center-align ">
                                            <img id="output" class="card"
                                                 src="../../resource/images/book-placeholder.png"
                                                 style="margin: auto; width: 250px;height: 300px;">
                                        </div>

                                        <div class="input-field col l6">
                                            <div class="input-field ">
                                                <i class="mdi-av-my-library-books prefix"></i>
                                                <input name="book_name" id="icon_prefix" type="text" class="validate">
                                                <label for="icon_prefix">Book Name</label>
                                            </div>


                                            <div class="input-field ">
                                                <i class="mdi-editor-format-list-numbered prefix"></i>
                                                <input name="sbn" id="icon_prefix" type="text" class="validate">
                                                <label for="icon_prefix">SBN</label>
                                            </div>
                                            <div class="input-field ">

                                                <select name="cat[]" multiple>
                                                    <option value="" disabled selected>Choose Category</option>
                                                    <?php include_once "../../model/book_cat_aut_pub.php";
                                                    $obj = new books_category\books_cat();
                                                    $all_cat = $obj->get_all_cat();
                                                    foreach ($all_cat as $cat) {
                                                        ?>
                                                        <option value="<?php echo $cat['id'] ?>"><?php echo $cat['cat_name'] ?></option>
                                                    <?php } ?>

                                                </select>

                                            </div>

                                            <div class="input-field">
                                                <select name="authorName[]" multiple>
                                                    <option value="" disabled selected>Select A Author</option>
                                                    <?php include_once "../../model/book_cat_aut_pub.php";
                                                    $obj = new \author\author();
                                                    $all_author = $obj->get_all_author();
                                                    foreach ($all_author as $author) { ?>
                                                        <option value="<?php echo $author['id'] ?>"><?php echo $author['author_name'] ?></option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-left: 20px; padding-right: 20px">


                                        <div class="input-field col l3">

                                            <select name="pub_name">
                                                <option value="" disabled selected>Select Publisher</option>
                                                <?php include_once "../../model/book_cat_aut_pub.php";
                                                $obj = new \publisher\publisher();
                                                $all_pub = $obj->get_all_pub();
                                                foreach ($all_pub as $pub) { ?>
                                                    <option value="<?php echo $pub['id'] ?>"><?php echo $pub['publisher_name'] ?></option>
                                                <?php } ?>
                                            </select>

                                        </div>

                                        <div class="input-field col l3">
                                            <span class="mdi mdi-counter prefix"></span>
                                            <input name="quan" id="icon_prefix" type="text" class="validate">
                                            <label for="icon_prefix">Quantity</label>
                                        </div>
                                        <div class="input-field col l3">
                                            <i class="mdi mdi-calendar-range prefix"></i>
                                            <input name="pub_year" id="icon_prefix" type="text" class="validate">
                                            <label for="icon_prefix">Publish Year</label>
                                        </div>

                                        <div class="input-field col l3">
                                            <div class="file-field input-field">
                                                <div class="btn blue waves-effect">
                                                    <span>Photo</span>
                                                    <input name="photo" type="file" accept="image/*"
                                                           onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

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

                                        <div class="input-field col l12">
                                            <span class="mdi mdi-file-pdf prefix"></span>
                                            <input name="pdf" id="icon_prefix" type="text" class="validate">
                                            <label for="icon_prefix">PDF Link</label>
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
                            <h4 class="header">Book Lists</h4>
                            <hr>
                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Book Name</th>
                                    <th>ISBN</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Publisher</th>
                                    <th>Publish Year</th>
                                    <th>Stock</th>
                                    <th>Pdf Link</th>
                                    <!--<th>Photo</th>-->
                                    <th>Oparations</th>

                                </tr>
                                </thead>

                                <tbody>
                                <?php include_once "../../model/book_cat_aut_pub.php";
                                      include_once "../../model/books.php";
                                $bok = new \books\books();
                                $cat = new \books_category\books_cat();
                                $aut = new \author\author();
                                $pub = new \publisher\publisher();

                                $all_book = $bok->all_books();

                                $serial = 1;
                                foreach ($all_book as $book) { ?>
                                    <tr>

                                        <td><?php echo $serial++; ?></td>
                                        <td><?php echo $book['name'] ?></td>
                                        <td><?php echo $book['sbn'] ?></td>
                                        <td><?php echo $book['cat'] ?></td>
                                        <td><?php echo $book['author']?></td>
                                        <td><?php echo $book['publisher_name'] ?></td>
                                        <td><?php echo $book['pub_year'] ?></td>
                                        <td><?php echo $book['quantity'] ?></td>
                                        <td><?php echo $book['pdf_link'] ?></td>
                                        <!--<td><?php /*echo $book['photo'] */?></td>-->
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

                <div id="test-swipe-2" class="col s12 ">

                    <a class="btn-floating tooltipped btn-large waves-effect waves-light modal-trigger right scale-transition"
                       href="#modal2"
                       style="margin-top:-15px"
                       data-position="left" data-delay="50" data-tooltip=" Add A New Category"><i
                                class="mdi-content-add"></i> Add
                    </a>

                    <!--ADD CATEGORY MODAL-->
                    <div id="modal2" class="modal" style="width: 50%;">
                        <div class="modal-content">
                            <h5>Add A New Book Category</h5>
                            <hr>
                            <br>
                            <form action="../../controller/book_cat_aut_pub_Ctrl.php" method="post">

                                <div class="input-field ">
                                    <i class="mdi-action-group-work prefix"></i>
                                    <input name="books_cat" id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Category Name</label>
                                </div>

                                <button
                                        class="btn red waves-effect waves-ripple  modal-action modal-close right"
                                        type="button" style="margin-left: 5px">
                                    <i class="mdi-navigation-close left"></i>
                                    Cancel
                                </button>
                                <button class="btn cyan waves-effect waves-light right" type="submit">
                                    Add Category
                                    <i class="mdi-content-send right"></i>
                                </button>

                                <br>
                                <br>


                            </form>
                        </div>
                    </div>

                    <div id="table-datatables">

                        <div class="col s12 m8 l9">
                            <h4 class="header">Book Categorys</h4>
                            <hr>
                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Book_Category</th>
                                    <th>Oparations</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php include_once "../../model/book_cat_aut_pub.php";
                                $obj = new \books_category\books_cat();
                                $all_cat = $obj->get_all_cat();
                                $serial = 1;
                                foreach ($all_cat as $cat) { ?>
                                    <tr>
                                        <td><?php echo $serial++; ?></td>
                                        <td><?php echo $cat['cat_name'] ?></td>
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

                <div id="test-swipe-3" class="col s12 ">

                    <a class="btn-floating tooltipped btn-large waves-effect waves-light modal-trigger right"
                       href="#modal3"
                       style="margin-top: -15px"
                       data-position="left" data-delay="50" data-tooltip=" Add A New Author"><i
                                class="mdi-social-person-add"></i> Add
                    </a>

                    <!--ADD AUTHOR MODAL-->
                    <div id="modal3" class="modal" style="width: 60%; max-height: 75%">
                        <div class="modal-content">
                            <h5>Add A New Book Author</h5>
                            <hr>
                            <br>
                            <form action="../../controller/book_cat_aut_pub_Ctrl.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col l6">
                                        <img id="author_pic" src="../../resource/images/avatar.jpg"
                                             style="width: 200px;height: 200px ; border-radius: 50%; margin-left: 20%"
                                             class="card"/>
                                    </div>
                                    <div class="col l6">
                                        <div class="input-field ">
                                            <i class="mdi-social-person-outline prefix"></i>
                                            <input name="author" id="icon_prefix" type="text" class="validate">
                                            <label for="icon_prefix">Author's Name</label>
                                        </div>

                                        <div class="input-field">
                                            <div class="file-field input-field">
                                                <div class="btn blue waves-effect">
                                                    <span>Photo</span>
                                                    <input name="photo" type="file" accept="image/*"
                                                           onchange="document.getElementById('author_pic').src = window.URL.createObjectURL(this.files[0])">

                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text"">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-field ">
                                    <i class="mdi mdi-details prefix"></i>
                                    <textarea name="author_details" class="materialize-textarea"></textarea>
                                    <label for="icon_prefix">Author's details</label>
                                </div>

                                <button
                                        class="btn red waves-effect waves-ripple  modal-action modal-close right"
                                        type="button" style="margin-left: 5px">
                                    <i class="mdi-navigation-close left"></i>
                                    Cancel
                                </button>
                                <button class="btn cyan waves-effect waves-light right" type="submit">
                                    Save
                                    <i class="mdi-content-send right"></i>
                                </button>

                                <br>
                                <br>
                            </form>
                        </div>
                    </div>

                    <div id="table-datatables">

                        <div class="col s12 m8 l9">
                            <h4 class="header">Authors</h4>
                            <hr>
                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Author's Name</th>
                                    <th>Description</th>
                                    <th>photo</th>
                                    <th>Oparations</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php include_once "../../model/book_cat_aut_pub.php";
                                 include_once "../../model/template_info.php";
                                $obj = new \author\author();
                                $all_author = $obj->get_all_author();
                                $serial = 1;
                                foreach ($all_author as $author) { ?>
                                    <tr>
                                        <td><?php echo $serial++; ?></td>
                                        <td><?php echo $author['author_name'] ?></td>
                                        <td><?php echo $author['description'] ?></td>
                                        <td><img src="<?php echo "../../resource/photos/author/".$author['photo'] ?>" style="width: 50px;height: 50px;border-radius: 50%;border:3px solid #607d8b "></td>
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

                <div id="test-swipe-4" class="col s12 ">

                    <a class="btn-floating tooltipped btn-large waves-effect waves-light modal-trigger right"
                       href="#modal4"
                       style="margin-top: -15px"
                       data-position="left" data-delay="50" data-tooltip=" Add A New Publisher"><i
                                class="mdi-content-add"></i> Add
                    </a>

                    <div id="modal4" class="modal" style="width: 50%;">
                        <div class="modal-content">
                            <h5>Add A New Book Publisher</h5>
                            <hr>
                            <br>
                            <form action="../../controller/book_cat_aut_pub_Ctrl.php" method="post">

                                <div class="input-field ">
                                    <i class="mdi-editor-publish prefix"></i>
                                    <input name="publisher" id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Publisher's Name</label>
                                </div>

                                <button
                                        class="btn red waves-effect waves-ripple  modal-action modal-close right"
                                        type="button" style="margin-left: 5px">
                                    <i class="mdi-navigation-close left"></i>
                                    Cancel
                                </button>
                                <button class="btn cyan waves-effect waves-light right" type="submit">
                                    Save
                                    <i class="mdi-content-send right"></i>
                                </button>

                                <br>
                                <br>

                            </form>
                        </div>
                    </div>

                    <div id="table-datatables">

                        <div class="col s12 m8 l9 ">
                            <h4 class="header">Publisher's</h4>
                            <hr>
                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Publisher Name</th>
                                    <th>Oparations</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php include_once "../../model/book_cat_aut_pub.php";
                                $obj = new \publisher\publisher();
                                $all_pub = $obj->get_all_pub();
                                $serial = 1;
                                foreach ($all_pub as $pub) { ?>
                                    <tr>
                                        <td><?php echo $serial++; ?></td>
                                        <td><?php echo $pub['publisher_name'] ?></td>
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
            button: "OK!"
        });
    </script>
    <?php $_SESSION['msg']='0';} ?>
</body>

</html>