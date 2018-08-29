<?php
$id = "contact";
$title = "お問い合わせありがとうございました";
$keywords = "";
$description = "";

error_reporting(E_ALL & ~E_NOTICE);

require_once('qdmail.php');

$mail = new Qdmail();
$mail->errorDisplay(false);
$mail->errorlogLevel(3);
$mail->errorlogFilename('qdmail_error.log');

mb_language("japanese");
mb_internal_encoding("utf-8"); //内部文字コードを変更
mb_http_input("auto");
mb_http_output("utf-8");

//送信元アドレス
$from_email = "info@nagoya-partition.com";

// POST情報
$post_company = $_POST["company"];
$post_name = $_POST["name"];
$post_business = $_POST["business"];
$post_zip1 = $_POST["zip1"];
$post_zip2 = $_POST["zip2"];
$post_pref = $_POST["pref"];
$post_address = $_POST["address"];
$post_tel = $_POST["tel"];
$post_mail = $_POST["email"];
$post_date = $_POST["date"];
$post_place = $_POST["place"];
if($post_place=="diff"){
	$post_diff_address = $_POST["diff_address"];
} elseif($post_place=="same") {
	$post_diff_address = "上記住所と同じ";
} else {
	$post_diff_address = "";
}
$post_size1 = $_POST["size1"];
$post_size2 = $_POST["size2"];
$post_size3 = $_POST["size3"];
$post_kiboubi1 = $_POST["kiboubi1"];
$post_kiboujikan1 = $_POST["kiboujikan1"];
$post_kiboubi2 = $_POST["kiboubi2"];
$post_kiboujikan2 = $_POST["kiboujikan2"];
$post_estimate = $_POST["estimate"];
$post_aimitsu = $_POST["aimitsu"];
if (isset($_POST['subject']) && is_array($_POST['subject'])) {
    $post_subject = implode(",", $_POST["subject"]);
}
$post_content = $_POST["content"];

date_default_timezone_set('Asia/Tokyo');
$date = date('Y年m月d日H:i:s');

// -------------------------------------------------------
// メール送信(自動返信)
// -------------------------------------------------------
// 宛先
$to_email = $post_mail;

// 件名
$to_subject = "【名古屋パーテーション】お問合せありがとうございます。";

// メール本文
$body =
$post_company."\r\n"
.$post_name."様\r\n"
."\r\n"
."この度は、名古屋パーテーションにお問合せ頂きまして誠にありがとうございます。\r\n"
."後ほど担当者からご連絡させていただきますので、今しばらくお待ちください。\r\n"
."\r\n"
."//お問合せ内容//\r\n"
."-----------------------------------------\r\n"
."\r\n"
."会社名：".$post_company."\r\n"
."ご担当者様：".$post_name."\r\n"
."業種：".$post_business."\r\n"
."郵便番号：".$post_zip1."-".$post_zip2."\r\n"
."住所：".$post_pref.$post_address."\r\n"
."TEL：".$post_tel."\r\n"
."メールアドレス：".$post_mail."\r\n"
."施工希望日：".$post_date."\r\n"
."施工場所：".$post_diff_address."\r\n"
."サイズ：幅".$post_size1."mm　高さ".$post_size2."mm　ドア".$post_size3."枚\r\n"
."現場調査希望日：\r\n"
."　第一希望日：".$post_kiboubi1." ".$post_kiboujikan1."\r\n"
."　第二希望日：".$post_kiboubi2." ".$post_kiboujikan2."\r\n"
."希望予算：".$post_estimate."円\r\n"
."相見積もり先：".$post_aimitsu."\r\n"
."お問合せ内容：".$post_subject."\r\n"
.$post_content."\r\n"
."\r\n"
."-----------------------------------------\r\n"
."\r\n"
."あきわ株式会社\r\n"
."〒455-0831　愛知県名古屋市港区十一屋二丁目411-1\r\n"
."TEL.052-381-4206　FAX.052-381-4207\r\n"
."E-mail：info@nagoya-partition.com\r\n";

// メール送信内容
$mail->to($to_email);
$mail->subject($to_subject);
$mail->text($body);
$mail->from($from_email);

// メール送信
$result = $mail->send();

// -------------------------------------------------------
// メール送信
// -------------------------------------------------------
// 宛先
$to_email = $from_email;

// 件名
$to_subject = "【名古屋パーテーション】ホームページからお問合せがありました";

// メール本文
$body =
"ホームページからメールでのお問い合わせがありました。\r\n"
."\r\n"
."//お問合せ内容//\r\n"
."-----------------------------------------\r\n"
."\r\n"
."会社名：".$post_company."\r\n"
."ご担当者様：".$post_name."\r\n"
."業種：".$post_business."\r\n"
."郵便番号：".$post_zip1."-".$post_zip2."\r\n"
."住所：".$post_pref.$post_address."\r\n"
."TEL：".$post_tel."\r\n"
."メールアドレス：".$post_mail."\r\n"
."施工希望日：".$post_date."\r\n"
."施工場所：".$post_diff_address."\r\n"
."サイズ：幅".$post_size1."mm　高さ".$post_size2."mm　ドア".$post_size3."枚\r\n"
."現場調査希望日：\r\n"
."　第一希望日：".$post_kiboubi1." ".$post_kiboujikan1."\r\n"
."　第二希望日：".$post_kiboubi2." ".$post_kiboujikan2."\r\n"
."希望予算：".$post_estimate."円\r\n"
."相見積もり先：".$post_aimitsu."\r\n"
."お問合せ内容：".$post_subject."\r\n"
.$post_content."\r\n"
."\r\n"
."-----------------------------------------\r\n";

// メール送信内容
$mail->to($to_email);
$mail->subject($to_subject);
$mail->text($body);
$mail->from($post_mail);

// メール送信
$result = $mail->send();

?>

<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ja">
<!--<![endif]-->
<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WRBF79');</script>
<!-- End Google Tag Manager -->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="target-densitydpi=device-dpi, width=640, maximum-scale=1.0, user-scalable=yes">
<title></title>

<link rel="stylesheet" type="text/css" href="scss/style.scss" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="js/jquery.fs.boxer.min.css">

<link rel="shortcut icon" href="favicon.ico" />

<meta name="keywords" content="">
<meta name="description" content="">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.fs.boxer.min.js"></script>
<script type="text/javascript" src="js/Scripts.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/form.js"></script>

<meta name="robots" content="index,follow">

</head>

<body>

<header>
	<div class="container clearfix">
		<h1><a href="./"><img src="images/logo.png" width="268" height="48" alt="名古屋パーテーション"></a></h1>
		<a class="tel" href="tel:0120114912"><img src="images/tel.png" width="177" height="18" alt="TEL:0120-114-912"></a>
		<a class="mail" href="contact.html"><img src="images/mail.png" width="130" height="29" alt="お問合せ"></a>
		<span id="btn_menu"><i></i><span></span></span>
		
		<nav>
			<ul>
				<li><a href="./">TOP</a></li>
				<li><a href="./#plan">デザインプラン</a></li>
				<li><a href="./#example01">導入事例</a></li>
				<li><a href="./#example02">施工事例</a></li>
				<li><a href="./#flow">施工の流れ</a></li>
				<li><a href="./#area">サービスエリア</a></li>
				<li><a href="./#company">会社概要</a></li>
				<li><a href="contact.html">お問合せ</a></li>
			</ul>
		</nav>
	</div>
</header>

<main>

	<section id="form" class="container">
		<h2><img src="images/mark02.png" width="130" height="13" alt="NAGOYA PARTITION">
		<span>名古屋パーテーション<span>の</span></span><strong>お問い合わせ</strong></h2>
		<h4>お問い合わせありがとうございました。</h4>
		<p>後ほど担当者よりご連絡させていただきます。<br>
		3営業日以上過ぎても弊社より連絡がない場合は、<br>
		恐れ入りますが下記までご連絡ください。<br>
		<br>
		TEL：<a href="tel:0120114912">0120-114-912</a><br>
		E-mail：<a href="mailto:info@nagoya-partition.com">info@nagoya-partition.com</a><br>
		<br>
		<br>
		<a href="./">トップページに戻る</a></p>
		
	</section>
	
</main>

<footer>
	<div class="container">
		<a class="logo" href="./"><img src="images/logo02.jpg" width="372" height="74" alt="名古屋パーテーション"></a>
		<p>あきわ株式会社<br>
		〒455-0831　愛知県名古屋市港区十一屋二丁目411-1<br>
		TEL.052-381-4206　FAX.052-381-4207</p>
		
		<p id="copy">copyright(C)Nagoya Partition co., ltd. all rights reserved.</p>
	</div>
</footer>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRBF79"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</body>
</html>
