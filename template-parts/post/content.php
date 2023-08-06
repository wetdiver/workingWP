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
  <div class="article_content">   
    <div class="article-text">
      <div class="row">
        <?php 
          if(has_post_thumbnail()) { ?>
          <div class="box-image col-lg-6 col-md-6">
            <?php the_post_thumbnail();  ?>
          </div>
          <div class="date-color">
            <span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date()); ?></span>  
          </div>
        <?php } ?>
        <div class="<?php if(has_post_thumbnail()) { ?>col-lg-6 col-md-6"<?php } else { ?>col-lg-12 col-md-12"<?php } ?>>
          <div class="content">
            <h4><?php the_title();?></h4>        
            <p><?php $excerpt = get_the_excerpt();echo esc_html( niwas_resort_hotel_string_limit_words( $excerpt,30 ) ); ?></p>
            <div class="read-btn">
              <a href="<?php the_permalink(); ?>" class="blogbutton-small" title="<?php esc_attr_e( 'READ MORE', 'niwas-resort-hotel' ); ?>"><?php esc_html_e('READ MORE','niwas-resort-hotel'); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="metabox"> 
        <span class="entry-author"><i class="fas fa-user"></i><?php the_author(); ?></span>
        <span class="entry-comments"><i class="fas fa-comments"></i><?php comments_number( __('0 Comments','niwas-resort-hotel'), __('0 Comments','niwas-resort-hotel'), __('% Comments','niwas-resort-hotel') ); ?></span>
      </div>
    </div>
    <div class="clearfix"></div> 
  </div>
</div>