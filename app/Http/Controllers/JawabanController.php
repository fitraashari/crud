<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
class JawabanController extends Controller
{
    public function index($id){
        $answers = JawabanModel::get_answer($id);
        $data['jawaban']=$answers;
        //dd($data);
        return view('jawaban.index',$data);
    }
    public function store($id,Request $request){
        $validatedData = $request->validate([
            'content' => ['required','max:191'],
        ]);
        //dd($validatedData);
        $data = $request->all();
        $data["question_id"]=$id;
        unset($data['_token']);
        //dd($data);
        $answer = JawabanModel::save($data);
        if($answer){
            return redirect('pertanyaan/detail/'.$id);
        }
    }
}
