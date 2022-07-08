<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg info-dentist-bg">
	<p>YONSEI SEVERANCE</p>
	<h2>치과소개</h2>
</div>
<?php
	include_once(G5_PATH.'/about_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('의료진 소개');
	});
</script>
<section class="content tab-wrap">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>의료진 소개</h3>
			<p class="title-text">건강한 미소를 되찾을 수 있도록 편안한 진료로 보답하겠습니다.</p>
		</div>
		
		<input id="tab-menu1" type="radio" name="tabs" checked>
		<label for="tab-menu1">윤영석 원장</label>
		
		<input id="tab-menu3" type="radio" name="tabs">
		<label for="tab-menu3">김재롱 원장</label>

		<input id="tab-menu2" type="radio" name="tabs">
		<label for="tab-menu2">최병재 원장</label>

		<div id="tab-content1" class="tab-content">
			<ul>
				<li>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/doctor_01.jpg" alt="">
					<div class="mt40 pc-area">
						<img src="<? echo G5_THEME_IMG_URL; ?>/sub/thesis_01.jpg" alt="">
					</div>
					<!-- <ul class="thesis-area">
						<li class="box-shadow">
							<img src="<? echo G5_THEME_IMG_URL; ?>/sub/thesis_01.jpg" alt="">
						</li>
						<li class="box-shadow">
							<img src="<? echo G5_THEME_IMG_URL; ?>/sub/thesis_02.jpg" alt="">
						</li>
						<li class="box-shadow">
							<img src="<? echo G5_THEME_IMG_URL; ?>/sub/thesis_03.jpg" alt="">
						</li>
					</ul> -->
				</li>
				<li>
					<div class="tab-name">
						<h4>윤영석 <span class="point-color">대표원장</span></h4>
						<p>보건복지부 인증 치과보철과 전문의</p>
					</div>
					<ul class="disc-list">
						<li>연세대학교 치과대학 졸업</li>
						<li>연세대학교 치과대학원 석사 졸업</li>
						<li>연세대학교 세브란스(본원) 치과대학병원 인턴 및 <br>치과 보철과 레지던트 수료</li>
						<li>연세대학교 세브란스(본원) 치과대학병원 임플란트 클리닉 수료 </li>
						<li>INTERNATIONAL COLLEGE OF PROSTHODONTISTS MEMBER</li>
						<li>대한 치과 보철학회 종신 회원</li>
						<li>대한 치과 보철학회 인정의</li>
						<li>대한 심미치과학회 정회원</li>
						<li>대한 구강악안면 임플란트학회 정회원</li>
						<li>오스템 임플란트 연구 자문 의사</li>
						<li>포인트닉스 임플란트 자문 의사</li><br>

						<li>前) 연세고운미소치과 원장</li>
						<li>前) 연세스타치과 원장</li>
						<li>前) 연세바로치과 원장</li>

					</ul>
					<div class="tab-name mt20">
						<h5 class="point-color2 fw500"><span class="x0_8">학회 활동 및 논문 게재</span></h5>
					</div>
					<!-- <div class="tab-title">
						<p>저술</p>
					</div> -->
					<ul class="disc-list">
						<li><b class="point-color2 fw500">대한치과보철학회지 제 54권 제3호 2016</b><br>
						Clinical application of implant assisted removable partial denture to<br>
						patient who underwent mandibular resection with oral cancer: A case report </li>
						<li class="mt20"><b class="point-color2 fw500">연세대학교 대학원 학위논문 2016</b><br>
						임플란트 경부 표면의 미사나사홈이 <br>주위 변연골 흡수에 미치는 영향에 대한 6년간의 후향적 연구 </li>
						<li class="mt20"><b class="point-color2 fw500">연세대학교 치과대학병원 보철학교시 우수 전공의 발표상</b><br>
						Full mouth rehabilitation with severely worn dentition </li>
					</ul>

				</li>
			</ul>

			<div class="mt80 m-area tac">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/thesis_01.jpg" alt="">
			</div>
		</div>

		<div id="tab-content2" class="tab-content">
			<ul>
				<li>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/doctor_02.jpg" alt="">
				</li>
				<li>
					<div class="tab-name">
						<h4>최병재 <span class="point-color">원장</span></h4>
						<p>보건복지부 인증 통합치의학과 전문의</p>
					</div>
					<ul class="disc-list">
						<li>연세대학교 치과대학 졸업</li>
						<li>대한치주과학회 정회원</li>
						<li>대한구강악안면외과학회 정회원</li>
						<li>대한구강악안면 임플란트학회 정회원</li>
						<li>OSSTEM IMPLANT MASTER COURSE 수료</li>
						<li>BASIC DENTAL PRACTICE GROUP 학회 정회원</li>
						<li>METRODEN DREAM MIRROR WORK 신경치료연수회</li>
						<li>GC KOREA 심미 수복 학회 수료</li>

					</ul>
				</li>
			</ul>
		</div>

		<div id="tab-content3" class="tab-content">
			<ul>
				<li>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/doctor_03.jpg" alt="">
				</li>
				<li>
					<div class="tab-name">
						<h4>김재롱 <span class="point-color">원장</span></h4>
						<p>보건복지부 인증 치과교정과 전문의</p>
						<p>보건복지부 인증 통합치의학과 전문의</p>
					</div>
					<ul class="disc-list">
						<li>서울대학교 치의학대학원 최우등 졸업</li>
						<li>서울대학교 치과병원 인턴</li>
						<li>서울아산병원 치과교정과 레지던트</li>
						<li>대한치과교정학회 인정의 </li>
						<li>대한치과교정학회 정회원</li>
						<li>세계교정의사연맹(WFO) 회원</li>
						<li>INVISALIGN COURSE 수료</li>
					</ul>
				</li>
			</ul>
		</div>

		
	</div>
</section>


<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>