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

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tweetModal">New tweet</button>
                <div class="modal fade" id="tweetModal" tabindex="-1" role="dialog" aria-labelledby="tweetModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tweetModalLabel">New tweet</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/message" method="post" id="tweet">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Content:</label>
                                    <textarea class="form-control" id="message-text" name="content"></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="academicYear">Academic Year</label>
                                        <select class="form-control" id="academicYear" name="academicYear">
                                            <option value="0">No select</option>
                                            @foreach($academiac_years as $academiac_year)
                                                <option value={{$academiac_year->id}}>{{$academiac_year->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="0">No select</option>
                                            @foreach($genders as $gender)
                                                <option value={{$gender->id}}>{{$gender->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="faculty">Faculty</label>
                                        <select class="form-control" id="faculty" name="faculty">
                                            <option value="0">No select</option>
                                            @foreach($facultys as $faculty)
                                                <option value={{$faculty->id}}>{{$faculty->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="department">Department</label>
                                        <select class="form-control" id="department" name="department">
                                            <option value="0">No select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="club">Club</label>
                                        <select class="form-control" id="club" name="club">
                                            <option value="0">No select</option>
                                                @foreach($clubs as $club)
                                                    <option value={{$club->id}}>{{$club->name}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" form="tweet">Tweet</button>
                            </div>
                        </div>
                    </div>
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
<script>
    // use var j to avoid conflict with other libraries
    var j = jQuery.noConflict();
    j(function() {
        j('select[name=faculty]').change(function() {
            // get the selected values
            var faculty_name = j(this).children("option:selected").text();
            // create the url to API
            var url = "{{ url('/message/tag/') }}";

            j.ajax({
                method: "POST",
                url: url,
                data: {
                    'faculty': faculty_name,
                    '_token': '{{ csrf_token() }}',
                }
                }).done(function( msg, textStatus, jqXHR ) {
                if(jqXHR.status == 200){
                    var select = j('form select[name=department]');
                    select.empty();
                    select.append('<option value="0">No select</option>')
                    j.each(msg.departments,function(key, value) {
                        select.append('<option value=' + value.id + '>' + value.name + '</option>');
                    });
                }else{
                    // error 
                    console.log(msg);
                }
            });           
        });
    });
</script>
@endsection
