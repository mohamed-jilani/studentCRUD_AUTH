@extends('students.layout')
@section('content')


<div class="card" style="margin:20px;">
    <div class="card-header">
        Edit Student
    </div>
    <div class="card-body">
        <form action="{{url('student/'.$students->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control" value="{{$students->name}}"><br>
            <label>Course</label><br>
            <input type="text" name="course" id="course" class="form-control" value="{{$students->course}}"><br>
            <label>email</label><br>
            <input type="text" name="email" id="email" class="form-control" value="{{$students->email}}"><br>
            <label>phone</label><br>
            <input type="text" name="phone" id="phone" class="form-control" value="{{$students->phone}}"><br><br>
            <input type="submit" value="Update" class="btn btn-success">
        </form>
    </div>
</div>


@stop

