<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Arif-->
<!-- * Date: 2/24/2018-->
<!-- * Time: 8:29 PM-->
<!-- */-->
<?php $file_name=basename($_SERVER['SCRIPT_FILENAME'])?>

<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav leftside-navigation">

        <li class="bold <?php if ($file_name == 'lectures.php') {echo "active";} ?>"><a href="../teacher/lectures.php" class="waves-effect waves-cyan"><i class="mdi mdi-file-pdf-box"></i> Lectures</a>
        </li>
        <li class="bold <?php if ($file_name == 'bookRequest.php') {echo "active";} ?>"><a href="../teacher/bookRequest.php" class="waves-effect waves-cyan"><i class="mdi mdi-book-plus"></i> Book Request</a>
        </li>
        <li class="bold <?php if ($file_name == 'borrow-book-request.php') {echo "active";} ?>"><a href="../teacher/borrow-book-request.php" class="waves-effect waves-cyan"><i class="mdi mdi-book-plus"></i> Borrow</a>
        </li>
        <li class="bold"><a href="" class="waves-effect waves-cyan"><i class="mdi mdi-content-save"></i> Saved</a>
        </li>

        <li class="li-hover"><div class="divider"></div></li>
        
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light cyan"><i class="mdi-navigation-menu"></i></a>
</aside>