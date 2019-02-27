<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
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
        $book1->author_id = $author1->id;
        $book1->save();

        $book2 = new \App\Book();
        $book2->title = "Laimes ziburys";
        $book2->author_id = $author1->id;
        $book2->save();

        $book3 = new \App\Book();
        $book3->title = "Mazasis princas";
        $book3->author_id = $author2->id;
        $book3->save();
    }
}
