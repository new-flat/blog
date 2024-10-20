<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use App\Http\Requests\BlogRequest;


class BlogController extends Controller
{
    /**
     * ブログ一覧を表示する
     * 
     * @return view
     */
    public function showList()
    {
        $blogs = Blog::all();

        return view('blog.list', compact('blogs'));
    }

    /**
     * ブログ詳細を表示する
     * @param int $id
     * @return view
     */
    public function showDetail($id)
    {
        // Blogモデル内のリレーション('comments')も一緒に取得
        $blog = Blog::with('comments')->find($id);

        if (is_null($blog)) {
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('blogs'));
        }

        return view('blog.detail', compact('blog'));
    }

    public function storeComment(Request $request, $id)
    {
        //バリデーション
        $request->validate([
            'author' => 'required|string|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        // コメントの保存
        Comment::create([
            'blog_id' => $id,
            'author' => $request->input('author'),
            'comment' =>  $request->input('comment'),
        ]);

        return redirect()->route('show', ['id' => $id])->with('status', 'コメントが投稿されました！');
    }

    /**
     * ブログ登録画面を表示する
     * 
     * @return view
     */
    public function showCreate() 
    {
        return view('blog.form');
    }

    /**
     * ブログ登録する
     * 
     * @return view
     */
    public function exeStore(BlogRequest $request) 
    {
        // ブログのデータを受け取る
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            //ブログを登録
            Blog::create($inputs);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'ブログを登録しました');
        return redirect(route('blogs'));
    }

    /**
     * ブログ編集を表示する
     * @param int $id
     * @return view
     */
    public function showEdit($id)
    {
        $blog = Blog::find($id);

        if (is_null($blog)) {
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('blogs'));
        }

        return view('blog.edit', compact('blog'));
    }

    /**
     * ブログ更新する
     * 
     * @return view
     */
    public function exeUpdate(BlogRequest $request) 
    {
        // ブログのデータを受け取る
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            //ブログを更新
            $blog = Blog::find($inputs['id']);
            $blog->fill([
                'title' => $inputs['title'],
                'content' => $inputs['content'],
            ]);
            $blog->save();
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'ブログを更新しました');
        return redirect(route('blogs'));
    }

    /**
     * ブログ編集を表示する
     * @param int $id
     * @return view
     */
    public function exeDelete($id)
    {
        if (empty($id)) {
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('blogs'));
        }

        try {
            //ブログを削除
            Blog::destroy($id);
        } catch(\Throwable $e) {
            abort(500);
        }

        \Session::flash('err_msg', '削除しました');
        return redirect(route('blogs'));
    }


}