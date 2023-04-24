
<?php get_header(); ?>

<link rel="stylesheet" href='https://cracku.in/static/external/yt-lazy/yt-lazy.551e71f7135b.css'>

<div class="container">
      <!-- <div class="row mb-2">
          <div class="col-lg-12">
              <div class="badge-line"style="width:30%;border-bottom: 2px solid #f44336;">
                  <span class="badge badge-danger">CAT</span>
              </div>
          </div>
      </div> -->
        <div class="row">
          
          <div class="col-lg-8">
          
          
    <?php

        $page = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

        $args = array(
          'post-type' => 'post',
          'posts_per_page' => 3,
          'order' => 'ASC',
          'paged' => $page,
        );

        $the_query = new WP_Query( $args );

        // Loop Starts here

        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();?>
        <div class="badge-line"style="width:50%;border-bottom: 2px solid #f44336;">
                  <span class="badge badge-danger"><?php $category = get_the_category();
$firstCategory = $category[0]->cat_name; echo $firstCategory;?></span>
        </div>
        <article class="card wow  animation-delay-5 mb-4" style="visibility: visible;">
             <div class="card-body overflow-hidden overflow-hidden">
                <div class="row">
                  <div class="col-xl-5" style="padding-left:15px;">
                    <?php the_post_thumbnail('medium');?>
                    <!-- <img src="" alt="" class="img-fluid mb-4"> -->
                  </div>
                  <!-- <div class="col-xl-2"></div> -->
                  <div class="col-xl-7" style="padding-left:30px;">
                    <h3 class="no-mt"><a href=<?php echo get_permalink();?> ><?php the_title();?></a></h3>
                    <p class="mb-4"><?php $excerpt = get_the_excerpt();
                    // the_excerpt();
                    $excerpt = substr( $excerpt, 0, 160 );
                    $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                    echo $result;?></p>
                  </div>
                </div>
                <div class="row" style="align-items:center;">
                  <div class="col-lg-8">
                    <!-- <img src="" alt="...." class="rounded-circle mr-1">  -->
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





          </div>
          <div class="col-lg-4">
            
            <div class="card card-primary animated  animation-delay-7">
              <div class="card-header">
                <h3 class="card-title"><i class="zmdi zmdi-apps"></i> Navigation</h3>
              </div>
              <div class="card-tabs">
                <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-4" role="tablist">
                  <li class="nav-item"><a href="#favorite" aria-controls="favorite" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="no-mr zmdi zmdi-star"></i></a></li>
                  <li class="nav-item"><a href="#categories" aria-controls="categories" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="no-mr zmdi zmdi-folder"></i></a></li>
                  <li class="nav-item"><a href="#archives" aria-controls="archives" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="no-mr zmdi zmdi-time"></i></a></li>
                  <li class="nav-item"><a href="#tags" aria-controls="tags" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="no-mr zmdi zmdi-tag-more"></i></a></li>
                <span id="i3" class="ms-tabs-indicator" style="left: 0px; width: 87.5px;"></span></ul>
              </div>
              
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="favorite">
                  <div class="card-body overflow-hidden">
                    <div class="ms-media-list">
                    <?php

        // $page = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

        $args = array(
          'post-type' => 'post',
          'posts_per_page' => 5,
          'order_by' => 'date',
          'order' => 'DESC',
          // 'paged' => $page,
        );

        $the_query = new WP_Query( $args );

        // Loop Starts here

        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();?>

                      <div class="media mb-2">
                        <div class="media-left m-auto">
                          <a href="<?php echo get_permalink();?>" class="mr-3 media-object-circle">
                          <?php  the_post_thumbnail(array(50,50));?>
                            <!-- <img class="d-flex mr-3 media-object media-object-circle" src="" alt="..."> -->
                          </a>
                        </div>
                        <div class="media-body">
                          
                          <a href="<?php echo get_permalink();?>" class="media-heading"><?php the_title();?> </a>
                          <div class="media-footer text-small">
                            <span class="mr-1"><i class="zmdi zmdi-time color-info mr-05"></i> <?php $publish_date = get_the_date('F j, Y');
echo $publish_date;?>  </span>
                          </div>
                        </div>
                      </div>
                      
                      <?php endwhile;
else:

    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif; 

wp_reset_postdata();

