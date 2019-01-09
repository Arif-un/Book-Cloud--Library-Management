<?php $file_name=basename($_SERVER['SCRIPT_FILENAME']); ?>

<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="../../resource/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../../controller/logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?= $_SESSION['mail'] ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Librarian</p>
                </div>
            </div>
        </li>

        <li class="bold <?php if ($file_name == 'index.php') {echo "active";} ?>"><a href="../admin/index.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
        </li>

        <li class="bold <?php if ($file_name == 'students.php') {echo "active";} ?>"><a href="../admin/students.php" class="waves-effect waves-cyan"><i class="mdi-image-tag-faces"></i> Students</a>
        </li>

        <li class="bold <?php if ($file_name == 'teachers.php') {echo "active";} ?>"><a href="../admin/teachers.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment-ind"></i> Teachers</a>
        </li>


        <li class="bold <?php if ($file_name == 'books.php') {echo "active";} ?>"><a href="../admin/books.php" class="waves-effect waves-cyan"><i class="mdi-av-my-library-books"></i> Books</a>
        </li>

        <li class="bold <?php if ($file_name == 'borrow-book.php') {echo "active";} ?>"><a href="../admin/borrow-book.php" class="waves-effect waves-cyan"><i class="mdi mdi-sim-alert"></i>Borrow Books</a>
        </li>

        <li class="bold <?php if ($file_name == 'BookRequests.php') {echo "active";} ?>"><a href="../admin/BookRequests.php" class="waves-effect waves-cyan"><i class=" mdi-action-book"></i>Books Requests</a>
        </li>



        <li class="li-hover"><div class="divider"></div></li>
        
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
</aside>