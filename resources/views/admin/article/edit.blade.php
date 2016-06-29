@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">编辑文章</div>
                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>编辑失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/article/'.$article->UserId) }}" method="POST">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
						
						<label > 客户帐号 :{{ $article->UserId }}
						
						</label> 
                        <br>
						<label > 客户名称 
						<input type="text" name="username" class="form-control" required="required" placeholder="" value="{{ $article->UserName }}">
						</label> 
						<br>
						<label > 密码 
						<input type="text" name="password" class="form-control" required="required" placeholder="" value = "{{ $article->Password }}">
						</label> 
                        <textarea name="workno" rows="10" class="form-control"  placeholder=""  >{{ $article->WorkNo }}</textarea>
                       
                        <br>
                        <button class="btn btn-lg btn-info">提交修改</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection