@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
<p> 追踪</p>
<p> 订单号:{{$waveid->listid}}          波次号:{{$waveid->waveid}} </p>
<br/>
<p> {{$waveid->MakeTime}} ------->订单导入     </P>
<p> {{$waveid->starttime}} ------->波次启动,开始拣货     </P>
<p> {{$waveid->AcceptTime}} ------->拣货完毕,开始复核     </P>
<p> {{$waveid->checktime}} ------->复核完毕,开始集货     </P>
<p> {{$waveid->buildtime}} ------->集货完毕,等待发运     </P>
<p> {{$waveid->sendtime}} ------->发运出库     </P>

</div>
</div>
</div>
</div>
@endsection



