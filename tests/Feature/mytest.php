<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class mytest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        // テストデータの設定
        $book = new \App\Book;
        $book->name = "JavaEE";
        $book->price = 4000;
        $book->author = "寺田佳央";
        $book->save();

        // テストデータの読み込み
        $readBook = \App\Book::where('name','寺田佳央')->first();
        // データが取得できたか。
        $this->assertNotNull($readBook);
        $this->assertTrue('name','JavaEE');

        // テストデータの削除
        \App\Book::where('name','JavaEE')->delete();
    }
}
