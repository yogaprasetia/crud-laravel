@extends('main')

@section('content')


@foreach ($questions as $question)
<div class="card">
    <div class="card-header pb-1">
        <a class="card-link text-muted" href="{{ route('questions.show', $question->id) }}">
                {{ $question->title }}
            </i>
        </a>
    </div>
    <div class="card-body pb-3 pt-3">
        <p class="card-text">
            {{ substr($question->body , 0, 15) }} {{ strlen($question->body) > 15 ? "..." : "" }}
        </p>
    </div>
    <div class="card-footer mr-0">
        <div class="row">
        <div class="col-md-5 text-left">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ route('answers.index', $question->id) }}">
                    <button type="button" class="btn btn-primary-outline card-link inline">
                    Lihat Jawaban
                    </button>
                </a>
                <a href="{{ route('questions.edit', $question->id) }}">
                    <button type="button" class="btn btn-primary-outline card-link inline">
                    Edit
                    </button>
                </a>
                <form action="{{ route('questions.delete', $question->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-primary-outline card-link inline">
                    Hapus
                    </button>
                    </form>
                </div>
            <div class="col-md-5 text-right">
                <span class="laed inline text-muted">
                    {{ date('M j, Y h:i a', strtotime($question->created_at)) }}
            </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- <div class="d-flex">
    <div class="mx-auto">
        {!! $questions->links() !!}
    </div>
</div> -->

@endsection