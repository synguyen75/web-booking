<?php
$rows = truyVanGioiHan();
include "search.php";
?>


<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
        <figure class="img-absolute">
          <img src="images/food-1.jpg" alt="Image" class="img-fluid">
        </figure>
        <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
      </div>
      <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
        <h2 class="heading">Welcome!</h2>
        <p class="mb-4">Sogo Hotel không chỉ dành cho du khách mới đến
          Hà Nội mà còn là một lựa chọn thú vị cho người muốn trốn khỏi sự tấp nập và hối hả của
          thành phố.
          Tại đây, chúng tôi đưa bạn
          hòa mình vào không gian bình yên và tận hưởng những cảm xúc mới mẻ khi
          trở về với chốn yên tĩnh. </p>

        <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Thêm về chúng tôi</a> </p>

      </div>
    </div>
</section>

<section class="section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up">Nổi Bật</h2>
        <p data-aos="fade-up" data-aos-delay="100">Những khách sạn với lượt đánh giá cao nhất của chúng tôi.</p>
      </div>
    </div>
    <div class="row">
      <?php
      foreach ($rows as $key => $value) {
      ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="index.php?act=product&maKhachSan=<?php echo $value['maKhachSan'] ?>" class="room">
            <figure class="img-wrap">
              <img src="<?php echo $value['anh1'] ?>" class="img-fluid mb-3" style="border-radius: 15px;">
            </figure>
            <div class="p-3 text-center room-info">
              <h2 style="color: black;"><?php echo $value['tenKhachSan'] ?></h2>
              <span class="text-uppercase letter-spacing-1" style="font-weight: normal;">Trung bình giá: <?php $number = addDotToNumber($value['khoangGia']);
                                                                                                          echo $number  ?>đ / Đêm</span>
            </div>
          </a>
        </div>
      <?php
      }
      ?>


    </div>
  </div>
</section>


<section class="section slider-section bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up">Photos</h2>
        <p data-aos="fade-up" data-aos-delay="100"> Nơi đây có không gian nhẹ nhàng cho bạn có thể ngồi nhấp ngụm cà phê, ăn một chiếc bánh,
          +hay đọc quyển sách yêu thích của mình nơi ban công.</p>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
          <div class="slider-item">
            <a href="images/slider-1.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-1.jpg" alt="Image placeholder" class="img-fluid"></a>
          </div>
          <!-- <div class="slider-item">
                <a href="images/slider-2.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-2.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div> -->
          <div class="slider-item">
            <a href="images/slider-3.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-3.jpg" alt="Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="images/slider-4.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-4.jpg" alt="Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="images/slider-5.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-5.jpg" alt="Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="images/slider-6.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-6.jpg" alt="Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="images/slider-7.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-7.jpg" alt="Image placeholder" class="img-fluid"></a>
          </div>
        </div>
        <!-- END slider -->
      </div>

    </div>
  </div>
</section>
<!-- END section -->
<section class="section testimonial-section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up">Các loại phòng</h2>
        <p data-aos="fade-up" data-aos-delay="100">Những phòng khách sạn có để có thể phục vụ bạn tốt nhất</p>
      </div>
    </div>
    <div class="row">
      <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
        <div class="testimonial text-center slider-item">
          <a href="" class="room">
            <figure class="img-wrap s">
              <img src="images/single.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Phòng Đơn</h2>
            </div>
          </a>
        </div>
        <div class="testimonial text-center slider-item">
          <a href="" class="room">
            <figure class="img-wrap s">
              <img src="images/familly.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Căn Hộ</h2>
            </div>
          </a>
        </div>

        <div class="testimonial text-center slider-item">
          <a href="" class="room">
            <figure class="img-wrap s">
              <img src="images/president.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Phòng Đôi</h2>
            </div>
          </a>
        </div>


        <div class="testimonial text-center slider-item">
          <a href="" class="room">
            <figure class="img-wrap s">
              <img src="images/familly.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Dãy Phòng</h2>
            </div>
          </a>
        </div>



      </div>
      <!-- END slider -->
    </div>
  </div>
</section>

<!-- Danh mục -->
<section class="section bg-image overlay" style="background-image: url('images/hero_3.jpg');">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading text-white" data-aos="fade">Nhà hàng của chúng tôi</h2>
        <p class="text-white" data-aos="fade" data-aos-delay="100">Chào mừng bạn đến với nhà hàng ẩm thực tại khách sạn chúng tôi! Đây không chỉ là nơi để thưởng thức bữa ăn ngon mà còn là trải nghiệm tuyệt vời với không gian sang trọng và dịch vụ chuyên nghiệp.</p>
      </div>
      <div class="food-menu-tabs" data-aos="fade">
        <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active letter-spacing-2" id="mains-tab" data-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true">Món chính</a>
          </li>
          <li class="nav-item">
            <a class="nav-link letter-spacing-2" id="desserts-tab" data-toggle="tab" href="#desserts" role="tab" aria-controls="desserts" aria-selected="false">Tráng miệng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link letter-spacing-2" id="drinks-tab" data-toggle="tab" href="#drinks" role="tab" aria-controls="drinks" aria-selected="false">Đồ uống</a>
          </li>
        </ul>
        <div class="tab-content py-5" id="myTabContent">


          <div class="tab-pane fade show active text-left" id="mains" role="tabpanel" aria-labelledby="mains-tab">
            <div class="row">
              <div class="col-md-6">
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$20.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Murgh Tikka Masala</a></h3>
                  <p class="text-white text-opacity-7">Xa xa, đằng sau những ngọn núi chữ, xa những đất nước Vokalia và Consonantia, có những văn bản mù quáng.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$35.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Cá Moilee</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$15.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Safed Gosht</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$10.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">French Toast Combo</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$8.35</span>
                  <h3 class="text-white"><a href="#" class="text-white">Vegie Omelet</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$22.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Chorizo &amp; Egg Omelet</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
            </div>


          </div> <!-- .tab-pane -->

          <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
            <div class="row">
              <div class="col-md-6">
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$11.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Banana Split</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$72.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Sticky Toffee Pudding</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$26.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Pecan</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$42.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Apple Strudel</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$7.35</span>
                  <h3 class="text-white"><a href="#" class="text-white">Pancakes</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$22.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Ice Cream Sundae</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
            </div>
          </div> <!-- .tab-pane -->
          <div class="tab-pane fade text-left" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
            <div class="row">
              <div class="col-md-6">
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$32.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Spring Water</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$14.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Coke, Diet Coke, Coke Zero</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$93.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Orange Fanta</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$18.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Lemonade, Lemon Squash</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$38.35</span>
                  <h3 class="text-white"><a href="#" class="text-white">Sparkling Mineral Water</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3">$69.00</span>
                  <h3 class="text-white"><a href="#" class="text-white">Lemon, Lime &amp; Bitters</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
            </div>
          </div> <!-- .tab-pane -->
        </div>
      </div>
    </div>
</section>

<!-- END section -->
<section class="section testimonial-section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up">People Says</h2>
      </div>
    </div>
    <div class="row">
      <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>

            <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; Jean Smith</em></p>
        </div>

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>

            <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>


        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>

            <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; Jean Smith</em></p>
        </div>

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>

            <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>

      </div>
      <!-- END slider -->
    </div>

  </div>
</section>