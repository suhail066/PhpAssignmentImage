<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>


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
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="<?php echo get_template_directory_uri();?>/images/product-7.jpg" alt="Accessories Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="<?php echo get_template_directory_uri();?>/images/product-8.jpg" alt="Men’s Casual Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="<?php echo get_template_directory_uri();?>/images/product-9.jpg" alt="Men’s Garb"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="<?php echo get_template_directory_uri();?>/images/product-10.jpg" alt="Cold Garb"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="<?php echo get_template_directory_uri();?>/images/product-11.jpg" alt="Accessories Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="<?php echo get_template_directory_uri();?>/images/product-12.jpg" alt="Men’s Casual Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="<?php echo get_template_directory_uri();?>/images/product-13.jpg" alt="Men’s Garb"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="<?php echo get_template_directory_uri();?>/images/product-14.jpg" alt="Cold Garb"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="<?php echo get_template_directory_uri();?>/images/product-7.jpg" alt="Accessories Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a></div>
              </div>
            </div>
          </div>
        </section>

<?php
get_footer();
