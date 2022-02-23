<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">
	<div id="wrapper">
		<div id="map">
			<img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="日本地図" >
		</div>
		<div id="areaSelect">
			<div class="select-wrap">
				<select name="area" id="area" onClick="onChange()">
					<option value="">地方を選択してください</option>
					<option value="hokkaido">北海道地方</option>
					<option value="tohoku">東北地方</option>
					<option value="chubu">中部地方</option>
					<option value="kanto">関東地方</option>
					<option value="kinki">近畿地方</option>
					<option value="chugoku">中国地方</option>
					<option value="shikoku">四国地方</option>
					<option value="kyushu">九州地方</option>
				</select>
				<div id="prefectureList">
					<div class="hokkaido" style="display: none">
						<button>北海道</button>
					</div>
					<div class="tohoku" style="display: none">
						<button>青森県</button>
						<button>秋田県</button>
						<button>岩手県</button>
						<button>山形県</button>
						<button>宮城県</button>
						<button>福島県</button>
					</div>
					<div class="chubu" style="display: none">
						<button>新潟県</button>
						<button>富山県</button>
						<button>石川県</button>
						<button>福井県</button>
						<button>長野県</button>
						<button>岐阜県</button>
						<button>山梨県</button>
						<button>愛知県</button>
						<button>静岡県</button>
					</div>
					<div class="kanto">
						<button>群馬県</button>
						<button>栃木県</button>
						<button>茨城県</button>
						<button>埼玉県</button>
						<button>千葉県</button>
						<button>東京都</button>
						<button>神奈川県</button>
					</div>
					<div class="kinki" style="display: none">
						<button>三重県</button>
						<button>京都府</button>
						<button>滋賀県</button>
						<button>大阪府</button>
						<button>兵庫県</button>
						<button>兵庫県</button>
						<button>和歌山県</button>
					</div>
					<div class="chugoku" style="display: none">
						<button>鳥取県</button>
						<button>島根県</button>
						<button>岡山県</button>
						<button>広島県</button>
						<button>山口県</button>
					</div>
					<div class="shikoku" style="display: none">
						<button>徳島県</button>
						<button>香川県</button>
						<button>愛媛県</button>
						<button>高知県</button>
					</div>
					<div class="kyushu" style="display: none">
						<button>福島県</button>
						<button>佐賀県</button>
						<button>長崎県</button>
						<button>熊本県</button>
						<button>大分県</button>
						<button>宮崎県</button>
						<button>鹿児島県</button>
						<button>沖縄県</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
