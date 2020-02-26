<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'name' => 'Mr. Rahman',
            'title' => 'Software Engineer With 2+ Years Experience',
            'image1' => 'default_profile.png',
            'image2' => 'default_profile.png',
            'age' => '26',
            'phone' => '11111111111',
            'email' => 'example@gmail.com',
            'address' => 'Dhaka, Bangladesh',
            'website' => 'www.exapmle.com',
            'resume_file' => 'resume.pdf',
            'my_self' => 'I am professional in Web Design and Development, software development and ICT where has a challenging position and which is rapidly expanding and offers excellent advancement.',
            
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'youtube' => 'youtube',
            'twitter' => 'twitter',
            'linkedIn' => 'linkedIn',
            'skype' => 'skype',

            'theme_number' => 'theme1',
            'theme_color' => 'pink',
            'footer_text' => '2018 All Rights Reserved',
            'logo' => 'default_lofo.png',
            'meta_title' => 'I am professional in Web Design and Development',
            'meta_description' => 'I am professional in Web Design and Development, software development and ICT where has a challenging position and which is rapidly expanding and offers excellent advancement',
        ]);
    }
}
