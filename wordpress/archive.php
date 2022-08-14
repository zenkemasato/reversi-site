<?php get_header();?>
<body>
	<div class="news">
    <h2>
      <div class="news-title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/news/news_title.svg" alt="Newsのタイトル">
      </div>
    </h2>
    <div class="news-article">
			<ul>
				<?php 
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
				?>
					<li class="news-list">
						<a href="<?php the_permalink(); ?>">
							<time><?php the_time('Y.n.j'); ?></time>
							<div class="news-list-text">
								<span><?php the_title(); ?></span>
							</div>
						</a>
					</li>
				<?php 
						endwhile;
					endif;
				?>
			</ul>
		</div>
  </div>
	<?php the_posts_pagination(); ?>
<?php get_footer();?>   