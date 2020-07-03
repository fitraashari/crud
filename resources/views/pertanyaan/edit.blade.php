@extends('adminlte.master')
@section('content')
<div class="row">
  <div class="col-lg-6">
    
<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Edit Question</h3>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/pertanyaan/{{$question->id}}" method="post">
    @csrf
    @method("PUT")
  <div class="form-group">
    <label for="title">Title:</label>
  <input type="text" class="form-control" value="{{$question->title}}" placeholder="Judul Pertanyaan" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="content">Question:</label>
    <textarea class="form-control" placeholder="Isi Pertanyaan" id="content" name="content" >{{$question->content}}</textarea>
  </div>
  <div class="form-group">
  <input type="hidden" class="form-control" name="updated_at" value="{{now()}}">
  </div>
  <a class="btn btn-default" href="/pertanyaan">Cancel</a>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
    </div>
</div>

</div>
</div>
@endsection