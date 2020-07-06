@extends('main')

@section('content')

@section('title', 'Detail Questions')

<div class="card gedf-card mb-3 shadow bg-white rounded ml-3 mr-3 shadow-lg pb-0">
    <div class="card-header pb-1">
        <i class="fa fa-caret-down">
            [ {{ $question->title }} ]
        </i>
    </div>
    <div class="card-body pb-3 pt-3">
        <p class="card-text">
            {{ $question->body }}
        </p>
    </div>
    <div class="card-footer mr-0">
        <div class="row">
            <div class="col-md-12">
                <span class="laed inline text-muted">Published at:
                    {{ date('M j, Y h:i a', strtotime($question->created_at)) }} |
                </span>
                <span class="laed inline text-muted">Updated at:
                    {{ date('M j, Y h:i a', strtotime($question->updated_at)) }}
                </span>
            </div>
        </div>
    </div>
    <ul class="list-group pt-3 pb-0">
        <li class="list-group-item">
            <form action="{{ route('answers.store', $question->id) }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control border-primary" id="isi" name="isi"
                            placeholder="Write your answer here ..." />
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary">Post Answer</button>
                    </div>
                </div>
            </form>
        </li>
    </ul>
</div>

<div class="row ml-3 mr-3">
    <div class=" col-md-12">
        <ul class="list-group">
            <li class="list-group-item active font-weight-bold">Answers :</li>
            @foreach ($answers as $answer)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-10">
                        {{ $answer->isi }}
                        <h6 class="text-muted">Posted on: {{ date('M j, Y', strtotime($answer->updated_at)) }}</h6>
                    </div>
                    <div class="col-md-2 text-right">
                        <form action="{{ route('answers.delete', $answer->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary-outline card-link text-danger inline">
                                <span class="card-link" aria-hidden="true"></span> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection