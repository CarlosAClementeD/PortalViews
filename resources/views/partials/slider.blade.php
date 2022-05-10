
			<!-- LOAD JQUERY LIBRARY -->
			
			<!-- LOADING FONTS AND ICONS -->
			<link href="https://fonts.googleapis.com/css?family=Roboto:400%7COpen+Sans:700%2C400&display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css" >

			
			<link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
			<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
			
			<!-- REVOLUTION STYLE SHEETS -->
			<link rel="stylesheet" type="text/css" href="css/rs6.css">
			<!-- REVOLUTION LAYERS STYLES -->
						<!-- REVOLUTION JS FILES -->
			
		<script type="text/javascript">
			window.RS_MODULES = window.RS_MODULES || {};
			window.RS_MODULES.modules = window.RS_MODULES.modules || {};
			window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
			window.RS_MODULES.defered = true;
			window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
			window.RS_MODULES.type = 'compiled';
		</script>
					<script type="text/javascript" src="js/rbtools.min.js"></script>
							<script type="text/javascript" src="js/rs6.min.js"></script>
							
			<script type="text/javascript">function setREVStartSize(e){
			//window.requestAnimationFrame(function() {				 
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;	
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;	
				try {								
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
					if(e.layout==="fullscreen" || e.l==="fullscreen") 						
						newh = Math.max(e.mh,window.RSIH);					
					else{					
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,						
							sl;					
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];									
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}
					var el = document.getElementById(e.c);
					if (el!==null && el) el.style.height = newh+"px";					
					el = document.getElementById(e.c+"_wrapper");
					if (el!==null && el) {
						el.style.height = newh+"px";
						el.style.display = "block";
					}
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}					   
			//});
		  };</script>

			

		

			<!-- START SlideSistemasUAEM_Portalempleado REVOLUTION SLIDER 6.5.9 -->
			<p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_3_1_wrapper" data-alias="slider-1" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
				<rs-module id="rev_slider_3_1" style="" data-version="6.5.9">
					<rs-slides>
						<rs-slide style="position: absolute;" data-key="rs-3" data-title="Slide" data-in="o:0;" data-out="a:false;">
							<img src="assets/transparent.png" alt="Slide" class="rev-slidebg tp-rs-img" data-bg="c:#00173b;" data-no-retina>
