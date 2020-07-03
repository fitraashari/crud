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
    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => ['required','max:191'],
            'content' => ['required','max:191'],
        ]);
        $data = $request->all();
        unset($data['_token']);
        $question = PertanyaanModel::save($data);
        if($question){
            return redirect('pertanyaan');
        }
        //dd($data);
        
    }
}
