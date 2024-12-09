$(document).ready(function(){
		$('.mp-slider')._TMS({
			show:0,
			pauseOnHover:false,
			prevBu:'.mp-prev',
			nextBu:'.mp-next',
			duration:1000, //duración de transicion del texto
			preset:'simpleFade',
			pagination:false,//'.pagination',true,'<ul></ul>'
			pagNums:false,
			slideshow:3000, //duración de transicion de las imágenes en 3 segundos
			numStatus:false,
			banners:'fade',// fromLeft, fromRight, fromTop, fromBottom
			waitBannerAnimation:false
		})		
 })