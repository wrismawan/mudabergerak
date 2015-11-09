<?php 
	
	if ($_FILE['foto']['tmp_name'] != ''){
		echo $_FILE['foto']['tmp_name'];
	} else {
		echo 'haha';
	}
?>