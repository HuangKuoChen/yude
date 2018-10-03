$(function() {
	// Fix menu bar on top.
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 80) {
			$('#header_menu').addClass('fixed');
			$("#pagetop").fadeIn();
		} else {
			$('#header_menu').removeClass('fixed');
			$("#pagetop").fadeOut();
		}
	});
	$(".popup").click(function(){
		$(this).remove();
	})
    $("#font_small a").click(function(){
		SetFontSize("small");
	});
	$("#font_medium a").click(function (){
		SetFontSize("medium");
	});
	$("#font_large a").click(function(){
		SetFontSize("large");
	});
	UpdateFontSize();
	UpdateMenu();
});

// Update menu
function UpdateMenu() {
	var page = $("#content").attr("name");
	$("#" + page + "_btn").addClass("on");
}

// Update font size
function UpdateFontSize() {
	switch(GetCookie("size")) {
		case "small":
			SetFontSize("small");
			break;
		case "medium":
			SetFontSize("medium");
			break;
		case "large":
			SetFontSize("large");
			break;
		default:
			SetFontSize("small");
			break;
	}
}

// Set font size
function SetFontSize(size) {
	$("body").removeClass("small medium large").addClass(size);
	$("#font_size a").removeClass("on");
	$("#font_" + size + " a").addClass("on");
	SetCookie("size", size);
}

// Get cookie information
function GetCookie(key) {
	cookie = document.cookie;
	if(cookie.indexOf(key) <= -1) {
		return "";
	}
	return cookie.split(key + "=")[1].split(";")[0];
}

// Set cookie information
function SetCookie(key, value) {
	document.cookie = key + "="+ value;
}

// Show popup
function ShowPopup(img) {
	$("body").append("<div class='popup'></div>");
	$(".popup").css("height", $(window).height() + "px");
	$(".popup").append("<img class='popup_img' src='" + img +　"'>");
	$(".popup_img").css({"height":$(window).height() * 0.95 + "px", "margin-top":$(window).height() * 0.025 + "px"});
	$(".popup").click(function(e){
		if(e.target != this)
			return;
		$(this).remove();
		$(window).off('.noScroll');
	});
}

function InitialReportArea() {
	$("#report_big img").hide(); 
	$("#report_big img:first").show();
	$("#report_nav a:first").addClass("active");;
	$("#report_nav a").click(function(){
		$("#report_nav a").removeClass("active");
		$(this).addClass("active");
		$("#report_big img").hide();
		var reportImg = $(this).attr("href");
		$(reportImg).fadeIn();
		return false;
	});
	$(".report_big_img").click(function(){
		ShowPopup($(this).attr('src'));
	});
	if($("#outer_report_nav").prop('scrollHeight') < $("#inner_report_nav").prop('scrollHeight'))
	{
		$("#scroll_down").fadeIn();
	}
	$("#inner_report_nav").scroll(function() {
		if ($(this).scrollTop() > 0) {
			$("#scroll_up").fadeIn();
		} else {
			$("#scroll_up").fadeOut();
		}
		if($(this).scrollTop() >= $("#inner_report_nav").prop('scrollHeight') - $("#outer_report_nav").prop('scrollHeight')) {
			$("#scroll_down").fadeOut();
		} else {
			$("#scroll_down").fadeIn();
		}
	});
	$("#scroll_up").click(function(){
		$("#inner_report_nav").scrollTop(0);
		return false;
	});
	$("#scroll_down").click(function(){
		$("#inner_report_nav").scrollTop($("#inner_report_nav").scrollTop() + 20);
		return false;
	});
}

$(function () {
    setTimeout('rect()'); //アニメーションを実行
});

function rect() {
    $('#rect').animate({
        marginTop: '-=10px'
    }, 800).animate({
        marginTop: '+=10px'
    }, 800);
    setTimeout('rect()', 1600); //アニメーションを繰り返す間隔
}