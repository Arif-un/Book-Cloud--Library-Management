<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Arif-->
<!-- * Date: 2/24/2018-->
<!-- * Time: 8:27 PM-->
<!-- */-->
<?php
session_start();
include "../../model/nofications.php";
include "../../controller/functions.php";
$obj = new nofications();
$new = $obj->notifyCountById(1, $_SESSION['std_id']);

?>
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color">
            <div class="nav-wrapper">
                <ul class="left">
                    <li><h1 class="logo-wrapper"><a href="../student/index.php" class="brand-logo darken-1"><img
                                        src="../../resource/images/book-cloud.png" alt="Book-cloud logo"></a> <span
                                    class="logo-text">Book-Cloud</span></h1></li>
                </ul>
                <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="mdi-action-search"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2"
                           placeholder="Explore Books"/>
                </div>
                <ul class="right hide-on-med-and-down">
                    
                    <li>
                        <!--<a class="dropdown-button waves-effect waves-light white-text profile-btn" href="javascript:void(0);" data-activates="profile-dropdown2">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>-->
                        <div class="waves-effect" style="width:45px;height: 45px;border-radius: 50%;"><a
                                    href=""></a><img
                                    src="http://localhost/Book-Cloud\/resource/photos/student/<?php echo $_SESSION['photo'] ?>"
                                    style="width: 45px;height:45px;border-radius: 50%;"></div>
                    </li>
                    <li>
                        <a class="dropdown-button waves-effect waves-light white-text profile-btn"
                           href="javascript:void(0);" data-activates="profile-dropdown2"><?php echo $_SESSION['name'] ?>
                            <i class="mdi-navigation-arrow-drop-down right"></i></a>

                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button"
                           data-activates="notifications-dropdown"><i class="mdi-social-notifications">
                                <?php if ($new->unseen > 0) { ?>
                                    <small class="notification-badge"
                                           style="top:-86px;right: -26px"> <?php echo $new->unseen ?></small>
                                <?php } ?>
                            </i>

                        </a>
                    </li>
                    <!-- <li><a href="#" data-activates="chat-out"
                           class="waves-effect waves-block waves-light chat-collapse"><i
                                    class="mdi-communication-chat"></i></a>
                    </li> -->
                </ul>
                <ul id="profile-dropdown2" class="dropdown-content">
                    <li><a href="#" style="display: inline-flex"><i class="mdi-action-face-unlock"
                                                                    style="font-size: 25px;"></i> &nbsp;Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../../controller/logout.php" style="display: inline-flex"><i
                                    class="mdi-hardware-keyboard-tab" style="font-size: 25px;"></i> &nbsp;Logout</a>
                    </li>
                </ul>
               
                <!-- notifications-dropdown -->
                <ul id="notifications-dropdown" class="dropdown-content"
                    style="width: 300px;overflow-y:scroll;max-height: 400px;overflow-x:hidden">
                    <li>
                        <h5>NOTIFICATIONS <?php if ($new->unseen > 0) { ?> <span
                                    class="new badge"><?php echo $new->unseen ?></span> <?php } ?> </h5>
                    </li>
                    <li class="divider"></li>
                    <?php
                    $all = $obj->allNotificationsById(1, $_SESSION['std_id']);

                    foreach ($all as $item) { ?>

                        <li id="<?php echo $item->id ?>" onclick="seenNotify(this)" class="waves-effect"
                            style="display:block; max-width: 300px;
                                    white-space: nowrap;background-color:<?php echo ($item->seen === "0") ? '#dfe4f8' : '' ?> ">
                            <a style="height: 100%;width: 100%;word-wrap:break-word;"
                               href="../../view/student/<?php if ($item->title == "Request Decline") {
                                   echo "borrow-book-request.php";
                               } elseif ($item->title == "Borrow Request Accepted" || $item->title == "Book Renewed") {
                                   echo "borrow-book-request.php #test-swipe-2";
                               } elseif ($item->title == "Book Returnd Successfully") {
                                   echo "borrow-book-request.php #test-swipe-3";
                               } ?>"><?php echo $item->title ?><span
                                        style="font-size: 12px;color: #6b6f78;float: right"><?php echo get_time_ago($item->created_time); ?></span>
                            </a>
                            nbvvnmb<?php echo $item->body; ?>

                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>