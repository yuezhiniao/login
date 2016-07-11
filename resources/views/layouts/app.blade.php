<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
	
	<SCRIPT language="JavaScript" >  
   function changeCity( )  
  {  
       
     //创建数组，可以不指定大小   
     var cityList = new Array( );  
     //为数组赋值。每个单元格可以是数组。JavaScript不支持二维数组   
     cityList[0]=['重庆仁仁药业有限公司', '重庆重药医药有限公司', '重庆渝赣医药有限公司', '重庆普门医药有限公司'];  
     cityList[1]=['浙江仙居制药销售有限公司', '杭州华祥生物药品有限公司'];  
       
     //获得省份选项的索引号，如四川省为1，比对应数组索引号多1[这么说的原因是升级下拉列表第一项是'请选择省份'也占一个索引位置]  
     var pIndex=document.myform.selProvince.selectedIndex-1;   
     var newOption1;  
     document.myform.selCity.options.length=0;  
     for (var j in cityList[pIndex])   
     {  
         newOption1=new Option(cityList[pIndex][j], cityList[pIndex][j]);   
         document.myform.selCity.options.add(newOption1); 
				 
     }  
	
	 
  }  
  function myfun1( )  
  {  
       
     //创建数组，可以不指定大小   
     var cityList = new Array( );  
     //为数组赋值。每个单元格可以是数组。JavaScript不支持二维数组   
     cityList[0]=['沈阳双鼎制药有限公司', '沈阳澳华制药有限公司', '哈尔滨乐泰药业有限公司', '和田维吾尔药业有限责任公司', '重庆医药新特药品有限公司'];  
     cityList[1]=['重庆市全兴药品有限公司', '重庆海通医药有限公司', '重庆长圣医药有限公司', '江北区渝和堂大药房', '重庆北济医院有限公司'];  
     cityList[2] = ['广西桂玉医药有限责任公司', '海斯莱福药业（海南）有限公司', '重庆医药上海药品销售有限责任公司', '福建健安堂医药有限公司', '国药控股贵港有限公司'];  
	 cityList[3] = ['河南省济源市济世药业有限公司', '湖北福人金身药业有限公司', '山西德元堂药业有限公司', '吉林百琦药业有限公司', '北京浩雅方大医药有限公司'];  
	 
	 var cityList1 = new Array( );
	 cityList1[0]=['哈药集团制药总厂', '保定孚泰药业有限公司', '济南利蒙制药有限公司', '浙江万邦药业股份有限公司', '北京四环科宝制药有限公司'];  
     cityList1[1]=['长春生物制品研究所有限责任公司', '北京四环生物制药有限公司', '山东泰邦生物制品有限公司', '上海华新生物高技术有限公司', '上海莱士血液制品股份有限公司'];  
       
	 
     //获得省份选项的索引号，如四川省为1，比对应数组索引号多1[这么说的原因是升级下拉列表第一项是'请选择省份'也占一个索引位置]  
     var pIndex=document.myform.selCity.selectedIndex;   
	 var pyIndex=document.myform.selProvince.selectedIndex;
     var newOption1;  
     document.myform.selCity2.options.length=0; 
	 if (pyIndex==1)
     for (var j in cityList[pIndex])   
     {  
         newOption1=new Option(cityList[pIndex][j], cityList[pIndex][j]);   
         document.myform.selCity2.options.add(newOption1);  
     }  
	 
	 if (pyIndex==2)
     for (var j in cityList1[pIndex])   
     {  
         newOption1=new Option(cityList1[pIndex][j], cityList1[pIndex][j]);   
         document.myform.selCity2.options.add(newOption1);  
     }  
	
	
  }  
  
  
  
  
  
  
    
</SCRIPT>  
	
	
	
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
				 -->
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">首页</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">登录</a></li>
                        <li><a href="{{ url('/register') }}">注册</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>登出</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
