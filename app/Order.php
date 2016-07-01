<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	
	protected $table = 'TabAppOrderStatus';
	protected $primaryKey = 'waveid';
    public static function sql(){
		$serverName = "(local)";  
		$connectionInfo = array("Database"=>"jj");  
		$conn = sqlsrv_connect( $serverName, $connectionInfo);    
		if( $conn === false )  
		{  
		echo "Could not connect.\n";  
		die( print_r( sqlsrv_errors(), true));  
		}  
         $tsql = "exec ProcAppTest"; //调用存储过程 未完成订单状态 --起波次,拣货,复核,集货,发运
		  $x = sqlsrv_query( $conn, $tsql);
		   $result_object = array();
		   
		   //存储过程中每一个select都会产生一个结果集，取某个结果集就需要从第一个移动到需要的那个结果集
			//如果结果集为空就移到下一个
		    while (sqlsrv_has_rows($x) !== TRUE) {
            sqlsrv_next_result($x);
        }
		
		
		    while (($row = sqlsrv_fetch_object($x))==true) {
            $result_object[] = $row;
         }
          
		 return  $result_object;
		
	}
	
	 
}
