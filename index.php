<?php get_header(); ?>

<div class="app-content content container-fluid">
  <div class="content-wrapper">
    <div class="">

    </div>
  </div>
</div>

<script type="text/javascript">
window.setTimeout(function() {
  jQuery("#alertmassges").fadeTo(500, 0).slideUp(500, function() {
    jQuery(this).remove();
  });
}, 4000);
</script>
<script type="text/javascript">
window.setTimeout(function() {
  jQuery("#successfully_send_reservation").fadeTo(500, 0).slideUp(500, function() {
    jQuery(this).remove();
  });
}, 2000);
</script>
<script type="text/javascript">
window.setTimeout(function() {
  jQuery("#error_send_reservation").fadeTo(500, 0).slideUp(500, function() {
    jQuery(this).remove();
  });
}, 2000);
</script>

<section id="hekaya">
  <div id="carousel-example-generic" class="carousel carousel-fade">
    <div class="carousel-inner" role="listbox">
      <div class="item slide1 active">
        <div class="container">
          <div class="row">
            <div class="col-md-6  text-center sliderText">
              <div class="bigTitle">
                <div class="text-center">
                  <h1 class="ykaia animated zoomIn delay-1 ">حكايتنا</h1>
                </div>
              </div>
              <!--bigTitle-->
              <div class="btn button btnSlider animated zoomIn delay-1" data-toggle="modal">
                <a href="#contact">ابدأ معنا</a>
              </div>

            </div>
            <!--sliderText-->
            <div class="col-md-6">

              <img src="<?php echo get_template_directory_uri() . '/images/hekaya.png'; ?>"
                class="img-responsive animated zoomInLeft center-block">
            </div>
          </div>
        </div>
      </div>
      <div class="item slide1">

        <div class="container">
          <div class="row">
            <div class="col-md-6  text-center sliderText">
              <div class="bigTitle">
                <div class="text-center">
                  <h1 class="ykaia animated zoomIn delay-1 ">إنجازاتنا</h1>
                </div>
              </div>
              <!--bigTitle-->
              <div class="btn button btnSlider animated zoomIn delay-1" data-toggle="modal" data-target="#myModal">
                ابدأ معنا
              </div>
              <!--button-->
            </div>
            <!--sliderText-->

            <div class="col-md-6">
              <img src="http://rosomat.net/public/img/rosomat_upload/slider/27102019.03.1720616271.png"
                class="img-responsive animated zoomInLeft center-block">

            </div>

          </div>
          <!--row-->

        </div>

      </div>
      <!--item-->

      <!-- Item 2 -->

    </div>
    <!--item-->

    <!-- End Wrapper for slides-->

  </div>
  <!--inner-->

  </div>
  <!--carousel-->

</section>

<!-- about -->
<section id="about">

  <div class="container">
    <div class="text-center">
      <h2 class="ykaia" style="font-size: 46px; margin-bottom: 15px; padding: 0;">من نحن</h2>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-3 "></div>
        <div class="col-md-6 " style="text-align: center;">
          <span>شركة سعودية انطلقت من المدينة المنورة متخصصة في مجال تنظيم الفعاليات والمؤتمرات وتجهيز ملتقيات ومهرجانات
            محلية وعربية، كما تعمل في مجال البرمجيات والحلول التقنية. اعتمدت ملتي فيجن لتحقيق تميزها على فريق يمتلك
            الخبرات والكفاءات الادارية والفنية من خلال الالتزام بأرقى مستويات الجودة من أفكار خارج الصندوق وتطورت لتشمل
            الخدمات البرمجية والتقنية.</span>
        </div>
        <div class="col-md-3 "></div>
      </div>
    </div>
  </div>
</section>

