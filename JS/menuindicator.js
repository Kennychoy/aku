
function menuIndicator(){
	var path = window.location.pathname;
	path = path.replace("/aku/", "");
	/*path = path.replace("/", "");*/
	path = path.replace("zh/", "");
	path = path.replace(".php", "");
	path = path.replace("?lang=en", "");
	path = path.replace("?lang=zh", "");
	path = path.replace(/[.]+material|solution|accessories/gi, "");
	
	switch (path) {
		case "index" :
		$("#menubar ul li:first-child").addClass("active");
		break;
		
		case "" :
		$("li:fist-child").addClass("active");
		break;
		
		case "about" :
		$("li:nth-child(2)").addClass("active");
		break;
		
		case "products" :
		$("li:nth-child(3)").addClass("active");
		break;
		
		case "reference" :
		$("li:nth-child(4)").addClass("active");
		break;
		
		case "associate" :
		$("li:nth-child(5)").addClass("active");
		break;
		
		case "contact" :
		$("li:last-child").addClass("active");
		break;
	}
};

function langPath (){
	var path  = window.location.pathname;
	path = path.replace("/aku/", "");
	path = path.replace("products/", "");
	path = path.replace("zh/", "");
	path = path.replace(".php", "");
	if ($("html").attr("lang") == "en") {
		if (path === "material" || path === "solution" || path === "accesscories"){
			$(".lang a:last-child").attr("href", "/aku/zh/products/" +path+ ".php");
		} else {
			$(".lang a:last-child").attr("href", "zh/" +path+ ".php");
		}
	} else {
		if (path === "material" || path === "solution" || path === "accesscories"){
			$(".lang a:first-child").attr("href", "/aku/products/" +path+ ".php");
		} else {
			$(".lang a:first-child").attr("href", "/aku/" +path+ ".php");
		}
	}
	console.log(path);
}

function langForXs(){
	if ($(window).width() > 767){
		$("nav").css("z-index", "-1");
		
	}
}

/*
		$(".lang a:last-child").attr("href", "zh/" +path+ ".php");
*/