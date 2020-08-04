@extends('layouts.app')

<style>
    [data-letters]:before {
        content:attr(data-letters);
        display:inline-block;
        font-size:1em;
        width:2.5em;
        height:2.5em;
        line-height:2.5em;
        text-align:center;
        border-radius:50%;
        background:plum;
        vertical-align:middle;
        margin-right:1em;
        color:white;
    }
</style>

@section('content')
<div class="container">

    <div class="row justify-content-center pt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('メッセージ') }}</div>
            </div>
            @foreach ($messages as $message)
                <div class="card">
                    <div class="card-body">
                        <p data-letters="{{ substr($message->author->name, 0, 2) }}">{{ $message->author->name }}</p>
                        {{ $message->content }}
                        <p class="tags">
                            @foreach ($message->message_tags as $tag)
                                <button type="button" class="btn btn-primary btn-sm">{{ $tag->name }}</button>
                            @endforeach
                        </p>
                        <p class="card-text text-right"><small class="text-muted">{{ $message->created_at->diffForHumans() }}</small></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
