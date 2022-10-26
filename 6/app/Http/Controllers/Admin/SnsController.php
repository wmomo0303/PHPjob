<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Posts;
use App\User;
use SebastianBergmann\Environment\Console;

class SnsController extends Controller
{



    public function add()
    {
        return view('admin.sns.index');
    }

    
    public function index(Request $request)
    {
        //バリデーション
        $this->validate($request, Posts::$rules);

        $sns = new Posts;

        $form = $request->all();

        //フォームから送られてきた_tokenを削除する
        unset($form['_token']);

        //データベースに保存する
        $sns->fill($form);
        $sns->save();
        
        return redirect('admin/sns/index');
    }


    //一覧表示
    public function list(Request $request)
    {
        $user_list = User::all();
        $post_list = Posts::latest()->get();
    return view('admin.sns.index', ['users' => $user_list, 'posts' => $post_list]);
    }

    
    //記事削除
    public function delete(Request $request)
    {
        $post = Posts::find($request->id);
        $post->delete();

        return redirect('admin/sns/index');
    }

}
