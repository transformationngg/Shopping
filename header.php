<?php  include 'condb.php'; 

  $sql = "SELECT * FROM tbl_type";
    // ประมวลผลคำสั่ง SQL
    $stmt = $conn->query($sql);
?>
<!-- Header -->
<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="index.php" class="navbar-brand logo">
                    <img src="banner/devtt.png" width="200" class="img-fluid" alt="Logo"> <!-- ใส่รูปโลโก้ที่นี่ -->
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.php" class="menu-logo">
                      
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                            class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu megamenu active"><a href="index.php">หน้าหลัก</a></li>
                    <li class="has-submenu">
                        <a href="index.php">ประเภทสินค้า <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            
                        </ul>
                    </li>
                    <li><a href="index.php">โปรโมชั่น</a></li>
                    <li><a href="https://www.facebook.com/devtai.com2019" target="_blank">ติดต่อเรา</a></li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                    <li class="nav-item">
                        <a class="nav-link header-login" href="login.php">เข้าสู่ระบบ</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link header-login add-listing" href="register.php"><i class="fa-solid fa-plus"></i>สมัครสมาชิก</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- /Header -->
