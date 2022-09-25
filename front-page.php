<?php get_header(); ?>




 

<main class="content">
      <!-- トプ画 -->
<div id="TOP">
  <div class="wrapper">
  <div class="top-main">
  <div class="top-text-box">
    <p class="sec-text">YURI's</p>
      <br> <p class="top-txt"> PORTFOLIO  </p>
  </div>
  
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="circle-4"></div>
  
    
  </div>
  </div>
  
  </div>
  
  <!-- トプ画終わり -->
      <div class="profile">
        <div class="inner">
          <p class="profile-title">Tomari Yuri</p>
          <p class="profile-text">
            24歳のwebデザイナーです。
            大学時代に演劇サークルでチラシやチケットを作った事をきっかけにデザインの世界に興味を持ちました。<br>
            5ヶ月職業訓練でWebデザインを学び, 現在web制作会社で働いています。
          </p>
        </div>
      </div>

      <!-- works -->
      <section class="works section" id="works">
        <div class="inner">
       
          <h2 class="title">Works</h2>
          <div class="works-list">
          <?php
              $args = array(
                'posts_per_page'   => 10, 
                'orderby'          => 'ID',
                'order'            => 'DESC', 
                  );
              $datas = get_posts( $args );
              if ( $datas ):
                foreach ( $datas as $post ): 
                  setup_postdata( $post ); 
                ?>
            <a class="works-item" href="<?php the_permalink(); ?>">
              <p class="works-img"><?php the_post_thumbnail(); ?></p>
              <p class="works-name"><?php the_title(); ?></p>
              <!-- <p class="works-info">Design / Coding(Responsive)</p> -->
            </a>
            <?php
              endforeach; 
              else: 
              ?>


              <?php
              endif;


            wp_reset_postdata();
            ?>


          </div>
        </div>
      </section>

      <section class="skill section" id="skill">
        <div class="inner">
         
          <h2 class="title">Skill</h2>
          <p class="skill-text">Illustrator/Photoshop/AdobeXD</p>
          <p class="skill-text">HTML5/CSS3/jQery/Wordpress</p>
          <p class="skill-text">Github</p>
          

        </div>
      </section>
      <!-- /skill -->

      <!-- contact -->
      <section class="contact section" id="contact">
        <div class="inner">
          <h2 class="title">Contact</h2>
          <p class="lead">
            お問い合わせは、<br class="sp-only">SNSかメールにてお願いいたします。
          </p>
          <div class="contact-list">
            <a class="contact-item" href="https://twitter.com/" target="_blank" rel="noopener">Twitter</a>
            <a class="contact-item" href="https://www.instagram.com/" target="_blank" rel="noopener">Instagram</a>
            <span class="contact-item">xxxxxx@gmail.com</span>
          </div>
        </div>
      </section>
      <!-- /contact -->
      
    </main>


 <?php get_footer(); ?>