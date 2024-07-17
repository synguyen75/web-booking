<section class="section slider-section bg-light">
  <div class="container text-white py-5 text-center" data-aos="fade-up" style="margin-top: -100px">
    <h1 class="display-4">Khách Sạn</h1>
    <p class="lead mb-0" style="color: black;">Đặt Phòng</p>

  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
          <div class="slider-item">
            <a href="<?php echo $row['anh1'] ?>" data-fancybox="images" data-caption="Caption for this image" "><img style=" border-radius: 7px;" src=" <?php echo $row['anh1'] ?> " alt=" Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="<?php echo $row['anh2'] ?>" data-fancybox="images" data-caption="Caption for this image" "><img style=" border-radius: 7px;" src=" <?php echo $row['anh2'] ?> " alt=" Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="<?php echo $row['anh3'] ?>" data-fancybox="images" data-caption="Caption for this image" "><img style=" border-radius: 7px;" src=" <?php echo $row['anh3'] ?> " alt=" Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="<?php echo $row['anh4'] ?>" data-fancybox="images" data-caption="Caption for this image" "><img style=" border-radius: 7px;" src=" <?php echo $row['anh4'] ?> " alt=" Image placeholder" class="img-fluid"></a>
          </div>
        </div>
        <!-- END slider -->
      </div>

    </div>

  </div>
  <div class="show_phong" style="margin-top: -30px;">
    <div class="grid_slyde">
      <div class="box2"></div>
      <div class="box3"></div>
      <div class="box4"></div>
    </div>
    <div class="box_room">
      <div class="lef">
        <div class="loai">
          <span>Khách sạn:</span>
          <?php
          for ($i = 0; $i < $row['danhGia']; $i++) {
          ?>
            <i class="fas fa-star"></i>
          <?php
          }
          ?>
        </div>
        <div class="name">
          <p class="ten"><?php echo $row['tenKhachSan'] ?></p>
          <p class="DC"><?php echo $row['diaDiem'] ?></p>
        </div>
      </div>
      <!--  -->
      <div class="right">
        <p><strong>Trung Bình Giá Từ :</strong> <i>11.500.00 VND</i></p>
        <p><strong><?php $number = addDotToNumber($row['khoangGia']);
                    echo $number  ?> VNĐ/</strong> <em>Đêm</em> </p>
        <Button><a href="card.html">Lựa Chọn Phòng</a></Button>
      </div>
    </div>
    <div class="tien_nghi">
      <h3>
        Tiện Nghi Khách Sạn
      </h3>
      <div class="op_sun">
        <?php
        if ($row['nhaHang'] != 0) { ?>
          <p class="cc"><i class="fa-solid fa-utensils"></i>Nhà hàng</p>
        <?php
        }
        ?>

        <?php
        if ($row['hoBoi'] != 0) { ?>
          <p class="cc"><i class="fa-solid fa-person-swimming"></i>Hồ bơi</p>
        <?php
        }
        ?>

        <?php
        if ($row['phongGym'] != 0) { ?>
          <p class="cc"><i class="fa-solid fa-dumbbell"></i>Phòng Gym</p>
        <?php
        }
        ?>
        <?php
        if ($row['wifi'] != 0) { ?>
          <p class="cc"> <i class="fa-solid fa-wifi"></i>Wifi</p>
        <?php
        }
        ?>

        <?php
        if ($row['mayLanh'] != 0) { ?>
          <p class="cc"> <i class="fa-solid fa-hard-drive"></i>Máy Lạnh</p>
        <?php
        }
        ?>
        <?php
        if ($row['hutThuoc'] != 0) { ?>
          <p class="cc"><i class="fa-solid fa-ban-smoking"></i>Phòng không hút thuốc</p>
        <?php
        }
        ?>
      </div>
    </div>

</section>

<div class="container text-white py-5 text-center" data-aos="fade-up" style="">
  <h1 class="display-4">Tất cả phòng</h1>
  <p class="lead mb-0" style="color: black;">Đặt Phòng</p>
