<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg info-map-bg">
	<p>YONSEI SEVERANCE</p>
	<h2>치과소개</h2>
</div>
<?php
	include_once(G5_PATH.'/about_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('오시는 길');
	});
</script>
<section class="content info-map">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>오시는 길</h3>
		</div>
		<!-- * 카카오맵 - 지도퍼가기 -->
		<!-- 1. 지도 노드 -->
		<div id="daumRoughmapContainer1653631486620" class="root_daum_roughmap root_daum_roughmap_landing"></div>

		<!--
			2. 설치 스크립트
			* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
		-->
		<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

		<!-- 3. 실행 스크립트 -->
		<script charset="UTF-8">
			new daum.roughmap.Lander({
				"timestamp" : "1653631486620",
				"key" : "2aeg2",
				"mapWidth" : "1400",
				"mapHeight" : "360"
			}).render();
		</script>
		
		<ul>
			<li>
				<h6 class="point-color">치과 주소</h6>
				<p>서울시 금천구 시흥대로 427
				2층 201호</p>
			</li>
			<li>
				<h6 class="point-color">주차장 주소</h6>
				<p>[천보월드빌딩 민영 주차장]
					서울 금천구 시흥대로 435</p>
			</li>
		</ul>
	</div>
</section>

<style>
.map-wrap{display:flex; width: 100%; flex-wrap:wrap; justify-content:space-between}
.map-wrap > div{flex:1; max-width: 560px;}

@media screen and (max-width:1200px) {
.map-wrap > div{flex:none; width: 100%; margin: 0 auto;}
}
</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>