@extends('adminlte.master')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Questions</h3>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="/pertanyaan/form" class="btn btn-primary mb-2">Ask Question?</a>
<table class="table table-striped" id="question">
    <thead>
      <tr>
        <th>No</th>
        <th>Title</th>
        <th>Questions</th>
        <th>Date Created</th>
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
      <td> 
          <a href="pertanyaan/detail/{{$key+1}}" class="btn btn-sm btn-primary"><i class="fas fa-reply"></i></a>
          <a href="jawaban/{{$key+1}}" class="btn btn-sm btn-success"><i class="fas fa-comments"></i></a>
        </td>
      </tr>
                  
      @endforeach
    </tbody>
  </table>
    </div>
</div>
  @endsection
  @push('scripts')
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#question").DataTable();
  });
</script>
@endpush