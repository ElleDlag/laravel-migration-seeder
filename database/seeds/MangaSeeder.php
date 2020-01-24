<?php
//collegare anche la classe del model
use App\Manga;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //old style
    public function run(Faker $faker)
    {

        //La quantità va inserita qui
        for ($i=0; $i < 30; $i++) { 
            $data = [
                'preview'=> 'photo',
                'title'=> $faker -> word,
                'autor'=> $faker -> name,
                'publication'=> $faker -> date($format = 'Y-m-d', $max = 'now') ,
                'rating'=> $faker -> randomFloat($nbMaxDecimals = 1, $min = 0, $max = 9),
                'votes'=> rand(0, 5000)
            ];

            //creare un oggetto che sarà poi usato
            $manga = new Manga;
            $manga ->fill($data);
            $manga -> save();
        }
        
        
    }
}
