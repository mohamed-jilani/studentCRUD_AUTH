@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">
        create new Students
    </div>
    <div class="card-body">
        <form action="{{url('student')}}" method="post">
            {!! csrf_field() !!}
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>Course</label><br>
            <input type="text" name="course" id="course" class="form-control"><br>
            <label>email</label><br>
            <input type="text" name="email" id="email" class="form-control"><br>
            <label>phone</label><br>
            <input type="text" name="phone" id="phone" class="form-control"><br><br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>

@stop


