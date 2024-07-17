<?php
ob_start();
include '../PDO/pdo.php';
include 'model/user.php';
include 'model/phong.php';
include 'model/khachsan.php';
include 'model/loai.php';
include 'model/tiennghi.php';
include 'model/donhang.php';
include 'model/binhluan.php';
include 'view/header.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // NGƯỜI DÙNG
        case 'user':
            $rows = truyVanUser();
            if ($_SESSION['tk']['quyen'] == 'staff') {
                $rows = truyVanUserKhachHang();
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($_SESSION['tk']['quyen'] == 'staff') {
                    $rows = null;
                    $rows[0] = truyVan1UserKhachHang($_POST['loc']);
                } else {
                    $rows = null;
                    $rows[0] = truyVan1User($_POST['loc']);
                }
            }

            include 'view/listuser.php';
            break;
        case 'adduser':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $dir = '../../img/' . rand(1, 1000) . $_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], $dir);
                addUser($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['username'], $_POST['pass'], $_POST['quyen'], $dir);
                header('location: index.php?act=user');
            }
            include 'view/adduser.php';
            break;
        case 'deleteuser':
            deleteUser($_GET['maKhachHang']);
            header('location: index.php?act=user');
            break;
        case 'updateuser':
            $maKhachHang = $_GET['maKhachHang'];
            $row = truyVan1User($maKhachHang);
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['file'])) {
                    $dir = '../../img/' . rand(1, 1000) . $_FILES['file']['name'];
                    move_uploaded_file($_FILES['file']['tmp_name'], $dir);
                    updateUserImage($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['username'], $_POST['pass'], $_POST['quyen'], $dir, $maKhachHang);
                    $row = truyVan1User($maKhachHang);
                    header('location: index.php?act=user');
                } else {
                    updateUser($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['username'], $_POST['pass'], $_POST['quyen'], $maKhachHang);
                    $row = truyVan1User($maKhachHang);
                    header('location: index.php?act=user');
                }
            }
            include 'view/updateuser.php';
            break;
            // ĐƠN HÀNG
        case 'donhang':
            $rows = truyVanDonHang();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rows = null;
                $rows[0] = truyVan1DonHang($_POST['loc']);
            }
            include 'view/donhang.php';
            break;
        case 'deletedonhang':
            deleteDonHang($_GET['maDonHang']);
            header('location: index.php?act=donhang');
            break;
        case 'updatedonhang':
            updateDonHang($_GET['maDonHang']);
            header('location: index.php?act=donhang');
            break;
            // PHÒNG
        case 'phong':
            $rows = truyVanPhong();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rows = null;
                $rows[0] = truyVan1Phong($_POST['loc']);
            }
            include 'view/phong.php';
            break;
        case 'addphong':
            $khachSan = truyVanKhachSan();
            $loai = truyVanLoai();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $dir = '../../img/' . rand(1, 1000) . $_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], $dir);
                addPhong($_POST['KhachSan'], $_POST['loai'], $_POST['gia'], $_POST['giuong'], $_POST['dienTich'], $dir);
                header('location: index.php?act=phong');
            }
            include 'view/addphong.php';
            break;
        case 'deletephong':
            deletePhong($_GET['maPhong']);
            header('location: index.php?act=phong');
            break;
        case 'updatephong':
            $maPhong = $_GET['maPhong'];
            $row = truyVan1Phong($maPhong);
            $khachSan = truyVanKhachSan();
            $loai = truyVanLoai();
            $tenKhachSan = truyVan1KhachSan($row['maKhachSan']);
            $tenLoai = truyVan1Loai($row['maLoaiPhong']);
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['file'])) {
                    $dir = '../../img/' . rand(1, 1000) . $_FILES['file']['name'];
                    move_uploaded_file($_FILES['file']['tmp_name'], $dir);
                    updatePhongImage($_POST['maKhachSan'], $_POST['loai'], $_POST['gia'], $_POST['giuong'], $_POST['dienTich'], $dir, $maPhong);
                    header('location: index.php?act=phong');
                } else {
                    updatePhong($_POST['KhachSan'], $_POST['loai'], $_POST['gia'], $_POST['giuong'], $_POST['dienTich'], $maPhong);
                    header('location: index.php?act=phong');
                }
            }
            include 'view/updatephong.php';
            break;
            // BÌNH LUẬN
        case 'binhluan':
            $rows = truyVanBinhLuan();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rows = null;
                $rows[0] = truyVan1BinhLuan($_POST['loc']);
            }
            include 'view/binhluan.php';
            break;
            // KHÁCH SẠN
        case 'deletebinhluan':
            deleteBinhLuan($_GET['maBinhLuan']);
            header('location: index.php?act=binhluan');
            break;
        case 'khachsan':
            $rows = truyVanKhachSan();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rows = null;
                $rows[0] = truyVanKhachSan_1($_POST['loc']);
            }
            include 'view/khachsan.php';
            break;
        case 'loaiphong':
            $rows = truyVanLoai();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rows = null;
                $rows[0] = truyVan1Loai($_POST['loc']);
            }
            include 'view/loaiphong.php';
            break;
        case 'themks':
            $loi = [];
            if (isset($_POST['name'])) {

                $name = $_POST['name'];
                $diadiem = $_POST['diadiem'];
                $tinh = $_POST['tinh'];
                $gia = $_POST['gia'];
                $sao = $_POST['sao'];
                $nhah = isset($_POST['nhah']) ? true : false;
                $beboi = isset($_POST['beboi']) ? true : false;
                $wifi = isset($_POST['wifi']) ? true : false;
                $gym = isset($_POST['gym']) ? true : false;
                $maylanh = isset($_POST['maylanh']) ? true : false;
                $thuoc = isset($_POST['thuoc']) ? true : false;
                if (empty($name)) {
                    $loi[] = "Vui lòng nhập tên khách sạn";
                    goto loi;
                }
                if (empty($diadiem)) {
                    $loi[] = "Vui lòng nhập địa chỉ khách sạn";
                    goto loi;
                }
                if (empty($tinh)) {
                    $loi[] = "Vui lòng nhập tỉnh khách sạn";
                    goto loi;
                }
                if (empty($gia)) {
                    $loi[] = "Vui lòng giá  khách sạn";
                    goto loi;
                }
                if (empty($sao)) {
                    $loi[] = "Vui lòng sao khách sạn";
                    goto loi;
                }
                if ($sao > 5) {
                    $loi[] = "Sao khách sạn không được lớn hơn 5";
                    goto loi;
                }
                if (empty($loi)) {
                    $link_anh = [];
                    for ($i = 0; $i < count($_FILES['img']['name']); $i++) {
                        $ten_tep = $_FILES['img']['name'][$i];
                        $duong_dan_tam_thoi = $_FILES['img']['tmp_name'][$i];
                        $thu_muc = "../../img/" . rand(1, 1000);
                        // Tạo đường dẫn đầy đủ cho tệp tin
                        $duong_dan_cuoi_cung = $thu_muc . $ten_tep;

                        // Kiểm tra và di chuyển tệp tin
                        if (move_uploaded_file($duong_dan_tam_thoi, $duong_dan_cuoi_cung)) {
                            // Xử lý thành công, ví dụ: tạo đường link đầy đủ
                            $link_anh[$i] = $thu_muc . $ten_tep;
                        } else {
                            // Ghi lại lỗi vào mảng $loi
                            $loi[] = 'Lỗi di chuyển ảnh ' . $ten_tep . ': ' . error_get_last()['message'];
                        }
                    }
                }
                addkhachsan($name, $diadiem, $tinh, $gia, $sao, $link_anh[0], $link_anh[1], $link_anh[2], $link_anh[3], $nhah, $beboi, $gym, $wifi, $maylanh, $thuoc);
                header("location: index.php?act=khachsan");
            }
            loi:

            include 'view/themks.php';
            break;
        case 'updateKhachSan':
            $loi = [];
            if (isset($_GET['maKhachSan'])) {
                $id = intval($_GET['maKhachSan']);
                $rows = truyVanKhachSan_1($id);
            } else {
                $loi[] = "Không tìm thấy khách sạn cần sửa";
            }
            if (isset($_POST['name'])) {

                $name = $_POST['name'];
                $diadiem = $_POST['diadiem'];
                $tinh = $_POST['tinh'];
                $gia = $_POST['gia'];
                $sao = $_POST['sao'];
                $nhah = isset($_POST['nhah']) ? true : false;
                $beboi = isset($_POST['beboi']) ? true : false;
                $wifi = isset($_POST['wifi']) ? true : false;
                $gym = isset($_POST['gym']) ? true : false;
                $maylanh = isset($_POST['maylanh']) ? true : false;
                $thuoc = isset($_POST['thuoc']) ? true : false;
                if (empty($name)) {
                    $loi[] = "Vui lòng nhập tên khách sạn";
                    goto loi1;
                }
                if (empty($diadiem)) {
                    $loi[] = "Vui lòng nhập địa chỉ khách sạn";
                    goto loi1;
                }
                if (empty($tinh)) {
                    $loi[] = "Vui lòng nhập tỉnh khách sạn";
                    goto loi1;
                }
                if (empty($gia)) {
                    $loi[] = "Vui lòng giá  khách sạn";
                    goto loi1;
                }
                if (empty($sao)) {
                    $loi[] = "Vui lòng sao khách sạn";
                    goto loi1;
                }
                if ($sao > 5) {
                    $loi[] = "Sao khách sạn không được lớn hơn 5";
                    goto loi1;
                }
                $ten_tep = $_FILES['img']['name'];
                $duong_dan_tam_thoi = $_FILES['img']['tmp_name'];
                $thu_muc = __DIR__ . "/anhadmin/";
                // Tạo đường dẫn đầy đủ cho tệp tin
                $duong_dan_cuoi_cung = $thu_muc . $ten_tep;
                $link_anh = '';
                // Kiểm tra và di chuyển tệp tin
                if (move_uploaded_file($duong_dan_tam_thoi, $duong_dan_cuoi_cung)) {
                    // Xử lý thành công, ví dụ: tạo đường link đầy đủ
                    $link_anh = "http://localhost/Nhom%2012/admin/anhadmin/" . $ten_tep;
                }
                if (empty($loi)) {
                    if ($link_anh != '') {
                        anhks($name, $diadiem, $tinh, $gia, $sao, $link_anh, $nhah, $beboi, $gym, $wifi, $maylanh, $thuoc, $id);
                        header("location: index.php?act=khachsan");
                    } else {
                        noanhks($name, $diadiem, $tinh, $gia, $sao, $nhah, $beboi, $gym, $wifi, $maylanh, $thuoc, $id);
                        header("location: index.php?act=khachsan");
                    }
                }
            }
            loi1:
            include "view/suakhachsan.php";
            break;
        case 'deleteKhachSan':
            if (isset($_GET['maKhachSan'])) {
                $id = intval($_GET['maKhachSan']);
                xoaks($id);
                header("Location: index.php?act=khachsan");
            } else {
                echo "Không xác định sản phẩm cần xóa!!";
            }
            break;
        case "themloai":
            $loi = [];
            if (isset($_POST['name'])) {
                $name = $_POST['name'];
                $nhah = isset($_POST['nhah']) ? true : false;
                $beboi = isset($_POST['beboi']) ? true : false;
                $wifi = isset($_POST['wifi']) ? true : false;
                $gym = isset($_POST['gym']) ? true : false;
                $maylanh = isset($_POST['maylanh']) ? true : false;
                $thuoc = isset($_POST['thuoc']) ? true : false;
                if (empty($name)) {
                    $loi[] = "Vui lòng nhập Loại phòng";
                    goto thoi;
                }
                if (empty($loi)) {
                    addloai($name, $nhah, $beboi, $gym, $wifi, $maylanh, $thuoc);
                }
            }
            thoi:
            include "view/themloai.php";
            break;
        case "updateLoaiPhong":
            $loi = [];
            if (isset($_GET['maLoaiPhong'])) {
                $id = intval($_GET['maLoaiPhong']);
                $rows = truyvanloaiphong($id);
            } else {
                $loi[] = "Không tìm thấy khách sạn cần sửa";
            }
            if (isset($_POST['name'])) {
                $name = $_POST['name'];
                $nhah = isset($_POST['nhah']) ? true : false;
                $beboi = isset($_POST['beboi']) ? true : false;
                $wifi = isset($_POST['wifi']) ? true : false;
                $gym = isset($_POST['gym']) ? true : false;
                $maylanh = isset($_POST['maylanh']) ? true : false;
                $thuoc = isset($_POST['thuoc']) ? true : false;
                if (empty($name)) {
                    $loi[] = "Vui lòng nhập Loại phòng";
                    goto thoi2;
                }
                if (empty($loi)) {
                    sualoai($name, $nhah, $beboi, $gym, $wifi, $maylanh, $thuoc, $id);
                    $loi[] = "Sửa thành công";
                }
            }
            thoi2:
            include "view/sualoai.php";
            break;
        case 'deleteLoaiPhong':
            if (isset($_GET['maLoaiPhong'])) {
                $id = intval($_GET['maLoaiPhong']);
                xoaloai($id);
                header("Location: index.php?act=loaiphong");
            } else {
                echo "Không xác định sản phẩm cần xóa!!";
            }
            break;
            // TIỆN NGHI
        case 'tiennghi':
            $rows = truyVanTienNghi();
            include 'view/tiennghi.php';
            break;
        case 'thongke':
            $rows = truyVanDonHang();
            // THỐNG KÊ THEO THÁNG
            $cacThang  = [];
            $tong = 0;
            for ($i = 1; $i <= 12; $i++) {
                $cacThang[$i] = 0;
            }
            foreach ($rows as $key => $value) {
                // echo $value['ngayDat'];
                $time = strtotime($value['ngayDat']);
                $layThang = date('m', $time);
                $layThang = intval($layThang);
                foreach ($cacThang as $index => $vl) {
                    if ($index == $layThang) {
                        $tong += $value['tongDonHang'];
                        $cacThang[$index] = $cacThang[$index] + $value['tongDonHang'];
                    }
                }
            }
            $json = json_encode($cacThang);
            // THỐNG KÊ THEO MÙA
            $cacMua = [
                'xuan' => 0,
                'ha' => 0,
                'thu' => 0,
                'dong' => 0
            ];
            foreach ($rows as $key => $value) {
                $time = strtotime($value['ngayDat']);
                $layNgay = date('m-d', $time);
                if ($layNgay >= '03-21' && $layNgay <= '06-21') {
                    $cacMua['xuan'] += $value['tongDonHang'];
                } else if ($layNgay > '06-22' && $layNgay < '09-22') {
                    $cacMua['ha'] += $value['tongDonHang'];
                } elseif ($layNgay > '09-23' && $layNgay < '12-23') {
                    $cacMua['thu'] += $value['tongDonHang'];
                } else {
                    $cacMua['dong'] += $value['tongDonHang'];
                }
            }
            $max = max($cacMua);
            foreach ($cacMua as $key => $value) {
                if ($value == $max) {
                    $max = $key;
                    break;
                }
            }
            if ($max == 'xuan') {
                $max = "Mùa Xuân";
            } elseif ($max == 'ha') {
                $max = "Mùa Hạ";
            } elseif ($max == 'thu') {
                $max = "Mùa Thu";
            } elseif ($max == 'dong') {
                $max = "Mùa Đông";
            }
            $theoMua = json_encode($cacMua);
            // THỐNG KÊ TỈ LỆ LẤP ĐẦY
            $tongPhong = laySoPhong();
            $tongPhong = $tongPhong['soPhong'];
            $cacThangPhong  = [];
            for ($i = 1; $i <= 12; $i++) {
                $cacThangPhong[$i] = 0;
            }
            $phong = layMaPhong();
            // $phong = $phong['soPhong'];
            foreach ($phong as $key => $value) {
                // echo $value['ngayDat'];
                $time = strtotime($value['ngayDat']);
                $layThang = date('m', $time);
                $layThang = intval($layThang);
                foreach ($cacThangPhong as $index => $vl) {
                    if ($index == $layThang) {
                        $cacThangPhong[$index] += 1;
                    }
                }
            }
            $cacPhong = json_encode($cacThangPhong);
            // THỐNG KÊ ĐƠN
            $don = locTheoTrangThai();
            $dangSuLy =  $don[0]['soLuong'];
            $hoanThanh =  $don[1]['soLuong'];
            $tongDon = $dangSuLy + $hoanThanh;
            include 'view/thongke.php';
            break;
        default:
            $rows = truyVanKhachSan();
            include 'view/khachsan.php';
            break;
    }
} else {
    $rows = truyVanKhachSan();
    include 'view/khachsan.php';
}
include 'view/footer.php';
ob_end_flush();
