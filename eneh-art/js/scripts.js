var ENEH = namespace("ENEH");

ENEH.site = (function ($, doc, win, eneh) {

  listeners = function() {
  }
  
  window.onload = function(){
    listeners();
  };
  
  resizeFooter = function() {
    
    if(window.innerWidth <= 800) {
      var element = $('#content, .pressWrap').jScrollPane({});
	if(element.length > 0) {
	  var api = element.data('jsp');

	  api.destroy(); 
	
      }
    }
    
  };
  	
  $(window).load(resizeFooter);
  $(window).resize(resizeFooter);
	  
  return {};

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
  
  jQuery('#content, .pressWrap').jScrollPane();
  
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
