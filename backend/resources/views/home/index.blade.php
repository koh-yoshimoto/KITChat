@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   Message
                </div>

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
                                            @foreach($department1s as $department1)
                                                <option value={{$department1->id}}>{{$department1->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="club">Club</label>
                                        <select class="form-control" id="club" name="club">
                                            <option value="0">No select</option>
                                            <option value="201">合気道部</option>
                                            <option value="202">アイスホッケー部</option>
                                            <option value="203">アメリカンフットボール部</option>
                                            <option value="204">空手道部</option>
                                            <option value="205">弓道部</option>
                                            <option value="206">剣道部</option>
                                            <option value="207">航空部</option>
                                            <option value="208">硬式庭球部</option>
                                            <option value="209">硬式野球部</option>
                                            <option value="210">準硬式野球部</option>
                                            <option value="211">軟式野球部</option>
                                            <option value="212">サイクリング部</option>
                                            <option value="213">サッカー部</option>
                                            <option value="214">山岳部</option>
                                            <option value="215">自動車部</option>
                                            <option value="216">柔道部</option>
                                            <option value="217">少林寺拳法部</option>
                                            <option value="218">水泳部</option>
                                            <option value="219">漕艇部</option>
                                            <option value="220">ソフトテニス部</option>
                                            <option value="221">卓球部</option>
                                            <option value="222">トライアスロン部</option>
                                            <option value="223">バドミントン部</option>
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
</div>
@endsection