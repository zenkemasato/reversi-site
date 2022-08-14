<?php get_header();?>
<body>
	<div class="news">
    <h2>
      <div class="news-title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/news/news_title.svg" alt="Newsのタイトル">
      </div>
    </h2>
		<h3>
			<?php the_title(); ?>
		</h3>
		<hr>
		<div>
			<span>
				<?php the_content();?>
			</span>
		</div>
  </div>

<?php get_footer();?>   