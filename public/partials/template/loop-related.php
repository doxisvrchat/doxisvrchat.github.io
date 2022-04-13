<?php 

$loop = new TOROFLIX_Movies(); 
$fecha = get_post_meta( get_the_ID(), 'field_release_year', true );$fechas  = explode('-', $fecha);$tmdb    = get_post_meta( get_the_ID(), 'rating', true );$year    = $loop->year();$quality = $loop->get_quality(); $lang    = $loop->get_lang();$option  = get_option( 'poster_option_views', array() );if(!$tmdb){$tmdb = 0;} ?>
<article class="post dfx fcl movies">
    <header class="entry-header">
        <h2 class="entry-title">
            <?php the_title(); ?>
        </h2>
        <div class="entry-meta"><span class="vote"><span>TMDB</span>
            <?php echo $tmdb; ?>
            </span>
        </div>
    </header>
    <div class="post-thumbnail or-1">
        <figure>
            <?php echo tr_theme_img(get_the_ID(), 'thumbnail', get_the_title()); ?>
        </figure> <span class="post-ql">			<?php if (in_array('qual', $option)) {  if ( 'movies' == get_post_type(get_the_ID()) && $quality ) { echo $quality; } } ?> <?php if (in_array('lang', $option)) { if($lang){  ?><span class="lang"><?php echo $lang; ?></span>
        <?php } } ?> </span>
        <?php if (in_array('year', $option)) { if($year){ ?><span class="year"><?php echo $year; ?></span>
        <?php } } ?>
        <?php  if ( 'movies' == get_post_type(get_the_ID()) ) { ?><span class="watch btn sm"><?php _e('View Movie', 'torofilm'); ?></span>
        <?php } elseif( 'series' == get_post_type(get_the_ID()) ){ ?> <span class="watch btn sm"><?php _e('View Serie', 'torofilm'); ?></span>
        <?php } ?> <span class="play fa-play"></span> </div> <a href="<?php the_permalink(); ?>" class="lnk-blk"></a>
</article>