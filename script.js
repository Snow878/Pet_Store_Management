(function() {
	var preload = document.getElemnetById(".preload");
	var loading =0;
	var id = setInterval(frame, 64);

	function frame(){
		if(loading == 100){
			clearInterval(id);
			window.open("pet_hom.html");
		}
		}

	}
});