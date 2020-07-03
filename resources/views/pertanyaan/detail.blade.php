@extends('adminlte.master')
@section('content')
<div class="row">
  <div class="col-lg-6">
<div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Question: {{$pertanyaan->title}}</h3>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <p>{{$pertanyaan->content}}</p>
            <footer class="blockquote-footer">Created at: {{$pertanyaan->created_at}}
            
              @if ($pertanyaan->created_at!=$pertanyaan->updated_at)
              <cite title="Source Title">, Last modified: {{$pertanyaan->updated_at}}</cite>
              @endif
            </footer>
            
    </div>
</div>
<div class="container-fluid">
        
    <!-- Timelime example  -->
    <div class="row">
      <div class="col-md-12">
        <!-- The time line -->
        <div class="timeline">
          <!-- timeline time label -->
          <div class="time-label">
            <span class="bg-indigo">Answers</span>
          </div>
          <!-- /.timeline-label -->
          @if (!$jawaban->isEmpty())
          @foreach ($jawaban as $key=> $answer)
          <!-- timeline item -->
          <div>
            <i class="fas fa-comments bg-green"></i>
            <div class="timeline-item">
              <span class="time"><i class="fas fa-clock"></i> {{$answer->created_at}}</span>
              <h3 class="timeline-header"><a href="#">Anonym</a> answered question</h3>
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
          @else
<!-- timeline item -->
<div>
    
    <i class="icon fas fa-exclamation-triangle bg-warning"></i>
    <div class="timeline-item bg-warning">
      <div class="timeline-body ">
        Belum Ada jawaban
      </div>
      <div class="timeline-footer">
        {{-- <a class="btn btn-warning btn-sm">View comment</a> --}}
      </div>
    </div>
  </div>

@endif
{{-- <a href="/jawaban/{{$pertanyaan->id}}" class="btn btn-sm btn-success mb-3">Lihat Jawaban</a> --}}
        
          <!-- timeline item -->
          <div>
            <i class="fas fa-comments bg-primary"></i>
            <div class="timeline-item">
              <span class="time"><i class="fas fa-clock"></i> {{now()}}</span>
              <h3 class="timeline-header ">Your Answer</h3>
              <div class="timeline-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="/jawaban/{{$pertanyaan->id}}" method="post">
                    @csrf
                  <div class="form-group">
                    <label for="content">Masukkan Jawaban Anda:</label>
                    <input type="text" class="form-control" placeholder="Jawaban Anda" id="content" name="content">
                  </div>
                  <div class="form-group">
                  <input type="hidden" class="form-control" name="created_at" value="{{now()}}">
                  <input type="hidden" class="form-control" name="updated_at" value="{{now()}}">
                  </div> 
                  {{-- <a href="/pertanyaan" class="btn btn-dark">Kembali</a> --}}
                  <button type="submit" class="btn btn-primary">Send <i class="fas fa-paper-plane"></i></button>
                </form>
              </div>
              <div class="timeline-footer">
                {{-- <a class="btn btn-warning btn-sm">View comment</a> --}}
              </div>
            </div>
          </div>
          <!-- END timeline item -->
          <div>
            <i class="fas fa-clock bg-gray"></i>
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
  </div>
</div>
</div>


    
@endsection