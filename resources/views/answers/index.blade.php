@extends('main')

@section('content')

@section('title', 'Answers for The Question #'.$id)

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