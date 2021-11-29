<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Ipak_Alibaba
 * @since 1.0.0
 * Template Name: Homepage
 */

get_header();

?>
<div class="main">
    <div class="main-item main-side-bar">



        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        تولید کنندگان
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <a href="#">
                            ماشین سازی شماره 1
                        </a>
                        <a href="#">
                            ماشین سازی شماره 2
                        </a>
                        <a href="#">
                            ماشین سازی شماره 3
                        </a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        بهترین تولید کنندگان
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <a href="#">
                            ماشین سازی شماره 1
                        </a>
                        <a href="#">
                            ماشین سازی شماره 2
                        </a>
                        <a href="#">
                            ماشین سازی شماره 3
                        </a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        تولید کنندگان پیشنهادی
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <a href="#">
                            ماشین سازی شماره 1
                        </a>
                        <a href="#">
                            ماشین سازی شماره 2
                        </a>
                        <a href="#">
                            ماشین سازی شماره 3
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="main-item main-content row">
        <?php
        get_template_part('template-parts/header/cats');
        ?>
        <?php // single_cat_title(); 
        ?>
        <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/content/content-item');
        endwhile;
        ?>
    </div>
</div>
<?php

get_footer();
