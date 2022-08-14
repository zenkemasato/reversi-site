<?php 



function mytheme_setup() {
	add_theme_support( 'title-tag' );
	
	add_theme_support('html5',array('style'.'script' ) );
	
	add_theme_support( 'post-thumbnails' );
	
	//ナビゲーションメニュー
	register_nav_menus( array(
		'primary' => '画面上部',
	));
	
	// 編集画面用のCSSオン
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-style.css' );
	
}
add_action( 'after_setup_theme','mytheme_setup' );

function mytheme_widgets(){
	register_sidebar( array(
		'id' => 'sidebar-1',
		'name' =>'サイドメニュー',
		'before_widget' =>
			'<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
	));
	
}
add_action( 'widgets_init','mytheme_widgets' );


//CSS mtheme-styleワードプレス内部でCSSを区別するためのもの
function mytheme_enqueue(){
	
	//Font　Awesome
	wp_enqueue_style( 'mytheme-fontawesome','https://use.fontawesome.com/releases/v5.8.1/css/all.css',array(), null );
	
	//Google Fonts
	wp_enqueue_style( 'mytheme-googlefonts','https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap',array(), null );

	
	//テーマのCSS　filemtime以降でスタイルを更新する度にcssファイルを更新する
	wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(),array(),
	filemtime( get_template_directory().'/style.css' ) );
}
add_action( 'wp_enqueue_scripts','mytheme_enqueue' );

//Font Awesome の属性
function mytheme_sri( $html,$handle ){
	if ( $handle === 'mytheme-fontawesome' ){
		return str_replace(
			'/>',
			'integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"' . ' />',
			$html 
		);
	}
	return $html;
}
add_filter( 'style_loader_tag','mytheme_sri', 10, 2);



/**
 * <head>〜</head>内にAdobe Fonts Scriptを挿入する
**/
add_action(
	'wp_head',
	function() { ?>
	<script>
  (function(d) {
    var config = {
      kitId: 'nvy5njk',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
	<?php }
);


add_action( 'customize_register', 'theme_customize' );
/* テーマにロゴをカスタマイズ */
function theme_customize($wp_customize){

	//ロゴ画像
	$wp_customize->add_section( 'logo_section', array(
		'title' => 'ロゴ画像', //セクションのタイトル
		'priority' => 59, //セクションの位置
		'description' => 'ロゴ画像を使用する場合はアップロードしてください。画像を使用しない場合はタイトルがテキストで表示されます。', //セクションの説明
	));

		$wp_customize->add_setting( 'logo_url' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_url', array(
			'label' => 'ロゴ画像',//セッティングのタイトル
			'section' => 'logo_section', //セクションID
			'settings' => 'logo_url', //セッティングID
			'description' => 'ロゴ画像を設定してください。', //セッティングの説明
		)));
}