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
                
              );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();?>
                  <?php get_template_part('template-parts/widgets/single-post-item',null,array('style'=>$style));?>
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
                
          