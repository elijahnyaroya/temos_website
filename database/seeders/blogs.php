<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class blogs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table("blogs")->insert([
            array("category"=>"Teachers","title"=>"","description"=>"","imageFilePath"=>"http://127.0.0.1:8000/assets/images/blog/","imageFileName"=>"1.jpeg"),
            array("category"=>"Teachers","title"=>"","description"=>"","imageFilePath"=>"http://127.0.0.1:8000/assets/images/blog/","imageFileName"=>"1.jpeg"),
            array("category"=>"Teachers","title"=>"","description"=>"","imageFilePath"=>"http://127.0.0.1:8000/assets/images/blog/","imageFileName"=>"1.jpeg"),
            array("category"=>"Teachers","title"=>"","description"=>"","imageFilePath"=>"http://127.0.0.1:8000/assets/images/blog/","imageFileName"=>"1.jpeg"),
            array("category"=>"Teachers","title"=>"","description"=>"","imageFilePath"=>"http://127.0.0.1:8000/assets/images/blog/","imageFileName"=>"1.jpeg"),
            array("category"=>"Teachers","title"=>"","description"=>"","imageFilePath"=>"http://127.0.0.1:8000/assets/images/blog/","imageFileName"=>"1.jpeg"),
        ]);
    }
}
