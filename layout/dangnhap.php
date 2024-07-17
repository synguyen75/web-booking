<?php
session_start();
include "../PDO/khachhang.php";
$loi = [];
if (isset($_POST['dangnhap'])) {
    $tk = $_POST['tk'];
    $mk = $_POST['mk'];
    if (empty($tk)) {
        $loi[] = "Vui lòng nhập tên đăng nhập";
        goto thoi2;
    }
    if (empty($mk)) {
        $loi[] = "Vui lòng nhập mật khẩu";
        goto thoi2;
    }
    $taikhoan = khachhang($tk, $mk);
    // print_r($taikhoan);

    if (empty($loi)) {
        if (!empty($taikhoan)) {
            extract($taikhoan);
            $_SESSION['login'] = $quyen;
            $_SESSION['tk'] = $taikhoan;
            //  print_r($_SESSION['tk']) ;
            // unset($_SESSION['layMa']);
            header("Location: ../admin/index.php");

            //}  elseif ($tk == "admin" && $mk == "121212") {
            //     $_SESSION['login'] = "admin";
            //     $_SESSION['login']['quyen'] = "admin";

            //     header("Location: ../admin/index.php");

        } else {
            $loi[] = "Tài khoản không tồn tại";
        }
    }
    thoi2:
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mau.css">
    <script src="https://kit.fontawesome.com/c9f5871d83.js" crossorigin="anonymous"></script>
    <title>Space</title>
    <style>
        .header h2 {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="header">
                <h2>Chào mừng! đến với Sogo</h2>
                <?php
                echo "<h4 class='loidn'>" . implode($loi) . "</h4>";
                ?>
            </div>
            <form action="" method="post">
                <div class="input">
                    <input type="text" placeholder="Tên đăng nhập" name="tk">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input">
                    <input type="password" placeholder="Mật khẩu" name="mk">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="forget">
                    <label style="color: black;" onmouseover="this.style.color='#ee9820'" onmouseout="this.style.color='black'"><a href="quenmk.php">Quên mật khẩu</a></label>
                </div>
                <div class="btn">
                    <button type="submit" name="dangnhap">Đăng Nhập</button>
                    <button><a href="dangki.php">Đăng Kí</a></button>
                </div>
            </form>
            <div class="with">
                <div class="fb">
                    <a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a>
                </div>
                <div class="gg">
                    <a href="#"><i class="fa-brands fa-twitter"></i>Twitter</a>
                </div>
            </div>
        </div>
        <div class="right">
            <img src="../images/dn3.jpg">
        </div>
    </div>
</body>

</html>