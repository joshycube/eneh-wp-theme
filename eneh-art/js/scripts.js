var ENEH = namespace("ENEH");

ENEH.site = (function ($, doc, win, eneh) {

  parallax = function() {
    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this);
        $(win).scroll(function() {
            var yPos = -($(win).scrollTop() / $bgobj.data('speed')); 
            // Put together our final background position
            var coords = '50% '+ yPos + 'px';
            // Move the background
            $bgobj.css({ backgroundPosition: coords });
        }); 
    }); 
  }
  
  jumpTo = function() {
    $('.jumpto').on('click', function() {
      var dest = $(this).data('destination');
      $('html, body').animate({
	scrollTop: dest
      }, 600);
    });
  }
  
  menuChange = function() {
  
    var scrolled = false;
    //console.log( win.location.pathname);
    
    if(win.location.pathname === '/') {
  
      $(win).scroll(function() {

	if(this.scrollY >= 800 && scrolled === false) {
	
	  $("#artist-name").animate({
	    opacity: 0.55,
	  }, 10, function() {
	    $('#artist-icon').parent().removeClass('hide');
	    $('footer').show(1000);
	    scrolled = true;
	  });
	
	} else if(scrolled === true && this.scrollY <= 500) {
	
	  $("#artist-name").animate({
	    opacity: 0.55,
	  }, 10, function() {
	    $('#artist-icon').parent().addClass('hide');
	    $('footer').hide();
	    scrolled = false;
	  });
	  
	}
      });
    } else if(win.location.pathname.indexOf('category') === -1) {
      $('footer').show(1000);
    }
    
  }
  
  bouncingImages = function() {
    $('#art-categories').find('img').on('mouseover', function() {
      $(this).animate({
	top: "+=25",
      }, 500)
    }).on('mouseleave', function() {
      $(this).animate({
	top: "0",
      }, 500)
    });
  }
  
  listeners = function() {
    jumpTo();
    menuChange();
    bouncingImages();
    
    $('.hamburger').on('click', function() {
      $('#menu-main').toggle(500);
      $('.bottom-control').toggle(500);
    });
    
  }
	  
  return {
    parallax: parallax,
    listeners: listeners
  };

}(jQuery, document, window, ENEH));

ENEH.enehgal = (function ($, doc, win, eneh) {
	
  carousel = function() {
    var slides = $('#eneh-slide .art-slide');
    var items  = $(slides).length;
    var width  = $(slides).width();
    var total  = (items*width) + (30*items);
    //$('#eneh-slide').width(total);
    
    window.onload = function() {
      
      $('.image-container').on('click', function() {
	if($('#menu-main').css('display') === 'none') {
	  $('.bottom-control').toggle();
	  $('.top-bar').toggle();
	  $('#menu-main').hide(500);
	}
      });
      
      var slide  = $('#eneh-slide');
   
      $(slide).animate({
	  left: -200.5
      }, 500, 'linear');
    
      $('#step-left').on('click', function() {
	$(slide).animate({
	  left: '-=200.5'
	}, 500, 'linear', function() {
	  $('#eneh-slide li:last').after($('#eneh-slide li:first'));
	  $(slide).css({'left' : -200.5});
	});
      });
      
      $('#step-right').on('click', function() {
	$(slide).animate({
	  left: '+=200.5'
	}, 500, 'linear', function() {
	  $('#eneh-slide li:first').before($('#eneh-slide li:last'));
	  $(slide).css({'left' : -200.5});
	});
      });
      
      $('.art-slide').on('click', function() {
	var index = $(this).data('index');
	var stage = $('.stage-image');
	$(stage).addClass('hide');
	$(stage).removeClass('stage-image');
	var category  = document.getElementById('category'); 
	var nextstage = category.children[index];
	$(nextstage).addClass('stage-image').removeClass('hide');
      });
      
      $('.image-container').on('mouseover', function() {
	$('.bottom-control').hide(500);
	$('.top-bar').hide(500);
	$('#menu-main').hide(500);
      }).on('mouseleave', function() {
	$('.bottom-control').show(500);
	$('.top-bar').show(500);
	$('#menu-main').hide(500);
      });
    }
  }
  
  return {carousel: carousel};

}(jQuery, document, window, ENEH))

//Misc functions
function namespace(namespaceString) {
  var parts = namespaceString.split('.'),
    parent = window,
    currentPart = '';

  for(var i = 0, length = parts.length; i < length; i++) {
    currentPart = parts[i];
    parent[currentPart] = parent[currentPart] || {};
    parent = parent[currentPart];
  }

  return parent;
}

ENEH.site.parallax();
ENEH.site.listeners();
ENEH.enehgal.carousel();
