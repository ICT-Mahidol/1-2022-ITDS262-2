<nav class="navbar navbar-expand-lg navbar-light" aria-label="Fifth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="./">Travel Naja</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample05">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" id="menu-allpro" aria-current="page" href="hotel.php">Hotel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="menu-newpro" aria-current="page" href="#">Flight</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="menu-salepro" aria-current="page" href="cars.php">Rent Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="menu-salepro" aria-current="page" href="#">local guide</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="menu-contect" aria-current="page" href="javascript:myaboutus();">contact</a>
                </li>
            </ul>
            <div>
                <ul class="navbar-nav">
                    <?php if ((!isset($_SESSION["user_login"])) && (!isset($_SESSION["admin_login"]))) : ?>
                        <li class="nav-item">
                            <a class="nav-link active nav-login" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active nav-register" href="register.php">Register</a>
                        </li>
                    <?php endif ?>
                    <?php if ((isset($_SESSION["admin_login"]))) : ?>
                        <li class="nav-item">
                            <a class="nav-link active nav-login" href="changepass.php">เปลี่ยนรหัส</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active nav-login" href="/"><i class="bi bi-person-circle">&nbsp;</i><?php echo $_SESSION['admin_login']; ?></a>
                        </li>
                            <a href="logout.php" class="nav-link active nav-login">logout</a>
                        </li>
                    <?php endif ?>
                    <?php if ((isset($_SESSION["user_login"]))) : ?>
                        <li class="nav-item">
                            <a class="nav-link active nav-login" href="changepass.php">เปลี่ยนรหัส</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active nav-login" href="/"><i class="bi bi-person-circle">&nbsp;</i><?php echo $_SESSION['user_login']; ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link active nav-login">logout</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</nav>