<?php

namespace App\Http\Controllers\order;

use Illuminate\Http\Request;
use App\Order;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class ordercontroller extends Controller
{
	//置于中间件控制之下
	public function __construct(){
	 $this->middleware('auth');
	}
	//显示主页
    public function index(){
		return view('order/home');
	}
	//调用库中的存储过程
	public function sql(){
		/*
		$serverName = "(local)";  
		$connectionInfo = array("Database"=>"php");  
		$conn = sqlsrv_connect( $serverName, $connectionInfo);    
		if( $conn === false )  
		{  
		echo "Could not connect.\n";  
		die( print_r( sqlsrv_errors(), true));  
		}  
         $tsql = "exec test";
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
		 */
          
		  return view ('order/sql')->withSql(Order::sql());
	  
		
  
		// else  
		// {  
		// echo "Error in retrieving server info.\n";  
		// die( print_r( sqlsrv_errors(), true));  
		// }  
		
	}
	
	//直接读取表中数据 
	public function sqltable (){
		$x = Order::paginate(15);
		
		return view ('order/sql')->withSql($x);
		
	}
	
	//查找订单 
	public function ffff(Request $request){
		$x = $request->get('waveid');
		
		 return view ('order/ffff')->withFfff(Order::where('waveid',$x)->get());
		
	}
	
	//追踪订单
	public function waveid($waveid ){
		
		 return view ('order/waveid') ->withWaveid(Order::find($waveid));
		
	}
}
