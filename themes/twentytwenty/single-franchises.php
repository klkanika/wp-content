<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Franchise Detail</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.lazywasabi.net/fonts/NotoSansThai/NotoSansThai.css" rel="stylesheet">
</head>

<body style="font-family: 'Noto Sans Thai', sans-serif; background-color: #F2F2F2;" class="w-full">
  <style>
    #headder {
      background: transparent;
      color: var(--primary);
    }

    #headder svg {
      fill: var(--primary);
    }

    #suppliers-content .swiper-button-next,
    #suppliers-content .swiper-button-prev {
      background-color: #fff;
      border-radius: 100%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #suppliers-content .swiper-button-next:after,
    #suppliers-content .swiper-button-prev:after {
      font-size: 15px;
      color: #000;
    }

    #suppliers-content .swiper-button-disabled {
      display: none;
    }

    #suppliers-content .swiper-button-next {
      right: 1rem;
    }

    #suppliers-content .swiper-button-prev {
      left: 1rem;
    }

    #suppliers-content .banner-slide {
      width: 35%;
      height: 18rem;
    }

    @media (max-width:992px) {

      #suppliers-content .swiper-button-next,
      #suppliers-content .swiper-button-prev {
        display: none;
      }

      #suppliers-content .banner-slide {
        width: 80%;
      }
    }
  </style>

  <?php
  include 'truefriend-header.php';
  $รูปภาพ = get_field('รูปภาพ');
  $franchiseTypes = wp_get_post_terms(get_the_ID(), 'franchise_type');
  $franchiseStyles = wp_get_post_terms(get_the_ID(), 'franchise_style');
  $นโยบาย_การขยายสาขา = get_field('นโยบาย_การขยายสาขา');
  $contact = [];
  $ข้อมูลติดต่อ = get_field('ข้อมูลติดต่อ');
  foreach ($ข้อมูลติดต่อ as $key => $ข้อมูล) {
    $contact[$key] = $ข้อมูล;
  }
  ?>
  <!-- Set up your HTML -->
  <section id="suppliers-content" class="text-white pt-32 w-full lg:px-52 px-4" style="color: #262145;">
    <div class="swiper-container">
      <div class="swiper-wrapper lg:pl-48 pl-4">
        <!-- Slides -->
        <?php foreach ($รูปภาพ as $รูป) : ?>
          <div class="swiper-slide rounded-xl overflow-hidden banner-slide"><img class="object-cover w-full h-full" src="<?= $รูป['รูป']['url'] ?>" alt="" /></div>
        <?php endforeach ?>

      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div class="flex items-center justify-between mt-12">
      <div class="flex items-center justify-center">
        <div class="text-xs rounded-full text-sm px-4 py-2" style="background-color: #FEDA52;">Franchise hub</div>
        <?php foreach ($franchiseTypes as $franchiseType) : ?>
          <div class="relative rounded-full text-sm px-4 py-2 ml-2 text-white flex items-center" style="background-color: #062241;">
            <img class="w-7 h-7 absolute left-0 ml-1 rounded-full object-cover" src="<?= get_field('pictureUrl', $franchiseType) ? get_field('pictureUrl', $franchiseType) :  get_theme_file_uri() . '/assets/images/img-default.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'; ?>" alt="">
            <span class="ml-6 text-xs"><?= $franchiseType->name ?></span>
          </div>
        <?php endforeach ?>
      </div>
      <div class="lg:flex hidden lg:px-32 lg:mx-8 px-8 py-5 lg:justify-start justify-center ">
        <a href=""><img class="w-5 h-5" src="<?= get_theme_file_uri() ?>/assets/images/facebook-blue.svg" alt=""></a>
        <a href=""><img class="w-5 h-5 ml-4" src="<?= get_theme_file_uri() ?>/assets/images/twitter-blue.svg" alt=""></a>
        <a href=""><img class="w-5 h-5 ml-4" src="<?= get_theme_file_uri() ?>/assets/images/link-blue.svg" alt=""></a>
      </div>
    </div>
    <div class="mt-4">
      <p class="lg:text-4xl text-3xl font-semibold "><?= get_field('ชื่อธุรกิจ') ?></p>
      <p class="text-lg mt-2"><?= get_field('เบอร์โทร') ?> <?= get_field('ชื่อ') ? '(' . get_field('ชื่อ') . ')' : '' ?></p>
    </div>
    <div class="lg:mt-12 mt-8">
      <div class="border-b border-gray-300 py-8">
        <p class="text-gray-500 mb-2">รายละเอียด</p>
        <p class="text-xl"><?= get_field('แนะนำธุรกิจ') ? get_field('แนะนำธุรกิจ') : '-' ?></p>

        <div class="lg:hidden flex pt-8 justify-end">
          <a href=""><img class="w-5 h-5" src="<?= get_theme_file_uri() ?>/assets/images/facebook-blue.svg" alt=""></a>
          <a href=""><img class="w-5 h-5 ml-4" src="<?= get_theme_file_uri() ?>/assets/images/twitter-blue.svg" alt=""></a>
          <a href=""><img class="w-5 h-5 ml-4" src="<?= get_theme_file_uri() ?>/assets/images/link-blue.svg" alt=""></a>
        </div>
      </div>
      <div class="border-b border-gray-300 py-8">
        <p class="text-gray-500 mb-2">ลักษณะกิจการ</p>
        <p class="text-xl">
          <?php foreach ($franchiseStyles as $key => $franchiseStyle) : ?>
            <?= ($key > 0 ? ', ' : '') . $franchiseStyle->name ?>
          <?php endforeach ?>
        </p>
      </div>

      <div class="border-b border-gray-300 grid lg:grid-cols-2 py-8">
        <div class="border-b border-gray-300 py-8">
          <p class="text-gray-500 mb-2">รูปแบบธุรกิจ</p>
          <?php foreach ($นโยบาย_การขยายสาขา as $key => $นโยบาย) : ?>
            <p class="text-xl"><?= $นโยบาย ?></p>
          <?php endforeach ?>
          <?php
          if (count($นโยบาย_การขยายสาขา) === 0) {
            echo '-';
          }
          ?>
        </div>
        <div class="border-b border-gray-300 py-8 lg:border-l lg:pl-16">
          <p class="text-gray-500 mb-2">ค่าแฟรนไชส์</p>
          <p class="text-xl"><?= get_field('ค่าแฟรนไชส์ต่อปี') ? get_field('ค่าแฟรนไชส์ต่อปี') : '-' ?></p>
        </div>
        <div class="border-b border-gray-300 py-8">
          <p class="text-gray-500 mb-2">ระยะเวลาคืนทุน</p>
          <p class="text-xl"><?= get_field('ระยะเวลาคืนทุน') ? get_field('ระยะเวลาคืนทุน') : '-' ?></p>
        </div>
        <div class="border-b border-gray-300 py-8 lg:border-l lg:pl-16">
          <p class="text-gray-500 mb-2">ระยะเวลาสัญญา</p>
          <p class="text-xl"><?= get_field('ระยะเวลาสัญญา') ? get_field('ระยะเวลาสัญญา') : '-' ?></p>
        </div>
        <div class="border-b border-gray-300 py-8">
          <p class="text-gray-500 mb-2">ปีที่ก่อตั้ง</p>
          <p class="text-xl"><?= get_field('ปีที่ก่อตั้ง') ? 'พ.ศ. ' . get_field('ปีที่ก่อตั้ง') : '-' ?> <?= get_field('ปีที่เริ่มขายแฟรนชายส์') ? '(ขายแฟรนไชส์มา ' . (date("Y") - intval(get_field('ปีที่เริ่มขายแฟรนชายส์'))) .  ' ปี)' : '' ?></p>
        </div>
        <div class="border-b border-gray-300 py-8 lg:border-l lg:pl-16">
          <p class="text-gray-500 mb-2">ค่า Royalty Free</p>
          <p class="text-xl"><?= get_field('ค่า_royalty_fee') ? get_field('ค่า_royalty_fee')['ค่า_royalty_fee'] . ' ' . get_field('ค่า_royalty_fee')['หน่วย'] : '-' ?></p>
        </div>
        <div class="border-gray-300 py-8">
          <p class="text-gray-500 mb-2">ประเทศ</p>
          <p class="text-xl"><?= get_field('ประเทศ') ? get_field('ประเทศ') : '-' ?></p>
        </div>
        <div class="border-gray-300 py-8 lg:border-l lg:pl-16">
          <p class="text-gray-500 mb-2">ค่า Marketing Free</p>
          <p class="text-xl"><?= get_field('ค่า_marketing_fee') ? get_field('ค่า_marketing_fee')['ค่า_marketing_fee'] . ' ' . get_field('ค่า_marketing_fee')['หน่วย'] : '-' ?></p>
        </div>
      </div>

      <div class="border-b border-gray-300 py-8">
        <p class="text-gray-500 mb-2">ความเป็นมา</p>
        <p class="text-xl"><?= get_field('ความเป็นมา') ?></p>
      </div>

      <?php foreach (["สินค้าและบริการ", "จำนวนสาขา", "อัตราการขยายสาขา", "การลงทุน", "คุณสมบัติผู้สลงทุน", "สิ่งที่ได้รับ", "อื่นๆ"] as $item) : ?>
        <div class="border-b border-gray-300 py-4">
          <div class="flex items-center justify-between">
            <p class="text-gray-500 mb-2">
              <?= $item ?>
            </p>
            <img src="<?= get_theme_file_uri() ?>/assets/images/collapse.svg" class="collapse-icon" />
          </div>
        </div>
      <?php endforeach; ?>

      <div class="py-4">
        <div class="flex items-center justify-between">
          <p class="text-gray-500 mb-2">
            ติดต่อเจ้าของแฟรนไชส์
          </p>
          <img src="<?= get_theme_file_uri() ?>/assets/images/collapse.svg" class="collapse-icon" />
        </div>
        <?php foreach ($contact as $key => $value) : ?>
          <div class="flex items-center border-b border-gray-300 py-2">
            <p class="font-bold lg:w-1/4 w-1/3"><?= $key ?></p>
            <p class=""><?= $value ?></p>
          </div>
        <?php endforeach ?>
      </div>

      <div class="border-b border-gray-300 py-8 -mx-4">
        <div class="flex items-center justify-between mb-2 lg:mx-0 mx-4">
          <p class="text-gray-500 mb-2">สถานที่และเส้นทาง</p>
          <a href="#" class="font-semibold">เปิดใน Google Map</a>
        </div>
        <div class="w-full bg-gray-400 rounded-lg" style="height: 60vh;">
          GOOGLE MAP
        </div>
      </div>
  </section>
  <?php
  $args = array(
    'taxonomy' => 'franchise_type',
    'orderby' => 'name',
    'order'   => 'ASC',
  );
  $franchisetypes = get_categories($args);
  $thumbnail_slider_title = 'Franchise hub';
  $thumbnail_slider_sub_title = 'แหล่งรวมเบอร์ติดต่อ Franchise ประเภทต่างๆ';
  $thumbnail_slider_type = 'franchise-hub';
  $thumbnail_slider_material = $franchisetypes;
  include 'truefriend-thumbnail-slider.php';
  ?>

  <div class="w-full h-72 flex flex-col items-center justify-center" style="background-color: #FEDA52;">
    <span class="text-3xl font-bold">
      ลงทะเบียน Franchise ฟรี
    </span>
    <a href="<?= get_site_url() ?>/franchise-register" class="rounded-full py-3 px-24 text-xs bg-white my-6">
      ลงทะเบียน
    </a>
  </div>
  <?php include 'truefriend-footer.php'; ?>
</body>

</html>
<!-- <script src="http://code.jquery.com/jquery-latest.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
  $(document).ready(function() {

    const swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      spaceBetween: 15,
      // loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      // breakpoints: {
      //   992: {
      //   },
      // }
    });
  });
</script>