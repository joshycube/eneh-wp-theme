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
  
    $(win).scroll(function() {

      if(this.scrollY >= 800 && scrolled === false) {
      
	$("#artist-name").animate({
	  opacity: 0.55,
	}, 10, function() {
	  $('#artist-icon').parent().removeClass('hide');
	  scrolled = true;
	});
      
      } else if(scrolled === true && this.scrollY <= 500) {
      
	$("#artist-name").animate({
	  opacity: 0.55,
	}, 10, function() {
	  $('#artist-icon').parent().addClass('hide');
	  scrolled = false;
	});
	
      }
    });
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
  }
	  
  return {
    parallax: parallax,
    listeners: listeners
  };

}(jQuery, document, window, ENEH));

ENEH.enehgal = (function ($, doc, win, eneh) {
	
  listeners = function() {
    $('.enehGal ul li img').click('live', function() {
      var medium = $(this).data('medium');
      var orig = $(this).data('orig');
      var coverParent = $('#enehGalCover').parent();
      var imgIndex = $(this).parent().index()+1;
      
      /*$('#enehGalCover').fadeOut(577, function() { 
	$('#enehGalCover').attr('src', medium);
	$(coverParent).attr('href', orig);
	$(coverParent).attr('data-lightbox', 'image-'+imgIndex);
	$('#enehGalCover').fadeIn(577);
      });*/
     
    });
  }
  
  window.onload = function(){
    listeners();
  };
  
  return {};

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
