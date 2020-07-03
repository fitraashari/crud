@extends('adminlte.master')
@section('content')
<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Questions</h3>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="/pertanyaan/form" class="btn btn-primary mb-2"><i class="fas fa-question-circle"></i> Ask Question</a>
        
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
    <tbody>@if (!$questions->isEmpty())
        @foreach ($questions as $key => $question)
       
      <tr>
      <td>{{$key+1}}</td>
      <td>{{$question->title}}</td>
      <td>{{$question->content}}</td>
      <td>{{$question->created_at}}</td>
      <td> 
          <a href="pertanyaan/{{$question->id}}" class="btn btn-sm btn-primary"><i class="fas fa-reply"></i></a>
          <a href="jawaban/{{$question->id}}" class="btn btn-sm btn-success"><i class="fas fa-comments"></i></a>
          <a href="pertanyaan/{{$question->id}}/edit" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
          {{-- <a href="pertanyaan/{{$question->id}}/delete" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> --}}
          <form action="pertanyaan/{{$question->id}}" method="post" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger float"><i class="fas fa-trash"></i></button>
          </form>
        </td>
      </tr>
                  
      @endforeach
      @endif
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