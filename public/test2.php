<?php

if(isset( $_POST[ 'submit' ] ) {
	$name = $_POST[ 'name' ];
	$name1 = $_POST[ 'name1' ];
	$output = false;
	
	if( empty( $name ) && empty( $name1 ) ) {
		echo "both ";
		$output = true ;
	}
	
	if( empty( $name ) && !empty( $name1 ) ) {
		echo "$name1 ";
		$output = true ;
	}
	
	if( !empty( $name ) && empty( $name1 ) ) {
		echo "$name1 ";
		$output = true ;
	}
	
}
else {
	$output = true ;
}

if ( $output) {
	
?>

<html>
<body>
	<form name = "form" action = "<?php echo $_SERVER[ 'PHP_SELF' ]; ?>" method = "POST" >
	<input name = "name" type = "text" value = "<?php echo $name ; ?>"></input>
	<textarea name = "name1" > </textarea>
	<input name = "submit" type = "submit"> </input>
</body>
</html>

<?php
}
?>	





	