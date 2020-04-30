<header class="header-area">

<!-- Navbar Area -->
<div class="mag-main-menu" id="sticker">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="magNav">

            <!-- Nav brand -->
            <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Nav Content -->
            <div class="nav-content d-flex align-items-center">
                <div class="classy-menu">

                    <!-- Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="archive.php">Archive</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="archive.php">Archive</a></li>
                                    <li><a href="video-post.php">Single Video Post</a></li>
                                    <li><a href="single-post.php">Single Post</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="submit-video.php">Submit Video</a></li>
                                    <li><a href="login.php">Login</a></li>
                                </ul>
                            </li>
                           
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>

                <div class="top-meta-data d-flex align-items-center">
                    <!-- Top Search Area -->
                    <div class="top-search-area">
                        <form action="index.php" method="post">
                            <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                            <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <?php
                    if(isset($_SESSION['id_Type'])) {
                        if($_SESSION['id_Type']=='3'){?>
                    <a href="admin.php" class="login-btn" >Panneau d'admin</a>
                    <?php } }?>
                    <!-- Login -->
                    <?php
                    if(isset($_SESSION['email'])){ ?>
                        <a href="logout.php" class="login-btn" >Déconnexion</a>
                       
                    <?php } 

                    else{ ?>
                    <a href="login.php" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                    <?php } ?>

                    <!-- Submit Video -->
                    <?php 
                        if(isset($_SESSION['id_Type'])) {
                        ?>
                    <a href="submit-video.php" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Submit Video</span></a>
                        <?php } ?>
                </div>
            </div>
        </nav>
    </div>
</div>
</header>