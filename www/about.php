<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg about-bg">
	<p>YONSEI SEVERANCE</p>
	<h2>치과 소개</h2>
</div>
<?php
	include_once(G5_PATH.'/about_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('치과 소개');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>치과 소개</h3>
		</div>
		
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_01.jpg" alt=""></li>
			<li class="num" data-num="01">
				<h5>치과보철과 전문의의 <span class="point-color2">책임진료</span></h5>
				<p>치과보철과 전문의 정확한 진단과 검사를 통해
				환자분들에게 <span class="fw500 point-color2">꼭 필요한 진료만</span>을 권해드립니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_02.jpg" alt=""></li>
			<li class="num" data-num="02">
				<h5>세브란스 출신의 <span class="point-color2">대학병원급 진료</span></h5>
				<p>세브란스 출신 대표원장이 대학병원의 체계와 시스템으로 
				<span class="fw500 point-color2">각 분야의 특화된 섬세한 진료</span>를 도와드립니다.</p>
			</li>
		</ul>
		

		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_03.jpg" alt=""></li>
			<li class="num" data-num="03">
				<h5><span class="point-color2">자연치아</span>의 보존</h5>
				<p>자연치아의 가치는 비교불가입니다.
				그렇기에 더욱 지켜야하는
				<span class="fw500 point-color2">자연치아 보존진료를 지향</span>하고 있습니다.</p>
			</li>
		</ul>

		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_04.jpg" alt=""></li>
			<li class="num" data-num="04">
				<h5>편안한 <span class="point-color2">무통진료시스템</span></h5>
				<p>연세세브란스치과는 디지털 무통마취기와 세심한
				마취테크닉을 더해 마취 단계부터
				<span class="fw500 point-color2">통증 없는 치료가 가능</span>합니다.</p>
			</li>
		</ul>

		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_05.jpg" alt=""></li>
			<li class="num" data-num="05">
				<h5>퀄리티 높은 <span class="point-color2">정품재료 사용</span></h5>
				<p>좋은 결과를 만드려면 좋은 재료는 필수입니다.
				연세세브란스치과는 <span class="fw500 point-color2">재료와 타협하지 않으며,</span>
				인정 받은 브랜드의 <span class="fw500 point-color2">100% 정품 재료만 사용</span>합니다.</p>
			</li>
		</ul>

		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_06.jpg" alt=""></li>
			<li class="num" data-num="06">
				<h5><span class="point-color2">수 많은 임상경험</span> 보유</h5>
				<p>수 많은 임상경험 바탕의 실력으로 <span class="fw500 point-color2">더 꼼꼼하게 
				더 좋은 결과</span>를 보여드릴 수 있도록 노력합니다. 
				<span class="fw500 point-color2">언제나 환자를 위해 최선을 다할 것을 약속드립니다.</span></p>
			</li>
		</ul>
		

	</div>
</section>

<style>
.basic-box{border: 0;}
</style>
<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>