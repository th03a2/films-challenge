<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('casts')->insert([
            [
                'name' => 'Ryan Reynolds',
                'img' => 'http://localhost:8000/storage/casts/Ryan%20Reynolds.jpg',
                'descriptions'   => 'Ryan Rodney Reynolds is a Canadian-American actor, film producer, and entrepreneur. He began his career starring in the Canadian teen soap opera Hillside, and had minor roles before landing the lead role on the sitcom Two Guys and a Girl between 1998 and 2001',
                'born'=>'10/23/1976',
                'height'=>'1.88',
            ], 
            [
                'name' => 'Ralph Fiennes',
                'img' => 'http://localhost:8000/storage/casts/Ralph%20Fiennes.jpg',
                'descriptions'   => 'Ralph Nathaniel Twisleton-Wykeham-Fiennes born 22 December 1962 is an English actor, film producer, and director. A Shakespeare interpreter, he first achieved success onstage at the Royal National Theatre.',
                'born'=>'12/22/1962',
                'height'=>'1.88',
            ],  
            [
                'name' => 'Gemma Arterton',
                'img'  => null,
                'descriptions' => 'Gemma Christina Arterton born 2 February 1986 is an English actress and film producer. She made her professional stage debut playing Rosaline in Shakespeare\'s Love\'s Labour\'s Lost at the Globe Theatre (2007), and first appeared on film in the comedy St Trinian\'s (2007)',
                'born'=>'02/2/1986',
                'height'=>'1.88',
            ], 
            [
                'name' => 'Rhys Ifans',
                'img' => null,
                'descriptions'   => 'Rhys Ifans  born 22 July 1967 is a Welsh actor, producer, and singer. He is best known for his roles as Spike in Notting Hill, Jed Parry in Enduring Love, Eyeball Paul in Kevin & Perry Go Large, Dr. Curt Connors / The Lizard in The Amazing Spider-Man, Xenophilius Lovegood in Harry Potter and the Deathly Hallows – Part 1, Mycroft Holmes in the CBS series Elementary, and Hector DeJean in the Epix thriller series Berlin Station seasons.',
                'born'=>'07/22/1967',
                'height'=>'1.88',
            ], 
            [
                'name' => 'Tom Hardy',
                'img' => null,
                'descriptions'   => 'Edward Thomas Hardy CBE born 15 September 1977 is an English actor, producer, and former model. After studying acting at the Drama Centre London, he made his film debut in Ridley Scott\'s Black Hawk Down (2001)',
                'born'=>'08/15/1977',
                'height'=>'1.88',
            ], 
            [
                'name' => 'Michelle Williams',
                'img' => null,
                'descriptions'   => 'Michelle Ingrid Williams born September 9, 1980 is an American actress. Known for her roles in small-scale independent productions with dark or tragic themes, Williams is the recipient of several accolades, including two Golden Globe Awards, a Primetime Emmy Award, and nominations for four Academy Awards, three British Academy Film Awards and a Tony Award.',
                'born'=>'08/9/1980',
                'height'=>'1.88',
            ], 
            [
                'name' => 'Riz Ahmed',
                'img' => null,
                'descriptions'   => 'Ryan Rodney Reynolds is a Canadian-American actor, film producer, and entrepreneur. He began his career starring in the Canadian teen soap opera Hillside, and had minor roles before landing the lead role on the sitcom Two Guys and a Girl between 1998 and 2001',
                'born'=>'12/01/1982',
                'height'=>'1.88',
            ], 
        ]);
    }
}
