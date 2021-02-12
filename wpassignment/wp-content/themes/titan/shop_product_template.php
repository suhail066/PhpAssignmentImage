<?php
/*
Template Name: Shop Product
*/
get_header();
?>
        <section class="module-small">
          <div class="container">
            <form class="row">
              <div class="col-sm-4 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">Default Sorting</option>
                  <option>Popular</option>
                  <option>Latest</option>
                  <option>Average Price</option>
                  <option>High Price</option>
                  <option>Low Price</option>
                </select>
              </div>
              <div class="col-sm-2 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">Woman</option>
                  <option>Man</option>
                </select>
              </div>
              <div class="col-sm-3 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">All</option>
                  <option>Coats</option>
                  <option>Jackets</option>
                  <option>Dresses</option>
                  <option>Jumpsuits</option>
                  <option>Tops</option>
                  <option>Trousers</option>
                </select>
              </div>
              <div class="col-sm-3">
                <button class="btn btn-block btn-round btn-g" type="submit">Apply</button>
              </div>
            </form>
          </div>
        </section>
        <hr class="divider-w">
        <section class="module-small">
          <div class="container">
            <div class="row multi-columns-row">
            <?php
              $args = array(
                        'post_type' => 'product',
                        'orderby'  => 'ID',
                        'order'  => 'DESC',
                        );
              $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ):
            while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_id()) ); ?>" alt="Accessories Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>£1000.00
                </div>
              </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata();  endif; ?>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a></div>
              </div>
            </div>
          </div>
        </section>

<?php get_footer(); ?>