<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.lazywasabi.net/fonts/NotoSansThai/NotoSansThai.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
  <style>

  </style>
</head>

<?php
require_once('custom-classes/class-posts.php');
$recentPosts = Post::getPostsByCategory('post', null, 12, 0, null);
$knowledgePosts = array_filter($recentPosts->posts, function ($p) {
  return in_array(
    'knowledge',
    array_map(function ($c) {
      return $c->slug;
    }, $p->categories)
  );
});
?>

<body style="font-family: 'Noto Sans Thai', sans-serif;" class="w-full">
  <?php include 'truefriend-header.php'; ?>
  <!-- Set up your HTML -->
  <section class="text-white pt-32 w-full bg-contain" style="background-color: #262145;background-image: url('<?= get_theme_file_uri() ?>/assets/images/bg-grid.svg')">
    <div class="flex flex-col my-8 lg:px-40 px-8">
      <span class="text-xl text-center mb-2 font-thin">บริการของเรา</span>
      <span class="text-5xl text-center font-extrabold">Our Services</span>
    </div>
    <img class="w-48 my-8 mx-auto" src="<?= get_theme_file_uri() ?>/assets/images/service-img.svg" alt="">
    <div class="flex flex-col lg:px-40 px-8">
      <span class="text-xl text-center mb-2 font-normal">นอกจากการเป็นคลังความรู้สำหรับธุรกิจร้านอาหารแล้ว<br>เรายังมีบริการอื่นๆเพื่อช่วยผู้ประกอบการไปถึงฝั่งฝัน</span>
    </div>
    <div class="button border-gray-500 lg:px-32 lg:mx-8 px-8 py-5 pb-14  flex lg:justify-content-center justify-center gap-1">
      <button class="rounded-full text-black font-bold py-3 px-16" style="background-color: #FEDA52;">Read more</button>

    </div>
    <div class=" lg:px-32 lg:mx-8 px-8 py-5 flex lg:justify-content-center justify-center gap-4">
      <a href=""><img class="w-5 h-5" src="<?= get_theme_file_uri() ?>/assets/images/facebook-icon.png" alt=""></a>
      <a href=""><img class="w-5 h-5" src="<?= get_theme_file_uri() ?>/assets/images/twitter-icon.png" alt=""></a>
      <a href=""><img class="w-5 h-5" src="<?= get_theme_file_uri() ?>/assets/images/link-icon.png" alt=""></a>
    </div>

    </div>
  </section>

  <!-- PR & Marketing -->
  <section class="px-6 md:px-0 md:pl-20 pt-20" style="background-color: #E5E5E5;color:#262145">
    <div class="md:flex  pb-16">
      <div class="md:hidden items-center justify-center">
        <img src="<?= get_theme_file_uri() ?>/assets/images/PR&Marketing.png"/>
      </div>
      <div class="md:w-2/4">
        <p class="lg:text-left text-4xl font-bold">PR & Marketing</p>
        <div class="my-12">
          <div class="flex mb-2 items-center">
            <img class="w-8 h-8" src="<?= get_theme_file_uri() ?>/assets/images/service-check-gold.svg" alt="">
            <span class="ml-4 text-xl font-bold">สอนตั้งแต่ขั้นพื้นฐาน</span>
          </div>
          <div class="flex mb-2 items-center">
            <img class="w-8 h-8" src="<?= get_theme_file_uri() ?>/assets/images/service-check-gold.svg" alt="">
            <span class="ml-4 text-xl font-bold">ลงมือทำสำเร็จ</span>
          </div>
          <div class="flex mb-3 items-center">
            <img class="w-8 h-8" src="<?= get_theme_file_uri() ?>/assets/images/service-check-gold.svg" alt="">
            <span class="ml-4 text-xl font-bold">เห็นผลใน 1 เดือน</span>
          </div>
        </div>
        <div class="mb-16">
          <p class="text-lg text-left mb-2 font-bold pb-4">“การตลาด” หนึ่งสำคัญที่คนทำร้านอาหารจำเป็นต้องทำ โดยเฉพาะยุคนี้ที่มีตัวเลือกร้านอาหารมากมายหากร้านเราไม่ทำการตลาดให้ผู้คนรู้จัก สนใจ โอกาสที่ร้านเราจะกลายเป็นตัวเลือกลูกค้าก็น้อยลง</p>
          <p class="text-lg text-left font-thin">มันน่าเสียดายมาก ๆ หากเราลงทุนทำทุกอย่างเต็มที่ แต่สุดท้ายลูกค้าไม่เข้าร้านเพราะลูกค้าไม่รู้จักร้านเรา “การตลาด” หนึ่งสำคัญที่คนทำร้านอาหารจำเป็นต้องทำ โดยเฉพาะยุคนี้ที่มีตัวเลือกร้านอาหารมากมายหากร้านเราไม่ทำการตลาดให้ผู้คนรู้จัก สนใจ โอกาสที่ร้านเราจะกลายเป็นตัวเลือกลูกค้าก็น้อยลง มันน่าเสียดายมาก ๆ หากเราลงทุนทำทุกอย่างเต็มที่ แต่สุดท้ายลูกค้าไม่เข้าร้านเพราะลูกค้าไม่รู้จักร้านเรา</p>
        </div>
        <div class="mb-8 md:mb-16">
          <div class="font-bold mb-4">Our Client</div>
          <div class="hidden md:flex">
            <div class="tooltip">
              <img class="w-12 h-12 object-cover" src="<?= get_theme_file_uri() ?>/assets/images/image 7.png" />
              <div class="tooltiptext">
                <div class="flex items-center mb-4">
                  <img src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" alt="" class="object-cover w-full h-full rounded-full" style="width:45px;height:45px;">
                  <div class="ml-4">
                    <div >พีท พัชระ</div>
                    <div class="font-bold">Potato corner</div>
                  </div>
                </div>
                <p>สุดยอดเลยครับ เห็นผลจริงรายได้ผมเพิ่ม 3 เท่า หลังจากได้เพื่อนแท้ร้านอาหารมา ช่วยปรึกษาเรื่องการตลาด แนะนำครับผม</p>
              </div>
            </div>
            <div class="tooltip -ml-2">
              <img class="w-12 h-12 object-cover" src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" />
              <div class="tooltiptext">
                <div class="flex items-center mb-4">
                  <img src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" alt="" class="object-cover w-full h-full rounded-full" style="width:45px;height:45px;">
                  <div class="ml-4">
                    <div >พีท พัชระ</div>
                    <div class="font-bold">Potato corner</div>
                  </div>
                </div>
                <p>สุดยอดเลยครับ เห็นผลจริงรายได้ผมเพิ่ม 3 เท่า หลังจากได้เพื่อนแท้ร้านอาหารมา ช่วยปรึกษาเรื่องการตลาด แนะนำครับผม</p>
              </div>
            </div>
          </div>
          <div class="md:hidden -mx-6">
            <div class="owl-carousel">
            <div class="slideClient">
              <div class="flex items-center mb-4">
                <img src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" alt="" class="object-cover w-full h-full rounded-full" style="width:45px;height:45px;">
                <div class="ml-4">
                  <div >พีท พัชระ</div>
                  <div class="font-bold">Potato corner</div>
                </div>
              </div>
              <p>สุดยอดเลยครับ เห็นผลจริงรายได้ผมเพิ่ม 3 เท่า หลังจากได้เพื่อนแท้ร้านอาหารมา ช่วยปรึกษาเรื่องการตลาด แนะนำครับผม</p>
            </div>
            <div class="slideClient">
              <div class="flex items-center mb-4">
                <img src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" alt="" class="object-cover w-full h-full rounded-full" style="width:45px;height:45px;">
                <div class="ml-4">
                  <div >พีท พัชระ</div>
                  <div class="font-bold">Potato corner</div>
                </div>
              </div>
              <p>สุดยอดเลยครับ เห็นผลจริงรายได้ผมเพิ่ม 3 เท่า หลังจากได้เพื่อนแท้ร้านอาหารมา ช่วยปรึกษาเรื่องการตลาด แนะนำครับผม</p>
            </div>
            </div>
          </div>
        </div>
        <div>
          <a href="/contact-us" class="inline-block rounded-full text-white font-bold py-3 px-16" style="background-color: #262145;">Contact Us</a>
        </div>
      </div>
      <div class="w-2/4 hidden md:flex items-center justify-center">
        <img src="<?= get_theme_file_uri() ?>/assets/images/PR&Marketing.png"/>
      </div>
    </div>
    <div class="text-center mb-2 font-bold">สอบถามรายละเอียด PR & MARKETING</div>
    <div class="py-8 px-8 md:px-0 md:border-t md:border-gray-300 md:flex md:justify-center md:mr-20">
      <div class="mx-3 flex items-center mb-2 md:mb-0">
        <img class="w-6 h-6" src="<?= get_theme_file_uri() ?>/assets/images/icon-call.svg" />
        <a href="tel:08276281927" class="ml-2 underline">08276281927 (คุณออม)</a>
      </div>
      <div class="mx-3 flex items-center mb-2 md:mb-0">
        <img class="w-6 h-6" src="<?= get_theme_file_uri() ?>/assets/images/icon-line.svg" />
        <a href="https://line.me/ti/p/~@ormzins" target="_blank" class="ml-2 underline">@ormzin</a>
      </div>
      <div class="mx-3 flex items-center">
        <img class="w-6 h-6" src="<?= get_theme_file_uri() ?>/assets/images/icon-mail.svg" />
        <a href="mailto:amanicha@gmail.com" class="ml-2 underline">amanicha@gmail.com</a>
      </div>
    </div>
  </section>

  <!-- Consultant -->
  <section class="px-6 md:px-0 md:pl-20 pt-6 md:pt-20 " style="background-color: #262145;color:#fff">
    <div class="md:flex  pb-16">
      <div class="md:hidden items-center justify-center -mx-6 mb-6">
        <img src="<?= get_theme_file_uri() ?>/assets/images/servive-consultant.png"/>
      </div>
      <div class="md:w-2/4">
        <p class="lg:text-left text-4xl font-bold">Consultant</p>
        <div class="my-12">
          <div class="flex mb-2 items-center">
            <img class="w-8 h-8" src="<?= get_theme_file_uri() ?>/assets/images/service-check-gold.svg" alt="">
            <span class="ml-4 text-xl font-bold">สอนตั้งแต่ขั้นพื้นฐาน</span>
          </div>
          <div class="flex mb-2 items-center">
            <img class="w-8 h-8" src="<?= get_theme_file_uri() ?>/assets/images/service-check-gold.svg" alt="">
            <span class="ml-4 text-xl font-bold">ลงมือทำสำเร็จ</span>
          </div>
          <div class="flex mb-3 items-center">
            <img class="w-8 h-8" src="<?= get_theme_file_uri() ?>/assets/images/service-check-gold.svg" alt="">
            <span class="ml-4 text-xl font-bold">เห็นผลใน 1 เดือน</span>
          </div>
        </div>
        <div class="mb-16">
          <p class="text-lg text-left mb-2 font-bold pb-4">“การตลาด” หนึ่งสำคัญที่คนทำร้านอาหารจำเป็นต้องทำ โดยเฉพาะยุคนี้ที่มีตัวเลือกร้านอาหารมากมายหากร้านเราไม่ทำการตลาดให้ผู้คนรู้จัก สนใจ โอกาสที่ร้านเราจะกลายเป็นตัวเลือกลูกค้าก็น้อยลง</p>
          <p class="text-lg text-left font-thin">มันน่าเสียดายมาก ๆ หากเราลงทุนทำทุกอย่างเต็มที่ แต่สุดท้ายลูกค้าไม่เข้าร้านเพราะลูกค้าไม่รู้จักร้านเรา “การตลาด” หนึ่งสำคัญที่คนทำร้านอาหารจำเป็นต้องทำ โดยเฉพาะยุคนี้ที่มีตัวเลือกร้านอาหารมากมายหากร้านเราไม่ทำการตลาดให้ผู้คนรู้จัก สนใจ โอกาสที่ร้านเราจะกลายเป็นตัวเลือกลูกค้าก็น้อยลง มันน่าเสียดายมาก ๆ หากเราลงทุนทำทุกอย่างเต็มที่ แต่สุดท้ายลูกค้าไม่เข้าร้านเพราะลูกค้าไม่รู้จักร้านเรา</p>
        </div>
        <div class="mb-8 md:mb-16">
          <div class="font-bold mb-4">Our Client</div>
          <div class="hidden md:flex">
            <div class="tooltip">
              <img class="w-12 h-12 object-cover" src="<?= get_theme_file_uri() ?>/assets/images/image 7.png" />
              <div class="tooltiptext">
                <div class="flex items-center mb-4">
                  <img src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" alt="" class="object-cover w-full h-full rounded-full" style="width:45px;height:45px;">
                  <div class="ml-4">
                    <div >พีท พัชระ</div>
                    <div class="font-bold">Potato corner</div>
                  </div>
                </div>
                <p>สุดยอดเลยครับ เห็นผลจริงรายได้ผมเพิ่ม 3 เท่า หลังจากได้เพื่อนแท้ร้านอาหารมา ช่วยปรึกษาเรื่องการตลาด แนะนำครับผม</p>
              </div>
            </div>
            <div class="tooltip -ml-2">
              <img class="w-12 h-12 object-cover" src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" />
              <div class="tooltiptext">
                <div class="flex items-center mb-4">
                  <img src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" alt="" class="object-cover w-full h-full rounded-full" style="width:45px;height:45px;">
                  <div class="ml-4">
                    <div >พีท พัชระ</div>
                    <div class="font-bold">Potato corner</div>
                  </div>
                </div>
                <p>สุดยอดเลยครับ เห็นผลจริงรายได้ผมเพิ่ม 3 เท่า หลังจากได้เพื่อนแท้ร้านอาหารมา ช่วยปรึกษาเรื่องการตลาด แนะนำครับผม</p>
              </div>
            </div>
          </div>
          <div class="md:hidden -mx-6">
            <div class="owl-carousel">
              <div class="slideClient">
                <div class="flex items-center mb-4">
                  <img src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" alt="" class="object-cover w-full h-full rounded-full" style="width:45px;height:45px;">
                  <div class="ml-4">
                    <div >พีท พัชระ</div>
                    <div class="font-bold">Potato corner</div>
                  </div>
                </div>
                <p>สุดยอดเลยครับ เห็นผลจริงรายได้ผมเพิ่ม 3 เท่า หลังจากได้เพื่อนแท้ร้านอาหารมา ช่วยปรึกษาเรื่องการตลาด แนะนำครับผม</p>
              </div>
              <div class="slideClient">
                <div class="flex items-center mb-4">
                  <img src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" alt="" class="object-cover w-full h-full rounded-full" style="width:45px;height:45px;">
                  <div class="ml-4">
                    <div >พีท พัชระ</div>
                    <div class="font-bold">Potato corner</div>
                  </div>
                </div>
                <p>สุดยอดเลยครับ เห็นผลจริงรายได้ผมเพิ่ม 3 เท่า หลังจากได้เพื่อนแท้ร้านอาหารมา ช่วยปรึกษาเรื่องการตลาด แนะนำครับผม</p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <a href="/contact-us" class="inline-block rounded-full font-bold py-3 px-16" style="background-color: #D4BD7D;color:#262145">Contact Us</a>
        </div>
      </div>
      <div class="w-2/4 hidden md:flex items-center justify-center px-16">
        <img src="<?= get_theme_file_uri() ?>/assets/images/servive-consultant.png"/>
      </div>
    </div>
    <div class="text-center mb-2 font-bold">สอบถามรายละเอียด Consultant</div>
    <div class="py-8 px-8 md:px-0 md:border-t md:border-gray-300 md:flex md:justify-center md:mr-20">
      <div class="mx-3 flex items-center mb-2 md:mb-0">
        <img class="w-6 h-6" src="<?= get_theme_file_uri() ?>/assets/images/icon-call-white.svg" />
        <a href="tel:08276281927" class="ml-2 underline">08276281927 (คุณออม)</a>
      </div>
      <div class="mx-3 flex items-center mb-2 md:mb-0">
        <img class="w-6 h-6" src="<?= get_theme_file_uri() ?>/assets/images/icon-line-white.svg" />
        <a href="https://line.me/ti/p/~@ormzins" target="_blank" class="ml-2 underline">@ormzin</a>
      </div>
      <div class="mx-3 flex items-center">
        <img class="w-6 h-6" src="<?= get_theme_file_uri() ?>/assets/images/icon-mail-white.svg" />
        <a href="mailto:amanicha@gmail.com" class="ml-2 underline">amanicha@gmail.com</a>
      </div>
    </div>
  </section>

  <!-- Training -->
  <section class="px-6 md:px-0 md:pl-20 pt-20 bg-contain" style="background-color: #D4BD7D;color:#262145;background-image: url('<?= get_theme_file_uri() ?>/assets/images/bg-grid.svg')">
    <div class="md:flex  pb-16">
      <div class="md:hidden items-center justify-center">
        <img src="<?= get_theme_file_uri() ?>/assets/images/service-training.png"/>
      </div>
      <div class="md:w-2/4">
        <p class="lg:text-left text-4xl font-bold">Training</p>
        <div class="my-12">
          <div class="flex mb-2 items-center">
            <img class="w-8 h-8" src="<?= get_theme_file_uri() ?>/assets/images/service-check-blue.svg" alt="">
            <span class="ml-4 text-xl font-bold">สอนตั้งแต่ขั้นพื้นฐาน</span>
          </div>
          <div class="flex mb-2 items-center">
            <img class="w-8 h-8" src="<?= get_theme_file_uri() ?>/assets/images/service-check-blue.svg" alt="">
            <span class="ml-4 text-xl font-bold">ลงมือทำสำเร็จ</span>
          </div>
          <div class="flex mb-3 items-center">
            <img class="w-8 h-8" src="<?= get_theme_file_uri() ?>/assets/images/service-check-blue.svg" alt="">
            <span class="ml-4 text-xl font-bold">เห็นผลใน 1 เดือน</span>
          </div>
        </div>
        <div class="mb-16">
          <p class="text-lg text-left mb-2 font-bold pb-4">“การตลาด” หนึ่งสำคัญที่คนทำร้านอาหารจำเป็นต้องทำ โดยเฉพาะยุคนี้ที่มีตัวเลือกร้านอาหารมากมายหากร้านเราไม่ทำการตลาดให้ผู้คนรู้จัก สนใจ โอกาสที่ร้านเราจะกลายเป็นตัวเลือกลูกค้าก็น้อยลง</p>
          <p class="text-lg text-left font-thin">มันน่าเสียดายมาก ๆ หากเราลงทุนทำทุกอย่างเต็มที่ แต่สุดท้ายลูกค้าไม่เข้าร้านเพราะลูกค้าไม่รู้จักร้านเรา “การตลาด” หนึ่งสำคัญที่คนทำร้านอาหารจำเป็นต้องทำ โดยเฉพาะยุคนี้ที่มีตัวเลือกร้านอาหารมากมายหากร้านเราไม่ทำการตลาดให้ผู้คนรู้จัก สนใจ โอกาสที่ร้านเราจะกลายเป็นตัวเลือกลูกค้าก็น้อยลง มันน่าเสียดายมาก ๆ หากเราลงทุนทำทุกอย่างเต็มที่ แต่สุดท้ายลูกค้าไม่เข้าร้านเพราะลูกค้าไม่รู้จักร้านเรา</p>
        </div>
        <div class="mb-8 md:mb-16">
          <div class="font-bold mb-4">Our Client</div>
          <div class="hidden md:flex">
            <div class="tooltip">
              <img class="w-12 h-12 object-cover" src="<?= get_theme_file_uri() ?>/assets/images/image 7.png" />
              <div class="tooltiptext">
                <div class="flex items-center mb-4">
                  <img src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" alt="" class="object-cover w-full h-full rounded-full" style="width:45px;height:45px;">
                  <div class="ml-4">
                    <div >พีท พัชระ</div>
                    <div class="font-bold">Potato corner</div>
                  </div>
                </div>
                <p>สุดยอดเลยครับ เห็นผลจริงรายได้ผมเพิ่ม 3 เท่า หลังจากได้เพื่อนแท้ร้านอาหารมา ช่วยปรึกษาเรื่องการตลาด แนะนำครับผม</p>
              </div>
            </div>
            <div class="tooltip -ml-2">
              <img class="w-12 h-12 object-cover" src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" />
              <div class="tooltiptext">
                <div class="flex items-center mb-4">
                  <img src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" alt="" class="object-cover w-full h-full rounded-full" style="width:45px;height:45px;">
                  <div class="ml-4">
                    <div >พีท พัชระ</div>
                    <div class="font-bold">Potato corner</div>
                  </div>
                </div>
                <p>สุดยอดเลยครับ เห็นผลจริงรายได้ผมเพิ่ม 3 เท่า หลังจากได้เพื่อนแท้ร้านอาหารมา ช่วยปรึกษาเรื่องการตลาด แนะนำครับผม</p>
              </div>
            </div>
          </div>
          <div class="md:hidden -mx-6">
            <div class="owl-carousel">
            <div class="slideClient">
              <div class="flex items-center mb-4">
                <img src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" alt="" class="object-cover w-full h-full rounded-full" style="width:45px;height:45px;">
                <div class="ml-4">
                  <div >พีท พัชระ</div>
                  <div class="font-bold">Potato corner</div>
                </div>
              </div>
              <p>สุดยอดเลยครับ เห็นผลจริงรายได้ผมเพิ่ม 3 เท่า หลังจากได้เพื่อนแท้ร้านอาหารมา ช่วยปรึกษาเรื่องการตลาด แนะนำครับผม</p>
            </div>
            <div class="slideClient">
              <div class="flex items-center mb-4">
                <img src="<?= get_theme_file_uri() ?>/assets/images/image 8.png" alt="" class="object-cover w-full h-full rounded-full" style="width:45px;height:45px;">
                <div class="ml-4">
                  <div >พีท พัชระ</div>
                  <div class="font-bold">Potato corner</div>
                </div>
              </div>
              <p>สุดยอดเลยครับ เห็นผลจริงรายได้ผมเพิ่ม 3 เท่า หลังจากได้เพื่อนแท้ร้านอาหารมา ช่วยปรึกษาเรื่องการตลาด แนะนำครับผม</p>
            </div>
            </div>
          </div>
        </div>
        <div>
          <a href="/contact-us" class="inline-block rounded-full text-white font-bold py-3 px-16" style="background-color: #262145;">Contact Us</a>
        </div>
      </div>
      <div class="w-2/4 hidden md:flex items-center justify-center">
        <img src="<?= get_theme_file_uri() ?>/assets/images/service-training.png"/>
      </div>
    </div>
    <div class="text-center mb-2 font-bold">สอบถามรายละเอียด Training</div>
    <div class="py-8 px-8 md:px-0 md:border-t md:border-gray-900 md:flex md:justify-center md:mr-20">
      <div class="mx-3 flex items-center mb-2 md:mb-0">
        <img class="w-6 h-6" src="<?= get_theme_file_uri() ?>/assets/images/icon-call.svg" />
        <a href="tel:08276281927" class="ml-2 underline">08276281927 (คุณออม)</a>
      </div>
      <div class="mx-3 flex items-center mb-2 md:mb-0">
        <img class="w-6 h-6" src="<?= get_theme_file_uri() ?>/assets/images/icon-line.svg" />
        <a href="https://line.me/ti/p/~@ormzins" target="_blank" class="ml-2 underline">@ormzin</a>
      </div>
      <div class="mx-3 flex items-center">
        <img class="w-6 h-6" src="<?= get_theme_file_uri() ?>/assets/images/icon-mail.svg" />
        <a href="mailto:amanicha@gmail.com" class="ml-2 underline">amanicha@gmail.com</a>
      </div>
    </div>
  </section>


  <section id="contact-us" class="lg:h-screen px-12 lg:px-48 lg:pt-18 flex items-center" style="background-color: #F2F2F2;">
    <div class="lg:flex w-full lg:justify-between flex-col lg:flex-row">
      <div class="flex flex-col gap-8 flex-1" style="color: #262145;">
        <div class="flex flex-col gap-1">
          <span class="text-xl font-bold " style="color: #262145;">เกี่ยวกับเรา</span>

          <span class="text-base ">เราพร้อมเป็นส่วนร่วมเล็กๆ สนับสนุนให้คนทำร้านอาหารสำเร็จ </span>
          <span class="text-base ">เราพร้อมเป็นเพือนร่วมคิด ร่วมแก้ปัญหา เป็นที่ปรึกษา</span>
          <span class="text-base ">เป็นแหล่งวัตถุดิบความรู้ ในการบริการจัดการร้านให้สำเร็จ</span>
          <span class="text-base ">ทุกปัญหาเรื่องร้านอาหาร ปรึกษาเราได้ เพราะเราคือ "เพื่อนแท้ร้านอาหาร"</span>
        </div>
        <div class="flex flex-col gap-1 text-base">
          <span class="font-semibold">คุณป๊อปปี้</span>
          <div><a href="mailto:amanicha@gmail.com" class="inline-flex items-center"><img class="w-5 h-5 mr-2" src="<?= get_theme_file_uri() ?>/assets/images/email-icon.svg" alt=""> amanicha@gmail.com</a></div>
          <div><a href="tel:08276281927" class="inline-flex items-center"><img class="w-5 h-5 mr-2" src="<?= get_theme_file_uri() ?>/assets/images/phone-icon.svg" alt=""> 08276281927</a></div>
          <div><a href="https://line.me/ti/p/~@ormzins" target="_blank" class="inline-flex items-center"><img class="w-5 h-5 mr-2" src="<?= get_theme_file_uri() ?>/assets/images/line-icon.svg" alt=""> @ormzins</a></div>
        </div>
        <div class="flex flex-col gap-1 text-base">
          <span class="font-semibold">คุณออม</span>
          <div><a href="mailto:amanicha@gmail.com" class="inline-flex items-center"><img class="w-5 h-5 mr-2" src="<?= get_theme_file_uri() ?>/assets/images/email-icon.svg" alt=""> amanicha@gmail.com</a></div>
          <div><a href="tel:08276281927" class="inline-flex items-center"><img class="w-5 h-5 mr-2" src="<?= get_theme_file_uri() ?>/assets/images/phone-icon.svg" alt=""> 08276281927</a></div>
          <div><a href="https://line.me/ti/p/~@ormzins" target="_blank" class="inline-flex items-center"><img class="w-5 h-5 mr-2" src="<?= get_theme_file_uri() ?>/assets/images/line-icon.svg" alt=""> @ormzins</a></div>
        </div>
      </div>
      <form action="#" class="text-sm flex flex-col flex-1 flex-grow gap-3 max-w-md lg:my-0 my-16">
        <span class="text-sm font-semibold">ติดต่อ</span>
        <input name="name" type="text" class="rounded-lg border border-gray-500 px-4 py-auto h-10" style="background-color: #F2F2F2;" placeholder="ชื่อ">
        <input name="phone" type="text" class="rounded-lg border border-gray-500 px-4 py-auto h-10" style="background-color: #F2F2F2;" placeholder="เบอร์โทรศัพท์">
        <input name="email" type="email" class="rounded-lg border border-gray-500 px-4 py-auto h-10" style="background-color: #F2F2F2;" placeholder="อีเมล">
        <input name="line" type="text" class="rounded-lg border border-gray-500 px-4 py-auto h-10" style="background-color: #F2F2F2;" placeholder="Line ID">
        <textarea name="meaasge" rows="3" class="rounded-lg border border-gray-500 px-4 py-1" style="background-color: #F2F2F2;" placeholder="รายละเอียด"></textarea>
        <button type="submit" class="h-10 rounded-full" style="background-color:#262145; color: #DBDBDB;">ส่งข้อความ</button>
      </form>
    </div>
  </section>
  <?php include 'truefriend-footer.php'; ?>


</body>
<style>
  .tooltip {
    position: relative;
    display: inline-block;
  }

  .tooltip .tooltiptext {
    visibility: hidden;
    width: 300px;
    background-color: #fff;
    border-radius: 6px;
    padding: 15px;
    position: absolute;
    z-index: 1;
    bottom: -10%;
    left: 110%;
    box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.15);
    color: #262145;
  }

  .tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    bottom: 10%;
    right: 99%;
    border-width: 15px;
    border-style: solid;
    border-color: transparent #fff transparent transparent;
  }
  .tooltip:hover .tooltiptext {
    visibility: visible;
  }

  .slideClient{
    padding: 15px;
    width: 100%;
    background-color: #fff;
    border-radius: 6px;
    box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.15);
    margin: 14px;
    color: #262145;
  }
</style>

</html>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        items: $(window).width() < 1024 ? 1.3 : 4,
        loop: true,
        // autoplay: true,
        autoplayHoverPause: true,
        slideBy: 2,
        margin: 16,
        dots: false,
    });
  });
</script>