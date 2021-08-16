<?php get_header() ?>    


<div class="container">
  <div  class="cstm_row_post">
    <?php
    if ( have_posts() ) { ?>

      <?php
      while (have_posts()) : the_post();
              // $url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
        ?>          

        

        <div class="detail_post">
         <div class="cstm_post_job">
           <div class="detail_title">
             <h4 class="cstm_pos">Position Title</h4>


             <h3 class="cstm_title_h1"><?php the_title(); ?></h3>
           </div>
           <div class="job_desc">
             <h4 class="cstm_h4_desc">Description</h4>


             <p class="cstm_description"><?php echo wp_trim_words( get_the_content());?></p>
             
           </div>
           
           <div class="job_respon">
             <h4 class="cstm_h4_respons">Responsibilities</h4>


             <p class="cstm_responsibility"><?php echo get_post_meta(get_the_ID(), "res_name", true);?></p>
             
           </div>
           <div class="job_skill">
             <h4 class="cstm_h4_skill">Required Skills</h4>
             <?php 
             $txt=get_post_meta(get_the_ID(), "skills_title_name", true);
             // var_dump($txt);
             if(isset($txt) && is_array($txt)) {
              foreach($txt as $text){
                echo '<p class="cstm_skill">'.$text.'</p>';
              }

            }
            ?>

          </div>

          <div class="job_qualification">
           <h4 class="cstm_h4_qualifi">Qualifications</h4>
           <?php 
           $nonce= get_post_meta(get_the_ID(), "qualification_title_name", true);
             // var_dump($nonce);

           if(isset($nonce) && is_array($nonce)) {
            $numItems = count($nonce);
            $i = 0;
            foreach($nonce as $qualifi){
                if (++$i ===$numItems) {
                  echo '<span class="cstm_qualifi">'.$qualifi.'</span>';
                }
                else{
                  echo '<span class="cstm_qualifi">'.$qualifi.'/</span>';
                }
                
              
            }

          }

          ?>

        </div>
      </div>
    </div>
    <div class="detail_post">
     <div class="cstm_job_post_detail">
       <div class="job_employee">
        <h4 class="cstm_h4_emp">Employee Type</h4>
        <p class="cstm_emptype"><?php echo get_post_meta(get_the_ID(), "emptype_title_name", true);?></p>

      </div>

      <div class="job_loca">
       <h4 class="cstm_h4_jon">Job Location</h4>
       <p class="cstm_job_location"><?php echo get_post_meta(get_the_ID(), "jobloc_title_name", true);?></p>

     </div>
     <div class="job_experience">
      <h4 class="cstm_h4_exp">Experience</h4>
      <p class="cstm_job_experience"><?php echo get_post_meta(get_the_ID(), "exp_title_name", true);?></p>

    </div>
    <div class="job_salary">
      <h4 class="cstm_h4_sal">Base Salary</h4>
      <p class="cstm_job_salary"><?php echo get_post_meta(get_the_ID(), "sal_title_name", true);?></p>

    </div>
  </div>

</div>
<div class="cstm_btn">
 <a href="/jobopening/apply-now/">Apply Now</a>
</div>
<?php endwhile; ?>

<?php   

}

wp_reset_postdata();
?>
</div>
</div>

<?php get_footer() ?>



