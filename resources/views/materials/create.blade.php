@extends('layouts.layout')

@section('content')

    @if($errors->any())
        @foreach($errors->all() as $err)
            <div class="alert alert-danger">
                {{$err}}
            </div>
        @endforeach
    @endif

    <form action="{{route('materials.store')}}" method="POST">
        @csrf

        <div class="col-4 mt-2 ml-2">
            <span>Name</span>
            <input type="text" class="form-control col-sm" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name">
        </div>

        <div class="col-4 mt-2 ml-2">
            <span>Unit of Issue</span>
            <select class="form-control" name = "unit_of_issue_id">
                @foreach($unit_of_issues as $unit_of_issue)
                    <option value="{{$unit_of_issue->id}}">{{$unit_of_issue->code}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-4 mt-2 ml-2">
            <span>Status</span>
            <select class="form-control" name = "status_id">
                @foreach($statuses as $status)
                    <option value="{{$status->id}}">{{$status->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-4 mt-2 ml-2">
            <button class="btn btn-success">Save</button>
        </div>
    </form>

@endsection
