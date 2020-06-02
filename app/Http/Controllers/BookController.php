<?php

namespace App\Http\Controllers;

// リクエスト
use Illuminate\Http\Request;
// コントローラー
use App\Http\Controllers\Controller;
// バリデーションクラス
use App\Http\Requests\BookRequest;
// Entityクラス
use App\Book;

class BookController extends Controller
{
    // チュートリアル
    // https://qiita.com/sano1202/items/6021856b70e4f8d3dc3d


    // リスト画面
    public function index(){
        // DBよりBookテーブルの値を全て取得
        $books = Book::all();

        // 取得した値をビュー 「book/index」に渡す
        return view('book/index',compact('books'));
    }

    // 更新画面表示
    public function edit($id){
        // DBよりURIパラメータと同じIDを持つBookの情報を取得
        $book = Book::findOrFail($id);

        // 取得した値をView 「book/edit」に渡す
        return view('book/edit',compact('book'));
    }

    // 更新 バリデータ無し
//    public function update(Request $request,$id){
    // バリデータ有り
    public function update(BookRequest $request,$id){
            $book = Book::findOrFail($id);
        $book->name = $request->name;
        $book->price = $request->price;
        $book->author = $request->author;
        $book->save();

        return redirect("/book");
    }

    // 削除
    public function destroy($id){
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect("/book");
    }

    // 新規作成
    public function create(){
        // 空の値を渡す。空でも渡さないないとエラーになる
        $book = new Book();
        return view('book/create',compact('book'));
    }

    // 新規登録 バリデータ無し
//    public function store(Request $request){
    // バリデータ有り
    public function store(BookRequest $request){

        // デバック
        //eval(\Psy\Sh());

        $book = new Book();
        $book->name = $request->name;
        $book->price = $request->price;
        $book->author = $request->author;
        $book->save();

        return redirect("/book");
    }
}
