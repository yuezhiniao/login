@extends('layouts.app')

@section('content')
<p  > sql</p>
<form action ="{{url('order/ffff')}}"  method = "POST" >
  {{ csrf_field() }}
<label > 波次号: </label> <input  type = "text" name = "waveid"> </input>
<button type ="submit" > 查找 </button>
</form>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

<!--
<div class="container">
   <table border="1">
<tr>
<td>波次号</td>
<td>订单编号</td>
<td>订单状态</td>

<td> </td>
</tr>
@foreach ($sql as $yy)
<tr>
<td> 
	<div class="content">
        <p>
            {{ $yy->waveid }}
        </p>
	</div>
</td>
<td> 
	<div class="content">
        <p>
            {{ $yy->listid }}
        </p>
	</div>
</td>
<td> 
	<div class="content">
        <p>
            {{ $yy->WorkStatusName }} 
        </p>
	</div>
</td>


<td> 
	<div class="content">
	 <p>
        <a href ="{{url('order/'.$yy->waveid.'/waveid')}}" class="btn " >
            追踪
		</a>
        </p> 
	</div>
</td>
</tr>

@endforeach

</table>
</div>

!-->
	@foreach ($sql as $yy)
                        <hr>
                        <div class="container">
                            <p>波次号: {{ $yy->waveid }}</p>
                            <div class="content">
                                <p>
                                   订单编号:     {{ $yy->listid }}   订单状态:     {{ $yy->WorkStatusName }}         
								  <a href ="{{url('order/'.$yy->waveid.'/waveid')}}" class="btn " > 追踪    </a>
                                </p>
                            </div>
                        </div>
                       
	@endforeach
	
					</div>
					<?php echo $sql->render(); ?>  
				</div>
			</div>
		</div>
	

@endsection
