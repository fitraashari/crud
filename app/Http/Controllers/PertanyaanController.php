<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;
class PertanyaanController extends Controller
{
    //
    public function index(){
        $questions = PertanyaanModel::get_all();
        //dd($questions);
        return view('pertanyaan.index', compact('questions'));
    }
    public function detail($id){
        $question = PertanyaanModel::detail_q($id);
        $answers = JawabanModel::get_answer($id);
        //dd($question);
        $data['pertanyaan'] = $question;
        $data['jawaban']=$answers;
        return view('pertanyaan.detail', $data);

    }

    public function create(){
        return view('pertanyaan.form');
    }
    public function edit($id){
        $question = PertanyaanModel::detail_q($id);
        return view('pertanyaan.edit',compact('question'));
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => ['required','max:191'],
            'content' => ['required','max:191'],
        ]);
        $question = PertanyaanModel::save($request->all());
        if($question){
            return redirect('/pertanyaan');
        }
        //dd($data);
        
    }
    public function update($id,Request $request){
        //dd($request->all());
        $question = PertanyaanModel::update($id,$request->all());
        return redirect('/pertanyaan');
    }
}
