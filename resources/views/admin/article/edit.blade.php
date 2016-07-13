@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">编辑帐号</div>
                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>编辑失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif
					<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
                    <form action="{{ url('admin/article/'.$article->id) }}" method="POST" name= "myform">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
						
						<TABLE width="472" border="0"  cellpadding="0" cellspacing="0"  >  
							<col width="25%"><col width="75%">	  
								  <TR  >  
									<TD align="center">连接 </TD>  
									<TD><SELECT name="selProvince" id="selProvince" onChange="changeCity( )"  class="form-control" >  
									  <OPTION >--{{ $article->repname }}--</OPTION>  
									  <OPTION>重庆捷江</OPTION>  
									  <OPTION>航空开发公司</OPTION>
									 <OPTION>万昌医药</OPTION>
									  
									</SELECT></TD>  
								  </TR>  
								  <TR>  
									<TD><DIV align="center">委托方</DIV></TD>  
									<TD><SELECT name="selCity" id="selCity" onChange="myfun1( )" class="form-control" >  
									  <OPTION>--{{ $article->conname }}--</OPTION>  
									   </SELECT></TD>  
								  </TR>  
								   <TR>  
									<TD><DIV align="center">客户</DIV></TD>  
									<TD><SELECT name="selCity2" id="selCity2" onChange="myfun2( )" class="form-control" >  
									  <OPTION>--{{ $article->clientname }}--</OPTION>  
									   </SELECT></TD>  
								  </TR>  
								   <TR>
								  <TD><DIV align="center">客户帐号</DIV></TD> 
								  <TD><DIV align="center" class="form-control" >{{ $article->UserId }}</DIV></TD>
								  </TR>  
								  </TR>   
								  <TR>
								  <TD><DIV align="center">客户名称</DIV></TD> 
								  <TD><DIV align="center"><input type="text" name="username" class="form-control" required="required" placeholder="" value="{{ $article->UserName }}"></DIV></TD>
								  </TR> 
								  <TR>
								  <TD><DIV align="center">密码</DIV></TD> 
								  <TD><DIV align="center"><input type="password" name="password" class="form-control" required="required" placeholder="" value = "{{ $article->Password }}"></DIV></TD>
								  </TR>
								  <TR>
								  <TD><DIV align="center">手机号</DIV></TD> 
								  <TD><DIV align="center"><input type="text" name="phone" class="form-control" required="required" placeholder="" value="{{ $article->phone }}"></DIV></TD>
								  </TR>  
								  <TR>
								  <TD><DIV align="center">微信帐号</DIV></TD> 
								  <TD><DIV align="center"><input type="text" name="phone" class="form-control" required="required" placeholder="" value="{{ $article->weixinid }}"></DIV></TD>
								  </TR> 
								  <TR>
								  <TD><DIV align="center">微信昵称</DIV></TD> 
								  <TD><DIV align="center"><input type="text" name="phone" class="form-control" required="required" placeholder="" value="{{ $article->weixinname }}"></DIV></TD>
								  </TR> 
								</TABLE>  
								<label > 消息发送方式: 
								<input type="checkbox" name="one"  >
								<label >手机短信</label>
								<input type="checkbox" name="two"  > <label >app</label>
								<input type="checkbox" name="three"  > <label >威信</label>
								</label> 
						
						
						
						
						
						
						
						<!--
						<label > 客户帐号 :{{ $article->UserId }}
						
						</label> 
                        <br>
						<label > 客户名称 
						<input type="text" name="username" class="form-control" required="required" placeholder="" value="{{ $article->UserName }}">
						</label> 
						<br>
						<label > 密码 
						<input type="password" name="password" class="form-control" required="required" placeholder="" value = "{{ $article->Password }}">
						</label> 
						
						<label > 手机号 
						<input type="text" name="phone" class="form-control" required="required" placeholder="" value="{{ $article->phone }}">
						</label> 
						<label > 消息发送方式: 
						<input type="checkbox" name="one"  >
						<label >手机短信</label>
						<input type="checkbox" name="two"  > <label >app</label>
						<input type="checkbox" name="three"  > <label >威信</label>
						</label> 
						
						
						
						
                        <textarea name="memo" rows="5" class="form-control"  placeholder=""  >{{ $article->memo }}</textarea>
                       -->
                        <br>
                        <button class="btn btn-lg btn-info">提交修改</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection