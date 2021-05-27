<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'genre' => 'action',
                'title' => 'The King\'s Man',
                'descriptions'   => '',	
                'director'=>'Matthew Vaughn',
                'production_company'=>'Marv Studios, Cloudy Productions',
                'cast_ids' => '[2,3,4]', 
                'poster'=>'http://localhost:8000/storage/movies/the%20kings%20man.jpg',
                'trailer'=>'https://www.youtube.com/watch?v=5zdBG-iGfes'
            ],  
            [
                'genre' => 'action',
                'title' => 'Venom: Let There Be Carnage',
                'descriptions'   => '',
                'director'=>'Andy Serkis',
                'production_company'=>'Columbia Pictures, Marvel Entertainment, Tencent Pictures',
                'cast_ids' => '[5,6,7]',  
                'poster'=>'http://localhost:8000/storage/movies/Venom.jpg',
                'trailer'=>'https://www.youtube.com/watch?v=-ezfi6FQ8Ds'
            ], 
            [
                'genre' => 'adventure',
                'title' => 'Luca',
                'descriptions'   => '',
                'director'=>'Enrico Casarosa',
                'production_company'=>'Walt Disney Pictures, Pixar Animation Studios',
                'cast_ids' => '[8,9,10]',  
                'poster'=>'http://localhost:8000/storage/movies/Luca.jpg',
                'trailer'=>'https://www.youtube.com/watch?v=0hgHY9k-44U'
            ], 
            [
                'genre' => 'action, supernatural',
                'title' => 'Spider-Man: No Way Home',
                'descriptions'   => '',
                'director'=>'Jon Watts',
                'production_company'=>'Columbia Pictures, Marvel Studios, Pascal Pictures',
                'cast_ids' => '[11,12,13]',
                'poster'=>'http://localhost:8000/storage/movies/Spider-man.jpg',  
                'trailer'=>'https://www.youtube.com/watch?v=EYf1S-ZBmBo'
            ], 
            [
                'genre' => 'action, adventure, supernatural',
                'title' => 'Raya and the Last Dragon',
                'descriptions'   => '',
                'director'=>'Don Hall, Carlos López Estrada',
                'production_company'=>'	Walt Disney Pictures, Walt Disney Animation Studios',
                'cast_ids' => '[14,15,16]',
                'poster'=>'http://localhost:8000/storage/movies/raya.jpg',  
                'trailer'=>'https://www.youtube.com/watch?v=1VIZ89FEjYI'
            ], 
            [
                'genre' => 'adventure, supernatural',
                'title' => 'Soul',
                'descriptions'   => '',
                'director'=>'Pete Docter',
                'production_company'=>'	Walt Disney Pictures, Pixar Animation Studios',
                'cast_ids' => '[17,18,19]',
                'poster'=>'http://localhost:8000/storage/movies/soul.jpg',  
                'trailer'=>'https://www.youtube.com/watch?v=1VIZ89FEjYI'
            ], 
            [
                'genre' => 'Horror, suspense, action',
                'title' => 'Alive',
                'descriptions'   => '',
                'director'=>'Cho Il-hyung',
                'production_company'=>'ZIP Cinema, Perspective Pictures',
                'cast_ids' => '[20,21,22]',
                'poster'=>'http://localhost:8000/storage/movies/alive.jpg',  
                'trailer'=>'https://www.youtube.com/watch?v=jQ8CCg1tOqc'
            ]
        ]);
    }
}
