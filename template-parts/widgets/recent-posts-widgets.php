<?php
              $cat_name = $args['category']? $args['category'] : '';
              $style = $args['style'];
              $page_items = $args['posts_per_page'];
              $order = $args['order'];


              $page = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
              $args = array(
                'post-type' => 'post',
                'posts_per_page' => $page_items,
                'order' => $order,
                'paged' => $page,
                'category_name' => $cat_name,
                'offset' => $offset,
                
              );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();?>
                <?php $category = get_the_category();
                $firstCategory = $category[0]->cat_name;?>
                <div class="badge-line badge-line-<?php echo $style;?>">
                  <span class="badge-style badge badge-<?php echo $style;?>"><?php  echo $firstCategory;?></span>
                </div>
                <article class="card wow  animation-delay-5 mb-4" style="visibility: visible;">
                    <div class="card-body overflow-hidden overflow-hidden">
                        <div class="row">
                          <div class="col-xl-5" style="padding-left:15px;">
                            <?php the_post_thumbnail('medium');?>
                          </div>
                          
                          <div class="col-xl-7" style="padding-left:30px;">
                            <h3 class="no-mt"><a href=<?php echo get_permalink();?> ><?php the_title();?></a></h3>
                            <p class="mb-4"><?php $excerpt = get_the_excerpt();
                            
                            $excerpt = substr( $excerpt, 0, 160 );
                            $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                            echo $result;?></p>
                          </div>
                        </div>
                        <div class="row" style="align-items:center;">
                          <div class="col-lg-8">
                            by <a href="javascript:void(0)"><?php the_author();?></a>
                            <span class="ml-1 d-none d-sm-inline"><i class="zmdi zmdi-time mr-05 color-info"></i> <span class="color-medium-dark">
                              <?php 
                                $publish_date = get_the_date('F j, Y');
                                echo $publish_date;
                              ?>
                                </span>
                              </span>
                              <span class="ml-4"><i class="zmdi zmdi-eye"></i>
                                  <?php gt_set_post_view(); ?>
                                  <?= gt_get_post_view(); ?>
                              </span>  
                          </div>
                          <div class="col-lg-4 text-right">
                            <a href=<?php echo get_permalink();?> class="btn btn-primary btn-raised btn-block animate-icon">Read More <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i></a>
                          </div>
                        </div>
                    </div>
                </article>
                <?php endwhile;

                    $big = 999999999; // need an unlikely integer
                    echo '<nav aria-label="Page navigation">';
                    echo '<ul class="pagination pagination-plain">';
                    echo paginate_links( array(
                      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                      'format' => '?paged=%#%',
                      'current' => max( 1, get_query_var('paged') ),
                      'total' => $the_query->max_num_pages,
                      'show_all' => 'true',
                      'prev_text' => '<<',
                      'next_text'  => ">>",
                      'prev_next' => 'false',
                    ) );
                    echo '</ul>';
                    echo '</nav>';
                        wp_reset_postdata();
                    endif;
                    ?>
                
          