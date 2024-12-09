@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Enrollment</div>
  <div class="card-body">

      <form action="{{ url('enrollment/' .$enrollment->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollment->id}}" id="id" />

        <label>Enroll No</label></br>
        <input type="text" name="enroll_no" id="enroll_no" value="{{$enrollment->name}}" class="form-control"></br>

        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batch_id" value="{{$enrollment->batch_id}}" class="form-control"></br>

        <label>Student</label></br>
        <input type="text" name="student_id" id="student_id" value="{{$enrollment->student_id}}" class="form-control"></br>

        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" value="{{$enrollment->join_date}}" class="form-control"></br>

        <label>Fees</label></br>
        <input type="text" name="fees" id="fees" value="{{$enrollment->fees}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
