<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
class PertanyaanModel{
    public static function get_all(){
        $questions = DB::table('questions')->get();
        return $questions;
    }
    public static function save($data){
        unset($data['_token']);
        $new_question = DB::table('questions')->insert($data);
        return $new_question;
    }
    public static function detail_q($id){
        $question = DB::table('questions')->where('id',$id)->first();
        return $question;
    }
    public static function update($id,$data){
        $question = DB::table('questions')
                    ->where('id',$id)
                    ->update([
                        'title'=>$data['title'],
                        'content'=>$data['content'],
                        'updated_at'=>$data['updated_at'],
                    ]);
        return $question;
    }
    public static function delete($id){
        $question = DB::table('questions')->where('id', '=', $id)->delete();
        return $question;
    }
}