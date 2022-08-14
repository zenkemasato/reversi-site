<?php get_header();?>
<body>
	<div class="newsdetail">
    <h2>
      <div class="newsdetail-title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/news/news_title.svg" alt="Newsのタイトル">
      </div>
    </h2>
		<div class="newsdetail-wrrap">
			<div class="newsdetail-wrrap-head">
				<date><?php the_time('Y.n.j'); ?></date>
				<h3>
					<?php the_title(); ?>
				</h3>
				<hr>
			</div>
			<div class="newsdetail-wrrap-body">
				<span>
					<?php the_content();?>
				</span>
				<a href="<?php bloginfo('url');?>/news">
					<div class="newsdetail-wrrap-body-btn">
						<span>back</span>
					</div>
				</a>
			</div>
		</div>
  </div>

<?php get_footer();?>   