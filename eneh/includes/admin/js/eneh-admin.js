var ENEH = namespace("ENEH");

ENEH.admin = (function ($, doc, win, eneh) {
	
  listeners = function() {
  	$('.option-item').click('live', function() {
  		$(this).next().toggle();
  		return false;
  	});
  }
  
  window.onload = function(){
   $('head').append('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">');
	 listeners();
  };
  
  return {
  };

}(jQuery, document, window, ENEH));

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
