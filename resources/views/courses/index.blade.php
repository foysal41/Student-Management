@extends('layout')

@section('content')


<div class="card">
    <div class="card-header">
        <h2>Courses Application</h2>
    </div>
    <div class="card-body">
        <a href="{{ route('courses.create') }}" class="btn btn-success btn-sm" title="Add New Courses">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br /><br />
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>syllabus</th>
                        <th>duration</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @if($courses->count() > 0)
                    @foreach($courses as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->syllabus }}</td>
                            <td>{{ $item->duration() }}</td>
                            <td>
                                <a href="{{ url('/courses/' . $item->id) }}" title="View Course">
                                    <button class="btn btn-info btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i> View
                                    </button>
                                </a>
                                <a href="{{ url('/courses/' . $item->id . '/edit') }}" title="Edit Course">
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                    </button>
                                </a>
                                <form method="POST" action="{{ url('/courses/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Course" onclick="return confirm('Confirm delete?')">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No course available.</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
