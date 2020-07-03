<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
class JawabanModel{
    public static function get_answer($id_q){
        $answers = DB::table('answers')->where('question_id',$id_q);
        return $answers;
    }
    public static function save($data){
        $new_answer = DB::table('answers')->insert($data);
        return $new_answer;
    }
}