<!--
							--><rs-layer
								id="slider-3-slide-3-layer-1" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:r;y:b;"
								data-text="w:normal;"
								data-dim="w:1300px;h:1440px;"
								data-frame_0="x:50;"
								data-frame_1="sp:1000;"
								data-frame_999="o:0;st:w;sR:8000;"
								style="z-index:8;"
							><img src="assets/bg-img_.png" class="tp-rs-img" width="1300" height="1440" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
								id="slider-3-slide-3-layer-2" 
								data-type="shape"
								data-rsp_ch="on"
								data-xy="x:c;y:c;"
								data-text="w:normal;"
								data-dim="w:1300px;h:1440px;"
								data-frame_1="e:power4.inOut;sp:1000;"
								data-frame_999="o:0;st:w;sR:8000;"
								style="z-index:9;background:linear-gradient(rgba(136,201,50,0.7) 0%, rgba(35,136,82,0.7) 100%);"
							> 
							</rs-layer><!--

							--><rs-layer
								id="slider-3-slide-3-layer-5" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:c;y:c;"
								data-text="w:normal;"
								data-dim="w:1300px;h:1444px;"
								data-frame_0="x:-50;"
								data-frame_1="sp:1000;"
								data-frame_999="o:0;st:w;sR:8000;"
								style="z-index:10;"
							><img src="assets/bg-iso_.svg" class="tp-rs-img" width="649" height="720" data-no-retina> 
							</rs-layer>
						</rs-slide>
						<rs-slide style="position: absolute;" data-key="rs-6" data-title="Slide" data-in="o:0;" data-out="a:false;">
							<img src="assets/transparent.png" alt="Slide" class="rev-slidebg tp-rs-img" data-bg="c:#00173b;" data-no-retina>
	<rs-layer
								id="slider-3-slide-6-layer-1" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:r;y:b;"
								data-text="w:normal;"
								data-dim="w:1300px;h:1440px;"
								data-frame_0="x:50;"
								data-frame_1="sp:1000;"
								data-frame_999="o:0;st:w;sR:8000;"
								style="z-index:8;"
							><img src="assets/bg-img_.png" class="tp-rs-img" width="1300" height="1440" data-no-retina> 
							</rs-layer><rs-layer
								id="slider-3-slide-6-layer-2" 
								data-type="shape"
								data-rsp_ch="on"
								data-xy="x:c;y:c;"
								data-text="w:normal;"
								data-dim="w:1300px;h:1440px;"
								data-frame_1="e:power4.inOut;sp:1000;"
								data-frame_999="o:0;st:w;sR:8000;"
								style="z-index:9;background:linear-gradient(rgba(136,201,50,0.7) 0%, rgba(35,136,82,0.7) 100%);"
							> 
							</rs-layer><rs-layer
								id="slider-3-slide-6-layer-5" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:c;y:c;"
								data-text="w:normal;"
								data-dim="w:1300px;h:1444px;"
								data-frame_0="x:-50;"
								data-frame_1="sp:1000;"
								data-frame_999="o:0;st:w;sR:8000;"
								style="z-index:10;"
							><img src="assets/bg-iso_.svg" class="tp-rs-img" width="649" height="720" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
								id="slider-3-slide-6-layer-9" 
								data-type="text"
								data-color="#ffffff"
								data-rsp_ch="on"
								data-xy="x:c;y:c;yo:-110px;"
								data-text="w:normal;s:24;fw:700;"
								data-frame_0="y:50;"
								data-frame_1="st:690;sp:1000;sR:690;"
								data-frame_999="o:0;st:w;sR:7310;"
								style="z-index:12;font-family:'Open Sans';"
							>Ejemplo de título de mensaje y/o notificación 
							</rs-layer><!--

							--><rs-layer
								id="slider-3-slide-6-layer-10" 
								data-type="text"
								data-color="#ffffff"
								data-rsp_ch="on"
								data-xy="x:c;y:c;yo:28px;"
								data-text="w:normal;s:18;a:center;"
								data-dim="w:923px;h:194px;"
								data-frame_0="y:50;"
								data-frame_1="st:1680;sp:1000;sR:1680;"
								data-frame_999="o:0;st:w;sR:6320;"
								style="z-index:11;font-family:'Open Sans';"
							>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. 
							</rs-layer><!--
-->						</rs-slide>
						<rs-slide style="position: absolute;" data-key="rs-7" data-title="Slide" data-in="o:0;" data-out="a:false;">
							<img src="assets/transparent.png" alt="Slide" class="rev-slidebg tp-rs-img" data-bg="c:#00173b;" data-no-retina>
<!--
							--><rs-layer
								id="slider-3-slide-7-layer-1" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:r;y:b;"
								data-text="w:normal;"
								data-dim="w:1300px;h:1440px;"
								data-frame_0="x:50;"
								data-frame_1="sp:1000;"
								data-frame_999="o:0;st:w;sR:8000;"
								style="z-index:8;"
							><img src="assets/bg-img_.png" class="tp-rs-img" width="1300" height="1440" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
								id="slider-3-slide-7-layer-2" 
								data-type="shape"
								data-rsp_ch="on"
								data-xy="x:c;y:c;"
								data-text="w:normal;"
								data-dim="w:1300px;h:1440px;"
								data-frame_1="e:power4.inOut;sp:1000;"
								data-frame_999="o:0;st:w;sR:8000;"
								style="z-index:9;background:linear-gradient(rgba(136,201,50,0.7) 0%, rgba(35,136,82,0.7) 100%);"
							> 
							</rs-layer><!--

							--><rs-layer
								id="slider-3-slide-7-layer-5" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:c;y:c;"
								data-text="w:normal;"
								data-dim="w:1300px;h:1444px;"
								data-frame_0="x:-50;"
								data-frame_1="sp:1000;"
								data-frame_999="o:0;st:w;sR:8000;"
								style="z-index:10;"
							><img src="assets/bg-iso_.svg" class="tp-rs-img" width="649" height="720" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
								id="slider-3-slide-7-layer-14" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:c;xo:-128px;y:c;"
								data-text="w:normal;"
								data-dim="w:205px;h:135px;"
								data-frame_0="x:50;"
								data-frame_1="st:1250;sp:880;sR:1250;"
								data-frame_999="o:0;st:w;sR:6870;"
								style="z-index:14;"
							><img src="assets/lg-uaem-37_.svg" class="tp-rs-img" width="231" height="152" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
								id="slider-3-slide-7-layer-15" 
								data-type="shape"
								data-rsp_ch="on"
								data-xy="x:c;y:c;"
								data-text="w:normal;"
								data-dim="w:3px;h:180px;"
								data-frame_0="y:-50;"
								data-frame_1="st:680;sp:1000;sR:680;"
								data-frame_999="o:0;st:w;sR:7320;"
								style="z-index:15;background-color:#ffffff;"
							> 
							</rs-layer><!--

							--><rs-layer
								id="slider-3-slide-7-layer-16" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:c;xo:140px;y:c;"
								data-text="w:normal;"
								data-dim="w:237px;h:107px;"
								data-frame_0="x:-50;"
								data-frame_1="st:1250;sp:870;sR:1250;"
								data-frame_999="o:0;st:w;sR:6880;"
								style="z-index:13;"
							><img src="assets/lg-dgtic-37_.svg" class="tp-rs-img" width="335" height="152" data-no-retina> 
							</rs-layer><!--
