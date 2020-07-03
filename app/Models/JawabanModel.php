<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
class JawabanModel{
    public static function get_answer($id_q){
        $answers = DB::table('answers')->where('question_id',$id_q)->get();
        return $answers;
    }
    public static function save($id,$data){
        unset($data['_token']);
        $data["question_id"]=$id;
        $new_answer = DB::table('answers')->insert($data);
        return $new_answer;
    }
}
