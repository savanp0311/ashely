<?php 
/* Template name: Home */
?>

<?php get_template_part('parts/header'); ?>

<?php

$page_content = get_field('page_content');

if ( $page_content ) {
    foreach ( $page_content as $row ) {
        $layout = $row['acf_fc_layout'];

        // Hero Banner layout
        if ( $layout === 'hero_banner' ) {
            $heading    = $row['heading'];       
            $description = $row['description'];
            $button    = $row['button'];
            $work_button  = $row['work_button'];

            include locate_template("Templates/sections/hero_banner.php");

        // About Section layout
         } elseif ( $layout === 'about_section' ) {
            $heading = $row['heading'];
            $description = $row['description'];
            $descriptiontwo = $row['descriptiontwo'];
            $image    = $row['image'];
            $sub_heading    = $row['sub_heading'];
            $about_image    = $row['about_image'];

            include locate_template("Templates/sections/about.php");

        // Fallback if no matching layout file
        } else {
            echo "<!-- Layout not found: {$layout} -->";
        }
    }
}
?>

<?php get_template_part('parts/footer'); ?>