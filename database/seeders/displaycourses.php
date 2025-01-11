<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class displaycourses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $url = asset("website/courses/")."/";
        \DB::table("displaycourses")->insert([
            array("courseName"=>"Swahili","coursetitle"=>"Kiswahili Kitukuzwe","likes"=>"23","dislike"=>"5","rating"=>"","imageFilePath"=>$url,"imageFileName"=>"swahili.jpeg","description"=>""),
            array("courseName"=>"Science","coursetitle"=>"Biological Chemical","likes"=>"3","dislike"=>"2","rating"=>"","imageFilePath"=>$url,"imageFileName"=>"science.jpeg","description"=>""),
            array("courseName"=>"Mathematics","coursetitle"=>"STD 7 Mathematic","likes"=>"10","dislike"=>"7","rating"=>"","imageFilePath"=>$url,"imageFileName"=>"maths.jpeg","description"=>""),
            array("courseName"=>"English ","coursetitle"=>"Class Seven English","likes"=>"7","dislike"=>"10","rating"=>"","imageFilePath"=>$url,"imageFileName"=>"english.jpeg","description"=>""),
        ]);
    }
}