<section id="how-we-work">
  <div class="container">
    <div class="row">
      <div class="bigTitle col-md-6 col-md-push-3" style="height: 89px;margin-top: 26px;">
        <div class="text-center">
          <h2 class="ykaia">كيف نعمل</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-3 "></div>
        <div class="col-md-6 " style="text-align: center;">
          <span>نمتلك في ملتي فيجن مجموعة من المبدعين أصحاب الخبرة والكفاءة حيث نعمل على تطوير فريق عملنا بشكل
            دائـم ليواكب أحدث التقـنيات الـــــمستــــخدمة</span>
        </div>
        <div class="col-md-3 "></div>
      </div>
    </div>
  </div>

  <div class="swiper-container swiper-container5">
    <div class="swiper-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div style="margin-top: 1%;" class="row carousel slide" data-ride="carousel">
              <li class="col-md-3 text-center wow animated zoomIn delay-2">
                <h4 style="padding-bottom: 15px;;font-weight: bold;">نسمعك</h4>
                <div class="Iconmoon "><img class="img-responsive center-block"
                    src="<?php echo get_template_directory_uri() . '/images/we-write.png'; ?>">
                </div>
                <p style="font-size:15px;">نحول الأفكار المميزة إلى كلمات مقروءة، ثم نعيد صياغتها لتصل بأبسط الكلمات
                  وأكثرها تناسبًا مع مفاهيم الجمهور الذي تستــهدفــــه. </p>
              </li>
              <li class="col-md-3 text-center wow animated zoomIn delay-2">
                <h4 style="padding-bottom: 15px;;font-weight: bold;">نحلل</h4>
                <div class="Iconmoon "><img class="img-responsive center-block"
                    src="<?php echo get_template_directory_uri() . '/images/we-search.png'; ?>">
                </div>
                <p style="font-size:15px;">نستخدم أحدث التقنيات لرصد التفاصيـل المحـيطة بمحتوى منصات التواصل الاجتماعي
                  وحملاتك الإعلانية، ونُخضعها للقراءة و التحليل. </p>
              </li>
              <li class="col-md-3 text-center wow animated zoomIn delay-2">
                <h4 style="padding-bottom: 15px;;font-weight: bold;">نخطط</h4>
                <div class="Iconmoon "><img class="img-responsive center-block"
                    src="<?php echo get_template_directory_uri() . '/images/we-speak.png'; ?>">
                </div>
                <p style="font-size:15px;">نُكوِّن حملات إعلانية متكاملة وشاملة لكل أهدافك مستغليـن خبراتـنا المتخصصة
                  بالتسويق الإلكتروني لمُختلف منصات التواصل الاجتماعي. </p>
              </li>
              <li class="col-md-3 text-center wow animated zoomIn delay-2">
                <h4 style="padding-bottom: 15px;;font-weight: bold;">ننفذ</h4>
                <div class="Iconmoon "><img class="img-responsive center-block"
                    src="<?php echo get_template_directory_uri() . '/images/we-draw.png'; ?>">
                </div>
                <p style="font-size:15px;">نشكّل كل المحتوى الخاص بك في مجموعة من التصامـــيــم والرســــوم القادرة
                  على جذب الانتباه وإيصال المعلومة بالصــــورة الأفـــضـــــل. </p>
              </li>
            </div><!-- /#myCarousel -->
          </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->


      <!--Slider-->

    </div>

    <!-- Add Arrows -->

  </div>
</section>
<section style="padding: 0px 0px 0px 0px;">

</section><!-- /how-we-work -->

