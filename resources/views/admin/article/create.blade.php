@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">新增帐号</div>
                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>新增失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif    
					      <form name="myform" id="myform" action="{{ url('admin/article') }}" method="POST">
                        {!! csrf_field() !!}
 
								
								<TABLE width="472" border="0"  cellpadding="0" cellspacing="0"  >  
								  
								  <TR  >  
									<TD align="center">医药仓库 </TD>  
									<TD><SELECT name="selProvince" id="selProvince" onChange="changeCity( )"  class="form-control" >  
									  <OPTION>--请选择仓库--</OPTION>  
									  <OPTION>重庆捷江</OPTION>  
									  <OPTION>航空开发公司</OPTION>  
									  
									</SELECT></TD>  
								  </TR>  
								  <TR>  
									<TD><DIV align="center">委托方</DIV></TD>  
									<TD><SELECT name="selCity" id="selCity" onChange="myfun1( )" class="form-control" >  
									  <OPTION>--请选择委托方--</OPTION>  
									   </SELECT></TD>  
								  </TR>  
								   <TR>  
									<TD><DIV align="center">客户</DIV></TD>  
									<TD><SELECT name="selCity2" id="selCity2" onChange="myfun2( )" class="form-control" >  
									  <OPTION>--请选择客户--</OPTION>  
									   </SELECT></TD>  
								  </TR>  
								</TABLE>  
								 
						
						
						
						 
                        <label > 客户帐号 
						<input type="text" name="userid" class="form-control"  required="required" placeholder="必须为数字">
						</label> 
                        <br>
						<!--
						<label > 所属域 </label>
						<select name="category_id" class="form-control" >
							@foreach($client as $yy)
					        
							<option value="">{{$yy->clientname}}</option>
							
                            @foreach($yy->hasManya as $yyy)
						  
						    <option value="">{{$yyy->custom}}</option>
						     
							
						  	@endforeach						
						@endforeach
					  </select>
					  	
						   <select name="t1" class="form-control" >
						 @foreach($yy->hasManya as $yyy)
						  
						    <option value="">{{$yyy->custom}}</option>
						     
							
						  	@endforeach	
						 </select>
						  <br>
						  --->
						<label > 客户名称 
						<input type="text" name="username" class="form-control"  required="required" placeholder="">
						</label> 
						<br>
						<label > 密码 
						<input type="password" name="password" class="form-control" required="required" placeholder="">
						</label> 
						<br>
						<label > 手机号 
						<input type="text" name="phone" class="form-control" required="required" placeholder="">
						</label> 
						<label > 消息发送方式: 
						<input type="checkbox" name="one" > <label >手机短信</label>
						<input type="checkbox" name="two" > <label >app</label>
						<input type="checkbox" name="three" > <label >微信</label>
						</label> 
                        <textarea name="memo" rows="5" class="form-control"  placeholder="备注"></textarea>
                        <br>
                        <button class="btn btn-lg btn-info">新增帐号</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection