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
					<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
					      <form name="myform" id="myform" action="{{ url('admin/article') }}" method="POST">
                        {!! csrf_field() !!}
 
								
								<TABLE width="500" border="0"  cellpadding="10" cellspacing="10"  >  
								<col width="25%"><col width="75%">
								  
								  <TR  >  
									<TD align="center">连接 </TD>  
									<TD><SELECT name="selProvince" id="selProvince" onChange="changeCity( )"  class="form-control" >  
									  <OPTION>--请选择连接--</OPTION>  
									  <OPTION>重庆捷江</OPTION>  
									  <OPTION>航空开发公司</OPTION>  
									  <OPTION>万昌医药</OPTION>
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
									<TD><SELECT name="selCity2" id="selCity2"  class="form-control" >  
									  <OPTION>--请选择客户--</OPTION>  
									   </SELECT></TD>  
								  </TR>  
								  <TR>
								  <TD><DIV align="center">客户帐号</DIV></TD> 
								  <TD><DIV align="center"><input type="text" name="userid" class="form-control"  required="required" placeholder="必填,字母和数字组合"></DIV></TD>
								  </TR>  
								  </TR>   
								  <TR>
								  <TD><DIV align="center">客户名称</DIV></TD> 
								  <TD><DIV align="center"><input type="text" name="username" class="form-control"  required="required" placeholder="必填"></DIV></TD>
								  </TR> 
								  <TR>
								  <TD><DIV align="center" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >密码</DIV></TD> 
								  <TD><DIV align="center"><input type="password" name="password" class="form-control" required="required" placeholder="必填,至少6位"></DIV></TD>
								   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                  @endif
								  
								  </TR>
								  <TR>
								  <TD><DIV align="center" class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" >确认密码</DIV></TD> 
								  <TD><DIV align="center"><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="required" placeholder=""></DIV></TD>
								  @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
								  
								  </TR>
								  <TR>
								  <TD><DIV align="center">手机号</DIV></TD> 
								  <TD><DIV align="center"><input type="text" name="phone" class="form-control" required="required" placeholder="必填"></DIV></TD>
								  </TR>  
								  <TR>
								  <TD><DIV align="center">微信帐号</DIV></TD> 
								  <TD><DIV align="center"><input type="text" name="weixinid" class="form-control"   placeholder=""></DIV></TD>
								  </TR> 
								  <TR>
								  <TD><DIV align="center">微信昵称</DIV></TD> 
								  <TD><DIV align="center"><input type="text" name="weixinname" class="form-control"  placeholder=""></DIV></TD>
								  </TR> 
								  
								  
								</TABLE>  
								<label > 消息发送方式: 
								<input type="checkbox" name="one" > <label >手机短信</label>
								<input type="checkbox" name="two" > <label >app</label>
								<input type="checkbox" name="three" > <label >微信</label>
								 <br>
								 <button  class="btn btn-lg btn-info">新增帐号</button>
						
						</form>
						 <!--
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
						  ---
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
						-->
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection