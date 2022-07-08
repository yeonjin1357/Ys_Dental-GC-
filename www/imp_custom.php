<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg implant-bg">
	<p>YONSEI SEVERANCE</p>
	<h2>임플란트</h2>
</div>
<?php
	include_once(G5_PATH.'/implant_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('맞춤 임플란트');
	});
</script>
<section class="content photo-table">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>맞춤 임플란트</h3>
			<p class="title-text">구강의 모양은 개인마다 크기, 생김새 등이 모두 다르기 때문에
			체계적인 검진을 통하여 개인별 구강에 꼭 맞도록 제작해야 합니다.</p>
		</div>
		<table>
			<colgroup>
				<col width="12%">
				<col width="44%">
				<col width="44%">
			</colgroup>
			<thead>
				<tr>
					<td></td>
					<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_01.jpg" alt=""></td>
					<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_02.jpg" alt=""></td>
				</tr>
				<tr>
					<td></td>
					<td>일반어버트먼트</td>
					<td class="point-color">맞춤어버트먼트</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>구분</td>
					<td>대량 생산된 기성제품</td>
					<td>환자 개개인의 잇몸과
					<b class="point-color">치아 형태에 맞게 맞춤 제작</b></td>
				</tr>
				<tr>
					<td>비교</td>
					<td>ㆍ <b>이물질</b>이 끼일 가능성이 <b>높음</b>

					ㆍ 보철물 획일적으로 제작
					<b>보철물의 파절 가능성이 높음</b></td>
					<td>ㆍ 잇몸 높이에 맞게 제작되어
					<b class="point-color">이물질이 끼일 가능성이 낮음</b>

					ㆍ 보철물의 두께, 모양 고려하여 제작
					<b class="point-color">보철물의 파절 가능성이 낮음</b></td>
				</tr>
				<tr>
					<td>비용</td>
					<td>기본 비용에 포함</td>
					<td><b class="point-color">별도 제작 비용 추가</b></td>
				</tr>
			</tbody>
		</table>
		<p class="point-color">※환자의 구강 상태에 적합한 어버트먼트(중간지대주) 시스템을 도입하여 
		편안한 임플란트 사용이 가능합니다.</p>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>검증된 정품재료 사용</h4>
			<p>품질과 효과가 검증된 정품재료만을 사용하여 최선의 결과를 제공합니다.</p>
		</div>
		<ul class="col-3">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_03.jpg" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_04.jpg" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_05.jpg" alt="">
			</li>
		</ul>
	</div>
</section>



<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>