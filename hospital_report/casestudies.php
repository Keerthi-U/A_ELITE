<?php
/**
* Template Name: Case Studies
 */

get_header();
?>
<?php while ( have_posts() ) : the_post();?> 
<div class="let-build" >
  <div class="seamless">
    <h1><?php the_title(); ?></h1>
    <p class="subdivpara"><?php the_content(); ?></p>
  </div>
</div>
<?php
    global $post;
    $case_study = array('post_type' => 'case-study', 'order' => 'ASC', 'posts_per_page' => 6,'paged' =>1);
    $case_studies = new WP_Query($case_study);
    ?>
<div class="casestudy">
  <div class="cardArea">
    <div id="transcroller-body" >
      <div class="row portinnerimg">
           <?php while( $case_studies -> have_posts() ) : $case_studies -> the_post();
           $get_meta_values = get_post_meta($post->ID); ?>
        <div class="col-lg-4 col-sm-4 col-12 padd1">
          <div class="aos-item" data-aos="fade-up"  data-aos-duration="1000">
            <div class="cardDesign">
              <div class="aos-item__inner"> <a href="<?php the_permalink() ?>">
                <div id="bg1" class="shadow" >
                    <img class="static_img" src="<?php echo get_the_post_thumbnail( $post->ID );  ?>">
                    <img class="hover_comes"src="<?= the_field('hover_image'); ?>">
                </div>
                <div class="card_content">
                  <div class="pages">
                    <!--<p class="productName"><?= the_field('client'); ?></p>-->
                    <h4 class="Des_textnew">
                      <p><?= $post->post_title; ?></p>
                    </h4><hr />
                    <!--<hr />
                    <div class="below-contents">
                      <div class="studypage"><span><img src="<?php bloginfo('template_url');?>/custom/images/am.png"></span>
                        <p><?= the_field('project_type'); ?></p>
                      </div>
                      <div class="studypage"><span><img src="<?php bloginfo('template_url');?>/custom/images/ui.png"></span>
                        <p><?= the_field('platform'); ?></p>
                      </div>
                      <div class="studypage"><span><img src="<?php bloginfo('template_url');?>/custom/images/webic.png"></span>
                        <p><?= the_field('technology'); ?></p>
                      </div>
                    </div>-->
                    
                  </div>
                  </a> </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>
<div class="loadmoregetsstudy">
	<a class="loadmoreget load-more" data-id=1>Load more</a>
</div>
<div class="dot-spin" style="display:none;"></div>
<?php endwhile; ?>
<?php get_footer(); ?>
<script>
$(document).ready(function() {
    $(document).on("click",".load-more",function() {
        page_id =  $('.load-more').data('id');
        next_page = page_id+1;
        $.ajax({
            type : 'POST',
            headers : {
                        'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
                        },
            url  : '<?php echo home_url()."/ajax_function.php";?>',
            dataType: 'json',
            data : {form_name:'case-study',page : page_id},
            beforeSend: function(){
                $(".load-more").hide();
                $(".dot-spin").show();
            },
            complete: function(){
                $(".dot-spin").hide();
            },
            success : function(res){
                if(res.type == "success")
                {
              $(".portinnerimg").append(res.message);
               AOS.init();
               $('.load-more').data('id', next_page);
               if(res.loadmore == 0)
                $('.load-more').hide();
                else
                $('.load-more').show();
                }
            }
        });
    });
    });
</script>