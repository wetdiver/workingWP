<?php
/**
 * Template part for displaying posts
 * 
 * @subpackage niwas-resort-hotel
 * @since 1.0
 * @version 1.4
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="single-post">
    <div class="article_content">   
      <div class="article-text">       
        <?php the_post_thumbnail(); ?>  
        <div class="metabox1"> 
          <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span><span>|</span>
          <span class="entry-author"><?php the_author(); ?></span><span>|</span>
          <span class="entry-comments"><?php comments_number( __('0 Comments','niwas-resort-hotel'), __('0 Comments','niwas-resort-hotel'), __('% Comments','niwas-resort-hotel') ); ?></span>
        </div>
        <p><?php the_content(); ?></p>      
      </div>
      <div class="clearfix"></div> 
    </div>
  </div>
</div>