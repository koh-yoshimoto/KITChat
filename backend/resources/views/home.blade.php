@extends('layouts.app')

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
                        {{ $message->content }}
                        <p class="card-text"><small class="text-muted">{{ $message->author->name }}: {{ date('d M Y - H:i:s', $message->created_at->timestamp) }}</small></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
