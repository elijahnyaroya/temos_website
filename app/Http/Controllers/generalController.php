<?php

namespace App\Http\Controllers;

use App\Models\class_myteacher;
use App\Models\classgroupstudent;
use App\Models\classvideosubscription;
use App\Models\educationsystem;
use App\Models\educationsystemuser;
use App\Models\faq;
use App\Models\paymentparent;
use App\Models\platformrevenue;
use App\Models\questions_answer;
use App\Models\schoolclasse;
use App\Models\studentclassattendance;
use App\Models\subjectsubtopic;
use App\Models\subjecttopic;
use App\Models\systemuser;
use App\Models\teachersalary;
use App\Models\trainingslot;
use App\Models\videoquestion_answer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class generalController extends Controller
{
    //

    static function jsonConvertor($json){
        return json_decode(json_encode($json),true);
    }

    static function returnUserID(){
        $session = Session::get('userlogin');

        return $session['userID'];
    }
    static function referrerID(){
        $session = Session::get('userlogin');

        return $session['inviteeID']==""?"null":$session['inviteeID'];
    }
    static function returnUserDetails($type){
        $session = Session::get('userlogin');

        if ($type=="category"){
            return $session['category'];
        }else if ($type=="schooID"){
            return "001";
        }else{
            return "notallowed";
        }

    }

    static function returnPhoneNo(){
        $session = Session::get('userlogin');
        return $session['phoneNo'];
    }
    static function isUserParent(){
        $session = Session::get('userlogin');
        if ($session['category']=="parent"){
            return  "parent";
        }else  if ($session['category']=="student"){
            return  "student";
        }else  if ($session['category']=="teacher"){
            return  "teacher";
        }else  if ($session['category']=="administrator"){
            return  "administrator";
        }else{
         return "notallowed";
        }
    }


    static function formatToHumanReadable($datePassed){
        //$datePassed = $result = mb_substr($datePassed, 0, 8);
        $date = Carbon::createFromFormat('Y-m-d', $datePassed)->format('Y-m-d');
        $rowDate = new \Illuminate\Support\Carbon($date);
        $year = $rowDate->year;
        $month =  substr($rowDate->englishMonth, 0, 3);;
        $day = $rowDate->day;

        return $day.", ".$month. "  ".$year;

    }
    static function getClassName($classID){
         return schoolclasse::where("classID","=",$classID)->max("className");
    }

    static  function getEducationSystem($classID){
        $systemID = schoolclasse::where("classID","=",$classID)->max("educationsystemID");
        $educationSystem = educationsystem::where("id","=",$systemID)->max("educationSystem");
        return $educationSystem;
    }
    static  function returnDetails($category,$dataID){
        if($category=="topic"){
            return subjecttopic::where("topicID","=",$dataID)->max("topicName");
        }else if($category=="subtopic"){
            return subjectsubtopic::where("subtopicID","=",$dataID)->max("subtopicName");
        }else if($category=="teacher"){
            $teacher = systemuser::where("userID","=",$dataID)->first();
            return $teacher->firstname." ".$teacher->lastname;
        }else if($category=="educationsystem"){
            return educationsystem::where("id","=",$dataID)->max("educationSystem");
        }else if($category=="participant"){

            $result = classgroupstudent::where("myTeacherClassID","=",$dataID)->max("groupNo");
            return $result==""?"0":$result;
        }else if($category=="time"){

            $time = trainingslot::where("id","=",$dataID)->first();
            return $time !=null? $time->weekday." (".$time->starTime." - ".$time->endTime.")":"";
        }
    }

    static function returnScore($answerID){
        $questionanswer = questions_answer::where("id","=",$answerID)->first();
        $answer = $questionanswer->answer;
        $choices1 = $questionanswer->choices1;
        $choices2 = $questionanswer->choices2;
        $choices3 = $questionanswer->choices3;
        $choices4 = $questionanswer->choices4;
        if ($choices1=="Null" && $choices2=="Null" &&$choices3=="Null" &&$choices4=="Null" ){
            return 0;
        } else if ($choices1!="Null" && $choices2=="Null" &&$choices3=="Null" &&$choices4=="Null" ){
            return $answer == $choices1?"1":"0";
        }else if ($choices1=="Null" && $choices2!="Null" &&$choices3=="Null" &&$choices4=="Null" ){
            return $answer == $choices2?"1":"0";
        }else if ($choices1=="Null" && $choices2=="Null" &&$choices3!="Null" &&$choices4=="Null" ){
            return $answer == $choices3?"1":"0";
        }else if ($choices1=="Null" && $choices2=="Null" &&$choices3=="Null" &&$choices4!="Null" ){
            return $answer == $choices4?"1":"0";
        }
    }

    static function totalScores($studentID,$trainingID){
        $questionanswer = questions_answer::where("studentID","=",$studentID)->where("trainingID","=",$trainingID)->get();
        $totalMarks =0;
        $studentScores =0;
        for ($i=0;$i<count($questionanswer);$i++){
            $answer = $questionanswer[$i]['answer'];
            $choices1 = $questionanswer[$i]['choices1'];
            $choices2 = $questionanswer[$i]['choices2'];
            $choices3 = $questionanswer[$i]['choices3'];
            $choices4 = $questionanswer[$i]['choices4'];

            if ($choices1=="Null" && $choices2=="Null" &&$choices3=="Null" &&$choices4=="Null" ){
                $studentScores = $studentScores + 0;
            } else if ($choices1!="Null" && $choices2=="Null" &&$choices3=="Null" &&$choices4=="Null" ){
                $result = $answer == $choices1?1:0;
                $studentScores = $studentScores + $result;
            }else if ($choices1=="Null" && $choices2!="Null" &&$choices3=="Null" &&$choices4=="Null" ){
                $result = $answer == $choices2?1:0;
                $studentScores = $studentScores + $result;
            }else if ($choices1=="Null" && $choices2=="Null" &&$choices3!="Null" &&$choices4=="Null" ){
                $result = $answer == $choices3?1:0;
                $studentScores = $studentScores + $result;
            }else if ($choices1=="Null" && $choices2=="Null" &&$choices3=="Null" &&$choices4!="Null" ){
                $result = $answer == $choices4?1:0;
                $studentScores = $studentScores + $result;
            }
            $totalMarks = $totalMarks+1;
        }

        return  $studentScores."/".$totalMarks;


    }

    static function totalVideoScores($studentID,$videoID){
        $questionanswer = videoquestion_answer::where("studentID","=",$studentID)->where("videoID","=",$videoID)->get();
        $totalMarks =0;
        $studentScores =0;
        for ($i=0;$i<count($questionanswer);$i++){
            $answer = $questionanswer[$i]['answer'];
            $choices1 = $questionanswer[$i]['choices1'];
            $choices2 = $questionanswer[$i]['choices2'];
            $choices3 = $questionanswer[$i]['choices3'];
            $choices4 = $questionanswer[$i]['choices4'];

            if ($choices1=="Null" && $choices2=="Null" &&$choices3=="Null" &&$choices4=="Null" ){
                $studentScores = $studentScores + 0;
            } else if ($choices1!="Null" && $choices2=="Null" &&$choices3=="Null" &&$choices4=="Null" ){
                $result = $answer == $choices1?1:0;
                $studentScores = $studentScores + $result;
            }else if ($choices1=="Null" && $choices2!="Null" &&$choices3=="Null" &&$choices4=="Null" ){
                $result = $answer == $choices2?1:0;
                $studentScores = $studentScores + $result;
            }else if ($choices1=="Null" && $choices2=="Null" &&$choices3!="Null" &&$choices4=="Null" ){
                $result = $answer == $choices3?1:0;
                $studentScores = $studentScores + $result;
            }else if ($choices1=="Null" && $choices2=="Null" &&$choices3=="Null" &&$choices4!="Null" ){
                $result = $answer == $choices4?1:0;
                $studentScores = $studentScores + $result;
            }
            $totalMarks = $totalMarks+1;
        }

        return  $studentScores."/".$totalMarks;


    }

    static function checkStudentAmount($studentID){
        $amount = paymentparent::where("studentID","=",$studentID)->max("totalAmount");
        if ($amount >= env("MIN_AMOUNT")){
            return true;
        }else{
            return false;
        }

    }
    static function checkStudentClassPaid($studentID,$trainingID){
        $count = \DB::table('platformrevenues')
            ->whereDate('created_at', '=', now()->toDateString())
            ->where('userID', '=', $studentID)
           // ->where('teacherID', '=', $teacherID)
            ->where('trainingID', '=', $trainingID)
            ->where('isActive', '=', "yes")
            ->count();
        if ($count >0){
            return true;
        }else{
            return false;
        }

    }

    static function getFaqs(){
        return faq::all();
    }

    static function  paymentDistribution($trainingID){
        $studentID  =  self::returnUserID();
        $teacherID = class_myteacher::where("id","=",$trainingID)->max("teacherID");
        $count = studentclassattendance::where("trainingID","=",$trainingID)->where("studentID","=",$studentID)->count();
        if ($count < 1) {
            //registering student attendance
            $obj = new studentclassattendance();
            $obj->trainingID = $trainingID;
            $obj->studentID = $studentID;
            $obj->save();

            Log::info("Location no 1");
            $totalPayments = env("MIN_AMOUNT");
            $referalAmount = env("REFERRAL_AMOUNT");
            $refererID = self::referrerID();
            Log::info("Location no 2");
            //remit payments for the referrers

            if ($refererID != "null") {
                Log::info("Location no 3");
                $salary = teachersalary::where("teacherID", "=", $refererID)->first();
                $totalPayments = $totalPayments - $referalAmount;
                $Amount = $salary->Amount + $referalAmount;
                $salary->Amount = $Amount;
                $salary->save();
                Log::info("Location no 4");
            }
            Log::info("Location no 5");
            $salaryTeacher = teachersalary::where("teacherID", "=", $teacherID)->first();
            Log::info("Location no 6");
            if ($salaryTeacher == null) {
                Log::info("Location no 7");
                $obj = new teachersalary();
                $obj->teacherID = $teacherID;
                $obj->Amount = $totalPayments;
                $obj->save();
                Log::info("Location no 8");
            } else {
                Log::info("Location no 9");
                $Amount = $salaryTeacher->Amount + $totalPayments;
                $salaryTeacher->Amount = $Amount;
                $salaryTeacher->save();
                Log::info("Location no 10");
            }


        }
    }

    static function getStudentDetails($category){
        $studentID = self::returnUserID();
        if ($category=="subscriptionplan"){
            return educationsystemuser::where("userID","=",$studentID)->count();
        }else if ($category=="remainingamount"){
            return paymentparent::where("studentID","=",$studentID)->max("totalAmount");
        }else if ($category=="upcomingclasses"){
            $date = date("Y-m-d");
            return count($class = \DB::select("SELECT mc.*,concat(sy.firstname,' ',sy.lastname) as teacherName,sy.userID,s.subjectName,
                             st.topicName FROM `class_myclasses` mc left join systemusers sy on mc.teacherID left join
                             subjects s on mc.subjectID =s.subjectID left join subjecttopics st on mc.topicID = st.topicID
                                 left join subjectsubtopics sst on
                            mc.subtopicID = sst.subtopicName where mc.studentID ='$studentID' and date(mc.trainingDate) = '$date' group by mc.myclassID; "));
        }else if ($category=="oldclasses"){
            $date = date("Y-m-d");
            $class = \DB::select("SELECT mc.*,concat(sy.firstname,' ',sy.lastname) as teacherName,sy.userID,s.subjectName,
                             st.topicName FROM `class_myclasses` mc left join systemusers sy on mc.teacherID left join
                             subjects s on mc.subjectID =s.subjectID left join subjecttopics st on mc.topicID = st.topicID
                                 left join subjectsubtopics sst on
                            mc.subtopicID = sst.subtopicName where mc.studentID ='$studentID' and date(mc.trainingDate) < '$date' group by mc.myclassID order by mc.trainingDate desc ; ");

            return count($class);
        }else if ($category=="videos"){
            $date = date("Y-m-d");
            $datas =  generalController::jsonConvertor(\DB::select("SELECT count(cvs.id) as total FROM `classvideosubscriptions` cvs where cvs.studentID and cvs.datemade >= '$date';"));
         return   $datas == ""?"0":$datas[0]['total'];
        }else{
            return "0";
        }
    }
}

