<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use App\Tabappuser;
class ArticleController extends Controller
{
    public function index()
    {
        return view('admin/article/index')->withArticles(Tabappuser::all());
    }
    
    public function create()
    {
        return view('admin/article/create');
    }
    
    public function edit($UserId)
    {
		$x=$UserId;
        return view('admin/article/edit')->withArticle(Tabappuser::where('UserId',$x)->first());
    }

    public function store(Request $request) // Laravel 的依赖注入系统会自动初始化我们需要的 Request 类
    {
        // 数据验证
        // $this->validate($request, [
            // 'title' => 'required|unique:tabappuser|max:255', // 必填、在 articles 表中唯一、最大长度 255
            // 'body' => 'required', // 必填
        // ]);

        // 通过 Article Model 插入一条数据进 articles 表
        $article = new Tabappuser; // 初始化 Article 对象
        $article->UserId = $request->get('userid'); // 将 POST 提交过了的 title 字段的值赋给 article 的 title 属性
        $article->UserName = $request->get('username'); // 同上
		$article->Password = $request->get('password'); // 同上
		$article->WorkNo = $request->get('username'); // 同上
		
        //$article->user_id = $request->user()->id; // 获取当前 Auth 系统中注册的用户，并将其 id 赋给 article 的 user_id 属性
        
        // 将数据保存到数据库，通过判断保存结果，控制页面进行不同跳转
        if ($article->save()) {
            return redirect('admin/article'); // 保存成功，跳转到 文章管理 页
        } else {
            // 保存失败，跳回来路页面，保留用户的输入，并给出提示
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }
	
	public function update(Request $request, $UserId)
    {
        // $this->validate($request, [
            // 'title' => 'required|unique:articles,title,'.$id.'|max:255',
            // 'body' => 'required', 
        // ]);
        $article = Tabappuser::find($UserId);
        $article->UserName = $request->get('username');
        $article->Password = $request->get('password');
		$article->WorkNo = $request->get('workno');
        if ($article->save()) {
            return redirect('admin/article');
        } else {
            return redirect()->back()->withInput()->withErrors('更新失败！');
        }
    }
/*
   public function update(Request $request, $UserId)
    {
        // $this->validate($request, [
            // 'userid' => 'required|unique:Tabappuser,UserId,'.$UserId.'|max:255',
            // 'password' => 'required', 
        // ]);
        //$article =  Tabappuser::where('UserId',$UserId)->first();
		 $article = new Tabappuser;
        
        $article->UserName = $request->get('username');
		$article->Password = $request->get('password');
		$article->WorkNo = $request->get('workno');
		return redirect('admin/article');
         // if ($article->save()) {
            // return redirect('admin/article');
         // } else {
             // return redirect()->back()->withInput()->withErrors('更新失败！');
         // }
    }
	*/

    public function destroy($UserId)
    {
        Tabappuser::where('Userid',$UserId)->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }
}