-->						</rs-slide>
					</rs-slides>
				</rs-module>
								<script type="text/javascript">
									
								</script>
				<script type="text/javascript">
						if(typeof revslider_showDoubleJqueryError === "undefined") {function revslider_showDoubleJqueryError(sliderID) {console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");console.log("To fix this, you can:");console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");console.log("2. Find the double jQuery.js inclusion and remove it");return "Double Included jQuery Library";}}
				</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->

				<script type="text/javascript">
					var	tpj = jQuery;
					if(window.RS_MODULES === undefined) window.RS_MODULES = {};
					if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
					RS_MODULES.modules["revslider31"] = {once: RS_MODULES.modules["revslider31"]!==undefined ? RS_MODULES.modules["revslider31"].once : undefined, init:function() {
						window.revapi3 = window.revapi3===undefined || window.revapi3===null || window.revapi3.length===0  ? document.getElementById("rev_slider_3_1") : window.revapi3;
						if(window.revapi3 === null || window.revapi3 === undefined || window.revapi3.length==0) { window.revapi3initTry = window.revapi3initTry ===undefined ? 0 : window.revapi3initTry+1; if (window.revapi3initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider31"].init()}); return;}
						window.revapi3 = jQuery(window.revapi3);
						if(window.revapi3.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_3_1"); return;}
						revapi3.revolutionInit({
								revapi:"revapi3",
								DPR:"dpr",
								sliderLayout:"fullwidth",
								visibilityLevels:"1240,1024,778,480",
								gridwidth:1300,
								gridheight:1440,
								spinner:"spinner8",
								perspective:600,
								perspectiveType:"global",
								spinnerclr:"#88c932",
								editorheight:"1440,768,960,720",
								responsiveLevels:"1240,1024,778,480",
								progressBar:{disableProgressBar:true},
								navigation: {
									wheelCallDelay:1000,
									onHoverStop:false,
									bullets: {
										enable:true,
										tmp:"",
										style:"hermes"
									}
								},
								viewPort: {
									global:false,
									globalDist:"-200px",
									enable:false
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid:true
								},
						});
						
					}} // End of RevInitScript
					if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
				</script>



<style type="text/css">
#rev_slider_3_1_wrapper .hermes.tp-bullets{}#rev_slider_3_1_wrapper .hermes .tp-bullet{overflow:hidden; border-radius:50%; width:16px; height:16px; background-color:rgba(0,0,0,0); box-shadow:inset 0 0 0 2px #ffffff; -webkit-transition:background 0.3s ease; transition:background 0.3s ease; position:absolute}#rev_slider_3_1_wrapper .hermes .tp-bullet.rs-touchhover{background-color:rgba(0,0,0,0.21)}#rev_slider_3_1_wrapper .hermes .tp-bullet:after{content:' '; position:absolute; bottom:0; height:0; left:0; width:100%; background-color:#ffffff; box-shadow:0 0 1px #ffffff; -webkit-transition:height 0.3s ease; transition:height 0.3s ease}#rev_slider_3_1_wrapper .hermes .tp-bullet.selected:after{height:100%}</style>
