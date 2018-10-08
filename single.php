<?php 
  get_header();
  wp_head();
?>
<!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">
      	<?php
          if ( ! defined( 'ABSPATH' ) ) {
             exit;
          }
          global $product;
          ?>
      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!--Grid column-->
        <div class="col-md-6 mb-4">
        	<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :
                  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'block' );
                  $thumb_url = $thumb['0'];
                  //var_dump($thumb_url);
                  ?>

          <img src="<?php echo $thumb_url;?>" class="img-fluid" alt=""><?php endif;?>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">
        	
          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a href="">
                <span class="badge purple mr-1">
                	<?php do_action( 'woocommerce_product_meta_start' ); ?>
                     <?php echo strip_tags(wc_get_product_category_list( $product->get_id())); ?>
                     <?php do_action( 'woocommerce_product_meta_end' ); ?>
                </span>
              </a>
             
            </div>

            <p class="lead">
              <span class="mr-1">
                <del>$200</del>
              </span>
              <span>$<?php echo $product->get_sale_price()?></span>
            </p>

            <p class="lead font-weight-bold"><?php the_title();?></p>

            <p><?php echo get_the_content();?></p>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->
    <?php endwhile; endif;?>

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <h4 class="my-4 h4">Additional information</h4>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta odit voluptates,
            quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
<?php 
get_footer();
?>