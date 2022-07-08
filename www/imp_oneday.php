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
		$('.sub-menu02').prev().html('발치즉시 임플란트');
	});
</script>
<section class="content table-wrap">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>발치즉시 임플란트</h3>
			<p class="title-text">치아를 발치와 동시의 임플란트를 심는 방법으로 
			골소실을 줄이고 잇몸 위축을 예방할 수 있습니다. <br />
			통증이 적어 일상 복귀도 가능하고 불편함은 물론 
			치료 기간도 단축시킬 수 있습니다. <br />
			하지만 모두가 가능한 것은 아니며, 치아 상태에 따라 
			충족하는 조건을 가진 환자분들에 한해 시행되는 방법입니다.</p>	
		</div>
		<div class="table-scroll">
			<table>
				<colgroup>
					<col width="15%">
					<col width="17%">
					<col width="17%">
					<col width="17%">
					<col width="17%">
					<col width="17%">
				</colgroup>
				<thead>
					<tr>
						<td></td>
						<td>1단계</td>
						<td>2단계</td>
						<td>3단계</td>
						<td>4단계</td>
						<td>5단계</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>일반
						임플란트</th>
						<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_oneday_arrow.png" alt="">
						발치</td>
						<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_oneday_arrow.png" alt="">
						잇몸 회복</td>
						<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_oneday_arrow.png" alt="">
						임플란트 식립</td>
						<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_oneday_arrow.png" alt="">
						임시 보철물</td>
						<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_oneday_icon.png" alt="">
						최종 보철물</td>
					</tr>
					<tr>
						<th class="table-point">즉시
						임플란트</th>
						<td class="table-point" colspan="2"><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_oneday_arrow_point.png" alt="">
						발치, 잇몸 회복,
						임플란트 식립, 임시 보철물</td>
						<td class="table-point"><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_oneday_icon.png" alt="">
						최종 보철물</td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
<section class="content">
	<div class="inner">
		<h4 class="middle-title">발치즉시 임플란트 가능한 조건</h4>
		<ul class="col-4">
			<li class="circle-box">
				<p>수술할 부위 치아 주변의
				치주골 손상이 적은 경우</p>
			</li>
			<li class="circle-box">
				<p>발치하는 치아 뿌리
				끝 주변의 잇몸뼈가
				튼튼한 경우</p>
			</li>
			<li class="circle-box">
				<p>식립할 부위에
				뼈의 양이
				충분한 경우</p>
			</li>
			<li class="circle-box">
				<p>발치 및 식립 부위에
				염증이 적거나
				거의 없는 경우</p>
			</li>
		</ul>
	</div>
</section>
<section class="content">
	<div class="inner">
		<h4 class="middle-title">발치즉시 임플란트 장점</h4>
		<ul class="col-5 line-box">
			<li>
				<h5 class="point-color">치료기간 단축</h5>
				<p>발치하는 즉시 식립하여 수술 횟수와 <br />치료 기간을 단축시킵니다.</p>
			</li>
			<li>
				<h5 class="point-color">심미성 우수</h5>
				<p>마치 자연치아와 같은 보철물을 제작하여 <br />
				장착하기 때문에 심미성이 우수합니다.</p>
			</li>
			<li>
				<h5 class="point-color">통증 감소</h5>
				<p>발치 후 바로 임플란트를 식립하기 때문에 <br />
				잇몸을 절개하지 않아 부기, 통증을 감소시킵니다.</p>
			</li>
			<li>
				<h5 class="point-color">골 결합 유도</h5>
				<p>잇몸의 자연치유력을 살려 뼈와 <br />인공치아 뿌리의 결합을 유도합니다.</p>
			</li>
			<li>
				<h5 class="point-color">잇몸 뼈 보존</h5>
				<p>발치 후 바로 임플란트를 식립하기 때문에 <br />
				잇몸뼈를 그대로 보존할 수 있어 자연스럽습니다.</p>
			</li>
		</ul>
	</div>
</section>
<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>