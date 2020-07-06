@extends('main')

@section('content')

<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('questions.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="title" name="title" class="form-control" id="title"
                            placeholder="Masukkan judul">
                    </div>
                    <div class="form-group">
                        <label for="body">Pertanyaan</label>
                        <textarea type="text" class="form-control" id="body" name="body"
                            placeholder="Masukkan Pertanyaan" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post Pertanyaan</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection