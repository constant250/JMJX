!function(t,e,i,n){"use strict";function s(e,i){this.$element=t(e),this.options=t.extend({},h,i),this.init()}var o="sameHeight",h={oneHeightForAll:!1,useCSSHeight:!1},r=function(e){var i=0;return t.each(e,function(){var e=t(this).outerHeight();e>i&&(i=e)}),i},c={init:function(){function i(){n.getRow(0).length>1&&(n.setMinHeight(0),n.options.callback&&n.options.callback())}var n=this;n.index=0,n.$elms=n.$element.children(),n.cssProperty=n.options.useCSSHeight?"height":"min-height",t(e).on("resize."+o,function(){n.$elms.css(n.cssProperty,""),i()}),setTimeout(function(){i()},0)},setMinHeight:function(e){var i=this,n=i.options.oneHeightForAll?i.$elms:i.getRow(e),s=r(n);t.each(n,function(){t(this).css(i.cssProperty,s)}),!i.options.oneHeightForAll&&i.index<i.$elms.length-1&&i.setMinHeight(i.index)},getRow:function(e){var i=this,n=[],s=i.$elms.eq(e),o=s.position().top;return n.push(s),i.$elms.slice(e+1).each(function(){var e=t(this);return e.position().top!==o?(i.index=e.index(),!1):(n.push(e),void(i.index=e.index()))}),n},destroy:function(){var i=this;t(e).off("resize."+o),i.$elms.css(i.cssProperty,""),i.$element.removeData("plugin_"+o)}};t.extend(s.prototype,c),t.fn[o]=function(e){return this.each(function(){t.data(this,"plugin_"+o)||t.data(this,"plugin_"+o,new s(this,e))}),this}}(jQuery,window,document);


// Item: jQuery Event
// Name: Top Navbar Menu List
// Location: Header
$(window).on('load resize', function(){
	if ($(window).width() <= 992){	
		$('.top-navbar-menu').addClass( "large-block-grid-2 medium-block-grid-2 small-block-grid-2" );
		$('.agent-portal').append( $('.top-navbar-menu>.profile-dropdown') );
	}	
	else{
		$('.top-navbar-menu').removeClass( "large-block-grid-2 medium-block-grid-2 small-block-grid-2" );
		$('.top-navbar-menu').append( $('.agent-portal>.profile-dropdown') );
	}
});


// Item: jQuery Event
// Name: Side Navbar Menu Toggle
// Location: Header
$(".sidebar-toggle").click(function() {
	$(".sidebar").toggleClass("reveal-sidebar");
	$(".sidebar-profile").toggleClass("reveal-profile");
	$(".sidebar-overlay").toggleClass("reveal-overlay");
});

// Item: jQuery Event
// Name: Profile Mobile Trigger
// Location: Header (Agent Portal)
$(".profile-mobile-trigger").click(function() {
	$("html").toggleClass("overflow-hidden");
	$(".main-wrapper").toggleClass("reveal-profile-mobile");
	$(".profile-dropdown").toggleClass("reveal-profile-mobile");
});

// Item: jQuery Event
// Name: Collapsible Table
// Location: Global
$(".table-collapsible tbody tr").hide().slice(0, 3).show();
$(".hide-all").on("click", function() {
  	$(".table-collapsible tbody tr").hide().slice(0, 3).show();
  	$(this).css({"display": "none"});
  	$(".show-all").css({"display": "block"});
});
$(".show-all").on("click", function() {
  	$(".table-collapsible tbody tr", $(this).prev()).show();
  	$(this).css({"display": "none"});
  	$(".hide-all").css({"display": "block"});
});


// Item: Slick Slider
// Name: Template List
// Location: Global
$(document).ready(function($){
	var slick_slider = $('.template-list');
	slick_slider.slick({
		slidesToShow: 3,
		infinite: true,
		vertical: true,
		draggable: false,
		dots: false,
		autoplay: false,
		autoplaySpeed: 0,
		responsive: [
			{
				breakpoint : 992,
				settings: {
					slidesToShow: 3
				}
			}
		]
	});
	$(".carousel-next").click(function(){slick_slider.slick('slickNext');})
});


// Window Resize
$(window).on('load resize', function(){
  if ($(window).width() <= 767){  
    $('.dropdown-responsive').addClass( "dropdown-menu" );
  } 
  else{
    $('.dropdown-responsive').removeClass( "dropdown-menu" );
  }
});
// FIXED SIDEBAR NAV
  $(function () {
    var sidebar = $('.sidebar .sidebar-nav');
    var top = sidebar.offset().top - parseFloat(sidebar.css('margin-top'));

    $(window).scroll(function (event) {
      var y = $(this).scrollTop();
      if (y >= top) {
        sidebar.addClass('fixed');
      } else {
        sidebar.removeClass('fixed');
      }
    });
});

    // Tabs minimized 
  // ADD TADSPACER
      $(function(){
  var $container = $('.tabs .nav-tabs');
  
  updateTabs($container);
  $(window).resize(function(){
    updateTabs($container);
  })
  
  function updateTabs($tabsContainer){
      var $containerWidth = $tabsContainer.width();
      var tabWidths = [];
      var $tabs = $tabsContainer.find('li');
      $tabs.each(function(index, tab){
        tabWidths.push($(tab).width());
      });

      var formattedTabs = [];
      var maxWidth = $containerWidth;
      var maxWidthSet = false;
      var rowWidth = 0;
      for(var i = tabWidths.length - 1; i >= 0; i--){
          var tabWidth = tabWidths[i];
          if(rowWidth + tabWidth > maxWidth){
            if(!maxWidthSet){
              maxWidth = rowWidth;
              maxWidthSet = true;
            }
            rowWidth = tabWidth;
            formattedTabs.unshift($('<div class="tab-spacer"></div>'));
          }else{
            rowWidth += tabWidth;
          }
          formattedTabs.unshift($tabs.get(i));
      }

      var $tempContainer = $('<div></div>');
      formattedTabs.forEach(function(tab, index){
        $tempContainer.append(tab);
      });
      $tabsContainer.html($tempContainer.html());
  }

});