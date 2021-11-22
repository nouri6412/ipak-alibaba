<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Ipak_Alibaba
 * @since 1.0.0
 */

?>
<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="<?php  echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php  echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/assets/css/items.css">
    <link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/assets/css/menu.css">
	<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<div class="header white">
        <div class="header-top">
            <a class="link-logo" href="#">
                <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/logo.webp" />
            </a>
            <div class="search-box">
                <button class="input-submit">
                    <i class="fa fa-search"></i>
                    <span>جستجو</span>
                </button>

                <input class="input-text" />
                <select>
                    <option>تولید کنندگان</option>
                    <option>کارکرده</option>
                    <option>وارد کنندگان</option>
                </select>
            </div>
            <div class="top-nav">
                <a>
                    خانه
                </a>
                <a>ثبت نام | ورود</a>
                <a>تماس با ما</a>
            </div>

        </div>
        <div class="header-down">
            <div class="menubar">

                <div class="menu-wrapper">
                    <ul class="nav">
                        <li>
                            <a href="#">کالای دیجیتال</a>
                            <div class="layer2">
                                <div class="nav-column">
                                    <ul class="nav inner">
                                        <li>
                                            <a href="#"> موبایل</a>
                                            <div
                                                style="background:url(assets/images/mobile.png) no-repeat left;background-color: #fff;">
                                                <div class="nav-column  border">
                                                    <span class="head">گوشی موبایل</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> Samsung</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Apple</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Huawei</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> HTC</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Asus</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Sony</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Toshiba</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> LG</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Acer</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> موارد بیشتر</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-column  border">
                                                    <span class="head">بر اساس سیستم عامل</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#">android</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">IOS</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">ویندوز فون</a>
                                                        </li>
                                                    </ul>
                                                    <span class="head">انواع گوشی</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#">تک سیم کارت</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">دو سیم کارت</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">گوشی های 4G</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">فبلت</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-column  border">
                                                    <span class="head">لوازم جانبی گوشی موبایل</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> کیف</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> باطری</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> محافظ صفحه نمایش</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> هندزفری</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> پاور بانک</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> کابل گوشی</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> منوپاد و نگهدارنده</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> کارت حافظه</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> کیت تمیز کننده</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> موارد بیشتر</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-column  border">
                                                    <span class="head">رده کاربری</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> مناسب بازی</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> مناسب سالمندان</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> مناسب عکاسی</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"> تبلت و کتاب خوان</a>
                                            <div
                                                style="background:url(assets/images/tablet-ebook-reader.png) no-repeat left;background-color: #fff;">
                                                <div class="nav-column  border">
                                                    <span class="head">تبلت</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> Samsung</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Apple</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Huawei</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> HTC</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Asus</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Sony</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Toshiba</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> LG</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Acer</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> موارد بیشتر</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-column  border">
                                                    <span class="head">بر اساس سایز</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#">کوچکتر از 8 اینچ</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">بین 8 تا 10 اینچ</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">بزرگتر از 10 اینچ</a>
                                                        </li>
                                                    </ul>
                                                    <span class="head">بر اساس سیستم عامل</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#">ویندوز</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">آندروید</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">IOS</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">سایر</a>
                                                        </li>
                                                    </ul>
                                                    <span class="head">کتابخوان</span>
                                                </div>
                                                <div class="nav-column  border">
                                                    <span class="head">لوازم جانبی تبلت</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> کیف</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> باطری</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> محافظ صفحه نمایش</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> هندزفری</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> پاور بانک</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> کابل </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> منوپاد و نگهدارنده</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> کارت حافظه</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> کیت تمیز کننده</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> موارد بیشتر</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-column  border">
                                                    <span class="head">انواع تبلت</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> مناسب بازی</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> مناسب سالمندان</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> تبلت سیم کارت دار</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="#">لوازم خانگی</a>
                            <div class="layer2">
                                <div class="nav-column">
                                    <ul class="nav inner">
                                        <li>
                                            <a href="#"> صوتی و تصویری</a>
                                            <div
                                                style="background:url(assets/images/video-audio-entertainment.png) no-repeat left;background-color: #fff;">
                                                <div class="nav-column  border">
                                                    <span class="head">تلویزیون</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> کوچکتر از 32 اینچ</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> 32 تا 39 اینچ</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> 40 تا 48 اینچ</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> 50تا 55 اینج</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> 60 اینچ و بزرگتر</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Sony</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Toshiba</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> LG</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Acer</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> موارد بیشتر</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-column  border">
                                                    <span class="head">بر اساس سیستم عامل</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#">android</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">IOS</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">ویندوز فون</a>
                                                        </li>
                                                    </ul>
                                                    <span class="head">انواع گوشی</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#">تک سیم کارت</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">دو سیم کارت</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">گوشی های 4G</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">فبلت</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-column  border">
                                                    <span class="head">ستون سوم</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> ....</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> موارد بیشتر</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-column  border">
                                                    <span class="head">ستون چهارم</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> ....</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> موارد بیشتر</a>
                                                        </li>
                                                    </ul>
                                                </div>


                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"> لوازم خانگی برقی</a>
                                            <div
                                                style="background:url(assets/images/home-appliance.png) no-repeat left;background-color: #fff;">
                                                <div class="nav-column  border">
                                                    <span class="head">لوازم پخت و پز</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> مایکرویو</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> اجاق گاز</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> توستر</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> سرخ کن</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ساندویچ ساز</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> 1...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> موارد بیشتر</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-column  border">
                                                    <span class="head">یخچال و فریزر</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#">دسته بندی دلخواه</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">دسته بندی دلخواه</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">دسته بندی دلخواه</a>
                                                        </li>
                                                    </ul>
                                                    <span class="head">خردکن و غذاساز</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#">دسته بندی دلخواه</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">دسته بندی دلخواه</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">دسته بندی دلخواه</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">دسته بندی دلخواه</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-column  border">
                                                    <span class="head">ستون سوم</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> ....</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> موارد بیشتر</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-column  border">
                                                    <span class="head">ستون چهارم</span>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> ....</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> متن شما</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> ...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> موارد بیشتر</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
