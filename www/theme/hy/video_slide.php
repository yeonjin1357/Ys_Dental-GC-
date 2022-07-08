
<section class="">
	<script src="/assets/plugin/slick.min.js"></script>
	<link rel="stylesheet" href="/assets/plugin/slick.css" />
	<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<article class="main-visual" id="video_slide_area">
		<div class="main-visual-inner">
			<div class="video-area">
				<div class="video-item">
					<video id="videoPlayer" width="100%" height="100%" autoplay="autoplay" muted="muted" playsinline="" src="<? echo G5_THEME_URL; ?>/video/video_01.mp4">
						<source src="<? echo G5_THEME_URL; ?>/video/video_01.mp4" type="video/mp4" />
					</video>
				</div>
				<!-- <div id="visualImgSlide" class="img-area">
	  <div class="img-item" style="background-image: url('/assets/img/common/mobile_visual_01.jpg');">
	  </div>
	  <div class="img-item" style="background-image: url('/assets/img/common/mobile_visual_06.jpg');">
	  </div>
	  <div class="img-item" style="background-image: url('/assets/img/common/mobile_visual_02.jpg');">
	  </div>
	  <div class="img-item" style="background-image: url('/assets/img/common/mobile_visual_04.jpg');">
	  </div>
	  <div class="img-item" style="background-image: url('/assets/img/common/mobile_visual_05.jpg');">
	  </div>
	</div> -->
			</div>
			<div id="visualTextOuter" class="text-area">
				<div id="visualText0" class="visual-text" style="display: block">
					<p class="text2"><span class="text3">치아가 아플 때 첫번째로 떠오르는</span>
					단 하나의 생각, <b><span class=" mblock">연세퍼스트원치과</span></b></p>
					<hr class="txt-hr">
					<div class="link">
						<a href="<?php echo G5_URL ?>/du_imp.php" class="end"><span class="text">치과경쟁력 VIEW</span> <span class="plus"></span></a>
					</div>
				</div>
				<div id="visualText1" class="visual-text" style="display: none">
					<p class="text2"><span class="text3">디지털로 완성하는 혁신</span>
					오직 한 사람을 위한 <b><span class=" mblock">임플란트</span></b></p>
					<hr class="txt-hr">
					<div class="link">
						<a href="<?php echo G5_URL ?>/du_ortho.php" class="end"><span class="text">FIRST ONE 임플란트 VIEW</span> <span class="plus"></span></a>
					</div>
				</div>
				<div id="visualText2" class="visual-text" style="display: none">
					<p class="text2"><span class="text3">디지털 워크플로우, 새로운 패러다임</span>
					치과에 <b><span class=" mblock">디지털</span></b>을 도입하다</p>
					<hr class="txt-hr">
					<div class="link">
						<a href="<?php echo G5_URL ?>/info_dentist.php" class="end"><span class="text">디지털 시스템 VIEW</span> <span class="plus"></span></a>
					</div>
				</div>
				<div id="visualText3" class="visual-text" style="display: none">
					<p class="text2"><span class="text3">풍부한 경험에서 오는 기술력</span>
					원칙을 지키면서 빠른 <b><span class=" mblock">원데이 진료</span></b></p>
					<hr class="txt-hr">
					<div class="link">
						<a href="<?php echo G5_URL ?>/zero.php" class="end"><span class="text">원데이 시스템 VIEW</span> <span class="plus"></span></a>
					</div>
				</div>
				<div id="visualText4" class="visual-text" style="display: none">
					<p class="text2"><span class="text3">순간의 인연이 아닌, 계속 되는 인연</span>
					당신은 연세퍼스트원 <b><span class=" mblock">가족</span></b>입니다.</p>
					<hr class="txt-hr">
					<div class="link">
						<a href="<?php echo G5_URL ?>/du_basic.php" class="end"><span class="text">평생주치의 시스템 VIEW</span> <span class="plus"></span></a>
					</div>
				</div>
				<div id="visualText5" class="visual-text" style="display: none">
					<p class="text2"><span class="text3">각 분과별 전문의 협진</span>
					전체를 보는 <b><span class=" mblock">토탈 케어 시스템</span></b></p>
					<hr class="txt-hr">
					<div class="link">
						<a href="<?php echo G5_URL ?>/du_basic.php" class="end"><span class="text">토탈 케어 시스템 VIEW</span> <span class="plus"></span></a>
					</div>
				</div>
				<div id="visualText6" class="visual-text" style="display: none">
					<p class="text2"><span class="text3">마취했어요? 치료 끝났어요?</span>
					쉿, 마취한지도 모르게 <b><span class=" mblock">덜 아프게</span></b></p>
					<hr class="txt-hr">
					<div class="link">
						<a href="<?php echo G5_URL ?>/du_basic.php" class="end"><span class="text">통증 완화 시스템 VIEW</span> <span class="plus"></span></a>
					</div>
				</div>
				<div id="visualText7" class="visual-text" style="display: none">
					<p class="text2"><span class="text3">깔끔한 진료, 감염예방을 위한 노력</span>
					위생은 모든 치료의 <b><span class=" mblock">기본원칙</span></b></p>
					<hr class="txt-hr">
					<div class="link">
						<a href="<?php echo G5_URL ?>/du_basic.php" class="end"><span class="text">멸균 시스템 VIEW</span> <span class="plus"></span></a>
					</div>
				</div>
			</div>
			<div class="arrow-area">
				<span class="arrow arrow-l" onclick="mainVisualArrow('prev');">
					<img src="<? echo G5_THEME_URL; ?>/img/visual_arrow_l.png" alt="이전 슬라이드" />
				</span>
				<span class="arrow arrow-r" onclick="mainVisualArrow('next');">
					<img src="<? echo G5_THEME_URL; ?>/img/visual_arrow_r.png" alt="다음 슬라이드" />
				</span>
			</div>
			<div class="video-page-area">
				<span id="videoCurrentPage" class="current">01</span>
				<span class="slash2">/</span>
				<span class="total">08</span>
			</div>
			<!-- <div class="scroll-area">
				<span class="text">SCROLL</span>
			</div> -->
			
			<div class="video-timebar">
				<div id="videoCurrentTime" class="current" style="width: 81.5266%"></div>
			</div>
		</div>
	</article>

	<script>
		var mainVideo = {
			// 메인 비디오 영역에 재생할 video uri
			playPcList: ['<? echo G5_THEME_URL; ?>/video/video_01.mp4', '<? echo G5_THEME_URL; ?>/video/video_02.mp4', '<? echo G5_THEME_URL; ?>/video/video_03.mp4', '<? echo G5_THEME_URL; ?>/video/video_04.mp4', '<? echo G5_THEME_URL; ?>/video/video_05.mp4', '<? echo G5_THEME_URL; ?>/video/video_06.mp4', '<? echo G5_THEME_URL; ?>/video/video_07.mp4', '<? echo G5_THEME_URL; ?>/video/video_08.mp4'],
			playMobileList: ['<? echo G5_THEME_URL; ?>/video/video_01.mp4', '<? echo G5_THEME_URL; ?>/video/video_02.mp4', '<? echo G5_THEME_URL; ?>/video/video_03.mp4', '<? echo G5_THEME_URL; ?>/video/video_04.mp4', '<? echo G5_THEME_URL; ?>/video/video_05.mp4', '<? echo G5_THEME_URL; ?>/video/video_06.mp4', '<? echo G5_THEME_URL; ?>/video/video_07.mp4', '<? echo G5_THEME_URL; ?>/video/video_08.mp4' ],
			player: document.getElementById('videoPlayer'),
			timebar: document.getElementById('videoCurrentTime'),
			currentPageEl: document.getElementById('videoCurrentPage'),
			videoLength: 8,
			currentIdx: 0,
			currentTime: 0,
			duration: 0,
			playList: this.playPcList,

			// 동영상 길이 정보 가져오기
			getDuration: function () {
				this.duration = this.player.duration;
			},
			changePcVersion: function () {
				this.videoLength = 8;
				this.playList = this.playPcList;
				if (this.videoLength < 10) {
					$('.video-page-area .total').html('0' + this.videoLength);
				} else {
					$('.video-page-area .total').html(this.videoLength);
				}
				console.log(this.playList);
			},
			changeMobileVersion: function () {
				this.videoLength = 8;
				this.playList = this.playMobileList;
				if (this.videoLength < 10) {
					$('.video-page-area .total').html('0' + this.videoLength);
				} else {
					$('.video-page-area .total').html(this.videoLength);
				}
				console.log(this.playList);
			},

			// 이전 비디오 재생
			loadPrev: function () {
				var prevIdx = this.currentIdx == 0 ? this.videoLength - 1 : this.currentIdx - 1;
				this.player.src = this.playList[prevIdx];

				this.currentIdx = prevIdx;

				this.pageChange();
				this.textChange();
			},

			// 다음 비디오 재생
			loadNext: function () {
				var nextIdx = this.currentIdx == this.videoLength - 1 ? 0 : this.currentIdx + 1;
				this.player.src = this.playList[nextIdx];

				this.currentIdx = nextIdx;

				this.pageChange();
				this.textChange();
			},

			// 이미지 변경 (모바일)
			imgChange: function (idx) {
				this.pageChange(idx);
				this.textChange(idx);
			},

			// 비디오 페이지 변경
			pageChange: function (idx) {
				idx = typeof idx !== 'undefined' ? idx : this.currentIdx;
				this.currentPageEl.innerHTML = '0' + (idx + 1);
			},

			// 재생 바 동작
			timeUpdate: function () {
				this.currentTime = this.player.currentTime;

				if (this.duration == 0) this.getDuration();

				var timePercent = this.duration > 0 ? (this.currentTime / this.duration) * 100 : 0;
				this.timebar.style.width = timePercent + '%';
			},

			// 텍스트 변경
			textChange: function (idx) {
				idx = typeof idx !== 'undefined' ? idx : this.currentIdx;
				$('#visualTextOuter .visual-text').hide();
				$('#visualText' + idx).show();
			},

			// 텍스트 애니메이션 마우스오버
			textAnimationHover: function () {
				if (this.className == 'running') {
					return;
				} else {
					this.className = 'running';
				}
			},

			// 텍스트 애니메이션 종료
			textAnimationEnd: function () {
				this.className = 'end';
			},
		};

		// 비디오 메타데이터 로드 이벤트 - 동영상 길이 가져옴

		mainVideo.player.onloadedmetadata = function () {
			mainVideo.getDuration();
		};

		// 비디오 재생 종료 이벤트 - 다음 비디오 재생
		mainVideo.player.onended = function () {
			mainVideo.loadNext();
		};

		// 비디오 시간 변경 이벤트 - 재생시간 가져와서 반영
		mainVideo.player.ontimeupdate = function () {
			mainVideo.timeUpdate();
		};

		// 비주얼 텍스트 애니메이션
		var visualTextsArray = document.querySelectorAll('#visualTextOuter .link a'),
			i;
		for (i = 0; i < visualTextsArray.length; ++i) {
			visualTextsArray[i].addEventListener('mouseover', mainVideo.textAnimationHover);
			visualTextsArray[i].addEventListener('webkitAnimationIteration', mainVideo.textAnimationEnd);
			visualTextsArray[i].addEventListener('animationiteration', mainVideo.textAnimationEnd);
		}

		if ($(window).width() > 768) {
			//pc
			mainVideo.changePcVersion();
		} else {
			mainVideo.changeMobileVersion();
		}


		// mouseend , touch prev next event;
		/*var mstartX = 0,
			mendX = 0,
			mstartY = 0,
			mendY = 0;
		$('.main-visual').on('mousedown', function (event) {
			mstartX = event.pageX;
			mstartY = event.pageY;
		});
		$('.main-visual').on('mouseup', function (event) {
			mendX = event.pageX;
			mendY = event.pageY;
			if (mstartX - mendX > 50) {
				//왼
				mainVideo.loadPrev();
			} else if (mendX - mstartX > 50) {
				//오
				mainVideo.loadNext();
			}
		});
		var startX, startY, endX, endY;
		$('.main-visual').on('touchstart', function (event) {
			startX = event.originalEvent.changedTouches[0].screenX;
			startY = event.originalEvent.changedTouches[0].screenY;
		});
		$('.main-visual').on('touchend', function (event) {
			endX = event.originalEvent.changedTouches[0].screenX;
			endY = event.originalEvent.changedTouches[0].screenY;
			if (startX - endX > 50) {
				// 왼
				mainVideo.loadPrev();
			} else if (endX - startX > 50) {
				//오
				mainVideo.loadNext();
			}
		});*/


		// 모바일 비주얼 이미지 슬라이더
		// $('#visualImgSlide').slick({
		//   arrows: false,
		//   infinite: true,
		//   slidesToShow: 1,
		//   fade: true,
		//   autoplay: true,
		//   autoplaySpeed: 3000,
		//   pauseOnHover: true,
		//   mobileFirst: true,
		//   responsive: [
		//     {
		//       breakpoint: 768,
		//       settings: {
		//         autoplay: false,
		//       }
		//     }
		//   ]
		// });

		// 모바일 비주얼 변경 이벤트
		$('#visualImgSlide').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
			mainVideo.imgChange(nextSlide);
		});

		// 비주얼 화살표 버튼
		function mainVisualArrow(dir) {
			if (dir != 'prev' && dir != 'next') return;

			// PC
			//if ($(window).width() > 768) {
			if (dir == 'prev') mainVideo.loadPrev();
			else if (dir == 'next') mainVideo.loadNext();
			//}
			// Mobile
			// else {
			//   if (dir == 'prev') $('#visualImgSlide').slick('slickPrev');
			//   else if (dir == 'next') $('#visualImgSlide').slick('slickNext');
			// }
		}

	</script>
