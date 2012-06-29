	function play(numS,numE) {    
	    audio.currectTime = 0;
	    audio.play();
	    numS = numS + 1;
	    if(numS < numE) {
	         setTimeout("play("+numS+","+numE+")", 2000);
	    }    
	}