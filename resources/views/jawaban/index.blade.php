@extends('adminlte.master')
@section('content')
@if (!$jawaban->isEmpty())
<div class="container-fluid">
        
    <!-- Timelime example  -->
    <div class="row">
      <div class="col-md-12">
        <!-- The time line -->
        <div class="timeline">
          <!-- timeline time label -->
          <div class="time-label">
            <span class="bg-purple">Answer</span>
          </div>
          <!-- /.timeline-label -->
          @foreach ($jawaban as $key=> $answer)
          <!-- timeline item -->
          <div>
            <i class="fas fa-comments bg-green"></i>
            <div class="timeline-item">
              <span class="time"><i class="fas fa-clock"></i> {{$answer->created_at}}</span>
              <h3 class="timeline-header"><a href="#">Anonym</a> answered on your question</h3>
              <div class="timeline-body">
                {{$answer->content}}
              </div>
              <div class="timeline-footer">
                {{-- <a class="btn btn-warning btn-sm">View comment</a> --}}
              </div>
            </div>
          </div>
          <!-- END timeline item -->
          @endforeach
          <div>
            <i class="fas fa-clock bg-gray"></i>
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
  </div>
<a href="/pertanyaan" class="btn btn-dark mb-2">Kembali</a>
@else
<div class="alert alert-info">Belum Ada jawaban</div>
@endif

@endsection