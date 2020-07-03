@extends('adminlte.master')
@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">{{$question->title}}</h3>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <p>{{$question->content}}</p>
            <footer class="blockquote-footer">Created at: {{$question->created_at}}</footer>
    </div>
</div>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/jawaban/{{$question->id}}" method="post">
    @csrf
  <div class="form-group">
    <label for="content">Jawaban:</label>
    <input type="text" class="form-control" placeholder="Isi Pertanyaan" id="content" name="content">
  </div>
  <div class="form-group">
  <input type="hidden" class="form-control" name="created_at" value="{{now()}}">
  <input type="hidden" class="form-control" name="updated_at" value="{{now()}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection