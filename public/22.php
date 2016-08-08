<?php 
	function hello() 
	{
		echo "<option >gfdgdf</option>";;
	}
	hello();
	function select1()
	{
		
	
	$serverName = "127.0.0.1";
$connectionInfo = array( "Database" => "php", "UID" => "sa", "PWD" => "643525599" );
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn) {
	echo "Connection ing ";
	
} else {
	echo "Connection could not ing";
	die( print_r( sqlsrv_errors(), true));
}

$sql = "select  * from tabappusers";
$stmt = sqlsrv_query( $conn, $sql );
if ( $stmt === true ){
	echo "ing";
}
if( $stmt === false) {
	echo "ingddd";
    die( print_r( sqlsrv_errors(), true) );
}


while ( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC ) ){
	echo "<option >". $row['UserName'] ."</option>";
	
}
	
	

sqlsrv_free_stmt( $stmt);  
sqlsrv_close( $conn);		
	
}
	
	
	?>
	
	 
	
	<html>
    <body>
	<form name = "test" action = "test.php"   method ="POST"> 
	<select  name = "ddd" onchange ="<?php hello() ?>" > 
	<option value = "1d"> dsfsdf </option>
	<?php 
	select1();
	?>
	</select>
	<select  name = "dddd"  > 
	<option value = "1d"> 1 </option>
	<?php 
	select1();
	?>
	</select>
	
	<label name = "yu" > ceshi </label>
	<input name = "yy" type="text" > </input>
	</br>
	<input type = "submit">tijiao </input>
	 <!-- <button > submit </button> -->
	</form>
	</body>
  
	