<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="<?php echo BASE_URL ?>">CleanC</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL ?>">Home</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="services.php">Services</a></li>

                    <li>
                        <?php if (isset($_SESSION['id'])): ?>
                            <a href="#">
                            <i class="fa-solid fa-user"></i>
                            <?php echo $_SESSION['login']; ?>
                        </a>
                        <ul>
                            <?php if ($_SESSION['admin']): ?>
                                <li><a href="admin/posts/index.php">Admin panel</a></li> 
                            <?php endif; ?>
                            <li><a href="<?php echo BASE_URL . "logout.php"; ?>">Exit</a></li>
                        </ul>
                    <?php else: ?>
                        <a href="<?php echo BASE_URL . "log.php"; ?>">
                            <i class="fa-solid fa-user"></i>
                            Log In
                        </a>
                        <ul>
                            <li><a href="<?php echo BASE_URL . "reg.php"; ?>">Registration</a></li>
                        </ul>
                    <?php endif; ?>
                        
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</header>