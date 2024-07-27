<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    public function run()
    {
        DB::table('social_medias')->insert([[
            'facebook' => '',
        ],
        [
            'instagram' => '',
        ],
        [
            'twitter' => '',
        ],
        [
            'youtube' => '',
        ],
        [
            'youtube_embed' => '',
        ],
        [
            'linkedin' => '',
        ],
        [
            'email' => '',
        ],
        [
            'phone' => '',
        ],
        [
            'whatsapp' => '',
        ],
        [
            'whatsapp_group' => '',
        ],
        [
            'map_embed' => '',
        ],
        [
            'facebook_embed' => '',
        ],
        [
            'created_at' => '',
        ],
        [
            'updated_at' => '',
        ]]
        
        );

        

    }
}
