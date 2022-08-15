<?php get_header();?>
<body>
  <div class="sitemap-wrapper">
    <h2>
      <div class="sitemap-title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/sitemap/sitemap_title.svg" alt="サイトマップタイトル">
      </div>
    </h2>
    <div class="sitemap-main">
      <div class="sitemap-top">
        <a href="<?php echo esc_url( home_url( '/' ) );?>"><span>Top</span></a>
      </div>
      <div class="sitemap-service-company">
        <a href="<?php bloginfo('url');?>/service"><span>Service</span></a><a href="<?php bloginfo('url');?>/company"><span>Company</span></a>
      </div>
      <div class="sitemap-products-news">
        <a href=""><span>Products</span></a><a href="<?php bloginfo('url');?>/news"><span>News</span></a>
      </div>

      <div class="sitemap-contact-plivacy">
        <a href="<?php bloginfo('url');?>/contact"><span>Contact</span></a><a href="<?php bloginfo('url');?>/privacy"><span>Plivacy policy</span></a>
      </div>
      <div class="sitemap-faq">
        <a href=""><span>Faq</span></a>
      </div>
    </div>
  </div>
<?php get_footer();?>   