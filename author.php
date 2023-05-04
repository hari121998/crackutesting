<?php get_header();?>

<?php 
    $author_name = get_query_var('author_name');
    $post_count = get_usernumposts($user_id);
    $post_count = $post_count?$post_count:0;
    $comments = get_comments(array('user_id'=>$author_name,'status'=>'approve'));
    $comments_count  = count($comments);
    

?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0">
                <li class="breadcrumb-item"><a href="/blog/" target="_blank">Home</a></li>
                <li class="breadcrumb-item">Authors</li>
                <li class="breadcrumb-item active" aria-current="page"> 
                    <?php echo 'Posts by '.$author_name;?>
                </li>
            </ol>
            </nav>
            <h1><?php echo $author_name;?></h1>
            <div class="author-profile-con">
                <img  src='<?php print get_avatar_url($user->ID, ['size' => '100']); ?>' alt = 'author-profile-image'/> 
                    <span class="author-posts"><?php echo $post_count.' POSTS';?></span>
                    <span class="author-posts"><?php echo $comments_count.' COMMENTS';?></span>                
            </div>
            <div>
                <?php
            $page = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
              
              $args = array(
                'post-type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DESC',
                'paged' => $page,
                
              );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();?>
                  <?php get_template_part('template-parts/widgets/single-post-item',null,array('style'=>'primary'));?>
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
            </div>
        </div>
        <div class="col-lg-4 side-bar-container">
            <!-- <div>
                <hr/>
                <br/>
                <br/>
                <br/>
                <br/>
                <h1>Hello Sidebar</h1>
                <br/>
                <br/>
                <br/>
                <br/>
                <hr/>
            </div> -->
        </div>
    </div>
</div>

<?php get_footer();?>