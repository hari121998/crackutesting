<?php $category = get_the_category();
                $style = $args['style'];

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
                            by <a href="/author/<?php  the_author();?>"><?php the_author();?></a>
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