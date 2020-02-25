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
            'image1' => 'https://segmetrics.io/wp-content/themes/segmetrics/assets/img/customers/avatar5.png',
            'image2' => 'https://segmetrics.io/wp-content/themes/segmetrics/assets/img/customers/avatar5.png',
            'title' => 'Software Engineer With 2+ Years Experience',
            'my_self' => 'I am professional in Web Design and Development, software development and ICT where has a challenging position and which is rapidly expanding and offers excellent advancement.',
            'logo' => 'https://cdn0.iconfinder.com/data/icons/cartoon-hand-gestures-1/100/objects-09-512.png',
            'age' => '26',
            'phone' => '11111111111',
            'email' => 'example@gmail.com',
            'resume_file' => 'https://cdn0.iconfinder.com/data/icons/cartoon-hand-gestures-1/100/objects-09-512.png',
            'website' => 'www.exapmle.com',
            'address' => 'Dhaka, Bangladesh',
            'footer_text' => '2018 All Rights Reserved',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'youtube' => 'youtube',
            'twitter' => 'twitter',
            'linkedIn' => 'linkedIn',
            'skype' => 'skype'
        ]);
    }
}
