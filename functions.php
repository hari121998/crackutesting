



<?php
add_theme_support( 'menus' );
add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );

// require get_template_directory() . '/inc/template-tags.php';


function return_category(){
    // $arrays = array ("CAT","TISSNET","CMAT","XAT");
    $post_cat = get_categories();
    $new_array = array();
    foreach($post_cat as $new_value){
        $new_array[] = $new_value -> name;
    }
    
    return $new_array;
}

function return_class_name($name){
   $classname= "";
    if ($name==="CAT"){
        $classname = '#ed5565';
        
    }else if ($name==="XAT"){
        $classname = '#1e73be';
    }else if($name ==="SNAP"){
        $classname = '#720925';
    }
    else if ($name === "CMAT"){
        $classname = '#1e73be';
    }
    else if($name==="TISSNET"){
        $classname = '#257002';
    }
    return $classname;
}

function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count";
}

function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );

?>