?>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="categories">
                  <div class="list-group">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class=" color-info zmdi zmdi-cocktail"></i>Design <span class="ml-auto badge-pill badge-pill-info">25</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class=" color-warning zmdi zmdi-collection-image"></i> Graphics <span class="ml-auto badge-pill badge-pill-warning">14</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class=" color-danger zmdi zmdi-case-check"></i> Productivity <span class="ml-auto badge-pill badge-pill-danger">7</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class=" color-royal zmdi zmdi-folder-star-alt"></i>Resources <span class="ml-auto badge-pill badge-pill-royal">67</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class=" color-success zmdi zmdi-play-circle-outline"></i>Multimedia <span class="ml-auto badge-pill badge-pill-success">32</span></a>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="archives">
                  <div class="list-group">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> January 2016 <span class="ml-auto badge-pill">25</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> February 2016 <span class="ml-auto badge-pill">14</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> March 2016 <span class="ml-auto badge-pill">9</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> April 2016 <span class="ml-auto badge-pill">12</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> June 2016 <span class="ml-auto badge-pill">65</span></a>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tags">
                  <div class="card-body overflow-hidden overflow-hidden text-center">
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Design</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Productivity</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Web</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Resources</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Multimedia</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">HTML5</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">CSS3</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Javascript</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Jquery</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Bootstrap</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Angular</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Gulp</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Atom</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Fonts</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Pictures</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Developers</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Code</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">SASS</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Less</a>
                  </div>
                </div>
              </div>
             
            </div>
            
            <!-- <div class="card card-success animated fadeInUp animation-delay-7">
              <div class="card-header">
                <h3 class="card-title"><i class="zmdi zmdi-play-circle-outline"></i> Feature Video</h3>
              </div>
              <div tabindex="0" class="plyr plyr--full-ui plyr--video plyr--vimeo plyr--fullscreen-enabled plyr--paused plyr--stopped plyr__poster-enabled">
                <div class="plyr__controls">
                  <button class="plyr__controls__item plyr__control" type="button" data-plyr="play" aria-label="Play, AMPLITUDE | NEW ZEALAND 4K">
                    <svg class="icon--pressed" role="presentation" focusable="false">
                      <use href="https://agmstudio.io/themes/material-style/2.4.4/blog-sidebar2.html#plyr-pause">

                      </use>
                    </svg>
                    <svg class="icon--not-pressed" role="presentation" focusable="false">
                      <use xlink:href="#plyr-play"></use>
                    </svg>
                    <span class="label--pressed plyr__sr-only">Pause</span>
                    <span class="label--not-pressed plyr__sr-only">Play</span>
                  </button><div class="plyr__controls__item plyr__progress__container">
                    <div class="plyr__progress">
                      <input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0" autocomplete="off" role="slider" aria-label="Seek" aria-valuemin="0" aria-valuemax="290" aria-valuenow="0" id="plyr-seek-5125" aria-valuetext="00:00 of 00:00" style="--value:0%;">
                      <progress class="plyr__progress__buffer" min="0" max="100" value="0" role="progressbar" aria-hidden="true">% buffered</progress>
                      <span class="plyr__tooltip">00:00</span>
                    </div>
                  </div>
                  <div class="plyr__controls__item plyr__time--current plyr__time" aria-label="Current time">04:50</div>
                  <div class="plyr__controls__item plyr__volume">
                    <button type="button" class="plyr__control" data-plyr="mute">
                      <svg class="icon--pressed" role="presentation" focusable="false">
                        <use xlink:href="#plyr-muted"></use>
                      </svg>
                      <svg class="icon--not-pressed" role="presentation" focusable="false">
                        <use xlink:href="#plyr-volume"></use>
                      </svg>
                      <span class="label--pressed plyr__sr-only">Unmute</span>
                      <span class="label--not-pressed plyr__sr-only">Mute</span>
                    </button>
                    <input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off" role="slider" aria-label="Volume" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" id="plyr-volume-5125" aria-valuetext="100.0%" style="--value:100%;">
                  </div>
                  <button class="plyr__controls__item plyr__control" type="button" data-plyr="captions">
                    <svg class="icon--pressed" role="presentation" focusable="false">
                      <use xlink:href="#plyr-captions-on"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false">
                        <use xlink:href="#plyr-captions-off"></use></svg><span class="label--pressed plyr__sr-only">Disable captions</span>
                        <span class="label--not-pressed plyr__sr-only">Enable captions</span>
                      </button>
                      <div class="plyr__controls__item plyr__menu">
                        <button aria-haspopup="true" aria-controls="plyr-settings-5125" aria-expanded="false" type="button" class="plyr__control" data-plyr="settings">
                          <svg role="presentation" focusable="false">
                            <use xlink:href="#plyr-settings"></use>
                          </svg>
                          <span class="plyr__sr-only">Settings</span>
                        </button><div class="plyr__menu__container" id="plyr-settings-5125" hidden="">
                          <div>
                            <div id="plyr-settings-5125-home">
                              <div role="menu">
                                <button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true" hidden="">
                                <span>Captions<span class="plyr__menu__value">Disabled</span>
                              </span>
                            </button>
                            <button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true" hidden="">
                              <span>Quality<span class="plyr__menu__value">undefined</span>
                            </span>
                          </button>
                          <button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true"><span>Speed<span class="plyr__menu__value">Normal</span></span>
                        </button></div></div><div id="plyr-settings-5125-captions" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Captions</span>
                        <span class="plyr__sr-only">Go back to previous menu</span>
                      </button>
                      <div role="menu"></div></div><div id="plyr-settings-5125-quality" hidden="">
                        <button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Quality</span>
                        <span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"></div></div>
                        <div id="plyr-settings-5125-speed" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Speed</span><span class="plyr__sr-only">Go back to previous menu</span>
                      </button><div role="menu"><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.5"><span>0.5×</span>
                    </button>
                    <button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.75"><span>0.75×</span>
                  </button>
                  <button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="1"><span>Normal</span>
                </button>
                <button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.25"><span>1.25×</span>
              </button>
              <button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.5"><span>1.5×</span>
            </button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.75"><span>1.75×</span>
          </button>
          <button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="2"><span>2×</span></button></div></div></div></div></div><button class="plyr__controls__item plyr__control" type="button" data-plyr="pip"><svg role="presentation" focusable="false"><use xlink:href="#plyr-pip"></use></svg><span class="plyr__sr-only">PIP</span></button><button class="plyr__controls__item plyr__control" type="button" data-plyr="fullscreen"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-exit-fullscreen"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-enter-fullscreen"></use></svg><span class="label--pressed plyr__sr-only">Exit fullscreen</span><span class="label--not-pressed plyr__sr-only">Enter fullscreen</span></button></div><div class="plyr__video-wrapper plyr__video-embed" style="padding-bottom: 56.25%;"><div class="plyr__video-embed__container" poster="https://i.vimeocdn.com/video/474665344-b514228044c18c79bd91c22930583ece299c0fd6e48569db958e066645cd1d42-d.jpg" style="transform: translateY(-38.2812%);"><iframe src="https://player.vimeo.com/video/94747106?loop=false&amp;autoplay=false&amp;muted=false&amp;gesture=media&amp;playsinline=true&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=false" allowfullscreen="" allowtransparency="" allow="autoplay" title="Player for AMPLITUDE | NEW ZEALAND 4K" data-ready="true" tabindex="-1"></iframe></div><div class="plyr__poster" style="background-image: url(&quot;https://i.vimeocdn.com/video/474665344-b514228044c18c79bd91c22930583ece299c0fd6e48569db958e066645cd1d42-d.jpg&quot;);"></div></div><div class="plyr__captions"></div><button type="button" class="plyr__control plyr__control--overlaid" data-plyr="play" aria-label="Play, AMPLITUDE | NEW ZEALAND 4K"><svg role="presentation" focusable="false"><use xlink:href="#plyr-play"></use></svg><span class="plyr__sr-only">Play</span></button></div>

            </div> -->
            <!-- <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="card-header">
                <h3 class="card-title"><i class="zmdi zmdi-widgets"></i> Text Widget</h3>
              </div>
              <div class="card-body overflow-hidden">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ipsam non eaque est architecto doloribus, labore nesciunt laudantium, ex id ea, cum facilis similique tenetur fugit nemo id minima possimus.</p>
              </div>
            </div> -->
          </div>
        </div>
      </div>
<!-- container -->


      <!-- container -->
      

      <?php get_footer(); ?>
