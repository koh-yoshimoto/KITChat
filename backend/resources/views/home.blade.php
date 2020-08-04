@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form  method="post" action="{{ route('message.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="content">メッセージ</label>
                            <textarea class="form-control" name="content" id="content" rows="1" placeholder="その気持ち、シェアしよう"></textarea>
                        </div>
                        <div class="form-group">
                            <select name="tags" id="tags" class="custom-select custom-select-sm">
                                <option selected value="0">公式</option>
                                <optgroup label="サークル">
                                    @foreach ($tags as $club)
                                        <option value="{{ $club['code'] }}">{{ $club['name'] }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                        
                        <input name="sender" id="sender" type="hidden" value="{{ Auth::user()->id }}" />
                        <button type="submit" class="btn btn-primary">投稿</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
