<?php
$category = get_category_by_slug('concrete-block-machine');

$args = array(
    'type'                     => 'post',
    'child_of'                 => $category->term_id,
    'orderby'                  => 'name',
    'order'                    => 'ASC',
    'hide_empty'               => FALSE,
    'hierarchical'             => 1,
    'taxonomy'                 => 'category',
);

$categories = get_categories($args);

?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-cats-box">
    <div class="product-cats-box-content">
        <?php
        foreach ($categories as $category) {
            // echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
            // echo '<p> Description:'. $category->description . '</p>';
            // echo '<p> Post Count: '. $category->count . '</p>'; 
        ?>
            <div class="product-cats-box-item img-zoom">
                <a href="<?php echo get_category_link($category->term_id) ?>" class="" title="<?php echo $category->name; ?>"><img class="img-zoom" src="<?php echo get_field('cats_back_image', $category); ?>" /><label><?php echo $category->name; ?></label></a>
            </div>
        <?php
        }
        ?>
    </div>
</div>