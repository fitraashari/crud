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
        
        //dd($data);
        $answer = JawabanModel::save($id,$request->all());
        if($answer){
            return redirect('pertanyaan/'.$id);
        }
    }
}
