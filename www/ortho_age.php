<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg ortho-bg">
	<p>YONSEI SEVERANCE</p>
	<h2>치아교정</h2>
</div>
<?php
	include_once(G5_PATH.'/ortho_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('연령별 치아교정');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>연령별 치아교정</h3>
		</div>
		<ul class="ortho-age">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_01.jpg" alt=""></li>
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_02.jpg" alt=""></li>
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_03.jpg" alt=""></li>
		</ul>
		<div class="age-box">
			<ul class="line-box">
				<li>
					<h5 class="point-color">소아 교정</h5>
					<p>유치에서 영구치로 전환되는 시기와 <br /> 
					인체 골격 성장의 시기가 일치하지 않는 경우가 많습니다. <br />
					시기상 불일치로 인해 턱 성장의 부조화 및 <br /> 
					부정 교합 발생 우려가 있는 경우 발생을 <br /> 
					미리 예방할 수 있는 성장기 예방 교정이 필요합니다.</p>
				</li>
			</ul>	
			<ul class="col-3 m-col-3 circle-wrap">
				<li class="circle-icon">
					<div>
						<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_icon_01.png" alt="">
						<p>치아교정 
						기간 단축</p>
					</div>
				</li>
				<li class="circle-icon">
					<div>
						<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_icon_02.png" alt="">
						<p>구강 악습관 
						중단</p>
					</div>
				</li>
				<li class="circle-icon">
					<div>
						<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_icon_03.png" alt="">
						<p>영구치 바른 위치
						맹출 유도</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="age-box">
			<ul class="line-box">
				<li>
					<h5 class="point-color">청소년 교정</h5>
					<p>아직 성장이 끝나지 않은 중, 고등학생들의 경우 <br />
					부정 교합이 있다면 바로 치료받는 것이 좋습니다. <br /> 
					돌출입이나 주걱턱 등의 부정 교합을 성인이 될 때까지 방치한다면 <br /> 
					큰 외과적 수술을 동반해야 하는 경우가 많습니다. <br />
					때문에 청소년 치아교정을 통해 <br /> 
					향후 수술의 필요성을 낮추는 것이 좋습니다.</p>
				</li>
			</ul>
			<ul class="col-3 m-col-3 circle-wrap">
				<li class="circle-icon">
					<div>
						<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_icon_04.png" alt="">
						<p>치아교정 
						기간 단축</p>
					</div>
				</li>
				<li class="circle-icon">
					<div>
						<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_icon_05.png" alt="">
						<p>심리적 
						콤플렉스 극복</p>
					</div>
				</li>
				<li class="circle-icon">
					<div>
						<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_icon_06.png" alt="">
						<p>돌출입
						주걱턱 예방</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="age-box">
			<ul class="line-box">
				<li>
					<h5 class="point-color">성인 교정</h5>
					<p>치아 교정은 나이와 상관없이 잇몸이 건강하다면 <br /> 
					60~70대 연령층에서도 가능합니다. <br />
					고르지 못한 치열로 인해 자신 있게 웃지 못하고 <br /> 
					사회생활과 대인 관계에 불편함을 느끼며 치아와 <br /> 
					잇몸 관리가 어렵다면 치아교정을 하시는 것이 좋습니다.</p>
				</li>
			</ul>
			<ul class="col-3 m-col-3 circle-wrap">
				<li class="circle-icon">
					<div>
						<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_icon_07.png" alt="">
						<p>충치 유발률
						감소</p>
					</div>
				</li>
				<li class="circle-icon">
					<div>
						<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_icon_08.png" alt="">
						<p>치아 잇몸
						관리 용이</p>
					</div>
				</li>
				<li class="circle-icon">
					<div>
						<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_age_icon_09.png" alt="">
						<p>사회생활
						대인관계 도움</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>