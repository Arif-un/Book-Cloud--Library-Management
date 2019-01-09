<?php

include "../../model/nofications.php";
include "../../controller/functions.php";
$obj = new nofications();
$new=$obj->notifyCount(0);
?>

<div class="navbar-fixed">
    <nav class="navbar-color">
        <div class="nav-wrapper">
            <ul class="left">
                <li><h1 class="logo-wrapper"><a href="../admin/index.php" class="brand-logo darken-1"><img
                                    src="../../resource/images/book-cloud.png" alt="logo"></a> <span class="logo-text">Book Cloud</span>
                    </h1></li>
            </ul>
            <div class="header-search-wrapper hide-on-med-and-down">
                <i class="mdi-action-search"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Books"/>
            </div>
            <ul class="right hide-on-med-and-down">
                
                <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fP{PPllscreen"><i
                                class="mdi-action-settings-overscan"></i></a>
                </li>

                <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button"
                       data-activates="notifications-dropdown"><i class="mdi-social-notifications">
                            <?php if($new->unseen>0){?>
                            <small class="notification-badge" style="top:-86px;right: -26px"> <?php echo $new->unseen ?></small>
                            <?php }?>
                        </i>

                    </a>
                </li>
                
            </ul>
            
            <ul id="notifications-dropdown" class="dropdown-content" style="width: 300px;overflow-y:scroll;max-height: 400px;overflow-x:hidden">
                <li>
                    <h5>NOTIFICATIONS <?php if($new->unseen>0){?> <span class="new badge"><?php  echo $new->unseen ?></span> <?php }?> </h5>
                </li>
                <li class="divider"></li>
                <?php
                $all = $obj->allNotifications(0);

                foreach ($all as $item) { ?>

                    <li id="<?php echo $item->id ?>" onclick="seenNotify(this)" class="waves-effect"
                        style="background-color:<?php echo ($item->seen === "0") ? '#dfe4f8' : '' ?> ">
                        <a style="height: 100%;width: 100%" href="../../view/admin/<?php if ($item->title == "Borrow Requests") {
                            echo "borrow-book.php";
                        } elseif ($item->title == "Book Request") {echo "BookRequests.php";}?>"> <?php echo $item->title ?> <span
                                    style="font-size: 12px;color: #6b6f78;float: right"><?php echo get_time_ago($item->created_time); ?></span>
                            <p style="font-size: 14px"><?php echo $item->body; ?></p></a>

                    </li>
                <?php } ?>
            </ul>

        </div>
    </nav>
</div>