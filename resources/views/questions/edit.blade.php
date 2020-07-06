@extends('main')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('questions.update', $question->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="title" name="title" class="form-control" id="title"
                        placeholder="Masukkan judul" value="{{ $question->title }}">
                    </div>
                    <div class="form-group">
                        <label for="body">Pertanyaan</label>
                        <textarea type="text" class="form-control" id="body" name="body"
                            placeholder="Masukkan Pertanyaan" rows="10">{{ $question->body }}</textarea>
                    </div>
                    <a href="{{ route('questions.index') }}">
                        <button type="button" class="btn btn-default">Batal Update</button>
                    </a>
                    <button type="submit" class="btn btn-primary">Update Pertanyaan</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection