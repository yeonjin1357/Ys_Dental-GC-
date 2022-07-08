<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg info-equipment-bg">
	<p>YONSEI SEVERANCE</p>
	<h2>치과소개</h2>
</div>
<?php
	include_once(G5_PATH.'/about_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('장비 소개');
	});
</script>

<section class="content">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>장비 소개</h3>
		</div>
		
		<ul class="col-5 line-list equipment">
			<li class="num" data-num="01">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_01.jpg" alt="">
				<h5>3D CT</h5>
				<p>바텍 Smart Plus</p>
			</li>
			<li class="num" data-num="02">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_02.jpg" alt="">
				<h5>정수 시스템</h5>
				<p>노바케어</p>
			</li>
			<li class="num" data-num="03">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_03.jpg" alt="">
				<h5>구강 스캐너</h5>
				<p>트리오스 3</p>
			</li>
			<li class="num" data-num="04">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_04.jpg" alt="">
				<h5>무통 마취기</h5>
				<p>오스템 슬로우젝</p>
			</li>
			<li class="num" data-num="05">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_05.jpg" alt="">
				<h5>임플란트 고정도 측정기</h5>
				<p>Ostell Beacon</p>
			</li>
			<li class="num" data-num="06">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_06.jpg" alt="">
				<h5>UV 살균기</h5>
				<p>HUD - 8000</p>
			</li>
			<li class="num" data-num="07">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_07.jpg" alt="">
				<h5>무영등</h5>
				<p>M400, S300</p>
			</li>
			<li class="num" data-num="08">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_08.jpg" alt="">
				<h5>구내 카메라</h5>
				<p>EZ Cam</p>
			</li>
			<li class="num" data-num="09">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_09.jpg" alt="">
				<h5>포터블 엑스레이</h5>
				<p>EzRay Air</p>
			</li>
			<li class="num" data-num="10">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_10.jpg" alt="">
				<h5>고압증기 멸균기</h5>
				<p>MK-50NS</p>
			</li>
			<li class="num" data-num="11">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_11.jpg" alt="">
				<h5>무선 광중합기</h5>
				<p>DCL-30</p>
			</li>
			<li class="num" data-num="12">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_12.jpg" alt="">
				<h5>신경치료 엔진</h5>
				<p>X-Smart Plus</p>
			</li>
			<li class="num" data-num="13">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_13.jpg" alt="">
				<h5>UV 임플란트</h5>
				<p>Point UV implant</p>
			</li>
			<li class="num" data-num="14">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_14.jpg" alt="">
				<h5>턱관절 치료기</h5>
				<p>PHL-15</p>
			</li>
			<li class="num" data-num="15">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_15.jpg" alt="">
				<h5>임플란트 엔진</h5>
				<p>Surgic Pro+</p>
			</li>
		</ul>
	</div>
</section>

<style>
	.line-list li img{border: none;}
</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>