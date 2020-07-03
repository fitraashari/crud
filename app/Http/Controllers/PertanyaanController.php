<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

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
        //dd($question);
        return view('pertanyaan.detail', compact('question'));
    }
    public function create(){
        return view('pertanyaan.form');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
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
