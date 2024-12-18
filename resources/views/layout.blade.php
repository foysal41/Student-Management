<!DOCTYPE html>
<html>

<head>
    <title>Student Laravel 9 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <h2>Student Managemnt Project</h2>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                    </div>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <!-- The sidebar -->
                    <div class="sidebar">
                        <a class="active" href="#home">Home</a>
                        <a href="{{ route('students.index') }}">Student</a>
                        <a href="{{ route('teachers.index') }}">Teacher</a>
                        <a href="{{ route('courses.index') }}">Courses</a>
                        <a href="{{ route('batches.index') }}">Batches</a>
                        <a href="{{ route('enrollments.index') }}">Enrollment</a>
                        <a href="{{ route('payments.index') }}">Payment</a>
                    </div>


                </div>
                <div class="col-md-9">
                    <!-- Page content -->
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>

</html>
