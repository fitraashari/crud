@extends('adminlte.master')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Questions Form</h3>
      
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
<form action="/pertanyaan" method="post">
    @csrf
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" placeholder="Judul Pertanyaan" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="content">Question:</label>
    <input type="text" class="form-control" placeholder="Isi Pertanyaan" id="content" name="content">
  </div>
  <div class="form-group">
  <input type="hidden" class="form-control" name="created_at" value="{{now()}}">
  <input type="hidden" class="form-control" name="updated_at" value="{{now()}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
@endsection