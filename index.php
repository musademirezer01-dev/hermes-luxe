<?php
get_template_part('head'); // head.php'yi ekler

if ( class_exists('WooCommerce') ) :
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 24, // daha fazla ürün göster
        'post_status' => 'publish'
    );
    $products = new WP_Query($args);

    if ($products->have_posts()) : ?>
      <div class="grid-container">
      <?php while ($products->have_posts()) : $products->the_post();
        global $product;
        ?>
        <a class="product-card" href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('large');
            } else { ?>
              <img src="<?php echo wc_placeholder_img_src(); ?>" alt="">
            <?php } ?>
            <div class="product-info">
              <span class="title"><?php the_title(); ?></span>
              <span class="price"><?php echo $product->get_price_html(); ?></span>
            </div>
        </a>
      <?php endwhile; ?>
      </div>
      <?php wp_reset_postdata();
    else : ?>
      <p style="text-align:center">No products found.</p>
    <?php endif;
else:
  if (have_posts()) : ?>
    <div class="grid-container">
    <?php while (have_posts()) : the_post(); ?>
      <a class="product-card" href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) {
          the_post_thumbnail('large');
        } else { ?>
          <img src="<?php echo get_template_directory_uri(); ?>/placeholder.png" alt="">
        <?php } ?>
        <div class="product-info">
          <span class="title"><?php the_title(); ?></span>
        </div>
      </a>
    <?php endwhile; ?>
    </div>
    <?php else : ?>
      <p style="text-align:center">No content found.</p>
    <?php endif;
endif;

get_template_part('footer');
