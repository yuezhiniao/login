@extends('layouts.app')

@section('content')
<p  > sql    ffff</p>
<form action ="{{url('order/ffff')}}"  method = "POST" >
  {{ csrf_field() }}
<label > 波次号: </label> <input  type = "text" name = "waveid"> </input>
<button type ="submit" > 查找 </button>
</form>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
	@foreach ($ffff as $yy)
                        <hr>
                        <div class="article">
                            <p>波次号: {{ $yy->waveid }}</p>
                            <div class="content">
                                <p>
                                   订单编号:  {{ $yy->listid }}   订单状态 {{ $yy->WorkStatusName }}      
								    <a href ="{{url('order/'.$yy->waveid.'/waveid')}}" class="btn " > 追踪    </a>
                                </p>
                            </div>
                        </div>
                       
	@endforeach
	</div>
	</div>
	</div>
	</div>

@endsection
