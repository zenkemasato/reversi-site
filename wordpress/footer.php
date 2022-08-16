<footer>
	<div class="footer">
		<div class="footer-main">
			<div class="footer-main-list">
				<div class="footer-main-list-box">
					<ul>
						<li class="footer-main-list-box-ttl">
							<a href="<?php bloginfo('url');?>/service">SERVICE</a>
						</li>
						<li class="footer-main-list-box-list">
							<a href="<?php bloginfo('url');?>/service#product">PRODUCTS</a>
						</li>
					</ul>
				</div>
				<div class="footer-main-list-box">
					<ul>
						<li class="footer-main-list-box-ttl">
							<a href="<?php bloginfo('url');?>/company">COMPANY</a>
						</li>
						<li class="footer-main-list-box-list">
							<a href="<?php bloginfo('url');?>/company#otherproject">OTHER PRODUCTS</a>
						</li>
						<li class="footer-main-list-box-list">
							<a href="<?php bloginfo('url');?>/company#profileabout">ABOUT</a>
						</li>
						<li class="footer-main-list-box-list">
							<a href="<?php bloginfo('url');?>/news">NEWS</a>
						</li>
					</ul>
				</div>
				<div class="footer-main-list-box">
					<ul>
						<li class="footer-main-list-box-ttl">
							<a href="<?php bloginfo('url');?>/contact">CONTACT</a>
						</li>
						<li class="footer-main-list-box-list">
							<a href="<?php bloginfo('url');?>/contact#faq">FAQ</a>
						</li>
						<li class="footer-main-list-box-list">
							<a href="<?php bloginfo('url');?>/privacy">PRIVACY POLICY</a>
						</li>
						<li class="footer-main-list-box-list">
							<a href="<?php echo esc_url( home_url( '/' ) );?>#testimonial">TESTIMONIALS</a>
						</li>
						<li class="footer-main-list-box-list">
							<a href="<?php bloginfo('url');?>/sitemap">SITE MAP</a>
						</li>
					</ul>
				</div>
				<div class="footer-main-list-woman">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/footer/girl.png" alt="少女">
				</div>
			</div>
			<div class="footer-main-row">
				<p>COPYRIGHT © WEST CORPORATION ALL RIGHTS RESERVED.</p>
			</div>
		</div>
	</div>
	<div class="footer-company">
		<div class="footer-company-wrapper">
			<div class="footer-company-logo">
				<a href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/footer/logo.svg" alt="企業ロゴ"></a>
			</div>
			<div class="footer-company-about">
				<ul>
					<li>株式会社REVERSI</li>
					<li>〒150-0001</li>
					<li>東京都渋谷区神宮前6-23-4桑名ビル2F</li>
				</ul>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?> 
</footer>
</body>
</html>