</div>
<section class="section pb-4" style="margin-top: 50px;">
  <div class="container">

    <div class="row check-availabilty" id="next">
      <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

        <form id="myFrom" action="index.php?act=product&maKhachSan=<?php echo $maKhachSan ?>" method="post">
          <div class="row">
            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
              <label for="checkin_date" class="font-weight-bold text-black">Ngày Nhận</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <input type="date" id="ngayNhan" name="ngayNhan" placeholder="Ngày nhận" min="<?php $date = date('Y-m-d');
                                                                                              echo $date ?>" max="<?php $chuyenDate = strtotime($date) + (30 * 86400);
                                                                                                                  $datemax = date('Y-m-d', $chuyenDate);
                                                                                                                  echo $datemax ?>" required>
              </div>
            </div>
            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
              <label for="checkin_date" class="font-weight-bold text-black">Ngày Trả</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <input type="date" id="ngayTra" name="ngayTra" placeholder="Ngày trả" min="<?php $date = date('Y-m-d');
                                                                                            echo $date ?>" max="<?php $chuyenDate = strtotime($date) + (30 * 86400);
                                                                                                                $datemax = date('Y-m-d', $chuyenDate);
                                                                                                                echo $datemax ?>" required>
              </div>
            </div>
            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
              <label for="checkin_date" class="font-weight-bold text-black">Loại Phòng</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="loai" id="location" class="form-control">
                  <option value="" selected disabled>chọn loại phòng</option>
                  <?php
                  foreach ($layLoai as $key => $value) { ?>
                    <option value="<?php echo $value['maLoaiPhong'] ?>"><?php echo $value['tenLoai'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 align-self-end">
              <button class="btn btn-primary btn-block text-white">Tìm phòng</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="section pb-4" style="margin-top: 70px; margin-bottom: -50px;">
  <div class="container">
    <div class="row check-availabilty" id="next">
      <div class="block-32" data-aos="fade-up" data-aos-offset="-200">
        <ul class="nav nav-pills justify-content-center" style="padding: 10px 0;">
          <li class="nav-item">
            <a class="nav-link" href="index.php?act=product&maKhachSan=<?php echo $maKhachSan ?>">Tất cả phòng</a>
          </li>
          <?php
          foreach ($layLoai as $key => $value) { ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?act=product&maKhachSan=<?php echo $maKhachSan ?>&maLoai=<?php echo $value['maLoaiPhong'] ?>"><?php echo $value['tenLoai'] ?></a>
            </li>
          <?php
          } ?>
        </ul>
      </div>
    </div>
  </div>
</section>


<?php
foreach ($rows as $key => $value) {
?>
  <div class="mota">
    <h3>Mã phòng: <?php echo $value['maPhong'] ?></h3>
    <div class="all">
      <div class="all_lef">
        <img src="<?php echo $value['image'] ?>" alt="">
        <div class="tn">
          <p><i class="fa-solid fa-house"></i><?php echo $value['dienTich'] ?>m <sup>2</sup></p>
          <p><i class="fa-solid fa-bed"></i><?php echo $value['giuong'] ?></p>
        </div>
        <style>
          .dropdown {
            position: relative;
            font-weight: 700;
            font-size: large;
            margin-left: 23px;
            margin-top: 30px;
          }

          ul {
            list-style: none;
            padding: 0;
            margin: 0;
          }

          .dropdown li {
            color: #cc0000;
          }

          .dropdown label {
            color: white;
            cursor: pointer;
            padding: 10px;
            position: relative;
            background-color: #ffc533;
            /* Màu nền của nhãn */
            border-radius: 5px;
            /* Đường cong viền */
            display: inline-block;
            /* Để có thể sử dụng padding và border-radius */
          }

          .dropdown label:hover {
            background-color: #ffaa34;
            /* Màu nền khi hover vào nhãn */
          }

          .dropdown label i {
            color: white;
            margin-left: 5px;
            /* Khoảng cách giữa văn bản và biểu tượng */
          }

          .dropdown-content {
            list-style: none;
            padding: 0;
            margin: 0;
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            z-index: 1;
          }
        </style>
        <?php
        $ngay = layDateDonHangChiTietBangMaPhong($value['maPhong']);
        ?>
        <div class="dropdown">
          <ul>
            <li onclick="toggleDropdown(this);">
              <label for=""><?php if (isset($ngay[0])) { ?>
                  Ngày đã có người đặt trước<i class="fas fa-chevron-down"></i>
                <?php } else { ?> Phòng trống <?php } ?></label>
              <ul class="dropdown-content">
                <?php
                foreach ($ngay as $index => $lay) {
                ?>
                  <li>Từ: <?php echo $lay['ngayNhanPhong'] ?> đến <?php echo $lay['ngayTraPhong'] ?> </li>
                <?php } ?>
              </ul>
            </li>
          </ul>
        </div>

        <script>
          function toggleDropdown(element) {
            var dropdownContent = element.querySelector('.dropdown-content');
            dropdownContent.style.display = (dropdownContent.style.display === 'block' ? 'none' : 'block');
          }
        </script>

      </div>
      <div class="all_right">
        <p class="he"><i class="fa-solid fa-person"></i> <?php echo $value['tenLoai'] ?></p>
        <div class="uu_dai">
          <h3>Tiện ích phòng </h3>
          <div class="ct_ud">
            <?php
            if ($value['nhaHang']) { ?>
              <p><i class="fa-solid fa-check" style="color: #0d5be3;"></i>Nhà Hàng</p>
            <?php
            }
            ?>
            <?php
            if ($value['hoBoi']) { ?>
              <p><i class="fa-solid fa-check" style="color: #0d5be3;"></i>Hồ Bơi</p>
            <?php
            }
            ?>
            <?php
            if ($value['phongGym']) { ?>
              <p><i class="fa-solid fa-check" style="color: #0d5be3;"></i>Phòng Gym</p>
            <?php
            }
            ?>
            <?php
            if ($value['wifi']) { ?>
              <p><i class="fa-solid fa-check" style="color: #0d5be3;"></i>Wifi</p>
            <?php
            }
            ?>
            <?php
            if ($value['mayLanh']) { ?>
              <p><i class="fa-solid fa-check" style="color: #0d5be3;"></i>Máy Lạnh</p>
            <?php
            }
            ?>
            <?php
            if ($value['hutThuoc']) { ?>
              <p><i class="fa-solid fa-check" style="color: #0d5be3;"></i>Có Hút Thuốc</p>
            <?php
            }
            ?>
          </div>
          <div class="van_dap">
            <a href=""><i class="fa-solid fa-question"></i>Xem chính sách hủy phòng</a>
            <p>Lưu ý: Giá phòng có thể thay đổi vào các dịp lễ tết, cuối tuần...</p>
          </div>
        </div>
        <div class="book_ct">
          <p class="ct"><i class="fa-solid fa-circle-exclamation" style="color: #005eff;"></i> Giá đã bao gồm thuế, phí</p>
          <div class="dat_ngay">
            <p><del>1,399,667 VND</del></p>
            <p><strong><?php $number = addDotToNumber($value['giaPhong']);
                        echo $number  ?> VNĐ</strong>
              / đêm
            </p>
            <a href="index.php?act=card&maPhongAdd=<?php echo $value['maPhong'] ?>"><button onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'" style="background-color: #ffaa34;">Đặt Ngay</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>
<style>
  .rating {
    direction: rtl;
    /* Đặt hướng viết từ phải sang trái */
  }

  .rating input {
    display: none;
  }

  .rating label {
    font-size: 24px;
    cursor: pointer;
  }

  .rating label:hover,
  .rating label:hover~label,
  .rating input:checked~label {
    color: gold;
  }

  /* //css form */
  .all_binnhluan {
    width: 80%;
    margin-left: 10%;
    margin-top: 50px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    margin-bottom: 30px;
  }

  .binhluan {
    width: 100%;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    display: flex;
    justify-content: flex-start;
    margin-bottom: 30px;
  }

  .abc {
    width: 20%;
  }

  .abc h5 {
    color: red;
    font-size: 20px;
  }

  .binhluan h3 {
    font-size: 1.5em;
    margin-bottom: 15px;
    width: 100%;
  }

  .binhluan form {
    display: flex;
    flex-direction: column;
    width: 70%;
    margin-top: -10px;
  }

  .binhluan input[type="radio"] {
    display: none;
  }

  .binhluan label {
    font-size: 24px;
    cursor: pointer;
    margin-right: 5px;
  }

  .binhluan input[type="text"] {
    width: 100%;
    height: 45px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-right: 20px;
  }

  .buton {
    display: flex;
  }

  .binhluan button {
    padding: 8px 15px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }

  .binhluan button i {
    margin-right: 5px;
  }

  .ls_binhl {
    width: 100%;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    overflow: hidden;
    align-items: center;
    line-height: 50px;
  }

  .alll {
    width: 50%;
    display: contents;
    justify-content: flex-start;
    overflow: hidden;
  }

  .avt {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
    background-image: url(./images/single.jpg);
  }

  .avtt2 {
    width: 18%;
    height: 60px;
    display: flex;
    align-items: center;
  }

  .avtt2 h3 {
    margin-top: -15px;
    font-size: 20px;
    font-weight: revert;
  }

  .noidung {
    width: 80%;
    display: flex;
    word-wrap: break-word;
  }

  .noidung .nd {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: black;
  }

  .sao {
    margin-right: 10px;
    color: red;
    font-size: 20px;
  }
</style>
</head>

<body>

  <div class="all_binnhluan">
    <div class="binhluan">
      <div class="abc">
        <h3>Đánh Giá</h3>
        <?php
        echo "<h5 class='loidn'>" . implode($loi) . "</h5>";
        ?>
      </div>
      <form action="" method="post">
        <div class="rating">
          <input type="radio" id="star5" name="rating" value="5">
          <label for="star5"><i class="fas fa-star"></i></label>
          <input type="radio" id="star4" name="rating" value="4">
          <label for="star4"><i class="fas fa-star"></i></label>
          <input type="radio" id="star3" name="rating" value="3">
          <label for="star3"><i class="fas fa-star"></i></label>
          <input type="radio" id="star2" name="rating" value="2">
          <label for="star2"><i class="fas fa-star"></i></label>
          <input type="radio" id="star1" name="rating" value="1">
          <label for="star1"><i class="fas fa-star"></i></label>
        </div>
        <div class="buton">
          <input type="text" placeholder="Viết bình luận..." name="nd">
          <button type="submit" name="subp"><i class="fa-regular fa-paper-plane"></i></button>
        </div>
      </form>
    </div>
    <div class="ls_binhl">
      <?php
      foreach ($allbl as $key) {
        extract($key);
        echo '
  <div class="alll">
  <div class="avtt2">
  <div class="avt"></div>
<h3>' . $tenKhachHang . ' :</h3>
</div>
<div class="noidung">
  <p class="sao">' . $so_sao . '<i class="fas fa-star"></i></</p>
  <p class="nd">' . $noi_dung . '</p>
</div></div>
    ';
      }

      ?>

    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Get references to the NgayNhan and NgayTra input fields
      var ngayNhanInput = document.getElementById("ngayNhan");
      var ngayTraInput = document.getElementById("ngayTra");

      // Add event listener to NgayNhan input field
      ngayNhanInput.addEventListener("change", function() {
        // Parse the input values as dates
        var ngayNhanValue = new Date(ngayNhanInput.value);
        var ngayTraMin = new Date(ngayNhanValue.getTime() + (24 * 60 * 60 * 1000)); // Thêm 1 ngày (24 giờ * 60 phút * 60 giây * 1000 milliseconds)

        var minDate = ngayTraMin.toISOString().split('T')[0];
        ngayTraInput.setAttribute('min', minDate);

      });
    });
  </script>