</section>


<style>
   
    .main-visual {position: relative;height: 1080px;height: 100vh;max-height: 1080px;}
    .main-visual-inner {position: absolute;top: 0;left: 0;width: 100%;height: 100%;}
    .main-visual {overflow: hidden;}
    .main-visual .video-area {position: absolute;top: 50%;left: 50%;-moz-transform: translateY(-50%);-webkit-transform: translateY(-50%);-o-transform: translateY(-50%);
	transform: translateY(-50%);width: 1920px;height: 1080px;margin-left: -960px;}
    .main-visual .video-item {height: 100%;}
    .main-visual .video-item video {width: 100%;height: 100%;filter: brightness(0.5);}
    .main-visual .img-area {display: none;height: 100%;}
    .main-visual .img-area .slick-list,
    .main-visual .img-area .slick-track {height: 100%;}
    .main-visual .img-item {height: 100%;}
    .main-visual .img-item:focus {outline: 0;}
    .main-visual .text-area {position: absolute;top: 50%;left: 0;right: 0;z-index: 2;-moz-transform: translateY(-50%);-webkit-transform: translateY(-50%);
	-o-transform: translateY(-50%);transform: translateY(-50%);padding: 0 3.5em;text-align: center;}
    .main-visual .text-area .text1 {line-height: 1.5;font-size: 1.3em;font-weight: 100;color: #fff;letter-spacing: 0.3em;}
    .main-visual .text-area .text2 {line-height: 1.5;font-size: 2.2em;font-weight: 200;color: #fff;letter-spacing: 0.15em;white-space: pre-line;}
	.main-visual .text-area .text3{font-size: 0.7em;}
	.main-visual .text-area .txt-hr{color: #fff;background-color: #fff;margin-top: 40px;width: 40%;border-top: none;}
    .main-visual .text-area .link {margin-top: 4.4rem;}
    .main-visual .text-area .link a {display: inline-block;position: relative;padding: 0.4em 1.2em 0.4em 0;font-size: 1em;font-weight: 500;color: #fff;letter-spacing: 0.4em;
	animation-name: visual-text;animation-duration: 1.5s;animation-iteration-count: infinite;animation-direction: alternate;}
    .main-visual .text-area .link a.running:before {animation-play-state: running;}
    .main-visual .text-area .link a.end:before {animation-play-state: paused;}
    .main-visual .text-area .link a:before {content: '';display: block;position: absolute;z-index: 1;top: -0.4em;left: -1em;min-width: 2.6em;height: 2.6em;background: #41A884;
	border-radius: 1.3em;animation-name: visual-text-effect;animation-duration: 1s;animation-iteration-count: infinite;animation-direction: alternate;
	animation-fill-mode: forwards;animation-play-state: paused;}
    .main-visual .text-area .link .text {position: relative;z-index: 2;}
    .main-visual .text-area .link .plus {position: absolute;top: 0.5em;right: 0;z-index: 2;width: 0.9em;height: 0.9em;}
    .main-visual .text-area .link .plus:before,
    .main-visual .text-area .link .plus:after {content: '';display: block;position: absolute;background: #fff;}
    .main-visual .text-area .link .plus:before {top: 0;left: 50%;width: 2px;height: 100%;margin-left: -1px;}
    .main-visual .text-area .link .plus:after {top: 50%;left: 0;width: 100%;height: 2px;margin-top: -1px;}
    .main-visual .arrow-area {overflow: hidden;position: absolute;top: 50%;left: 0;right: 0;margin-top: -1.425em;z-index: 10;}
    .main-visual .arrow-area .arrow {display: inline-block;width: 3.425em;cursor: pointer;}
    .main-visual .arrow-area .arrow.arrow-l {float: left;margin-left: 7em;}
    .main-visual .arrow-area .arrow.arrow-r {float: right;margin-right: 7em;}
    .main-visual .arrow-area .arrow img {display: block;}
    .main-visual .video-page-area {position: absolute;left: 50%;bottom: 4.5%;width: 150px;margin-left: -75px;text-align: center;font-family: 'Roboto', sans-serif;
	font-size: 1em;font-weight: 400;color: rgba(255, 255, 255, 0.5);}
    .main-visual .video-page-area .current {font-size: 1.5em;font-weight: 500;color: #fff;}
    .main-visual .video-page-area .slash2 {display: inline-block;margin: 0 0.6em;}
    .main-visual .scroll-area {position: absolute;left: -1em;bottom: 12.5%;transform: rotate(-90deg);animation-name: visual-scroll;animation-duration: 0.7s;
	animation-iteration-count: infinite;animation-direction: alternate;}
    .main-visual .scroll-area .text {display: inline-block;position: relative;padding-right: 5.8rem;font-size: 0.8em;font-weight: 700;color: #fff;}
    .main-visual .scroll-area .text:after {content: '';display: block;position: absolute;right: 0;top: 50%;width: 4.8rem;height: 2px;margin-top: -1px;
	background: rgba(163, 163, 163, 0.5);}
    .main-visual .social-area {position: absolute;bottom: 4.5%;right: 3em;}
    .main-visual .social-area .social-item {display: inline-block;vertical-align: bottom;}
    .main-visual .social-area .social-item + .social-item {margin-left: 0.2em;}
    .main-visual .social-area .social-item a {display: block;position: relative;width: 2.1em;height: 2.1em;border: 1px solid #fff;border-radius: 50%;transition: 0.3s;}
    .main-visual .social-area .social-item a:hover {background: rgba(255, 255, 255, 0.3);}
    .main-visual .social-area .social-item img {display: block;position: absolute;top: 50%;left: 0;right: 0;-moz-transform: translateY(-50%);-webkit-transform: translateY(-50%);
	-o-transform: translateY(-50%);transform: translateY(-50%);margin: 0 auto;}
    .main-visual .video-timebar {position: absolute;left: 0;bottom: 0;width: 100%;height: 0.4em;}
    .main-visual .video-timebar .current {position: absolute;top: 0;left: 0;width: 0;height: 100%;background: #121212;transition: width 0.25s linear;}
    @keyframes visual-text {
        30% {
            opacity: 1;
        }
        50% {
            opacity: 0.3;
        }
        80% {
            opacity: 1;
        }
    }
    @keyframes visual-text-effect {
        0% {
            right: calc(100% - 1.6em);
        }
        50% {
            left: -1em;
            right: -0.8em;
        }
        100% {
            left: calc(100% - 1.8em);
            right: -0.8em;
        }
    }
    @keyframes visual-scroll {
        from {
            bottom: 12.5%;
        }
        to {
            bottom: 14.5%;
        }
    }
    .symbol-plus {display: inline-block;position: relative;width: 1.35em;height: 1.35em;vertical-align: top;}
    .symbol-plus:before,
    .symbol-plus:after {content: '';display: block;position: absolute;background: #f3c45d;}
    .symbol-plus:before {top: 0;left: 50%;width: 3px;height: 100%;margin-left: -1.5px;}
    .symbol-plus:after {top: 50%;left: 0;width: 100%;height: 3px;margin-top: -1.5px;}
    .main-title-area {padding-bottom: 5em;text-align: center;}
    .main-title-area .icon-area {margin-bottom: 1.3em;}
    .main-title-area .subtitle {margin-bottom: 0.5em;line-height: 1.2;font-size: 1em;font-weight: 500;color: #999;letter-spacing: 0.2em;}
    .main-title-area .title {line-height: 1.4;font-size: 2.3em;font-weight: 100;color: #666;letter-spacing: 0.1em;}
  
    @media only screen and (min-width: 1921px) {
        .main-visual {height: 0;max-height: none;padding-bottom: 56.25%;}
        .main-visual .video-area {left: 0;width: 100%;height: 100%;margin-left: 0;}
    }
    
    @media only screen and (max-width: 992px) {
        .main-visual {height: 669px;padding-bottom: 0;}
        .main-visual .video-area {width: 1190px;margin-left: -595px;}
        .main-visual .text-area .text2 {font-size: 2em;}
        .main-title-area {font-size: 0.8em;}
		.main-visual .arrow-area .arrow{width: 1.425em;}
		.main-visual .arrow-area .arrow.arrow-l{margin-left: 1em;}
		.main-visual .arrow-area .arrow.arrow-r{margin-right: 1em;}

    }
    @media only screen and (max-width: 768px) {
        .main-visual .img-item {background-repeat: no-repeat;background-position: center;background-size: cover;}
        .main-visual .text-area {padding: 0 3em;font-size: 0.9em;}
        .main-visual .arrow-area {top: auto;bottom: 3.5%;margin-top: 0;text-align: center;font-size: 0.8em;}
        .main-visual .arrow-area .arrow.arrow-l {float: none;margin-right: 100px;}
        .main-visual .arrow-area .arrow.arrow-r {float: none;margin-left: 100px;}
        .main-visual .video-page-area {left: 1.5em;right: 1.5em;bottom: 3.5%;width: auto;margin-left: 0;}
        .main-visual .scroll-area {display: none;}
        .main-visual .social-area {display: none;right: 1.5em;bottom: 3.5%;}
        .main-visual .video-timebar {display: none;}
        .main-title-area .title {font-size: 2em;}
		.mblock{display: block;}
     
    }
    @media only screen and (max-width: 480px) {
        .main-visual {background-color: #4a4a4a;}
        .main-visual .text-area .text1 {font-size: 1em;}
        .main-visual .text-area .text2 {font-size: 1.5em;}
        .main-visual .text-area .link {margin-top: 2.4rem;}
     
    }
</style>

<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });

</script>  