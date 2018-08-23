<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage nagoya-partition
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="target-densitydpi=device-dpi, width=640, maximum-scale=1.0, user-scalable=yes">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="<?php echo content_url() ?>/themes/nagoya-partition/js/jquery.fs.boxer.min.css">
<script type="text/javascript" src="<?php echo content_url() ?>/themes/nagoya-partition/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo content_url() ?>/themes/nagoya-partition/js/jquery.fs.boxer.min.js"></script>
<script type="text/javascript" src="<?php echo content_url() ?>/themes/nagoya-partition/js/Scripts.js"></script>
<script type="text/javascript" src="<?php echo content_url() ?>/themes/nagoya-partition/js/fixHeight.js"></script>

<?php wp_head(); ?>
</head>

<body>
	<header>
		<div class="container clearfix">
				<h1>名古屋パーテーション｜愛知・岐阜・三重・静岡エリアのオフィス、工場、ショップのパーテーション（パーティション）・間仕切りの設計施工・設置</h1>
				<h2><a href="#"><img src="<?php echo content_url() ?>/images/logo.png" width="268" height="48" alt="名古屋パーテーション"></a></h2>
				<div class="h-right">
					<a class="tel" href="tel:0120114912"><img src="<?php echo content_url() ?>/images/tel.png" width="177" height="18" alt="TEL:0120-114-912"></a>
					<a class="mail" href="contact.html"><img src="<?php echo content_url() ?>/images/mail.png" width="130" height="29" alt="お問合せ"></a>
					<span id="btn_menu"><i></i><span></span></span>
					<nav>
						<ul>
							<li><a href="#">TOP</a></li>
							<li><a href="#plan">デザインプラン</a></li>
							<li><a href="#example01">導入事例</a></li>
							<li><a href="#example02">施工事例</a></li>
							<li><a href="#flow">施工までの流れ</a></li>
							<li><a href="sekouhouhou.html">施工スタッフのこだわり</a></li>
							<li><a href="#area">サービスエリア</a></li>
							<li><a href="#company">会社概要</a></li>
							<li><a href="contact.html">お問合せ</a></li>
						</ul>
					</nav>
					<!-- SP用ドロップダウンメニュー -->
					<nav class="nav-sp">
						<ul>
							<li><a href="#">TOP</a></li>
							<li><a href="#plan">デザインプラン</a></li>
							<li><a href="#example01">導入事例</a></li>
							<li><a href="#example02">施工事例</a></li>
							<li><a href="#flow">施工までの流れ</a></li>
							<li><a href="sekouhouhou.html">施工スタッフのこだわり</a></li>
							<li><a href="#area">サービスエリア</a></li>
							<li><a href="#company">会社概要</a></li>
							<li><a href="contact.html">お問合せ</a></li>
						</ul>
					</nav>
					<!-- End SP用ドロップダウンメニュー -->
				</div>
			</div>
	</header>

