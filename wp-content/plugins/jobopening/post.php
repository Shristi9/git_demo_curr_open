<?php

        //global $wp_query;
$args = array(
  'post_type'=>'currentjobopening', 
  // 'offset' => 0,
  'posts_per_page' => -1,
  // 'orderby' => 'post_date',
  'order' => 'ASC',
  
  // 'paged' => 1,
  // 'order'=> 'ASC',
);

$job_posts = new WP_Query( $args );
?>


<div class="container">
  <div  class="cstm_row cstm_css">
    <?php
    if ( $job_posts->have_posts() ) { ?>

      <?php
      while ($job_posts->have_posts()) : $job_posts->the_post();
              // $url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
        ?>          

        

        <div class="recent_post">
         <div class="title">
          <h3 class="title_h1"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <div class="job_title_loc">
         <div class="cstm_same">
          <span class="cstm_location"><?php echo get_post_meta(get_the_ID(), "jobloc_title_name", true);?>,</span>
          <span class="custom_emptype"><?php echo get_post_meta(get_the_ID(), "emptype_title_name", true);?></span>
        </div>
      </div>
      <div class="cstm_viewmore_btn">
        <div class="cstm_same">
          <a class ="cstm_link" href="<?php echo get_the_permalink(); ?>">View</a>
        </div>

      </div>

    </div>

    
  <?php endwhile; ?>

  <?php   

}

wp_reset_postdata();
?>
</div>
</div>




