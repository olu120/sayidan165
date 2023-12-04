<?php 
$image_url = "";
if ( $instance['image'] != '' ){
    $image_url = wp_get_attachment_image_src($instance['image'],"full",false);
}
?>

<!--begin about us-->
<div class="about-us" >
    <div class="about-us-title text-center" style="background-image: url('<?php echo esc_url( $image_url[0] ); ?>');">
        <div class="container">
            <h1 class="heading-bold text-uppercase"><?php echo wp_kses_post( $instance['title'] ); ?></h1>
        </div>
    </div>
    <div class="about-us-content">
        <div class="container">
            <div class="content-wrapper">
                <p class="text-light"><?php echo wp_kses_post( $instance['text1'] ); ?></p>
                <p class="text-light"><?php echo wp_kses_post( $instance['text2'] ); ?></p>
            </div>
        </div>
    </div>
</div>
<!--end about us-->