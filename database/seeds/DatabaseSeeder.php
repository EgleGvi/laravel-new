<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    //sukuria pradinius duomenis - autorius ir knygas.
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $author1 = new \App\Author();
        $author1->name = "Jonas";
        $author1->surname = "Biliunas";
        $author1->save();

        $author2 = new \App\Author();
        $author2->name = "Ernestas";
        $author2->surname = "Hemingvejus";
        $author2->save();

        $book1 = new \App\Book();
        $book1->title = "Brisiaus galas";
        $book1->pages = "540";
        $book1->isbn = "VT89523588";
        $book1->short_description = "Lorem ipsum dolor sit amet, ius elit nostrum omnesque in, tritani ornatus accusata eum no, ad honestatis temporibus usu. Tantas electram ne sed, eum velit eirmod adipisci eu, ei est audiam perfecto splendide.";
        $book1->author_id = $author1->id;
        $book1->save();

        $book2 = new \App\Book();
        $book2->title = "Laimes ziburys";
        $book2->pages = "350";
        $book2->isbn = "VT8952000";
        $book2->short_description = "Lorem ipsum dolor sit amet, ius elit nostrum omnesque in, tritani ornatus accusata eum no, ad honestatis temporibus usu. Tantas electram ne sed, eum velit eirmod adipisci eu, ei est audiam perfecto splendide.";
        $book2->author_id = $author1->id;
        $book2->save();

        $book3 = new \App\Book();
        $book3->title = "Mazasis princas";
        $book3->pages = "240";
        $book3->isbn = "VT8958888588";
        $book3->short_description = "Lorem ipsum dolor sit amet, ius elit nostrum omnesque in, tritani ornatus accusata eum no, ad honestatis temporibus usu. Tantas electram ne sed, eum velit eirmod adipisci eu, ei est audiam perfecto splendide.";
        $book3->author_id = $author2->id;
        $book3->save();
    }
}
