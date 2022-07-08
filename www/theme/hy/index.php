<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');
include_once(G5_THEME_PATH.'/menu.php');
?>

<!-- 팝업 드래그 기능 -->

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".hd_pops").draggable();
    });
</script>


	<!-- 콘텐츠를 입력하세요 -->
	<section class="content">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_01.jpg" alt="slide01">
					<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_01.jpg" alt="m_slide01">
				</div>
				<div class="swiper-slide">
					<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_02.jpg" alt="slide02">
					<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_02.jpg" alt="m_slide02">
				</div>
				<div class="swiper-slide">
					<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_03.jpg" alt="slide02">
					<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_03.jpg" alt="m_slide02">
				</div>
				<div class="swiper-slide">
					<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_04.jpg" alt="slide03">
					<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_04.jpg" alt="m_slide03">
				</div>
				<div class="swiper-slide">
					<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/slide_05.jpg" alt="slide02">
					<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/m_slide_05.jpg" alt="m_slide02">
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</section>

	<section class="content">
		<div class="inner">
			<div class="title">
				<p>YONSEI SEVERANCE</p>
				<h3>세브란스의 특화진료</h3>
			</div>
			<ul class="treatment">
				<li>
					<a href="<? echo G5_URL; ?>/special01.php">
						<h5><span>환자를 생각하는</span>
						<b>자연치아 살리기</b>
						</h5>
					</a>
				</li>
				<li>
					<a href="<? echo G5_URL; ?>/special02.php">
						<h5><span>전문성이 더해져</span>
						<b>오래쓰는 임플란트</b>
						</h5>
					</a>
				</li>
				<li>
					<a href="<? echo G5_URL; ?>/special03.php">
						<h5><span>디지털을 더한</span>
						<b>치아교정</b>
						</h5>
					</a>
				</li>
				<li>
					<a href="<? echo G5_URL; ?>/special04.php">
						<h5><span>무통마취시스템의</span>
						<b>진료통증 최소화</b>
						</h5>
					</a>
				</li>
			</ul>	
		</div>
	</section>
	<section class="content special">
		<div class="inner">
			<div class="title">
				<h3>연세세브란스치과의 특별함</h3>
			</div>
			<ul>
				<li data-number="01">
					<div class="img-box">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/special_01.jpg" alt="">
					</div>
					<h5>수준 높은 대학병원 시스템!</h5>
					<p>연세대&서울대 출신의 각 분야별<br>
					의료진이 모여 협진진료합니다.<br>
					각 분야별 전문의들의 풍부한 임상경험과<br>
					노하우를 바탕으로 대학병원급의<br>
					수준 높은 진료를 제공합니다.</p>
					<!-- <a href="#" class="detail-btn">자세히 보기</a> -->
					<!-- <a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')" class="detail-btn" target="_self">자세히 보기</a> -->
				</li>
				<li data-number="02">
					<div class="img-box">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/special_02.jpg" alt="">
					</div>
					<h5>디지털 치과 시스템</h5>
					<p>첨단장비를 사용하여 보다<br>
					정확한 진단과 안전한 치료를 제공합니다.<br>
					정밀하고 완성도 높은 치료결과를 위해<br>
					디지털 시스템을 갖추고 있습니다. </p><br>
					<!-- <a href="#" class="detail-btn">자세히 보기</a> -->
					<!-- <a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')" class="detail-btn" target="_self">자세히 보기</a> -->
				</li>
				<li data-number="03">
					<div class="img-box">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/special_03.jpg" alt="">
					</div>
					<h5>진료 보증 시스템</h5>
					<p>치료받은 환자분들의 상태가 유지관리<br>
					될 수 있도록 진료보증서를 드립니다.<br>
					철저한 사후관리 시스템으로<br>
					평생주치의가 되겠습니다.</p><br>
					<!-- <a href="#" class="detail-btn">자세히 보기</a> -->
					<!-- <a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')" class="detail-btn" target="_self">자세히 보기</a> -->
				</li>
			</ul>
		</div>
	</section>
	
	<section class="content time-table">
		<div class="inner">
			<div class="title">
				<p>YONSEI SEVERANCE</p>
				<h3>진료안내</h3>
			</div>
			<ul>
				<li><img src="<? echo G5_THEME_IMG_URL; ?>/main/time.png" alt=""></li>
				<li>
					<h6>평일</h6>
					<h6>AM 09:30 ~ PM 06:30</h6>
					<h6 class="night-time">월 · 수 (야간)</h6>
					<h6><span class="point-color">AM 09:30 ~ PM 08:30</span></h6>
					<h6>점심시간</h6>
					<h6>PM 01:00 ~ PM 02:00</h6>
					<h6>토요일</h6>
					<h6>AM 09:30 ~ PM 02:00</h6>
					<div class="mt20">
						<p>※ 토요일은 점심시간 없이 진료합니다.</p>
						<p>※ 일요일 및 공휴일은 휴무입니다.</p>
					</div>
				</li>
			</ul>
			
		</div>
	</section>
	<section class="content map">
		<div class="inner">
			<div class="title">
				<p>YONSEI SEVERANCE</p>
				<h3>오시는길</h3>
			</div>
			<ul>
				<li>
					<img src="<? echo G5_THEME_IMG_URL; ?>/main/map_01.png" alt="">
					<h6>서울시 금천구 시흥대로 427<br>
					2층 201호</h6>
				</li>
				<li>
					<img src="<? echo G5_THEME_IMG_URL; ?>/main/map_02.png" alt="">
					<h6>[천보월드빌딩 민영 주차장]<br>
					서울 금천구 시흥대로 435</h6>
				</li>
				<li>
					<img src="<? echo G5_THEME_IMG_URL; ?>/main/map_03.png" alt="">
					<h6>02 - 6293 - 2875</h6>
				</li>
			</ul>
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
					"mapWidth" : "1200",
					"mapHeight" : "360"
				}).render();
			</script>
		</div>
	</section>

	
</main>


<script>
	const swiper = new Swiper('.swiper-container', {
		// Default parameters
		slidesPerView: 1,
		spaceBetween: 10,
		autoplay : {
			delay : 2500,
		},
		speed: 1000,
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
		}
	});

</script>

<script>
$('.special a').mouseover(function(){
	$(this).siblings('p').addClass('active')
});
$('.special a').mouseleave(function(){
	$(this).siblings('p').removeClass('active')
});
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>	