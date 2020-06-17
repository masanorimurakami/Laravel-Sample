<?php

namespace App\Http\Controllers;

// リクエスト
use Illuminate\Http\Request;
// コントローラー
use App\Http\Controllers\Controller;
// Entityクラス
use App\Book;

class PodTestController extends Controller
{
    // リスト画面
    public function index(){
        // DBよりBookテーブルの値を全て取得
        $books = Book::all();

        // 取得した値をビュー 「pdotest/index.blade.php」に渡す
        return view('pdotest/index',compact('books'));
    }
}
