<?php
	$t=date("H");
	if($t<"10"){
		echo "Have a good Morning!";
	}
	elseif ($t<"20"){
		echo "Have a good day";
	}
	else {
		echo "Have a good night";
	}
?>