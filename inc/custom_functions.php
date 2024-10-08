<?php
/* * *
 * CUSTOM SEARCH FORM FOR THE WEBSITE
 * * */
function wpl_search_form()
{
    ob_start(); ?>
    <form class="form-inline" action="<?php echo esc_url(home_url('/')); ?>">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" name="s" value="<?php echo get_search_query(); ?>">
        <button class="btn btn-success" type="submit">Search</button>
    </form>
<?php $html = ob_get_clean();
    return $html;
}

/* * *
 * FILTER TO ADD FORM TO LAST li OF nav
 * * */
if(isset(WPL_SETTINGS['wpl_search_in_menu'])){
    add_filter('wp_nav_menu_items', 'add_search_box_to_primary_menu', 10, 2);
    function add_search_box_to_primary_menu($items, $args)
    {
        if ($args->theme_location == 'primary_menu') {
            $items .= '<li class="nav-item">';
            $items .= wpl_search_form();
            $items .= '</li>';
        }
        return $items;
    }
}


function formatAndStrip($inputString, $stripFromStart = '', $stripFromEnd = '') {
    // Strip off from the start and end
    $formattedString = $inputString;
    if ($stripFromStart !== '') {
        $formattedString = preg_replace('/^' . preg_quote($stripFromStart, '/') . '/', '', $formattedString);
    }
    if ($stripFromEnd !== '') {
        $formattedString = preg_replace('/' . preg_quote($stripFromEnd, '/') . '$/', '', $formattedString);
    }

    // Replace dashes and underscores with spaces, then capitalize each word
    $formattedString = ucwords(str_replace(['-', '_'], ' ', $formattedString));

    return $formattedString;
}


function wpl_get_posts_loop($data)
{
?>
    <div class="row">
        <div class="col-md-12">
            <?php if ($data->have_posts()) : ?>
                <?php $i = 0; ?>
                <div class="content">
                    <?php while ($data->have_posts()) : $data->the_post();
                        $i++; ?>
                        <div class="row border-bottom mb-2 mt-2 pb-4 pt-4 pb-2 pos-<?php echo $i; ?>?>">
                            <div class="col-md-2"><?php if (has_post_thumbnail()) { ?>
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
                                    <a href="<?= the_permalink(); ?>" class="entry__thumb-link pt-2 pb-2">
                                        <img src="<?php echo $image[0]; ?>" class="img-fluid" /></a><?php } ?>
                            </div>
                            <div class="col-md-10">
                                <h5 class="pb-2 heading-sm-b"><a href="<?= the_permalink(); ?>" class="the-link"><?php the_title(); ?></a></h5>
                                <div class="pt-2 pb-2"><?php the_excerpt(); ?></div>
                                <?php get_template_part('inc/meta_info'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <div class="row pt-2 pb-2">
                        <div class="col-md-12"><?php wplight_pagination(); ?></div>
                    </div>
                <?php else : ?>
                    <?php get_template_part('inc/not-found'); ?>
                <?php endif; ?>
                </div>
        </div>
    </div><!-- /.row -->
<?php
}
