<?php get_header();?>
<body>
	<div class="top">
		<!-- First View -->
		<div class="Top-first-view">
			<video autoplay muted src="<?php echo get_template_directory_uri(); ?>/assets/top/First View.mp4" type="video/mp4"></video>
		</div>

		<!-- サービス内容 -->
		<section class="top-service-wrapper">
			<div class="top-service">
				<h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/top/Top-service.svg" alt="Serviceのタイトル">
				</h2>
				<div class="top-service-content">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/top/Top-service-about.svg" alt="">
				</div>
			</div>
		</section>
		
		<!-- 制作実績 -->
		<section class="top-products-wrapper">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/top/bird.svg" alt="" class="bird">
			<div class="top-product">
				<h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/top/Top-products.svg" alt="Productsのタイトル">
				</h2>
				<div class="top-product-wrapper-content">
          <div class="top-product-wrapper-content-main">
            <div class="top-product-wrapper-content-main-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/top/Dummy.png" alt="事業画像">
            </div>
            <div class="top-product-wrapper-content-main-btn">
              <span>
                sitename
              </span>
            </div>
          </div>
          <div class="top-product-wrapper-content-sub">
            <div class="top-product-wrapper-content-sub-txt">
              <span>
                実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
              </span>
            </div>
          </div>
        </div>
        <div class="top-product-wrapper-content">
          <div class="top-product-wrapper-content-sub">
            <div class="top-product-wrapper-content-sub-txt">
              <span>
                実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
              </span>
            </div>
          </div>
          <div class="top-product-wrapper-content-main">
            <div class="top-product-wrapper-content-main-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/top/Dummy.png" alt="事業画像">
            </div>
            <div class="top-product-wrapper-content-main-btn">
              <span>
                sitename
              </span>
            </div>
          </div>
        </div>
        <div class="top-product-wrapper-content">
          <div class="top-product-wrapper-content-main">
            <div class="top-product-wrapper-content-main-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/top/Dummy.png" alt="事業画像">
            </div>
            <div class="top-product-wrapper-content-main-btn">
              <span>
                sitename
              </span>
            </div>
          </div>
          <div class="top-product-wrapper-content-sub">
            <div class="top-product-wrapper-content-sub-txt">
              <span>
                実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
                <br>実績紹介分実績紹介分実績紹介分
              </span>
            </div>
          </div>
        </div>
			</div>
		</section>
		
		<!-- お客様の声 -->
		<section class="top-testimonial-wrapper">
			<div class="top-testimonial">
				<h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/top/Top-testimonial.svg" alt="Testimonialのタイトル">
				</h2>
				<div class="top-testimonial-content">
					<div class="top-testimonial-text">
						<p>
							私の思い描いている「あたたかみのある会社」のデザインに忠実に再現してくれた。<br>
							またデザイン案の選択で迷った際もお客視点で納得のある助言をしてくださり<br>
							デザイン知識の疎い私にとっては非常に助かった。<br>
							今後もサイトを作成する機会があれば依頼したい。<br>
						</p>
					</div>
					<div class="top-testimonial-text">
						<p>
							私の思い描いている「あたたかみのある会社」のデザインに忠実に再現してくれた。<br>
							またデザイン案の選択で迷った際もお客視点で納得のある助言をしてくださり<br>
							デザイン知識の疎い私にとっては非常に助かった。<br>
							今後もサイトを作成する機会があれば依頼したい。<br>
						</p>
					</div>
					<div class="top-testimonial-img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/top/ネズミ 黄.svg" alt="ネズミのイラスト">
					</div>
				</div>
			</div>
		</section>
		
		<!-- ニュース -->
		<section class="top-news-wrapper">
			<div class="top-news">
				<h2>
					<div class="top-news-title">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/top/Top-news.svg" alt="Newsのタイトル">  
					</div>
				</h2>
				<div class="top-news-article">
					<ul>
						<?php 
							if ( have_posts() ) :
								while ( have_posts() ) : the_post();
						?>
							<li class="top-news-list">
								<a href="<?php echo get_permalink(); ?>">
									<time><?php the_time('Y.n.j'); ?></time>
									<div class="top-news-list-text">
										<span><?php the_title(); ?></span>
									</div>
								</a>
							</li>
						<?php 
								endwhile;
							endif;
						?>
					</ul>
					<a href="<?php echo get_permalink(); ?>">
						<div class="top-news-article-btn">
							<span>List</span>
						</div>
					</a>
				</div>
			</div>  
		</section>
	</div>
<?php get_footer();?>
