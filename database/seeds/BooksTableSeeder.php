<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
        DB::table('books')->truncate();

        // 初期データ用意
        $books = [
            ['name' => 'PHP Book',
             'price' => 2000,
             'author' => 'PHPER'],
             ['name' => 'Laravel Book',
             'price' => 3000,
             'author' => 'Laraver'],
             ['name' => 'Ruby Book',
             'price' => 2500,
             'author' => 'Rubyist'],
        ];

        // 登録
        foreach ($books as $book) {
            \App\Book::create($book);
        }

    }
}
