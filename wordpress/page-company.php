<?php get_header();?>
<body>
  <div class="company-container">
    <section class="company-wrapper">
      <div class="company">
        <h2>
          <div class="company-title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/company/company_title.png" alt="会社のタイトル">
          </div>
        </h2>
        <div class="company-main">
          <div class="company-main-philosophy">
            <span>
              企業理念
            </span>
          </div>
          <div class="company-main-philosophy-text">
            <span>
              『デザインで人々の五感を刺激する』
            </span>
          </div>
          <div class="company-main-policy">
            <span>
              企業方針
            </span>
          </div>
          <div class="company-main-policy-text">
            <span>
              先の見えない未来に色を。音を。味を。匂を。触を。
            </span>
          </div>
        </div>
      </div>
    </section>
    <section class="company-profileabout-wrapper">
      <div class="company-profileabout">
        <h2>
          <div class="company-profileabout-title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/company/profileabout_title.png" alt="会社概要のタイトル">
          </div>
        </h2>
        <div class="company-profileabout-overview">
          <table class="company-profileabout-table">
            <tbody>
              <tr>
                <th>本所在地</th>
                <td>東京都渋谷区神宮前6-23-4桑野ビル2F</td>
              </tr>
              <tr>
                <th>代表取締役</th>
                <td>颯佐康平</td>
              </tr>
              <tr>
                <th>従業員数</th>
                <td>2人</td>
              </tr>
              <tr>
                <th>事業内容</th>
                <td>WEBサービス、WEBサイト「デザイン」、「開発」、「運営」
                    <br>UI・UXの設計
                    <br>グラフィック、イラスト等の企画・制作
                    <br>デザインコンサルティング、マーケティング等</td>
              </tr>
            </tbody> 
          </table>
        </div>
      </div>
    </section>
    <section class="company-otherproject-wrapper">
      <div class="company-otherproject">
        <h2>
          <div class="company-otherproject-title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/company/otherproject_title.png" alt="他プロジェクトのタイトル">
          </div>
        </h2>
        <div class="company-otherproject-ranbarse">
          <div class="company-otherproject-ranbarse-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/company/work_ranbarse.png" alt="事業写真1">
          </div>
          <div class="company-otherproject-ranbarse-text">
            <span class="company-otherproject-ranbarse-text-tl">ランバース<br></span>
            <span class="company-otherproject-ranbarse-text-txt">Fulluter教育事業</span>
          </div>
        </div>
        <div class="company-otherproject-deepdesign">
          <div class="company-otherproject-deepdesign-text">
            <span class="company-otherproject-deepdesign-text-tl">Deep Degin<br></span>
            <span class="company-otherproject-deepdesign-text-txt">デザイン教育事業</span>
          </div>
          <div class="company-otherproject-deepdesign-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/company/work_deepdesign.png" alt="事業写真2">
          </div>
        </div>
      </div>
    </section>
    <section class="company-news-wrapper">
      <div class="company-news">
        <h2>
          <div class="company-news-title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/company/news_title.png" alt="ニュースのタイトル">  
          </div>
        </h2>
        <div class="company-news-article">
          <ul>
            <?php 
                  $max_post = get_option('posts_per_page');
                  $post_num = "numberposts=".$max_post;
                  $postslist = get_posts($post_num);
                  foreach ($postslist as $index => $recent) : ;
              ?>
                <li class="company-news-list">
                  <a href="<?php
                      if (count($postslist) > 0) {
                        $recent_id = $postslist[$index]->ID;
                        $recent_url = get_permalink($recent_id);
                        $recent_time = get_the_time('Y.n.j',$recent_id);
                        $recent_title = get_the_title($recent_id);
                        echo $recent_url;
                      } ?>">
                    <date><?php echo $recent_time; ?></date>
                    <div class="company-news-list-text">
                      <span><?php echo $recent_title; ?></span>
                    </div>
                  </a>
                </li>
            <?php 
                endforeach;
              ?>        
          </ul>
          <a href="<?php bloginfo('url');?>/news">
						<div class="company-news-article-btn">
							<span>List</span>
						</div>
					</a>
        </div>
      </div>  
    </section>
  </div>
<?php get_footer();?>   