<section id="services" style="padding: 0px 0px;">
  <div class="container">
    <div class="row">
      <div class="bigTitle col-md-6 col-md-push-3" style="height: 89px;margin-top: 26px;">
        <div class="text-center">
          <h2 class="ykaia">خدماتنا</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-3 "></div>
        <div class="col-md-6 " style="text-align: center;">
          <span>إنجازنا في ملتي فيجن طويل وخبرتنا بهذا الانجاز يزداد ، عندما تريد إنشاء مشروع ستحتاج لفريق يقدم لك
            الخدمة
            و النُّصح والإرشاد وخبراته المتراكمة</span>
        </div>
        <div class="col-md-3 "></div>
      </div>
    </div>
    <div style="clear: both;"></div>
    <div class="ServiseBox">
      <div class="row">
        <div class="col-lg-12 col-md-12">
        </div>
        <div id="portfolio" class="row" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s;">

          <!-- conferences -->
          <div class="col-md-6 col-lg-4 col-xs-12 mix social wow animated zoomIn delay-2" data-wow-delay="0.3s"
            style="text-align: right; display: inline-block;" data-bound="">
            <div class="service-box hvr-bounce-in">
              <div style="text-align: center;">
                <i class="fa "><img class=""
                    src="<?php echo get_template_directory_uri() . '/images/conference.png'; ?>"></i>
              </div>
              <div style="text-align: center;">
                <h4><a style="font-size: 20px;color: #c31313;font-weight: bold;">تنظيم المعارض والمؤتمرات</a></h4>
                <div class="col-md-12" id="aerrr" style="text-align: justify;line-height:20px;direction: rtl">
                  <h6>
                    <p style="height: 130px">لدينا فريق من الخبراء المدربين على أعلى مستوى وافضل قواعد المهارة والدقة
                      لتنفيذ الفعاليات والمؤتمرات بدءا من التخطيط والتنظيم والابداع في التنفيذ</p>
                  </h6>
                </div>
              </div>
            </div>
          </div>

          <!-- المواقع الإلكترونية -->
          <div class="col-md-6 col-lg-4 col-xs-12 mix social wow animated zoomIn delay-2" data-wow-delay="0.3s"
            style="text-align: right; display: inline-block;" data-bound="">
            <div class="service-box hvr-bounce-in">
              <div style="text-align: center;">
                <i class="fa "><img class=""
                    src="<?php echo get_template_directory_uri() . '/images/website-design.png'; ?>"></i>
              </div>
              <div style="text-align: center;">
                <h4><a style="font-size: 20px;color: #c31313;font-weight: bold;">المواقع الإلكترونية</a></h4>
                <div class="col-md-12" id="aerrr" style="text-align: justify;line-height:20px;direction: rtl">
                  <h6>
                    <p style="height: 130px">فريقنا متكامل من الخبراء المختصين ذوي الكفاءة وبمجرد أن نبدأ في إنشاء
                      موقعك ستصل لمن تُريد للتعريف بنشاط ـــك التجاري ولتحقـــيــــق أفضل النتائــج والانطباع في الســوق
                      المحلي الــســعــودي والعالـــمـــــي</p>
                  </h6>
                </div>
              </div>
            </div>
          </div>

          <!-- تصميم الموبايل -->
          <div class="col-md-6 col-lg-4 col-xs-12 mix social wow animated zoomIn delay-2" data-wow-delay="0.3s"
            style="text-align: right; display: inline-block;" data-bound="">
            <div class="service-box hvr-bounce-in">
              <div style="text-align: center;">
                <i class="fa "><img class=""
                    src="<?php echo get_template_directory_uri() . '/images/mobile-design.png'; ?>"></i>
              </div>
              <div style="text-align: center;">
                <h4><a style="font-size: 20px;color: #c31313;font-weight: bold;">تطوير تطبيقات الجوال</a></h4>
                <div class="col-md-12" id="aerrr" style="text-align: justify;line-height:20px;direction: rtl">
                  <h6>
                    <p style="height: 130px">مبرمجينا متلكون الخبرة الكافية من أجل تحويل الفكرة الى واقع
                      عبر تطوير تطبيق احترافي يسهل الترويج لمشـــروعــــك وأعــمــالــك ويــلبـــــي احـــتيـــاجات
                      المستخدمين ويشكل حلقـة وصـــل بيــنك وبــين عمـــلائك</p>
                  </h6>
                </div>
              </div>
            </div>
          </div>

          <!-- متاجر الكترونية -->
          <div class="col-md-6 col-lg-4 col-xs-12 mix social wow animated zoomIn delay-2" data-wow-delay="0.3s"
            style="text-align: right; display: inline-block;" data-bound="">
            <div class="service-box hvr-bounce-in">
              <div style="text-align: center;">
                <i class="fa "><img class=""
                    src="<?php echo get_template_directory_uri() . '/images/ecommerce-design.png'; ?>"></i>
              </div>
              <div style="text-align: center;">
                <h4><a style="font-size: 20px;color: #c31313;font-weight: bold;">المتاجر الالكترونية</a></h4>
                <div class="col-md-12" id="aerrr" style="text-align: justify;line-height:20px;direction: rtl">
                  <h6>
                    <p style="height: 130px">نبدع بإنشاء وتصميم متاجر الكترونية احترافية ومميزة وتتناسب مع أنظمة التجارة
                      الالكترونية من خلال فريقنا ليلبي رغبات واحتياجات المستهلكين البــــاحثين عـــــن
                      المنـــــتجـــــات والخدمــات عبر الانــــتـــــرنــــــت</p>
                  </h6>
                </div>
              </div>
            </div>
          </div>

          <!-- تصميم الجرافيك -->
          <div class="col-md-6 col-lg-4 col-xs-12 mix social wow animated zoomIn delay-2" data-wow-delay="0.3s"
            style="text-align: right; display: inline-block;" data-bound="">
            <div class="service-box hvr-bounce-in">
              <div style="text-align: center;">
                <i class="fa "><img class=""
                    src="<?php echo get_template_directory_uri() . '/images/graphic-design.png'; ?>"></i>
              </div>
              <div style="text-align: center;">
                <h4><a style="font-size: 20px;color: #c31313;font-weight: bold;">تصميم الجرافيك</a></h4>
                <div class="col-md-12" id="aerrr" style="text-align: justify;line-height:20px;direction: rtl">
                  <h6>
                    <p style="height: 130px">يضم فريقنا عدداً متميزاً من الخبراء المختصين ذوي الكفاءات العالية مع
                      استخدام أفضل
                      الأدوات والأفـــــكار الإبداعية للخروج بتصميم جذاب يتناســــــــــب مع أذواق الجمهور المستهدف</p>
                  </h6>
                </div>
              </div>
            </div>
          </div>

          <!-- تسويق الكتروني -->
          <div class="col-md-6 col-lg-4 col-xs-12 mix social wow animated zoomIn delay-2" data-wow-delay="0.3s"
            style="text-align: right; display: inline-block;" data-bound="">
            <div class="service-box hvr-bounce-in">
              <div style="text-align: center;">
                <i class="fa "><img class=""
                    src="<?php echo get_template_directory_uri() . '/images/emarketing.png'; ?>"></i>
              </div>
              <div style="text-align: center;">
                <h4><a style="font-size: 20px;color: #c31313;font-weight: bold;">التسويق الإلكتروني</a></h4>
                <div class="col-md-12" id="aerrr" style="text-align: justify;line-height:20px;direction: rtl">
                  <h6>
                    <p style="height: 130px">صناعة المحتوى التسويقي المتناسب مع خدمات ومنتجات وتوجهات الشركة نعمل على
                      التسويق الرقمي الذي يبدأ من مواقع التواصل الاجتماعي مروراً بمحركات البحث، لضم ــــان تفاعل الجمهور
                      من خلال تلك المواقـــع</p>
                  </h6>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div style="clear: both;"></div>

  <section style="padding: 5px 0px;">
    <div class="container">
      <div class="row">
        <div class="bigTitle col-md-6 col-md-push-3" style="height: 89px;margin-top: 26px;">
          <div class="text-center">
            <h2 class="ykaia">فريق العمل</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-3 "></div>
          <div class="col-md-6 " style="text-align: center;">
            <span>فريق عمل مؤهلين ومدربين وفق أفضل قواعد المهارة والدقة لتنفيذ المشاريع البرمجية والفعاليات والمؤتمرات
              بدءا من التخطيط والتنظيم والابداع في التنفيذ.</span>
          </div>
          <div class="col-md-3 "></div>

        </div>
      </div>
    </div>
  </section>

  <div style="clear: both;"></div>

  <section id="team">

    <div class="container">
      <div class="row">
        <?php
						$args = array(
							'post_type' => 'team',
							'posts_per_page' => 10
						);

						$team = new WP_Query($args);

						while ($team->have_posts()) {
							$team->the_post(); ?>

        <div class="col-md-3">
          <img src="<?php echo get_field('team_member_avatar')['url']; ?>" alt="">
          <h4 class="text-center"><?php the_title(); ?></h4>
          <p class="text-center"><?php the_field('job_title'); ?></p>
        </div>

        <?php
						}
						wp_reset_postdata();
					?>
      </div>
    </div>
  </section><!-- team-end -->
  <!-- أعمالنا -->
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="bigTitle col-md-6 col-md-push-3" style="height: 89px;margin-top: 26px;">
          <div class="text-center">
            <h2 class="ykaia">أعمالنا</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-3 "></div>
          <div class="col-md-6 " style="text-align: center;">
            <span>نقدم لكم أفضل الخدمات في مجال تصميم المواقع وبرمجة تطبيقات الهواتف الذكية وتنظيم المعارض</span>
          </div>
          <div class="col-md-3 "></div>
        </div>
      </div>
      <div style="clear: both;"></div>
      <div id="Works" class="Our_work" style="padding: 0px 0px;">
        <div class="container">
          <!-- Portfolio -->
          <div class="row">
            <div class="col-md-4">
              <a href="<?php echo site_url( '/conferences' ); ?>">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/conferences-1.png'; ?>">
              </a>
              <h4>أعمالنا في تنظيم المعارض والمؤتمرات</h4>
            </div>
            <div class="col-md-4">
              <a href="<?php echo site_url( '/apps' ); ?>">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/mobile-1.png'; ?>">
              </a>
              <h4>أعمالنا في تطوير التطبيقات</h4>
            </div>
            <div class="col-md-4">
              <a href="<?php echo site_url( '/web-portfolio' ); ?>">
                <img width="150" src="<?php echo get_template_directory_uri() . '/images/web-design-1.png'; ?>">
              </a>
              <h4>أعمالنا في تطوير الويب</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- أعمالنا -->
  </div>
</section>

<section id="partners" class="text-center">
  <h2>شركاء النجاح</h2>
  <div class="container">
    <div class="row">
      <?php
					$args = array(
						'post_type' => 'partner',
						'posts_per_page' => 12
					);

					$partner = new WP_Query($args);

					while ($partner->have_posts()) {
						$partner->the_post(); ?>

      <div class="col-lg-2">
        <img class="img-fluid" src="<?php echo get_field('partner_logo')['url']; ?>" alt="">
      </div>

      <?php }
					wp_reset_postdata();
				?>
    </div>
  </div><!-- container-end -->
</section>

</div>
</div>
<div id="MoreB" class="text-center">

  <div class="loader"></div>

</div>
</div>
</section>
</div>
</section>

<?php get_footer(); ?>