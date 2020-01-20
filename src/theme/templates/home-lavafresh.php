<?php
/**
 *Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LavaFresh
 */
get_header();
?>
	<!-- slider revolution -->
	<!-- Slider -->
	<div class="rs-slider">
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
					<!-- Slide 1 -->
					<li data-transition='fade' data-rotate='0' data-saveperformance='off'>
						<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slide1.jpg" alt="slide1" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
						<!-- 1-1-image -->
						<div class="tp-caption tp-scale" id="slide-1-1" data-x="['center','center','center','center']" data-hoffset="['-480','-300','-248','-192']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="['961','601','497','385']" data-height="['778','486','402','311']" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"o:0;","speed":1000,"to":"o:1","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"x:left;","ease":"Power2.easeInOut"}]' style="z-index: 1;"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/slide1-1.jpg" alt="">
						</div>
						<!-- 1-2-image -->
						<div class="tp-caption tp-scale" id="slide-1-2" data-x="['center','center','center','center']" data-hoffset="['480','300','248','192']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="['961','601','497','385']" data-height="['778','486','402','311']" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"o:0;","speed":1000,"to":"o:1","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"x:right;","ease":"Power2.easeInOut"}]' style="z-index: 1;"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/slide1-2.jpg" alt="">
						</div>
						<!-- 1-1-blank -->
						<div class="tp-caption tp-shape" id="slide-1-1-blank" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="['960','600','496','384']" data-height="['778','486','402','311']" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on" data-actions='[{"event":"mouseenter","action":"toggleclass","layer":"slide-1-1","delay":"0", "classname":"zoom"}, {"event":"mouseleave","action":"toggleclass","layer":"slide-1-1","delay":"0", "classname":"zoom"},{"event":"mouseenter","action":"toggleclass","layer":"tp-hovertext-1","delay":"0", "classname":"dark"}, {"event":"mouseleave","action":"toggleclass","layer":"tp-hovertext-1","delay":"0", "classname":"dark"}]' data-frames='[{"from":"opacity:1;","speed":0,"to":"opacity:1;","delay":0},{"from":"opacity:1;", "delay":"wait","speed":0,"to":"opacity:1;"}]' style="z-index: 22;background-color:rgba(0,0,0,0);">
						</div>
						<!-- 1-2-blank -->
						<div class="tp-caption tp-shape" id="slide-1-2-blank" data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="['960','600','496','384']" data-height="['778','486','402','311']" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on" data-actions='[{"event":"mouseenter","action":"toggleclass","layer":"slide-1-2","delay":"0", "classname":"zoom"}, {"event":"mouseleave","action":"toggleclass","layer":"slide-1-2","delay":"0", "classname":"zoom"},{"event":"mouseenter","action":"toggleclass","layer":"tp-hovertext-2","delay":"0", "classname":"color"}, {"event":"mouseleave","action":"toggleclass","layer":"tp-hovertext-2","delay":"0", "classname":"color"}]' data-frames='[{"from":"opacity:1;","speed":0,"to":"opacity:1;","delay":0},{"from":"opacity:1;", "delay":"wait","speed":0,"to":"opacity:1;"}]' style="z-index: 22;background-color:rgba(0,0,0,0);">
						</div>
						<!-- 1-1-text -->
						<div class="tp-caption tp-hovertext" id="tp-hovertext-1" data-width="['960','600','496','384']" data-x="['left','left','left','left']" data-hoffset="['0']" data-y="['center','center','center','center']" data-voffset="['-35','-25','-18','-15']" data-textAlign="['center','center','center','center']" data-paddingleft="[300,200,150,0]" data-frames='[{"from":"y:[300%];opacity:0;","speed":3000,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"y:[200%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' style="z-index: 6;">
							<div class="rs-text-1">Titulo 1</div>
							<div class="rs-text-2">Descripción</div>
						</div>
						<!-- 1-1-button -->
						<a href="#modalOrder" class="tp-caption rs-btn btn-green popup-link" data-x="['center','center','center','center']" data-hoffset="['-332','-200','-170','-190']" data-y="['center','center','center','center']" data-voffset="['115','70','55','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-actions='[{"event":"mouseenter","action":"toggleclass","layer":"slide-1-1","delay":"0", "classname":"zoom"}, {"event":"mouseleave","action":"toggleclass","layer":"slide-1-1","delay":"0", "classname":"zoom"},{"event":"mouseenter","action":"toggleclass","layer":"tp-hovertext-1","delay":"0", "classname":"dark"}, {"event":"mouseleave","action":"toggleclass","layer":"tp-hovertext-1","delay":"0", "classname":"dark"}]' data-frames='[{"from":"x:[200%];z:0;rX:25deg;rY:50deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":2500, "to":"o:1;","delay":2800,"ease":"Power3.easeInOut"}, {"delay":"wait","speed":1000,"to":"auto:auto;","ease":"Power2.easeInOut"}]' style="z-index: 23;">Boton
	 					</a>
						<!-- 1-2-text -->
						<div class="tp-caption tp-hovertext" id="tp-hovertext-2" data-width="['960','600','496','384']" data-x="['right','right','right','right']" data-hoffset="['0']" data-y="['center','center','center','center']" data-voffset="['-35','-25','-18','-15']" data-textAlign="['center','center','center','center']" data-paddingright="[265,180,150,0]" data-frames='[{"from":"y:[300%];opacity:0;","speed":3000,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"y:[200%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' style="z-index: 6;">
							<div class="rs-text-1">Titulo 2</div>
							<div class="rs-text-2">Descripción</div>
						</div>
						<!-- 1-2-button -->
						<a href="#modalOrder" class="tp-caption rs-btn btn-blue popup-link" data-x="['center','center','center','center']" data-hoffset="['346','200','170','190']" data-y="['center','center','center','center']" data-voffset="['115','70','55','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-actions='[{"event":"mouseenter","action":"toggleclass","layer":"slide-1-2","delay":"0", "classname":"zoom"}, {"event":"mouseleave","action":"toggleclass","layer":"slide-1-2","delay":"0", "classname":"zoom"},{"event":"mouseenter","action":"toggleclass","layer":"tp-hovertext-2","delay":"0", "classname":"color"}, {"event":"mouseleave","action":"toggleclass","layer":"tp-hovertext-2","delay":"0", "classname":"color"}]' data-frames='[{"from":"x:[-200%];z:0;rX:25deg;rY:-50deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":2500, "to":"o:1;","delay":2800,"ease":"Power3.easeInOut"}, {"delay":"wait","speed":1000,"to":"auto:auto;","ease":"Power2.easeInOut"}]' style="z-index: 23;">Boton
	  					</a>
						<!-- bubble-1-1 move out -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":0,"speed":7000,"frame":"0","from":"y:bottom;","to":"y:top","ease":"Power3.easeInOut"}]' style="z-index: 9;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-02.png" alt="" data-hh="['778','486','402','311']">
						</div>
						<!-- bubble-1-2 move out -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":1000,"speed":7000,"frame":"0","from":"y:bottom;","to":"y:top","ease":"Power3.easeInOut"}]' style="z-index: 9;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-04.png" alt="" data-hh="['778','486','402','311']">
						</div>
						<!-- bubble-1-3 move out -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":500,"speed":7000,"frame":"0","from":"y:bottom;","to":"y:top","ease":"Power3.easeInOut"}]' style="z-index: 9;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-01.png" alt="" data-hh="['778','486','402','311']">
						</div>
						<!-- bubble-1-4 move out -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":3000,"speed":7000,"frame":"0","from":"y:bottom;","to":"y:top","ease":"Power3.easeInOut"}]' style="z-index: 9;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-03.png" alt="" data-hh="['778','486','402','311']">
						</div>
						<!-- bubble-1-1 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":1000,"speed":5000,"frame":"0","from":"y:bottom;","to":"y:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"y:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-looped rs-pulse" data-easing="Power3.easeInOut" data-speed="3" data-zoomstart="1" data-zoomend="0.9">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-01.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- bubble-1-2 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":2000,"speed":5000,"frame":"0","from":"y:bottom;","to":"y:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"y:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-looped rs-pulse" data-easing="Power3.easeInOut" data-speed="6" data-zoomstart="1" data-zoomend="0.9">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-02.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- bubble-1-3 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":3000,"speed":5000,"frame":"0","from":"y:bottom;","to":"y:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"y:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-looped rs-pulse" data-easing="Power3.easeInOut" data-speed="4" data-zoomstart="1" data-zoomend="0.9">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-03.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- bubble-1-4 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":4000,"speed":5000,"frame":"0","from":"y:bottom;","to":"y:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"y:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-looped rs-pulse" data-easing="Power3.easeInOut" data-speed="5" data-zoomstart="1" data-zoomend="0.9">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-04.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- glow-1-1 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":4000,"speed":5000,"frame":"0","from":"o:0;","to":"o:1","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"o:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-glow-1">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/glow-1-01.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- glow-1-2 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":4000,"speed":5000,"frame":"0","from":"o:0;","to":"o:1","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"o:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-glow-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/glow-1-02.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- glow-1-3 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":4000,"speed":5000,"frame":"0","from":"o:0;","to":"o:1","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"o:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-glow-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/glow-1-03.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
					</li>
					<!-- Slide 2 -->
					<li data-transition='fade' data-rotate='0' data-saveperformance='off'>
						<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slide2.jpg" alt="slide1" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
						<!-- 2-1-text -->
						<div class="tp-caption" data-width="['735','500','400','450']" data-x="['center','center','center','center']" data-hoffset="['300', '200','150','80']" data-y="['center','center','center','center']" data-voffset="['-55','-25','-20','-34']" data-textAlign="['center','center','center','center']" data-frames='[{"from":"y:[300%];opacity:0;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"y:[200%];","ease":"Power2.easeInOut"}]' style="z-index: 6;">
							<div class="rs-text-block-center">
								<div class="rs-text-1 color-grey text-center">Una nueva forma 
									<br>de lavar tu ropa
									<br>desde tu celular!</div>
								<div class="rs-text-2 color-grey">Ofrecemos recojo y delivery al instante
									<br>a cualquier hora</div>
							</div>
						</div>
						<!-- 2-1-button -->
						<a href="#modalOrder" class="tp-caption rs-btn btn-green popup-link" data-x="['center','center','center','center']" data-hoffset="['300','200','150','80']" data-y="['center','center','center','center']" data-voffset="['150','100','95','95']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeInOut"}, {"delay":"wait","speed":1000,"to":"auto:auto;","ease":"Power2.easeInOut"}]' style="z-index: 23;">Boton
	  					</a>
						<!-- 2-1-image -->
						<div class="tp-caption tp-full-image" data-x="['center','center','center','center']" data-y="['bottom','bottom','bottom','bottom']" data-width="['1920', '1200', '992', '768']" data-hoffset="['0','0','0','-70']" data-height="['778','486','402','311']" data-type="image" data-responsive_offset="off" data-responsive="on" data-frames='[{"from":"x:-100px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":3000,"to":"opacity:0;","ease":"Power4.easeIn"}]' style="z-index: 15;"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/slide2-1.png" alt=""> </div>
						<!-- 2-2-image -->
						<div class="tp-caption tp-full-image" data-x="['center','center','center','center']" data-y="['bottom','bottom','bottom','bottom']" data-width="['1920', '1200', '992', '768']" data-hoffset="['0','0','0','-70']" data-height="['778','486','402','311']" data-type="image" data-responsive_offset="off" data-responsive="on" data-frames='[{"from":"o:0;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeOut"},{"delay":"wait","speed":3000,"to":"opacity:0;","ease":"Power4.easeIn"}]' style="z-index: 15;"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/slide2-2.png" alt=""> </div>
						<!-- bubble-1-1 move out -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":0,"speed":7000,"frame":"0","from":"y:bottom;","to":"y:top","ease":"Power3.easeInOut"}]' style="z-index: 9;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-02.png" alt="" data-hh="['778','486','402','311']">
						</div>
						<!-- bubble-1-2 move out -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":1000,"speed":7000,"frame":"0","from":"y:bottom;","to":"y:top","ease":"Power3.easeInOut"}]' style="z-index: 9;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-04.png" alt="" data-hh="['778','486','402','311']">
						</div>
						<!-- bubble-1-3 move out -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":2000,"speed":7000,"frame":"0","from":"y:bottom;","to":"y:top","ease":"Power3.easeInOut"}]' style="z-index: 9;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-01.png" alt="" data-hh="['778','486','402','311']">
						</div>
						<!-- bubble-1-4 move out -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":3000,"speed":7000,"frame":"0","from":"y:bottom;","to":"y:top","ease":"Power3.easeInOut"}]' style="z-index: 9;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-03.png" alt="" data-hh="['778','486','402','311']">
						</div>
						<!-- bubble-2-1 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":1000,"speed":5000,"frame":"0","from":"y:bottom;","to":"y:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"y:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-looped rs-pulse" data-easing="Power3.easeInOut" data-speed="3" data-zoomstart="1" data-zoomend="0.9">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-2-01.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- bubble-2-2 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":2000,"speed":5000,"frame":"0","from":"y:bottom;","to":"y:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"y:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-looped rs-pulse" data-easing="Power3.easeInOut" data-speed="6" data-zoomstart="1" data-zoomend="0.9">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-2-02.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- bubble-2-3 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":3000,"speed":5000,"frame":"0","from":"y:bottom;","to":"y:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"y:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-looped rs-pulse" data-easing="Power3.easeInOut" data-speed="4" data-zoomstart="1" data-zoomend="0.9">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-2-03.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- bubble-2-4 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":4000,"speed":5000,"frame":"0","from":"y:bottom;","to":"y:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"y:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-looped rs-pulse" data-easing="Power3.easeInOut" data-speed="5" data-zoomstart="1" data-zoomend="0.9">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-2-04.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- bubble-2-5 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":2000,"speed":5000,"frame":"0","from":"y:bottom;","to":"y:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"y:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-looped rs-pulse" data-easing="Power3.easeInOut" data-speed="5" data-zoomstart="1" data-zoomend="0.9">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-2-05.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- glow-2-1 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":4000,"speed":5000,"frame":"0","from":"o:0;","to":"o:1","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"o:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-glow-1">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/glow-2-01.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- glow-2-2 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":4000,"speed":5000,"frame":"0","from":"o:0;","to":"o:1","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"o:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-glow-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/glow-2-02.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- glow-2-3 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":4000,"speed":5000,"frame":"0","from":"o:0;","to":"o:1","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"o:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-glow-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/glow-2-03.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
					</li>
					<!-- Slide 3 -->
					<li data-transition='fade' data-rotate='0' data-saveperformance='off'>
						<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slide1.jpg" alt="slide1" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
						<!-- 3-1-image -->
						<div class="tp-caption tp-scale" id="slide-3-1" data-x="['center','center','center','center']" data-hoffset="['-480','-300','-248','-192']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="['961','601','497','385']" data-height="['778','486','402','311']" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"o:0;","speed":1000,"to":"o:1","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"x:left;","ease":"Power2.easeInOut"}]' style="z-index: 1;"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/slide3-1.jpg" alt="">
						</div>
						<!-- 3-2-image -->
						<div class="tp-caption tp-scale" id="slide-3-2" data-x="['center','center','center','center']" data-hoffset="['480','300','248','192']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="['961','601','497','385']" data-height="['778','486','402','311']" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"o:0;","speed":1000,"to":"o:1","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"x:right;","ease":"Power2.easeInOut"}]' style="z-index: 1;"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/slide3-2.jpg" alt="">
						</div>
						<!-- 3-1-blank -->
						<div class="tp-caption tp-shape" id="slide-3-1-blank" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="['960','600','496','384']" data-height="['778','486','402','311']" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on" data-actions='[{"event":"mouseenter","action":"toggleclass","layer":"slide-3-1","delay":"0", "classname":"zoom"}, {"event":"mouseleave","action":"toggleclass","layer":"slide-3-1","delay":"0", "classname":"zoom"},{"event":"mouseenter","action":"toggleclass","layer":"tp-hovertext-3-1","delay":"0", "classname":"up"}, {"event":"mouseleave","action":"toggleclass","layer":"tp-hovertext-3-1","delay":"0", "classname":"up"}]' data-frames='[{"from":"opacity:1;","speed":0,"to":"opacity:1;","delay":0},{"from":"opacity:1;", "delay":"wait","speed":0,"to":"opacity:1;"}]' style="z-index: 22;background-color:rgba(0,0,0,0);">
						</div>
						<!-- 3-2-blank -->
						<div class="tp-caption tp-shape" id="slide-3-2-blank" data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="['960','600','496','384']" data-height="['778','486','402','311']" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on" data-actions='[{"event":"mouseenter","action":"toggleclass","layer":"slide-3-2","delay":"0", "classname":"zoom"}, {"event":"mouseleave","action":"toggleclass","layer":"slide-3-2","delay":"0", "classname":"zoom"},{"event":"mouseenter","action":"toggleclass","layer":"tp-hovertext-3-2","delay":"0", "classname":"up"}, {"event":"mouseleave","action":"toggleclass","layer":"tp-hovertext-3-2","delay":"0", "classname":"up"}]' data-frames='[{"from":"opacity:1;","speed":0,"to":"opacity:1;","delay":0},{"from":"opacity:1;", "delay":"wait","speed":0,"to":"opacity:1;"}]' style="z-index: 22;background-color:rgba(0,0,0,0);">
						</div>
						<!-- 3-1-text -->
						<div class="tp-caption tp-hovertext" id="tp-hovertext-3-1" data-width="['960','600','496','384']" data-x="['left','left','left','left']" data-hoffset="['0']" data-y="['center','center','center','center']" data-voffset="['-35','-25','-18','-15']" data-textAlign="['center','center','center','center']" data-paddingleft="[300,200,150,0]" data-frames='[{"from":"y:[300%];opacity:0;","speed":3000,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"y:[200%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' style="z-index: 6;">
							<div class="rs-text-1">Titulo 3</div>
							<div class="rs-text-2">Descripción</div>
						</div>
						<!-- 3-1-button -->
						<a href="#modalOrder" class="tp-caption rs-btn btn-green popup-link" data-x="['center','center','center','center']" data-hoffset="['-332','-200','-180','-190']" data-y="['center','center','center','center']" data-voffset="['115','70','55','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-actions='[{"event":"mouseenter","action":"toggleclass","layer":"slide-3-1","delay":"0", "classname":"zoom"}, {"event":"mouseleave","action":"toggleclass","layer":"slide-3-1","delay":"0", "classname":"zoom"},{"event":"mouseenter","action":"toggleclass","layer":"tp-hovertext-3-1","delay":"0", "classname":"up"}, {"event":"mouseleave","action":"toggleclass","layer":"tp-hovertext-3-1","delay":"0", "classname":"up"}]' data-frames='[{"from":"x:[200%];z:0;rX:25deg;rY:50deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":2500, "to":"o:1;","delay":2800,"ease":"Power3.easeInOut"}, {"delay":"wait","speed":1000,"to":"auto:auto;","ease":"Power2.easeInOut"}]' style="z-index: 23;">Boton
	 					</a>
						<!-- 3-2-text -->
						<div class="tp-caption tp-hovertext" id="tp-hovertext-3-2" data-width="['960','600','496','384']" data-x="['right','right','right','right']" data-hoffset="['0']" data-y="['center','center','center','center']" data-voffset="['-35','-25','-18','-15']" data-textAlign="['center','center','center','center']" data-paddingright="[265,180,150,0]" data-frames='[{"from":"y:[300%];opacity:0;","speed":3000,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"y:[200%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' style="z-index: 6;">
							<div class="rs-text-1">Titulo 4</div>
							<div class="rs-text-2">Descripción</div>
						</div>
						<!-- 3-2-button -->
						<a href="#modalOrder" class="tp-caption rs-btn btn-blue popup-link" data-x="['center','center','center','center']" data-hoffset="['332','200','180','195']" data-y="['center','center','center','center']" data-voffset="['115','70','55','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-actions='[{"event":"mouseenter","action":"toggleclass","layer":"slide-3-2","delay":"0", "classname":"zoom"}, {"event":"mouseleave","action":"toggleclass","layer":"slide-3-2","delay":"0", "classname":"zoom"},{"event":"mouseenter","action":"toggleclass","layer":"tp-hovertext-3-2","delay":"0", "classname":"up"}, {"event":"mouseleave","action":"toggleclass","layer":"tp-hovertext-3-2","delay":"0", "classname":"up"}]' data-frames='[{"from":"x:[-200%];z:0;rX:25deg;rY:-50deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":2500, "to":"o:1;","delay":2800,"ease":"Power3.easeInOut"}, {"delay":"wait","speed":1000,"to":"auto:auto;","ease":"Power2.easeInOut"}]' style="z-index: 23;">Boton
	  					</a>
						<!-- bubble-1-1 move out -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":0,"speed":7000,"frame":"0","from":"y:bottom;","to":"y:top","ease":"Power3.easeInOut"}]' style="z-index: 9;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-02.png" alt="" data-hh="['778','486','402','311']">
						</div>
						<!-- bubble-1-2 move out -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":1000,"speed":7000,"frame":"0","from":"y:bottom;","to":"y:top","ease":"Power3.easeInOut"}]' style="z-index: 9;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-04.png" alt="" data-hh="['778','486','402','311']">
						</div>
						<!-- bubble-1-3 move out -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":500,"speed":7000,"frame":"0","from":"y:bottom;","to":"y:top","ease":"Power3.easeInOut"}]' style="z-index: 9;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-01.png" alt="" data-hh="['778','486','402','311']">
						</div>
						<!-- bubble-1-4 move out -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":3000,"speed":7000,"frame":"0","from":"y:bottom;","to":"y:top","ease":"Power3.easeInOut"}]' style="z-index: 9;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-03.png" alt="" data-hh="['778','486','402','311']">
						</div>
						<!-- bubble-1-1 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":1000,"speed":5000,"frame":"0","from":"y:bottom;","to":"y:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"y:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-looped rs-pulse" data-easing="Power3.easeInOut" data-speed="3" data-zoomstart="1" data-zoomend="0.9">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-01.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- bubble-1-2 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":2000,"speed":5000,"frame":"0","from":"y:bottom;","to":"y:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"y:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-looped rs-pulse" data-easing="Power3.easeInOut" data-speed="6" data-zoomstart="1" data-zoomend="0.9">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-02.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- bubble-1-3 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":3000,"speed":5000,"frame":"0","from":"y:bottom;","to":"y:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"y:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-looped rs-pulse" data-easing="Power3.easeInOut" data-speed="4" data-zoomstart="1" data-zoomend="0.9">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-03.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- bubble-1-4 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":4000,"speed":5000,"frame":"0","from":"y:bottom;","to":"y:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"y:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-looped rs-pulse" data-easing="Power3.easeInOut" data-speed="5" data-zoomstart="1" data-zoomend="0.9">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bubble-1-04.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- glow-1-1 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":4000,"speed":5000,"frame":"0","from":"o:0;","to":"o:1","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"o:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-glow-1">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/glow-1-01.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- glow-1-2 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":4000,"speed":5000,"frame":"0","from":"o:0;","to":"o:1","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"o:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-glow-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/glow-1-02.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
						<!-- glow-1-3 -->
						<div class="tp-caption tp-resizeme tp-full-height" data-x="center" data-y="top" data-height="full" data-type="image" data-responsive="on" data-frames='[{"delay":4000,"speed":5000,"frame":"0","from":"o:0;","to":"o:1","ease":"Power3.easeInOut"},{"delay":"wait","speed":5000,"frame":"999","to":"o:0;","ease":"Power3.easeInOut"}]' style="z-index: 10;">
							<div class="rs-glow-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slider/glow-1-03.png" alt="" data-hh="['778','486','402','311']">
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /slider revolution  -->
	<div class="page-content">
		<div class="container offset-top-35">
			<div class="row services-box-mobile arrow-on-white">
				<a href="services.html" class="col-md-4">
					<!-- services-box -->
					<div class="services-box fill-bg-1">
						<div class="icon-box">
							<svg class="svg-washer-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300" height="300" viewBox="0 0 32 32">
								<path d="M29 29c0 1.519-1.231 2.75-2.75 2.75h-20.5c-1.519 0-2.75-1.231-2.75-2.75v-26c0-1.519 1.231-2.75 2.75-2.75h20.5c1.519 0 2.75 1.231 2.75 2.75v26zM27.5 3c0-0.69-0.56-1.25-1.25-1.25h-20.5c-0.69 0-1.25 0.56-1.25 1.25v26c0 0.69 0.56 1.25 1.25 1.25h20.5c0.69 0 1.25-0.56 1.25-1.25v-26z"></path>
								<path d="M28.036 9.75h-24.5c-0.414 0-0.537-0.336-0.537-0.75v-5.76c0-1.537 1.226-2.99 2.749-2.99h20.31c1.607 0 2.94 1.576 2.94 2.99v5.76c0 0.414-0.55 0.75-0.964 0.75zM4.5 8.25h23v-5.009c0-0.675-0.761-1.491-1.44-1.491h-20.31c-0.684 0-1.249 0.794-1.249 1.491v5.009z"></path>
								<path d="M11.75 9.5c-0.414 0-0.75-0.336-0.75-0.75v-7.5c0-0.414 0.336-0.75 0.75-0.75s0.75 0.336 0.75 0.75v7.5c0 0.414-0.336 0.75-0.75 0.75z"></path>
								<path d="M25.603 5.12c0 0.714-0.578 1.293-1.293 1.293s-1.293-0.579-1.293-1.293c0-0.714 0.578-1.293 1.293-1.293s1.293 0.579 1.293 1.293z"></path>
								<path d="M21.982 5.12c0 0.714-0.578 1.293-1.293 1.293s-1.293-0.579-1.293-1.293c0-0.714 0.578-1.293 1.293-1.293s1.293 0.579 1.293 1.293z"></path>
								<path d="M18.362 5.12c0 0.714-0.58 1.293-1.293 1.293-0.714 0-1.293-0.579-1.293-1.293s0.578-1.293 1.293-1.293c0.714 0 1.293 0.579 1.293 1.293z"></path>
								<g class="disc">
									<path d="M15.613 27.917c-3.961 0-7.183-3.222-7.183-7.183s3.222-7.183 7.183-7.183c3.96 0 7.183 3.222 7.183 7.183s-3.223 7.183-7.183 7.183zM15.613 15.051c-3.134 0-5.683 2.549-5.683 5.683s2.55 5.683 5.683 5.683c3.133 0 5.683-2.55 5.683-5.683s-2.55-5.683-5.683-5.683z"></path>
									<path d="M12.876 23.106c-1.754 0-3.277-1.023-4.047-1.842-0.284-0.302-0.27-0.776 0.032-1.060 0.3-0.284 0.774-0.271 1.058 0.030v0c0.104 0.109 2.57 2.636 5.094 0.521 2.857-2.391 5.86-1.037 7.047 0.013 0.31 0.274 0.34 0.748 0.066 1.058s-0.749 0.34-1.058 0.066c-0.099-0.087-2.521-2.139-5.091 0.013-1.045 0.875-2.11 1.201-3.1 1.201z"></path>
									<path d="M19.655 22.189c0 0.286-0.231 0.517-0.517 0.517s-0.517-0.231-0.517-0.517c0-0.285 0.231-0.517 0.517-0.517s0.517 0.231 0.517 0.517z"></path>
									<path d="M19.137 24.258c0 0.285-0.231 0.517-0.517 0.517s-0.517-0.232-0.517-0.517 0.232-0.517 0.517-0.517c0.285 0 0.517 0.231 0.517 0.517z"></path>
									<path d="M17.068 22.706c0 0.285-0.231 0.517-0.517 0.517s-0.517-0.231-0.517-0.517c0-0.286 0.231-0.517 0.517-0.517s0.517 0.231 0.517 0.517z"></path>
									<path d="M16.034 24.775c0 0.285-0.231 0.517-0.517 0.517s-0.517-0.231-0.517-0.517c0-0.286 0.231-0.517 0.517-0.517s0.517 0.231 0.517 0.517z"></path>
									<path d="M12.93 23.74c0 0.285-0.231 0.517-0.517 0.517s-0.517-0.231-0.517-0.517 0.231-0.517 0.517-0.517c0.286 0 0.517 0.232 0.517 0.517z"></path>
								</g>
							</svg>
						</div>
						<h5 class="title">Wet Cleaning</h5>
						<p>
							Este método se conoce como limpieza al húmedo en el que se utiliza agua como disolvente con detergentes y suavizantes
						</p>
					</div>
					<!-- /services-box -->
				</a>
				<a href="services.html" class="col-md-4">
					<!-- services-box -->
					<div class="services-box fill-bg-2">
						<div class="icon-box">
							<svg class="svg-hanger-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300" height="300" viewBox="0 0 35 32">
								<path class="hanger" d="M32.702 20.62l-13.413-12.155c-0.15-0.137-0.316-0.252-0.489-0.352v-1.965h-0.128c-0.088-0.27-0.301-0.497-0.673-0.583-0.831-0.191-1.748-0.465-2.315-1.143-0.274-0.328-0.359-0.76-0.242-0.988 0.664-1.294 2.593-0.9 3.702-0.421 1.181 0.51 2.21-1.211 1.019-1.725-2.057-0.889-5.404-1.289-6.511 1.245-0.855 1.956 0.436 3.464 2.078 4.32v1.245c-0.184 0.104-0.36 0.223-0.52 0.367l-13.411 12.155c-1.127 1.021-0.748 1.849 0.845 1.849h6.377v-2.155h-3.674l11.312-10.251c0.145-0.132 0.361-0.208 0.592-0.208s0.447 0.075 0.592 0.208l11.312 10.251h-3.747v2.155h6.45c1.593 0 1.971-0.828 0.845-1.849z"></path>
								<path class="clothes" d="M10.097 20.314v11.686l3.376-1.023-0.031-6.447c-0.003-0.594 0.477-1.081 1.072-1.083 0.002 0 0.004 0 0.005 0 0.593 0 1.075 0.479 1.077 1.072l0.028 5.806 8.704-2.636v-9.561h-14.232v2.186z"></path>
							</svg>
						</div>
						<h5 class="title">Lavado al Seco</h5>
						<p>
						Este proceso se realiza utilizando productos químicos llamados solventes, ya que estos disuelven la grasa y manchas de la prenda.
						</p>
					</div>
					<!-- /services-box -->
				</a>
				<a href="services.html" class="col-md-4">
					<!-- services-box -->
					<div class="services-box fill-bg-3">
						<div class="icon-box">
							<svg class="svg-vacuumcleaner-icon animated-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300" height="300" viewBox="0 0 39 32">
								<path class="tube" d="M37.644 31.192h-9.893c-0.259-1.001 0.157-1.911 0.717-2.333 0.567-0.428 1.67-0.211 2.641-0.338-0.084-0.428-0.199-0.965-0.386-1.344-4.045-8.229-8.121-16.452-12.166-24.681-0.223-0.458-0.705-0.729-1.212-0.699-0.567 0.030-1.145 0.006-1.766 0.006v-1.718c1.121 0 2.267-0.084 3.388 0.048 0.35 0.042 0.717 0.621 0.922 1.037 2.888 5.787 5.745 11.593 8.615 17.393 1.248 2.526 2.514 5.046 3.732 7.59 0.338 0.705 0.663 1.459 0.983 2.399 0.416 0 0.826 0.012 1.459 0.018 1.019 0.012 1.447 0.241 2.020 0.965 0.47 0.591 0.627 0.904 1.031 1.537-0.042 0.048-0.054 0.060-0.084 0.121z"></path>
								<path class="hose" d="M14.12 0.898c0 0.41 0 0.711 0 0.892-0.953 0.362-1.887 0.591-2.701 1.043-1.616 0.892-2.182 2.417-1.682 4.184 0.518 1.833 1.718 3.231 2.99 4.576 3.286 3.473 6.601 6.921 9.863 10.412 0.603 0.645 1.097 1.411 1.513 2.194 1.278 2.436 0.32 4.105-2.496 4.317 0-0.326 0-0.651 0-0.983 0.036-0.024 0.078-0.072 0.127-0.078 1.857-0.247 2.363-1.079 1.411-2.695-0.723-1.224-1.634-2.369-2.604-3.418-3.153-3.4-6.402-6.71-9.543-10.116-0.784-0.85-1.429-1.893-1.917-2.948-1.495-3.255-0.006-6.246 3.466-7.138 0.494-0.115 1.007-0.151 1.573-0.241z"></path>
								<path class='vacuumcleaner' d="M7.049 20.883c-3.069 0-5.558 2.49-5.558 5.558s2.49 5.558 5.558 5.558c3.069 0 5.558-2.49 5.558-5.558s-2.49-5.558-5.558-5.558zM7.049 29.468c-1.67 0-3.026-1.356-3.026-3.026s1.356-3.026 3.026-3.026c1.67 0 3.026 1.356 3.026 3.026s-1.356 3.026-3.026 3.026z"></path>
								<path class='vacuumcleaner' d="M19.48 23.059c-1.748-1.272-3.442-2.616-5.227-3.828-0.663-0.452-1.501-0.868-2.279-0.904-2.616-0.115-5.245-0.066-7.867-0.036-0.669 0.006-1.17 0.398-1.23 1.103-0.054 0.681-0.018 1.375-0.012 2.176 1.157-1.043 2.683-1.682 4.365-1.682 3.593 0 6.511 2.912 6.511 6.511 0 1.338-0.404 2.586-1.097 3.617 2.393 0 4.769 0.030 7.144-0.024 0.748-0.018 1.037-0.639 1.049-1.35 0.012-0.953-0.024-1.905 0.012-2.852 0.018-1.164-0.434-2.050-1.369-2.731z"></path>
							</svg>
						</div>
						<h5 class="title">Limpieza de Muebles</h5>
						<p>
						Lavado de muebles, colchones y alfombras incluye lavado y desinfectado
						</p>
					</div>
					<!-- /services-box -->
				</a>
				<a href="services.html" class="col-md-4">
					<!-- services-box -->
					<div class="services-box fill-bg-4">
						<div class="icon-box">
							<i class="icon-ironing-board"></i>
						</div>
						<h5 class="title">Planchado y Secado</h5>
						<p>
							Incluimos el secado y doblado en nuestros servicios
						</p>
					</div>
					<!-- /services-box -->
				</a>
				<!-- <a href="services.html" class="col-md-4">
					
					<div class="services-box fill-bg-1">
						<div class="icon-box">
							<i class="icon-sewing-machine"></i>
						</div>
						<h5 class="title">Servicio 5</h5>
						<p>
							Descripción
						</p>
					</div>
					
				</a>
				<a href="services.html" class="col-md-4">
					
					<div class="services-box fill-bg-2">
						<div class="icon-box">
							<i class="icon-shoes"></i>
						</div>
						<h5 class="title">Servicio 6</h5>
						<p>
							Descripción
						</p>
					</div>
					
				</a> -->
			</div>
		</div>
		<div class="container">
			<h2 class="title-underline">we are passionate about laundry</h2>
			<p class="text-center info-text">
				We are professionals in the laundry and dry cleaning business, which means we always stay up to date on the latest technologies, cleaning methods, and solutions for dealing with stains or delicate fabrics. Plus, we maintain the highest standards of business integrity by following local and national regulations and environmental safety rules. We are passionate about changing the way you think about laundry!
			</p>
		</div>
		<div class="fill-bg-2 offset-top60 clearfix">
			<div class="container offset-top0">
				<div class="row">
					<div class="box-step animation" data-animation="fadeIn" data-animation-delay="0s">
						<h2>Como funciona: en 4 Simples Pasos</h2>
						<a href="#" class="item">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/img_icon_01.png" class="img-responsive1" alt="">
							</div>
							<h6 class="description">Paso 1</h6>
							<h4 class="title"><span>Recoje</span> toda tu ropa sucia</h4>
						</a>
						<a href="#" class="item animation" data-animation="fadeIn" data-animation-delay="0.25s">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/img_icon_02.png" class="img-responsive1 img-xs--lg" alt="">
							</div>
							<h6 class="description">Paso 2</h6>
							<h4 class="title">Nosotros iremos<br><span> a recojer</span> tu ropa</h4>
						</a>
						<a href="#" class="item animation" data-animation="fadeIn" data-animation-delay="0.5s">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/img_icon_03.png" class="img-responsive1 img-xs--sm" alt="">
							</div>
							<h6 class="description">Paso 3</h6>
							<h4 class="title"><span>Lavamos</span> tus 
								<br> prendas</h4>
						</a>
						<a href="#" class="item animation" data-animation="fadeIn" data-animation-delay="0.75s">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/img_icon_04.png" class="img-responsive1" alt="">
							</div>
							<h6 class="description">Paso 4</h6>
							<h4 class="title">Te <span>enviamos</span> todas tus prendas, como nuevas</h4>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<h2 class="title-underline">Precios Accesibles</h2>
			<div class="row product-box-mobile arrow-on-white">
				<div class="col-md-4">
					<!-- product-box -->
					<a href="#" class="product-box animation" data-animation="fadeInUp" data-animation-delay="0s">
						<span class="icon icon-shirt"></span>
						<h3 class="title">
							Desde <span class="base-color">S/. 2.00</span> por prenda
						</h3>
						<h6 class="description">
							Lavado de prendas
						</h6>
					</a>
					<!-- /product-box -->
				</div>
				<div class="col-md-4">
					<!-- product-box -->
					<a href="#" class="product-box animation" data-animation="fadeInUp" data-animation-delay="0s">
						<span class="icon icon-bag"></span>
						<h3 class="title">
							<span class="base-color">S/. 4.00</span> por kg
						</h3>
						<h6 class="description">
							Lavado al peso
						</h6>
					</a>
					<!-- /product-box -->
				</div>
				<div class="col-md-4">
					<!-- product-box -->
					<a href="#" class="product-box animation" data-animation="fadeInUp" data-animation-delay="0s">
						<span class="icon icon-towel"></span>
						<h3 class="title">
							Desde <span class="base-color">S/. 3.00</span> por prenda
						</h3>
						<h6 class="description">
							Lavado al seco
						</h6>
					</a>
					<!-- /product-box -->
				</div>
			</div>
			<div class="text-center offset-top35"><a href="price.html" class="btn btn-default btn-green">Ver todos nuestros precios</a></div>
		</div>
		<div class="container">
			<h2 class="title-underline">¿Por qué escogernos?</h2>
			<div class="row permission-box-mobile arrow-on-white">
				<div class="col-sm-6 col-md-4">
					<!-- permission box -->
					<a href="#" class="permission-box animation" data-animation="fadeInLeft" data-animation-delay="0s">
						<span class="icon icon-bright-lightbulb"></span>
						<div class="description">
							<h4 class="title">Persionalized Experience</h4>
							<p>
								We take utmost care of your clothes, segregating based on the cloth type and giving you instant clothes to make a statement.
							</p>
						</div>
					</a>
					<!-- /permission box -->
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- permission box -->
					<a href="#" class="permission-box animation" data-animation="fadeIn" data-animation-delay="0s">
						<span class="icon icon-tag-1"></span>
						<div class="description">
							<h4 class="title">Affordable Pricing</h4>
							<p>
								Prices that suits your pocket is one of our USP. An option of choosing between 2 types of pricing is available.
							</p>
						</div>
					</a>
					<!-- /permission box -->
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- permission box -->
					<a href="#" class="permission-box animation" data-animation="fadeInRight" data-animation-delay="0s">
						<span class="icon icon-reading-book"></span>
						<div class="description">
							<h4 class="title">Convenience</h4>
							<p>
								With just a tap of a button, your laundry gets done, giving your leisure time to spend with family and friends.
							</p>
						</div>
					</a>
					<!-- /permission box -->
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- permission box -->
					<a href="#" class="permission-box animation" data-animation="fadeInLeft" data-animation-delay="0s">
						<span class="icon icon-quality"></span>
						<div class="description">
							<h4 class="title">Quality</h4>
							<p>
								We use the best in class products, to assure that your favorite clothes are always there for you to wear.
							</p>
						</div>
					</a>
					<!-- /permission box -->
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- permission box -->
					<a href="#" class="permission-box animation" data-animation="fadeIn" data-animation-delay="0s">
						<span class="icon icon-express-delivery"></span>
						<div class="description">
							<h4 class="title">Express Delivery</h4>
							<p>
								Forgot to wash your clothes for interview/business meeting, never mind. With our super express delivery, we would get your laundry done in less than 8 hours.
							</p>
						</div>
					</a>
					<!-- /permission box -->
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- permission box -->
					<a href="#" class="permission-box animation" data-animation="fadeInRight" data-animation-delay="0s">
						<span class="icon icon-interface"></span>
						<div class="description">
							<h4 class="title">Instant Order Update</h4>
							<p>
								Regular updates of your order, to help you keep a track of your laundry and plan accordingly.
							</p>
						</div>
					</a>
					<!-- /permission box -->
				</div>
			</div>
		</div>
		<div class="content carusel--parallax" data-image="<?php echo get_template_directory_uri(); ?>/img/parallax-img-01.jpg">
			<div class="carousel-blog slick-dotted">
				<div>
					<div class="container">
						<div class="row">
							<div class="carousel-blog-box">
								<div class="col-xs-3">
									<a href="#" class="img"></a>
								</div>
								<div class="col-xs-9">
									<div class="center-y">
										<h4 class="title"><a href="#">Carlos Vilchez</a></h4>
										<div class="description">
											Absolutely the best in town! The clothes are returned neatly folded, clean and smelling great.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="container">
						<div class="row">
							<div class="carousel-blog-box">
								<div class="col-xs-3">
									<a href="#" class="img"></a>
								</div>
								<div class="col-xs-9">
									<div class="center-y">
										<h4 class="title"><a href="#">Tony B. Jason</a></h4>
										<div class="description">
											Our clothes are immaculate. They smell amazing. They are folded better than what you see in a retail shop
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="container">
						<div class="row">
							<div class="carousel-blog-box">
								<div class="col-xs-3">
									<a href="#" class="img"></a>
								</div>
								<div class="col-xs-9">
									<div class="center-y">
										<h4 class="title"><a href="#">Mary K. Edward</a></h4>
										<div class="description">
											Nice people and quality service at a affordable price and turn around time.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php

get_footer();
