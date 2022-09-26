<?php get_header(); ?>



<main class="content">
<?php if( have_posts() ) : ?>
    <?php 
    while( have_posts() ) : 
        the_post();
        ?>
      <!-- sub-main-visual -->
     <!--  <div class="sub-main-visual">
        <div class="sub-main-visual-img"></div>
      </div> -->
      <!-- /sub-main-visual -->

      <article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="article-inner">
          <h2 class="article-title"><?php the_title(); ?></h2>
          <?php the_content(); ?>
          
          <div class="article-body">
              

            <h3 class="article-info-title">制作期間</h3>
            <p><?php echo $cfs->get('work_time'); ?></p>
            <h3 class="article-info-title">作業内容</h3>
            <p>
            <?php echo $cfs->get('work_description'); ?>
            </p>
            <h3 class="article-info-title">作業範囲</h3>
            <p> <?php echo $cfs->get('work_range'); ?></p>

            <h3 class="article-info-title">URL</h3>
            <p> <?php echo $cfs->get('work_url'); ?></p>

         <!--  <h3 class="article-info-title">作品コンセプト・ポイントなど</h3>
              <p>
            
            </p>
 -->
    </div>
          </div>
          <div class="home-link">
            <a href="index.html#works">Works一覧へ</a>
          </div>
        </div>
      </article>

 <?php endwhile; ?>
   <?php endif; ?>


    </main>  

    </div>

    <?php get_footer(); ?>