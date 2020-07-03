@extends('adminlte.master')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Pertanyaan</h3>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="/pertanyaan/form" class="btn btn-primary">Input Pertanyaan</a>
<table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pertanyaan</th>
        <th>Tanggal</th>
        <th>...</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($questions as $key => $question)
       
      <tr>
      <td>{{$key+1}}</td>
      <td>{{$question->title}}</td>
      <td>{{$question->content}}</td>
      <td>{{$question->created_at}}</td>
      <td> <a href="pertanyaan/detail/{{$key+1}}" class="btn btn-sm btn-success">Detail</a></td>
      </tr>
                  
      @endforeach
    </tbody>
  </table>
    </div>
</div>
  @endsection