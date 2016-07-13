@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">帐号管理</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <a href="{{ url('admin/article/create') }}" class="btn btn-lg btn-primary">新增</a>
					<hr>
					<TABLE  border="1" > 
					 <TR >  
									<TD align="center">客户帐号 </TD> 
									<TD align="center">客户名称 </TD> 
									<TD align="center">连接 </TD> 
									<TD align="center">委托方 </TD> 
									<TD align="center">客户 </TD> 
									<TD align="center"> </TD> 
									<TD align="center"> </TD> 
									 </TR>  
					 @foreach ($articles as $article)
					 
								  
								  <TR >  
									
									<TD>{{ $article->UserId }} </TD>  
									 
									<TD>{{ $article->UserName }} </TD> 
									<TD>{{ $article->repname }} </TD> 
									<TD>{{ $article->conname }} </TD> 
									<TD>{{ $article->clientname }} </TD> 
									<TD><a href="{{ url('admin/article/'.$article->id.'/edit') }}"  >编辑</a></TD>
									<TD> <form action="{{ url('admin/article/'.$article->id) }}" method="POST" style="display: inline;">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" >删除</button>
                        </form>
						</TD>
									 </TR> 
									
								 
					
					
					@endforeach
					</table>
					
                    <!--
                    @foreach ($articles as $article)
                        <hr>
                        <div class="article">
                            <p>客户帐号: {{ $article->UserId }}</p>
                            <div class="content">
                                <p>
                                   客户名称:  {{ $article->UserName }}
                                </p>
                            </div>
                        </div>
                        <a href="{{ url('admin/article/'.$article->UserId.'/edit') }}" class="btn btn-success" >编辑</a>
                        <form action="{{ url('admin/article/'.$article->UserId) }}" method="POST" style="display: inline;">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">删除</button>
                        </form>
                    @endforeach
					-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection