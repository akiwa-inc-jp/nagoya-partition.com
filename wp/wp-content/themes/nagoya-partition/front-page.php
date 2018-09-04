<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main>
	<figure>
		<div class="container clearfix">
			<img id="top01" src="<?php echo content_url() ?>/images/top01.png" width="117" height="145" alt="顧客満足度92％">
			<img id="top02" src="<?php echo content_url() ?>/images/top02.png" width="663" height="26" alt="オフィス・工場・ショップ…、空間レイアウトを理想のカタチに！">
		</div>
		<ul>
			<li class="active" style="background-image:url(<?php echo content_url() ?>/images/slide01.jpg)"></li>
			<li style="background-image:url(<?php echo content_url() ?>/images/slide02.jpg)"></li>
			<li style="background-image:url(<?php echo content_url() ?>/images/slide03.jpg)"></li>
			<!--<li><a href="#reuse" style="background-image:url(<?php echo content_url() ?>/images/slide-reuse.jpg)">業界初！！！　名古屋パーテーションのリユース</a></li>-->
			<li><a href="#PS-banner" style="background-image:url(<?php echo content_url() ?>/images/top-banner04.jpg)">パーテーションストア 施工型パーテーションが1パネル14,500円から 詳しくはこちら</a></li>
			<li style="background-image:url(<?php echo content_url() ?>/images/summer-campain.png)"></li>
		</ul>
	</figure>
	
	<section id="intro01" class="container">
  <h4><img src="<?php echo content_url() ?>/images/txt01.png" width="572" height="54" alt="レイアウトプラン無料作成します！"></h4>
		<p>名古屋パーテーションはオフィス・工場の空間レイアウトを無料で作成いたします。<br>
		お客様のご要望や空間に合わせたプランで、最適なご提案をさせていただきます。</p>
	</section>
	
	<section id="intro02" class="container clearfix">
		<ul>
			<li>市販のパーテーションより落ち着いた空間をつくりたい！</li>
			<li>組織変更に伴いレイアウトの変更をしたい！</li>
			<li>新たに会議室を設けたいが・・・</li>
			<li>ガラス張りパーテーションを組みたいが予算が厳しい！</li>
			<li>こだわりのオフィスで細かなオーダーに対応してほしい！</li>
		</ul>
		
		<div class="btn">
			<a class="tel" href="tel:0120-114-912"><img src="<?php echo content_url() ?>/images/tel02.png" width="341" height="112" alt="0120-114-912"></a>
			<a class="mail" href="<?php echo get_permalink( get_page_by_path( 'contact' )->ID ); ?>"><img src="<?php echo content_url() ?>/images/mail02.png" width="361" height="134" alt="ご質問・ご相談はこちら"></a>
		</div>
	</section>
	
	<section id="intro03">
		<div class="container">
			<h5>施工型パーテーション・間仕切り壁なら名古屋パーテーション！</h5>
			<h4>リーズナブルに空間を創れるパーテーション！</h4>
			
			<p>パーテーションを床から天井まで施工することで、完全に空間を仕切ることができます。<br>
			内装工事で壁を作って空間を仕切るよりも、安いコストでオフィスや工場の間取りを変更ですることができます。<br>
			もちろん、増設や解体、移設に対応するカスタマイズが特長で、会議室や間取りを変更したい場合の<br class="pc">
			組み換え工事やリフォーム、オフィスから退去する際のコストを削減することができます。</p>
			
			<h6>名古屋パーテーションは<span>完全オーダーメイド施工</span>でありながら<br>
			仕上がりと品質の高さにこだわり<span>低コスト・短納期</span>をも実現しました！</h6>
		</div>
	</section>
	
	<section id="intro04">
		<div class="container">
			<h4><img src="<?php echo content_url() ?>/images/txt02.png" width="920" height="77" alt="名古屋パーテーションが選ばれる理由"></h4>
			
			<ul class="fixHeight clearfix">
				<li>
					<a href="#example01">
						<h5>価格の安さ</h5>
						<p>名古屋パーテーションは高品質と丁寧な施工をコミットした業界最安値を目指します。</p>
					</a>
				</li>
				<li>
					<a href="#plan">
						<h5>デザイン性</h5>
						<p>私たちは豊富なサイズとカラーで、他にはないデザイン性の高い理想の空間を創り出します。</p>
					</a>
				</li>
				<li>
					<a href="#plan02">
						<h5>カスタマイズ</h5>
						<p>完全オーダーメイド施工型で、素材から色までオフィス・工場に合わせたスペースが作れます。</p>
					</a>
				</li>
				<li>
					<a href="#flow">
						<h5>納期の早さ</h5>
						<p>ご注文から施工日までをスピーディーに行い、短い納期での設置・施工を可能にします。</p>
					</a>
				</li>
				<li>
					<a href="#plan03">
						<h5>品質の高さ</h5>
						<p>品質と仕上がりにこだわり、静粛性、遮音性、耐火性能や素材など、空間の質も高めます。</p>
					</a>
				</li>
				<li>
					<a href="#example02">
						<h5>施工・設置</h5>
						<p>オーダーに沿った施工と設置で、仕上がりにもしっかりとこだわります。</p>
					</a>
				</li>
			</ul>
		</div>
	</section>
	
	<!--<section id="reuse">
		<div class="container">
			<h4><img src="<?php echo content_url() ?>/images/reuse-top.png" alt="業界初！！！ 名古屋パーテーションのリユース"></h4>
			<h5>新規で施工型パーテーションをお考えのお客様へ</h5>
			<div class="reuse-sec01">
				<p>名古屋パーテーションで施工した商品につきましては、<br>処分費がかからず下取りがあるため、<br>事務所移転や撤去がある場合、無駄な経費をカットできます！<br>名古屋パーテーションが選ばれる理由の一つにリユースがあります。※</p>
			</div>
			<img src="<?php echo content_url() ?>/images/tekkyo01.png" class="tekkyo01 clearfix" alt="パーテーション撤去処分の際にかかる費用 他社で施工した場合、解体費+処分費+諸経費のお見積もりとなるところ、名古屋パーテーションで施工した場合、解体費+諸経費-下取り費となるため撤去処分にかかる経費をグッと抑えることができます。">
			<a href="https://partition-store.shop-pro.jp/" target="_blank" class="reuse-otoiawase">リユース商品をお考えのお客様はこちらへ</a>
			<div class="reuse-sec01">
				<p>事務所移転や撤去・解体の際にもお電話一つで即対応致します！<br>リユースがある名古屋パーテーションに施工後のメンテナンスもお任せください！！</p>
			</div>
		</div>
		<section class="contact">
			<h4><span>オフィス・工場・ショップ・会議室・応接室・喫煙室・多目的スペース…、</span>空間レイアウトを理想のカタチに！</h4>
			<div class="container clearfix">
				<div class="info">
					<img src="<?php echo content_url() ?>/images/contact.png" width="552" height="251" alt="まずはお電話ください">
				</div>
				<div class="btn">
					<a class="tel" href="tel:0120-114-912"><img src="<?php echo content_url() ?>/images/tel03.png" width="399" height="73" alt="0120-114-912"></a>
					<a class="mail" href="<?php echo get_permalink( get_page_by_path( 'contact' )->ID ); ?>"><img src="<?php echo content_url() ?>/images/mail03.png" width="416" height="179" alt="メールでのお問い合わせはこちら"></a>
				</div>
			</div>
		</section>
	</section>-->
	
	<section id="plan">
		<div class="container">
			<h2><img src="<?php echo content_url() ?>/images/mark02.png" width="130" height="13" alt="NAGOYA PARTITION">
			<span>名古屋パーテーション<span>の</span></span><strong>デザインプラン</strong></h2>
		</div>
		<div id="plan01" class="plan">
			<div class="container">
				<h3><img src="<?php echo content_url() ?>/images/ttl01.png" width="257" height="27" alt="DESIGN PLAN 01">
				PANEL<span>基本パターン例</span></h3>
				<p>お客様のご要望にあわせた細かなカスタマイズに対応しております。</p>
			</div>
			
			<ul class="clearfix">
				<li>
					<p>D1</p>
					<img src="<?php echo content_url() ?>/images/panel_d01.png" alt="D1">
				</li>
				<li>
					<p>D2</p>
					<img src="<?php echo content_url() ?>/images/panel_d02.png" alt="D2">
				</li>
				<li>
					<p>D3</p>
					<img src="<?php echo content_url() ?>/images/panel_d03.png" alt="D3">
				</li>
				<li>
					<p>P1</p>
					<img src="<?php echo content_url() ?>/images/panel_p01.png" alt="P1">
				</li>
				<li>
					<p>P2</p>
					<img src="<?php echo content_url() ?>/images/panel_p02.png" alt="P2">
				</li>
				<li>
					<p>P3</p>
					<img src="<?php echo content_url() ?>/images/panel_p03.png" alt="P3">
				</li>
				<li>
					<p>P4</p>
					<img src="<?php echo content_url() ?>/images/panel_p04.png" alt="P4">
				</li>
				<li>
					<p>P5</p>
					<img src="<?php echo content_url() ?>/images/panel_p05.png" alt="P5">
				</li>
				<li>
					<p>P6</p>
					<img src="<?php echo content_url() ?>/images/panel_p06.png" alt="P6">
				</li>
				<li>
					<p>P7</p>
					<img src="<?php echo content_url() ?>/images/panel_p07.png" alt="P7">
				</li>
				<li>
					<p>P8</p>
					<img src="<?php echo content_url() ?>/images/panel_p08.png" alt="P8">
				</li>
				<li>
					<p>P9</p>
					<img src="<?php echo content_url() ?>/images/panel_p09.png" alt="P9">
				</li>
				<li>
					<p>P10</p>
					<img src="<?php echo content_url() ?>/images/panel_p10.png" alt="P10">
				</li>
				<li>
					<p>P11</p>
					<img src="<?php echo content_url() ?>/images/panel_p11.png" alt="P11">
				</li>
				<li>
					<p>P12</p>
					<img src="<?php echo content_url() ?>/images/panel_p12.png" alt="P12">
				</li>
				<li>
					<p>P13</p>
					<img src="<?php echo content_url() ?>/images/panel_p13.png" alt="P13">
				</li>
			</ul>
			<ul class="clearfix">
				<li id="panel_e00">
					<p>E0</p>
					<img src="<?php echo content_url() ?>/images/panel_e00.png" alt="E0">
				</li>
				<li id="panel_e01">
					<p>E1</p>
					<img src="<?php echo content_url() ?>/images/panel_e01.png" alt="E1">
				</li>
				<li id="panel_e02">
					<p>E2</p>
					<img src="<?php echo content_url() ?>/images/panel_e02.png" alt="E2">
				</li>
			</ul>
			
			<img src="<?php echo content_url() ?>/images/txt03.png" width="789" height="108" alt="上記の基本パターン以外にもあらゆるカスタマイズが可能です。">
		</div>
		
		<div id="plan02" class="plan container">
			<h3><img src="<?php echo content_url() ?>/images/ttl02.png" width="257" height="27" alt="DESIGN PLAN 02">
			COLOR<span>選べるカラー</span></h3>
			
			<p>どのような色や材質にも対応しております。実際にサンプル見本帳を見て確認して頂きます。</p>
			
			<h4>単色</h4>
			<ul class="clearfix">
				<li>
					<img src="<?php echo content_url() ?>/images/color-simple01.jpg" width="190" height="190" alt="MT001 ホワイト">
					<p>MT001 ホワイト</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-simple02.jpg" width="190" height="190" alt="MT002 アイボリー">
					<p>MT002 アイボリー</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-simple03.jpg" width="190" height="190" alt="MT003 グレー">
					<p>MT003 グレー</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-simple04.jpg" width="190" height="190" alt="MT004 ブラック">
					<p>MT004 ブラック</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-simple05.jpg" width="190" height="190" alt="MT005 ブルー">
					<p>MT005 ブルー</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-simple06.jpg" width="190" height="190" alt="MT006 レッド">
					<p>MT006 レッド</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-simple07.jpg" width="190" height="190" alt="MT007 マットグリーン">
					<p>MT007 マットグリーン</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-simple08.jpg" width="190" height="190" alt="MT008 グリーン">
					<p>MT008 グリーン</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-simple09.jpg" width="190" height="190" alt="MT009 イエロー">
					<p>MT009 イエロー</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-simple10.jpg" width="190" height="190" alt="MT010 オレンジ">
					<p>MT010 オレンジ</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-simple11.jpg" width="190" height="190" alt="MT011 プレーンブラウン">
					<p>MT011 プレーンブラウン</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-simple12.jpg" width="190" height="190" alt="MT012 ブラウン">
					<p>MT012 ブラウン</p>
				</li>
			</ul>
			<h4>木目</h4>
			<ul class="clearfix">
				<li>
					<img src="<?php echo content_url() ?>/images/color-wood01.jpg" width="190" height="190" alt="MV001-K">
					<p>MV001-K  アニグレ</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-wood02.jpg" width="190" height="190" alt="MV002-K">
					<p>MV002-K  メイプル</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-wood03.jpg" width="190" height="190" alt="MV003-K">
					<p>MV003-K  アニグレ</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-wood04.jpg" width="190" height="190" alt="MV004-K">
					<p>MV004-K  バーチ</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-wood05.jpg" width="190" height="190" alt="MV005-K">
					<p>MV005-K  マホガニー</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/color-wood06.jpg" width="190" height="190" alt="MV006-K">
					<p>MV006-K  ウォルナット</p>
				</li>
			</ul>
		</div>
		
		<div id="plan03" class="plan container">
			<h3><img src="<?php echo content_url() ?>/images/ttl03.png" width="257" height="27" alt="DESIGN PLAN 03">
			QUALITY<span>基本性能と品質</span></h3>
			
			<p>照かりを抑えたマット調の美しい木目！安心の国内生産。</p>

			<p id="plan03_msg">自然の生命観を伝える美しい木目、ゆっくりとした時間の経過を表した味わい深い色調。<br class="pc_only">私たちが扱う商品は、素材を吟味して揃えた “品質”のパーテーションです。</p>
			
			<div id="quality_box">
				<p id="quality_box_ttl">パーテーションの品質</p>
				<p>ついデザイン選びに目が向いてしまいがちなパーテーション選びですが、使われる素材でも大きく変わります。</p>
			</div>

			<table>
				<thead>
				<tr>
					<th scope="col" class="testname">試験科目</th>
					<th scope="col" class="testmethod">試験方法</th>
					<th scope="col" class="testresult">試験結果</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<th scope="row">耐セロテープ性</th>
					<td class="testmethod">メーカー規格　セロテープ（ＪＩＳ　Ｚ-1522）を試験片表面に圧着し<br class="pc_only">50℃±3℃の恒温槽中に2時間放置した後に剥離する。</td>
					<td>変化なし</td>
				</tr>
				<tr>
					<th scope="row">平面引張り</th>
					<td class="testmethod">ＪＡＳ合格規格　平面引張り試験準拠。</td>
					<td>0.4Ｎ/ｍ㎡以上</td>
				</tr>
				<tr>
					<th scope="row">耐摩耗性</th>
					<td class="testmethod">ＪＡＳ合格企画　摩耗Ｃ試験準拠。摩耗輪ＣＳ-17、荷重：1000ｇ<br class="pc_only">柄消失が50％に達した時の回転値を求める。</td>
					<td>500回</td>
				</tr>
				<tr>
					<th scope="row">耐スクラッチ性</th>
					<td class="testmethod">鉛筆硬度ＪＩＳ　Ｋ-5600準拠　荷重：750ｇ　　評価方法：擬集破壊</td>
					<td>2Ｈ程度</td>
				</tr>
				<tr>
					<th scope="row">耐溶剤性</th>
					<td class="testmethod">メーカー規格　ＭＥＫ/ラッカーシンナー（ＪＩＳ　Ｋ5538）/アセトン<br class="pc_only">各々を脱脂綿に含ませ、荷重500ｇで20往復拭く。</td>
					<td>著しい変化なし</td>
				</tr>
				<tr>
					<th scope="row">耐汚染性</th>
					<td class="testmethod">ＪＡＳ合板規格　汚染Ａ試験準拠。赤色クレヨン/事務用青色インキ/黒色<br class="pc_only">マジックで線を引き、4時間放置後、溶剤又は洗剤を布で含ませ拭き取る。</td>
					<td>軽微な着色</td>
				</tr>
				<tr>
					<th scope="row">耐薬品性</th>
					<td class="testmethod">ＪＡＳ合板規格　耐薬品性試験準拠。1％炭酸ナトリウム水溶液/5％酢酸<br class="pc_only">水溶液を数滴滴下し、6時間放置後に水洗いする。</td>
					<td>著しい変化なし</td>
				</tr>
				<tr>
					<th scope="row">寒熱繰り返し</th>
					<td class="testmethod">ＪＡＳ合板規格　寒熱繰り返しＣ試験準拠。60℃±3℃恒温槽中に2時間放置後、<br class="pc_only">-20℃±3℃恒温槽に2時間放置する工程を2回繰り返し、室温に達するまで放置する。</td>
					<td>著しい変化なし</td>
				</tr>
				<tr>
					<th scope="row">退色試験</th>
					<td class="testmethod">ＪＡＳ合板規格　退色試験準拠。退色試験用水銀灯の光に48時間さらした後、<br class="pc_only">暗室中に72時間放置する。</td>
					<td>著しい変化なし</td>
				</tr>
				<tr>
					<th scope="row">促進耐光性</th>
					<td class="testmethod">メーカー規格　　光源：キセノンアーク灯（60Ｗ/㎡）1000時間</td>
					<td>著しい変化なし</td>
				</tr>
				</tbody>
			</table>
			<p id="table_caution">弊社オリジナル基本性能表</p>
		</div>

		<div id="plan04" class="plan container">
			<h3><img src="<?php echo content_url() ?>/images/ttl04.png" width="257" height="27" alt="DESIGN PLAN 04">
			MATERIAL<span>選べる素材</span></h3>
			
			<p>素材によって、空間のイメージや雰囲気は変わってきます。<br>
			名古屋パーテーションではお客様の要望や理想に合わせたパーテーションをご用意致します。</p>
			
			<ul class="clearfix">
				<li>
					<img src="<?php echo content_url() ?>/images/material01.png" width="430" height="340" alt="Glass">
					<p>圧倒的な解放感、明るさが魅力のパネル。</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/material02.png" width="430" height="340" alt="Steel">
					<p>遮音性・不燃性抜群のパネル。</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/material03.png" width="430" height="340" alt="Aluminum">
					<p>バリエーション豊富でリーズナブルなパネル。</p>
				</li>
				<li>
					<img src="<?php echo content_url() ?>/images/material04.png" width="430" height="340" alt="Sheet">
					<p>コストパフォーマンスに優れたパネル。</p>
				</li>
			</ul>
		</div>
	</section>
	
	<section class="contact">
		<h4><span>オフィス・工場・ショップ・会議室・応接室・喫煙室・多目的スペース…、</span>空間レイアウトを理想のカタチに！</h4>
		<div class="container clearfix">
			<div class="info">
				<img src="<?php echo content_url() ?>/images/contact.png" width="552" height="251" alt="まずはお電話ください">
			</div>
			<div class="btn">
				<a class="tel" href="tel:0120-114-912"><img src="<?php echo content_url() ?>/images/tel03.png" width="399" height="73" alt="0120-114-912"></a>
				<a class="mail" href="<?php echo get_permalink( get_page_by_path( 'contact' )->ID ); ?>"><img src="<?php echo content_url() ?>/images/mail03.png" width="416" height="179" alt="メールでのお問い合わせはこちら"></a>
			</div>
		</div>
	</section>
	
	<section id="example01" class="container">
		<h2><img src="<?php echo content_url() ?>/images/mark02.png" width="130" height="13" alt="NAGOYA PARTITION">
		<span>名古屋パーテーション<span>の</span></span><strong>導入事例</strong></h2>
		
		<ul class="clearfix">
			<li>
				<h4>
					<img src="<?php echo content_url() ?>/images/maru01.png" width="80" height="80" alt="導入事例 1">
					直線ライン（化粧鋼板）
				</h4>
				
				<table>
					<tr>
						<th>パターン</th>
						<td>P1（上部オープン＋パネル）</td>
					</tr>
					<tr>
						<th>サイズ</th>
						<td>H2,500 ・ W3,600</td>
					</tr>
					<tr>
						<th>内　容</th>
						<td>パネル３枚 +ドア１枚</td>
					</tr>
					<tr class="price">
						<th>金　額</th>
						<td>
							<p><span>154,000</span>円～</p>
							(材料費＋施工費込)
						</td>
					</tr>
					<tr class="misc">
						<td colspan="2">※目安㎡　3.6m × 2.5m ＝ 9㎡</td>
					</tr>
				</table>
				
				<img src="<?php echo content_url() ?>/images/jirei01.png" width="300" height="440" alt="事例01">
				<img src="<?php echo content_url() ?>/images/jirei-img01.png" width="300" height="200" alt="事例3D01">
			</li>
			<li>
				<h4>
					<img src="<?php echo content_url() ?>/images/maru02.png" width="80" height="80" alt="導入事例 2">
					L型タイプ（化粧鋼板）
				</h4>
				
				<table>
					<tr>
						<th>パターン</th>
						<td>P1（上部オープン＋パネル）</td>
					</tr>
					<tr>
						<th>サイズ</th>
						<td>H2,500 ・ W5,400</td>
					</tr>
					<tr>
						<th>内　容</th>
						<td>パネル５枚 +ドア１枚</td>
					</tr>
					<tr class="price">
						<th>金　額</th>
						<td>
							<p><span>201,000</span>円～</p>
							(材料費＋施工費込)
						</td>
					</tr>
					<tr class="misc">
						<td colspan="2">※目安㎡　5.4m × 2.5m ＝ 13.5㎡</td>
					</tr>
				</table>
				
				<img src="<?php echo content_url() ?>/images/jirei02.png" width="300" height="440" alt="事例02">
				<img src="<?php echo content_url() ?>/images/jirei-img02.png" width="300" height="200" alt="事例3D02">
			</li>
			<li>
				<h4>
					<img src="<?php echo content_url() ?>/images/maru03.png" width="80" height="80" alt="導入事例 3">
					コ型タイプ（化粧鋼板）
				</h4>
				
				<table>
					<tr>
						<th>パターン</th>
						<td>P1（上部オープン＋パネル）</td>
					</tr>
					<tr>
						<th>サイズ</th>
						<td>H2,500 ・ W9,000</td>
					</tr>
					<tr>
						<th>内　容</th>
						<td>パネル９枚 +ドア１枚</td>
					</tr>
					<tr class="price">
						<th>金　額</th>
						<td>
							<p><span>314,500</span>円～</p>
							(材料費＋施工費込)
						</td>
					</tr>
					<tr class="misc">
						<td colspan="2">※目安㎡　9m × 2.5m ＝ 22.5㎡</td>
					</tr>
				</table>
				
				<img src="<?php echo content_url() ?>/images/jirei03.png" width="300" height="440" alt="事例03">
				<img src="<?php echo content_url() ?>/images/jirei-img03.png" width="300" height="200" alt="事例3D03">
			</li>
		</ul>
	</section>
	
	<section id="voice">
		<div class="container">
			<h4><img src="<?php echo content_url() ?>/images/txt04.png" width="263" height="44" alt="お客様からの声"></h4>
			
			<ul class="clearfix">
				<li>
					<h5>オフィスが生まれ変わりました。</h5>
					<h6>（名古屋市中区　C様）</h6>
					
					<p>パーテーションのおかげで、部署ごとに区切られた空間ができました。また、会議室も設けることができ、ミーティングにも集中することができ、打ち合わせもスムーズで効率よくできるようになりました。他にはない斬新なパーテーションはガラス張りで、オフィス全体がスタイリッシュな雰囲気になりました。</p>
				</li>
				<li>
					<h5>仕事の効率が上がりました。</h5>
					<h6>（名古屋市中村区　A様）</h6>
					
					<p>フロアをパーテーションで仕切る事で、空間を通路と部屋にわける事ができたおかげで、作業効率も上がり、使いやすいオフィスになりました。お問合せをしてから、あっというまに工事が決定して、一日でパーテーションが出来上がったときは感動しました。またレイアウトを変更するときは宜しくお願いします。</p>
				</li>
				<li>
					<h5>商談スペースで売上アップ！</h5>
					<h6>（名古屋市北区　T様）</h6>
					
					<p>今までのオフィスは仕切りがなく、お客様が来社されても、他のスタッフの視線を気にされていて、商談にも集中できていない感じでしたが、パーテーションで視界を遮断でき、声も聞かれない事で、心を開いた会話ができるようになりました。おかげで売上もあがったと思います。本当にありがとうございました。</p>
				</li>
			</ul>
		</div>
	</section>
	
	<!--<section id="PS-banner">
		<div class="container">
			<h3>全国へパーテーション部材をお届けします！</h3>
			<a href="https://partition-store.shop-pro.jp/" target="_blank"><img src="<?php echo content_url() ?>/images/top-banner01.jpg" alt="パーテーションストア PARTITION STORE 全国の建設会社様・工務店様・設計会社様へ 詳しくはこちら"></a>
			<h4>販売代理店様は随時募集しております</h4>
			<p>施工マニュアルで安心施工を実現</p>
		</div>
	</section>-->
	
	<section id="example02">
		<div class="container">
			<h2><img src="<?php echo content_url() ?>/images/mark02.png" width="130" height="13" alt="NAGOYA PARTITION">
			<span>名古屋パーテーション<span>の</span></span><strong>施工事例</strong></h2>
			<div class="sekoujirei-pdf">
				<p>名古屋パーテーションの施工事例が印刷できます。</p>
				<a href="<?php echo content_url() ?>/downloads/sekoujirei.pdf" target="_blank">PDFの印刷はこちら(サイズ:10.3MB)</a>
			</div>
		</div>
		
		
		
		<ul class="clearfix">
			<li><a href="<?php echo content_url() ?>/images/sekou01.jpg" class="boxer" data-gallery="1Floor"><img src="<?php echo content_url() ?>/images/sekou01.jpg" alt="施工事例01"></a></li>
			<li><a href="<?php echo content_url() ?>/images/sekou02.jpg" class="boxer" data-gallery="1Floor"><img src="<?php echo content_url() ?>/images/sekou02.jpg" alt="施工事例02"></a></li>
			<li><a href="<?php echo content_url() ?>/images/sekou03.jpg" class="boxer" data-gallery="1Floor"><img src="<?php echo content_url() ?>/images/sekou03.jpg" alt="施工事例03"></a></li>
			<li><a href="<?php echo content_url() ?>/images/sekou04.jpg" class="boxer" data-gallery="1Floor"><img src="<?php echo content_url() ?>/images/sekou04.jpg" alt="施工事例04"></a></li>
			<li><a href="<?php echo content_url() ?>/images/sekou05.jpg" class="boxer" data-gallery="1Floor"><img src="<?php echo content_url() ?>/images/sekou05.jpg" alt="施工事例05"></a></li>
			<li><a href="<?php echo content_url() ?>/images/sekou06.jpg" class="boxer" data-gallery="1Floor"><img src="<?php echo content_url() ?>/images/sekou06.jpg" alt="施工事例06"></a></li>
			<li><a href="<?php echo content_url() ?>/images/sekou07.jpg" class="boxer" data-gallery="1Floor"><img src="<?php echo content_url() ?>/images/sekou07.jpg" alt="施工事例07"></a></li>
			<li><a href="<?php echo content_url() ?>/images/sekou08.jpg" class="boxer" data-gallery="1Floor"><img src="<?php echo content_url() ?>/images/sekou08.jpg" alt="施工事例08"></a></li>
			<li><a href="<?php echo content_url() ?>/images/sekou09.jpg" class="boxer" data-gallery="1Floor"><img src="<?php echo content_url() ?>/images/sekou09.jpg" alt="施工事例09"></a></li>
			<li><a href="<?php echo content_url() ?>/images/sekou10.jpg" class="boxer" data-gallery="1Floor"><img src="<?php echo content_url() ?>/images/sekou10.jpg" alt="施工事例10"></a></li>
			<li><a href="<?php echo content_url() ?>/images/sekou11.jpg" class="boxer" data-gallery="1Floor"><img src="<?php echo content_url() ?>/images/sekou11.jpg" alt="施工事例11"></a></li>
			<li><a href="<?php echo content_url() ?>/images/sekou12.jpg" class="boxer" data-gallery="1Floor"><img src="<?php echo content_url() ?>/images/sekou12.jpg" alt="施工事例12"></a></li>
		</ul>
		
	</section>
	
	<section id="flow" class="container">
		<h2><img src="<?php echo content_url() ?>/images/mark02.png" width="130" height="13" alt="NAGOYA PARTITION">
		<span>名古屋パーテーション<span>の</span></span><strong>施工までの流れ</strong></h2>
		
		<table>
			<tr>
				<th class="n1">お問い合わせ</th>
				<td>下記の電話番号からお問い合わせください。女性スタッフがお客様のご要望をヒアリングし、概算見積りをその場でお伝え致します。「高さ」「長さ」「ドアの有無」をお教えください。</td>
			</tr>
			<tr>
				<td class="arrow" colspan="2"><img src="<?php echo content_url() ?>/images/arrow.png" width="27" height="14" alt="∨"></td>
			</tr>
			<tr>
				<th class="n2">現地の確認</th>
				<td>現場を見せて頂き、正式な寸法を測らせて頂きます。<br>
				また、サンプルパネル帳から色・部材・サイズを決めて頂きます。</td>
			</tr>
			<tr>
				<td class="arrow" colspan="2"><img src="<?php echo content_url() ?>/images/arrow.png" width="27" height="14" alt="∨"></td>
			</tr>
			<tr>
				<th class="n3">図面・見積提出</th>
				<td>最終見積り及び図面、工事プランを確認して頂きます。<br>
				また工事プランに納得いかない場合は再度プランをご提出させて頂きます。</td>
			</tr>
			<tr>
				<td class="arrow" colspan="2"><img src="<?php echo content_url() ?>/images/arrow.png" width="27" height="14" alt="∨"></td>
			</tr>
			<tr>
				<th class="n4">施工日決定</th>
				<td>契約書にサインを頂き、工事の施工日を決定致します。<br><br>
				<!--（ご注文から７日後（土日含まず）が目安となります）--></td>
			</tr>
			<tr>
				<td class="arrow" colspan="2"><img src="<?php echo content_url() ?>/images/arrow.png" width="27" height="14" alt="∨"></td>
			</tr>
			<tr>
				<th class="n5">工　　　事</th>
				<td>予定通りに商品施工を致します。施工後現場確認をして頂き完了です。※工事の目安は基本9：00～18：00の間に施工致します。夜間作業をご希望の際はお伺いください。</td>
			</tr>
		</table>
	</section>
	
	<section id="sekoustaff-kodawari" class="container">
		<a href="<?php echo get_permalink( get_page_by_path( 'sekoustaff' )->ID ); ?>"><img src="<?php echo content_url() ?>/images/staff-kodawari.jpg" alt="施工スタッフのこだわり"></a>
	</section>
	
	<section id="faq" class="container">
		<h2><img src="<?php echo content_url() ?>/images/mark02.png" width="130" height="13" alt="NAGOYA PARTITION">
		<span>名古屋パーテーション<span>の</span></span><strong>Q&amp;A</strong></h2>
		
		<table>
			<tr>
				<th rowspan="2">電気工事関係</th>
				<td class="qst">コンセント、照明、空調、換気扇、電子錠の設置は可能ですか？</td>
			</tr>
			<tr>
				<td class="ans">はい、大丈夫です。新設・増設・移設等、問題ありません。</td>
			</tr>
		</table>
		
		<table>
			<tr>
				<th rowspan="2">禁煙室</th>
				<td class="qst">分煙機の取り扱いはありますか？</td>
			</tr>
			<tr>
				<td class="ans">はい、取り扱いしております。弊社推奨する分煙機をメンテナンスを含めご提案させて頂きます。</td>
			</tr>
		</table>
		
		<table>
			<tr>
				<th rowspan="2">工場内間仕切り</th>
				<td class="qst">天井の設置も可能でしょうか？</td>
			</tr>
			<tr>
				<td class="ans">設置は可能です。天井の仕様もご提案させて頂きます。また 照明・空調も施工させて頂きます。</td>
			</tr>
		</table>
		
		<table>
			<tr>
				<th rowspan="4">エントランス</th>
				<td class="qst">パーテーションでオフィスのエントランスは製作できますか？</td>
			</tr>
			<tr>
				<td class="ans pb0">はい、製作できます。弊社仕様のエントランスをご用意しておりますので、一度ご確認ください。</td>
			</tr>
			<tr>
				<td class="qst">ロゴの製作も可能でしょうか？</td>
			</tr>
			<tr>
				<td class="ans">カッティングシート、アクリル素材、ステンレス、木質系等、様々な仕様に対応しております。</td>
			</tr>
		</table>
		
		<table>
			<tr>
				<th rowspan="2">造作壁</th>
				<td class="qst">パーテーションと造作壁を考えておりますが併設は可能ですか？</td>
			</tr>
			<tr>
				<td class="ans">はい、造作壁も施工させて頂いております。連結も可能ですし、<br>その際の、クロス柄も自由にお選びください。</td>
			</tr>
		</table>
		
		<table>
			<tr>
				<th rowspan="4">施工について</th>
				<td class="qst">施工時間の目安は？</td>
			</tr>
			<tr>
				<td class="ans pb0">基本作業時間はＡＭ8：30～ＰＭ5：30までとなっております。<br>
				時間外および夜間作業等も行っておりますので、その際はご確認ください。</td>
			</tr>
			<tr>
				<td class="qst">一日でどれくらいパネルを施工できますか？</td>
			</tr>
			<tr>
				<td class="ans">作業条件にも異なりますが、概ね一人の職人さんができる作業は<br>
				縦×横＝30㎡ ～ 40㎡程度になります。高さ2500㎜なら、パネル13枚 ～ 17枚となります。</td>
			</tr>
		</table>
		
		<table>
			<tr>
				<th rowspan="2">材料販売</th>
				<td class="qst">パーテーションの材料だけの部材売りも可能ですか？</td>
			</tr>
			<tr>
				<td class="ans">はい、大丈夫です。パネル1枚から、必要な部材だけを全国へ送らせて頂いております。<br>
				（※施工マニュアルもお付けいたしております）</td>
			</tr>
		</table>
		
		<table>
			<tr>
				<th rowspan="2">ガラス<br>パーテーション</th>
				<td class="qst">ガラスの部分の安全面は大丈夫ですか？</td>
			</tr>
			<tr>
				<td class="ans">ガラス部分は、ガラス4㎜、強化ガラス、アクリル等、お使い頂く場所に合わせて変更は可能です。</td>
			</tr>
		</table>
		
		<table>
			<tr>
				<th rowspan="2">騒音について</th>
				<td class="qst">施工の際に騒音はしますか？</td>
			</tr>
			<tr>
				<td class="ans">施工の際には、下記の騒音が発生します。<br><br>
				①電動ドリル（インパクト）でビスを打つ際の振動音<br>
				②アルミ材（スチール材）をカットする際の高音<br>
				③アルミ材に穴を開ける際のドリル音</td>
			</tr>
		</table>
	</section>
	
	<section id="justcut" class="container">
		<img src="<?php echo content_url() ?>/images/justcut.jpg" alt="パーテーション部材を事前に工場でカットしたジャストカット消音工事がおすすめ！！">
	</section>
	
	<section id="area" class="container">
		<h2><img src="<?php echo content_url() ?>/images/mark02.png" width="130" height="13" alt="NAGOYA PARTITION">
		<span>名古屋パーテーション<span>の</span></span><strong>サービスエリア</strong></h2>
		<div id="area-image" width="975" height="629">
			<a href="http://www.osaka-partition.com/lp/index.html" target="_blank"><img src="<?php echo content_url() ?>/images/area01.png" alt="大阪パーテーション" id="area01"></a>
			<a href="#"><img src="<?php echo content_url() ?>/images/area02.png" alt="サービスエリア 名古屋パーテーション" id="area02"></a>
			<a href="https://tokyo-partition.com/" target="_blank"><img src="<?php echo content_url() ?>/images/area03.png" alt="東京パーテーション" id="area03"></a>
			<img src="<?php echo content_url() ?>/images/area.png" width="975" height="629" alt="サービスエリア" id="area-back">
		</div>
	</section>
	
	<section id="company" class="clearfix">
		<div class="img"></div>
		<div class="txt">
			<h4><img src="<?php echo content_url() ?>/images/mark02.png" width="130" height="13" alt="NAGOYA PARTITION">
			会社概要</h4>
			
			<h5>「お客様に必要とされ、お客様の期待に応え続けます」</h5>
			
			<table>
				<tr>
					<th>会社名</th>
					<td><a href="https://akiwa.biz" target="_blank">あきわ株式会社</a></td>
				</tr>
				<tr>
					<th>所在地</th>
					<td>〒455-0831 愛知県名古屋市港区十一屋2-411-1</td>
				</tr>
				<tr>
					<th>電話番号</th>
					<td>052-381-4206</td>
				</tr>
				<tr>
					<th>メールアドレス</th>
					<td>info@nagoya-partition.com</td>
				</tr>
				<tr>
					<th>責任者</th>
					<td>代表取締役　高垣　英和</td>
				</tr>
				<tr>
					<th>業務内容</th>
					<td>パーテーション、間仕切りの製造・販売・施工工事</td>
				</tr>
				<tr>
					<th>社是</th>
					<td>「縁あるお客様へ喜びを創造します」</td>
				</tr>
			</table>
		</div>
	</section>
	
	<section class="contact">
		<h4><span>オフィス・工場・ショップ・会議室・応接室・喫煙室・多目的スペース…、</span>空間レイアウトを理想のカタチに！</h4>
		<div class="container clearfix">
			<div class="info">
				<img src="<?php echo content_url() ?>/images/contact.png" width="552" height="251" alt="まずはお電話ください">
			</div>
			<div class="btn">
				<a class="tel" href="tel:0120-114-912"><img src="<?php echo content_url() ?>/images/tel03.png" width="399" height="73" alt="0120-114-912"></a>
				<a class="mail" href="<?php echo get_permalink( get_page_by_path( 'contact' )->ID ); ?>"><img src="<?php echo content_url() ?>/images/mail03.png" width="416" height="179" alt="メールでのお問い合わせはこちら"></a>
			</div>
		</div>
	</section>
	<div class="toiawase-banner">
		<div class="inner">
			<img src="<?php echo content_url() ?>/images/toiawase-back.png" class="toiawase-back" alt="ご相談・資料請求・お見積り無料！お気軽にご連絡ください！ 受付時間 平日 AM9:00~PM6:00">
			<a href="tel:0120-114-912" class="toiawase-tel"><img src="<?php echo content_url() ?>/images/toiawase-tel.png" alt="0120-114-912"></a>
			<a  href="<?php echo get_permalink( get_page_by_path( 'contact' )->ID ); ?>" class="toiawase-mail"><img src="<?php echo content_url() ?>/images/toiawase-mail.png" alt="メールでのお問い合わせはこちら!! 24時間無料受付"></a>
		</div>
	</div>
	<a href="#" class="top-back"><img src="<?php echo content_url() ?>/images/top-back.png" alt="ページのトップへ戻る"></a>
</main><!-- #main -->

<?php get_footer();
