<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg jaw-point-bg">
	<p>YONSEI SEVERANCE</p>
	<h2>일반진료</h2>
</div>
<?php
	include_once(G5_PATH.'/basic_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('턱관절');
	});
</script>
<section class="content ">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>턱관절</h3>
		</div>
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/jaw_point.jpg" alt="">
			</li>
			<li>
				<h5 class="point-color">턱관절 장애란?</h5>
				<p>턱관절이란 턱뼈와 머리뼈 사이에 위치하여 두 뼈를 연결하는 관절입니다.
				모든 턱 운동의 중심축으로 작용되고 근육과 인대에 의해 지지되는데
				턱관절 사이에 있는 디스크는 뼈와 뼈 사이의 쿠션 역할을 해 줍니다.
				근육과 인대, 디스크, 턱뼈가 함께 어우러져 개구, 저작, 침 삼키기,
				말하기 등의 활동을 담당하는데 여러 요인에 의해 기능에
				이상이 생긴 것을 턱관절 장애라고 합니다.</p>
			</li>
		</ul>
	</div>
</section>
<section class="content">
	<div class="inner">
		<h4 class="middle-title">턱관절 3대 증상</h4>
		<ul class="col-3 circle-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/jaw_point_01.jpg" alt="">
				<h5>통증</h5>
				<p>통증의 호발 부위는 턱관절 부위가
				가장 많으며, 다음으로
				교근, 측두근 부위, 흉쇄유돌근의
				순서로 나타납니다.
				턱관절 장애로 인해 편두통이나
				목, 어깨결림 등의 증상이 나타나기도 합니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/jaw_point_02.jpg" alt="">
				<h5>관절 잡음</h5>
				<p>턱에서 ‘딱‘ 또는 ‘따각‘ 하는 소리로
				표현이 되는 단순 관절음,
				‘지익지익＇이나 ‘사각사각’ 등의 소리로
				표현되는 염발음으로 분류됩니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/jaw_point_03.jpg" alt="">
				<h5>개구 제한</h5>
				<p>입을 최대한으로 벌렸을 때
				남자는 45~55mm,
				여자는 40~45mm 정도가
				정상 개구량 입니다.
				편안하게 입을 벌렸을 때
				개구량이 40mm 이하인 경우
				개구 제한으로 판단됩니다.</p>
			</li>
		</ul>
	</div>
</section>
<section class="content">
	<div class="inner">
		<h4 class="middle-title">턱관절 비수술 치료방법</h4>
		<ul class="col-4 line-list">
			<li class="num" data-num="01">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/jaw_point_05.jpg" alt="">
				<h5>약물</h5>
				<p>염증성 턱관절 장애가 의심되는<br>
				경우에는 약물 치료를 진행합니다.</p>
			</li>
		<!-- 	<li class="num" data-num="02">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/jaw_point_06.jpg" alt="" style="border: 0;">
				<h5>레이저 / 적외선</h5>
				<p>중주파 물리치료를 통해 근경련, <br>
				관절 경직, 통증 등을 감소시킵니다.</p>
			</li> -->
			<li class="num" data-num="02">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/jaw_point_04.jpg" alt="">
				<h5>냉각 스프레이</h5>
				<p>순간적으로 표면 온도를 떨어트려 <br>
				일시적으로 통증을 해소합니다.</p>
			</li>
			
			
			<li class="num" data-num="03">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/jaw_point_07.jpg" alt="">
				<h5>스플린트</h5>
				<p>악관절의 공간을 확보하여<br>
				턱관절의 위치를<br>
				정상 상태로 회복합니다.</p>
			</li>
			<li class="num" data-num="04">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/jaw_point_08.jpg" alt="">
				<h5>보존 / 보철치료</h5>
				<p>스플린트 치료만으로 정상 교정이<br>
				불가능할 경우 보존,<br>
				보철치료를 병행합니다.</p>
			</li>
		</ul>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>