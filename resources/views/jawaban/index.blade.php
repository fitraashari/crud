@extends('adminlte.master')
@section('content')
@if (!$answers->isEmpty())

@foreach ($answers as $key=> $answer)
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Jawaban {{$key+1}}</h3>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
            {{$answer->content}}
            <footer class="blockquote-footer">{{$answer->created_at}}</footer>
    </div>
</div>

@endforeach

<a href="/pertanyaan/detail/{{$answer->question_id}}" class="btn btn-dark mb-2">Kembali</a>
@else
    <h2>Belum Ada jawaban</h2>
@endif

@endsection