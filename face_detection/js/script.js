  $(document).ready(function(){
	    $('.picture').faceDetection({
	        complete: function (faces) {
	        	for (var i = 0, l = faces.length; i < l; i++) {
	        		placeDiv(faces[i]);
	        	}
	        },
			error: function (code, message) {
				alert("Unable to detect faces! "+message);
			}	        
	    });
  });
  function placeDiv(coord) {
	   jQuery("<div>", {
	   		class: 'face',
			css: {
				position: "absolute",
				left    : coord.offsetX + "px",
				top     : coord.offsetY + "px",
				width   : coord.width + 10 +"px",
				height  : coord.height + 10 +"px",
			},
	   }).appendTo(document.body).fadeIn("slow");
  }