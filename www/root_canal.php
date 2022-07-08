<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg root-canal-bg">
	<p>YONSEI SEVERANCE</p>
	<h2>자연치아 살리기</h2>
</div>
<?php
	include_once(G5_PATH.'/gum_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('MTA 신경치료');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>MTA 신경치료</h3>
			<p class="title-text">충치나 외상으로 치아 신경조직이 손상되더라도 <br>
			자연치를 보존하기 위해 최선을 다하고 있습니다.</p>
		</div>
		<ul class="col-5 line-list mt40">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_01.jpg" alt="">
				<h5 class="point-color">STEP 1.</h5>
				<p>구강검진</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_02.jpg" alt="">
				<h5 class="point-color">STEP 2.</h5>
				<p>충치ㆍ염증 제거</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_03.jpg" alt="">
				<h5 class="point-color">STEP 3.</h5>
				<p>염증조직 제거 및 내부 소독</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_04.jpg" alt="">
				<h5 class="point-color">STEP 4.</h5>
				<p>치아 뿌리 내부 채우기</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_05.jpg" alt="">
				<h5 class="point-color">STEP 5.</h5>
				<p>보철 치료</p>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner" style="max-width: 800px;">
		<div class="middle-title">
			<h4>MTA 신경치료 장점</h4>
		</div>
		<ul class="col-3 circle-wrap m-col-3">
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_icon_01.png" alt="">
					<p>치아의 수명이
					길어집니다.</p>
				</div>
			</li>
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_icon_02.png" alt="">
					<p>치료 비용이
					경제적입니다.</p>
				</div>
			</li>
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_icon_03.png" alt="">
					<p>치료 중 통증이
					거의 없습니다.</p>
				</div>
			</li>
		</ul>
	</div>
</section>


<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>