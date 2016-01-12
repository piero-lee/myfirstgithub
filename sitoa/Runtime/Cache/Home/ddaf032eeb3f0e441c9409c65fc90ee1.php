<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>神丰ＯＡ系统</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- WEB FONTS -->
		<link href="http://fonts.useso.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="/sitoa/Public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="/sitoa/Public/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="/sitoa/Public/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="/sitoa/Public/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
		<!--雪花特效 START-->
		<link rel="stylesheet" type="text/css" href="/sitoa/Public/css/snow-normalize.css" />
		<link rel="stylesheet" type="text/css" href="/sitoa/Public/css/snow-default.css">
		<style type="text/css">
			body{
				background-color: #ACD6FF;
			}
		    .snow-container{position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 100001;}
		</style>
		<!--雪花特效 END-->

	</head>
	<!--
		.boxed = boxed version
	-->
	<body>

	<div class="snow-container"></div>
		<div class="padding-15">

			<div class="login-box">

				<!-- login form -->
				<form action="index.html" method="post" class="sky-form boxed">
					<header><i class="fa fa-users"></i> 用户登录</header>

					<!--
					<div class="alert alert-danger noborder text-center weight-400 nomargin noradius">
						Invalid Email or Password!
					</div>

					<div class="alert alert-warning noborder text-center weight-400 nomargin noradius">
						Account Inactive!
					</div>

					<div class="alert alert-default noborder text-center weight-400 nomargin noradius">
						<strong>Too many failures!</strong> <br />
						Please wait: <span class="inlineCountdown" data-seconds="180"></span>
					</div>
					-->

					<fieldset>	
					
						<section>
							<label class="label">您的邮箱</label>
							<label class="input">
								<i class="icon-append fa fa-envelope"></i>
								<input type="email">
								<span class="tooltip tooltip-top-right">请输入您的电子邮箱</span>
							</label>
						</section>
						
						<section>
							<label class="label">密码</label>
							<label class="input">
								<i class="icon-append fa fa-lock"></i>
								<input type="password">
								<b class="tooltip tooltip-top-right">请输入密码</b>
							</label>
							<label class="checkbox"><input type="checkbox" name="checkbox-inline" checked><i></i>自动登录</label>
						</section>

					</fieldset>

					<footer>
						<button type="submit" class="btn btn-primary pull-right">登录</button>
						<div class="forgot-password pull-left">
							<a href="page-password.html">忘记密码?</a> <br />
							<a href="page-register.html"><b>注册用户</b></a>
						</div>
					</footer>
				</form>
				<!-- /login form -->
				<!--
                                <div class="socials margin-top-10 text-center"><!-- more buttons: ui-buttons.html -->
				<!--	<a href="#" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
					<a href="#" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
				</div>
			-->
			</div>

		</div>
		<!--雪花特效 START-->

		<!--雪花特效 END-->

		<!-- JAVASCRIPT FILES -->
		<!--<script type="text/javascript">var plugin_path = '/sitoa/Public/plugins/';</script>
		<script type="text/javascript" src="/sitoa/Public/plugins/jquery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="/sitoa/Public/js/app.js"></script>-->

		<!--雪花特效 START-->
		<script type="text/javascript" src="/sitoa/Public/js/snow-jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="/sitoa/Public/js/snow-three.js"></script>
		<script type="text/javascript">
			function randomRange(t,i){return Math.random()*(i-t)+t}Particle3D=function(t){THREE.Particle.call(this,t),this.velocity=new THREE.Vector3(0,-2,0),this.velocity.rotateX(randomRange(-45,45)),this.velocity.rotateY(randomRange(0,360)),this.gravity=new THREE.Vector3(0,0,0),this.drag=1},Particle3D.prototype=new THREE.Particle,Particle3D.prototype.constructor=Particle3D,Particle3D.prototype.updatePhysics=function(){this.velocity.multiplyScalar(this.drag),this.velocity.addSelf(this.gravity),this.position.addSelf(this.velocity)};var TO_RADIANS=Math.PI/180;THREE.Vector3.prototype.rotateY=function(t){cosRY=Math.cos(t*TO_RADIANS),sinRY=Math.sin(t*TO_RADIANS);var i=this.z,o=this.x;this.x=o*cosRY+i*sinRY,this.z=o*-sinRY+i*cosRY},THREE.Vector3.prototype.rotateX=function(t){cosRY=Math.cos(t*TO_RADIANS),sinRY=Math.sin(t*TO_RADIANS);var i=this.z,o=this.y;this.y=o*cosRY+i*sinRY,this.z=o*-sinRY+i*cosRY},THREE.Vector3.prototype.rotateZ=function(t){cosRY=Math.cos(t*TO_RADIANS),sinRY=Math.sin(t*TO_RADIANS);var i=this.x,o=this.y;this.y=o*cosRY+i*sinRY,this.x=o*-sinRY+i*cosRY};
			$(function(){var container=document.querySelector(".snow-container");if(/MSIE 6|MSIE 7|MSIE 8/.test(navigator.userAgent)){return}else{if(/MSIE 9|MSIE 10/.test(navigator.userAgent)){$(container).css("height",$(window).height()).bind("click",function(){$(this).fadeOut(1000, function(){$(this).remove()})})}}var containerWidth=$(container).width();var containerHeight=$(container).height();var particle;var camera;var scene;var renderer;var mouseX=0;var mouseY=0;var windowHalfX=window.innerWidth/2;var windowHalfY=window.innerHeight/2;var particles=[];var particleImage=new Image();particleImage.src="/sitoa/Public/img/snow.png";var snowNum=500;function init(){camera=new THREE.PerspectiveCamera(75,containerWidth/containerHeight,1,10000);camera.position.z=1000;scene=new THREE.Scene();scene.add(camera);renderer=new THREE.CanvasRenderer();renderer.setSize(containerWidth,containerHeight);var material=new THREE.ParticleBasicMaterial({map:new THREE.Texture(particleImage)});for(var i=0;i<snowNum;i++){particle=new Particle3D(material);particle.position.x=Math.random()*2000-1000;particle.position.y=Math.random()*2000-1000;particle.position.z=Math.random()*2000-1000;particle.scale.x=particle.scale.y=1;scene.add(particle);particles.push(particle)}container.appendChild(renderer.domElement);document.addEventListener("mousemove",onDocumentMouseMove,false);document.addEventListener("touchstart",onDocumentTouchStart,false);document.addEventListener("touchmove",onDocumentTouchMove,false);setInterval(loop,1000/40)}function onDocumentMouseMove(event){mouseX=event.clientX-windowHalfX;mouseY=event.clientY-windowHalfY}function onDocumentTouchStart(event){if(event.touches.length==1){event.preventDefault();mouseX=event.touches[0].pageX-windowHalfX;mouseY=event.touches[0].pageY-windowHalfY}}function onDocumentTouchMove(event){if(event.touches.length==1){event.preventDefault();mouseX=event.touches[0].pageX-windowHalfX;mouseY=event.touches[0].pageY-windowHalfY}}function loop(){for(var i=0;i<particles.length;i++){var particle=particles[i];particle.updatePhysics();with(particle.position){if(y<-1000){y+=2000}if(x>1000){x-=2000}else{if(x<-1000){x+=2000}}if(z>1000){z-=2000}else{if(z<-1000){z+=2000}}}}camera.position.x+=(mouseX-camera.position.x)*0.005;camera.position.y+=(-mouseY-camera.position.y)*0.005;camera.lookAt(scene.position);renderer.render(scene,camera)}init()});
		</script>
		<!--雪花特效 END-->

	</body>
</html>