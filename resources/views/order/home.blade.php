@extends('layouts.app')

@section('content')
<p> 开始</p>
<a href ="{{url('order/sql')}} ">
<button type = 'submit' > 调用存储过程</button>
</a>

@endsection
