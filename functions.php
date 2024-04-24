<?php
function webst8_setup() {
   add_theme_support( 'post-thumbnails' ); //アイキャッチ画像をON
   add_theme_support( 'title-tag' ); //タイトルタグを挿入
}

add_action( 'after_setup_theme', 'webst8_setup');
?>
<?php
the_post_thumbnail();                  // without parameter -&gt; 'post-thumbnail'
 
the_post_thumbnail( 'thumbnail' );       // Thumbnail (default 150px x 150px max)
the_post_thumbnail( 'medium' );          // Medium resolution (default 300px x 300px max)
the_post_thumbnail( 'large' );           // Large resolution (default 640px x 640px max)
the_post_thumbnail( 'full' );            // Full resolution (original size uploaded)
 
the_post_thumbnail( array(100, 100) );  // Ot

?>