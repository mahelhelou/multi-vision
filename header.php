<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>ملتي فيجن</title>
  <meta name="description" content="تنظيم الفعاليات والمؤتمرات وتجهيز ملتقيات ومهرجانات محلية وعربية، كما تعمل في مجال البرمجيات والحلول التقنية">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="icon" href="<?php echo get_template_directory_uri() . '/images/logo.png' ?>" sizes="32x32" />
  <?php wp_head(); ?>
</head>

<body id="home">

  <header>
    <p class="totop scroll">
      <a href="#home"><span class="fa fa-chevron-up"></span></a>
    </p>
    <div style="height: 50px;"></div>
    <div id="topNav" class="container">
      <div class="row">

        <!--Logo-->
        <div class="logo  text-center  col-md-2 col-sm-12  col-lg-2 col-sm-2">
          <div class="logoBox">
            <a href="<?php echo site_url(); ?>"><img
                src="<?php echo get_template_directory_uri() . '/images/logo.png' ?>"
                class="img-responsive center-block"></a>
          </div>
        </div>
        <!---Logo-->

        <nav class="navbar navbar-default navbar-static-top col-md-10 col-lg-10  col-sm-10 ">
          <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="font-weight: bold;">
              <li class=""><a href="#">الرئيسية</a></li>
              <li class="scroll"><a href="#about">من نحن</a></li>
              <li class="scroll"><a href="#how-we-work">كيف نعمل</a></li>
              <li class="scroll"><a href="#services">خدماتنا</a></li>
              <li class="scroll"><a href="#team">فريق العمل</a></li>
              <li class="scroll"><a href="#portfolio">أعمالنا</a></li>
              <li class="scroll"><a href="#contact">اتصل بنا</a></li>
            </ul>
            <div class="btn button">
              <a style="font-weight: bold;" href="<?php echo get_template_directory_uri() . '/public/multivision-ملتي فيجن.pdf' ?>"
                >
                بروفايل الشركة
              </a>
            </div>

          </div>
        </nav>

      </div>
    </div>
  </header>