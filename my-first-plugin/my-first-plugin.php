<?php
/*
Plugin Name: My First Plugin
Author: Takayuki Miyauchi
Plugin URI: http://example.com/my-first-plugin Description: This is my great plugin!
Version: 0.1
Author URI: http://example.com/
Domain Path: /languages
Text Domain: my-first-plugin
*/

// the_contentフィルターフックにコールバック関数を定義

add_filter( 'the_content', 'insert_ad_to_the_content' );

// the_contentのコールバック関数で$contentの先頭にHTMLを挿入
function insert_ad_to_the_content( $content ) {
	$html = '<div class="my_ad_space">ここにバナー広告</div>';
	return $html . $content;
}

// wp_headアクションフックでコールバック関数を出力
add_action( 'wp_head', 'my_ad_space_style' );

// wp_headのコールバック関数でCSSスタイルを出力
function my_ad_space_style() {
	echo '<style>.my_ad_space_style{ margin: 1em 0; }</style>';
}