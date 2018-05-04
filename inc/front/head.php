<?php
/**
 * Created by PhpStorm.
 * User: Msomis
 * Date: 2018/01/02
 * Time: 3:49 PM
 */

function ukznsubsite_page_title(){ ?>
    <style type="text/css">
        div.page-title > .row > .col-lg-12{
            background-color: <?php echo get_theme_mod('page_title_background_color', '#ffffff'); ?>  ;
            background-image: url(<?php echo get_theme_mod('page_title_background_image', ''); ?>) !important;
            background-repeat: <?php echo get_theme_mod('page_title_background_repeat', 'no-repeat'); ?>;
            background-size: <?php echo get_theme_mod('page_title_background_size', 'cover'); ?>;
            background-attachment: <?php echo get_theme_mod('page_title_background_attachment', 'fixed'); ?>;
        }
        div.page-title{
            color: <?php echo get_theme_mod('page_title_font_color', '#1d1d1d'); ?> !important;
        }
    </style>

<?php
}