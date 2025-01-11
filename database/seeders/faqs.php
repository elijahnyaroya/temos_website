<?php

namespace Database\Seeders;

use App\Models\faq;
use Illuminate\Database\Seeder;

class faqs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       /* \DB::table("faqs")->insert([
           array("questions"=>"What are the technical requirements to take the online class?","answer"=>"You will need a computer, a high-speed internet connection, an up-to-date web browser, and access to commonly used tools and software (such as word processors, email, etc).",) ,
           array("questions"=>"What are the entry requirements for the  eLearning program?","answer"=>"The  online program is currently offered to learners who are in need of help in some subject areas and those who want to accelerate their learning.",) ,
           array("questions"=>"How do I contact my tutor?","answer"=>"Your instructor will always be online to offer help needed You can communicate with your instructor through newsgroups, bulletin boards, discussion forums, assignment submissions.",) ,
           array("questions"=>"How is test  administered?","answer"=>"After every revision you will find a self-marking quiz.",) ,
           array("questions"=>"How do I find  my grades for the online courses I've taken?","answer"=>"You can view your grades under growth area ",) ,
        ]);*/

        $obj = new faq();
        $obj ->questions = "questions";
        $obj -> answer= "answer" ;
        $obj -> save();
    }
}
