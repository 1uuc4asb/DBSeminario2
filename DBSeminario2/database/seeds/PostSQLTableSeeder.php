<?php

use Illuminate\Database\Seeder;

class PostSQLTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PostSql::class, 50)->create();
    }
}
