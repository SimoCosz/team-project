<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        
        foreach($comics as $c){
            $comics = new Comic();

            $comics->title = $c['title'];
            $comics->description = $c['description'];
            $comics->thumb = $c['thumb'];
            $comics->price = $c['price'];
            $comics->series = $c['series'];
            $comics->sale_date = $c['sale_date'];
            $comics->type = $c['type'];
            
            $comics->save();
        }
    }
}
