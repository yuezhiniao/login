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

                    <form action="{{ url('admin/article') }}" method="POST">
                        {!! csrf_field() !!}
                        <label > 客户帐号 
						<input type="text" name="userid" class="form-control" required="required" placeholder="">
						</label> 
                        <br>
						<label > 客户名称 
						<input type="text" name="username" class="form-control" required="required" placeholder="">
						</label> 
						<br>
						<label > 密码 
						<input type="text" name="password" class="form-control" required="required" placeholder="">
						</label> 
                        <textarea name="body" rows="10" class="form-control"  placeholder="备注"></textarea>
                        <br>
                        <button class="btn btn-lg btn-info">新增帐号</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection