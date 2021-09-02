<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Student Management System</title>
</head>

<body>
    @include("navbar")

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if ($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-5">
                    @include("studentslist")
                </section>
            </div>
        </div>
    </div>

    @elseif ($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-5">
                @include("studentslist")
            </section>
            <section class="col-md-6">

                <div class="card mb-3">
                    <img src="{{ asset('images/typing_information.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Enter the information of the new student</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control"
                                    placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label>Seconde Name</label>
                                <input name="secondName" type="text" class="form-control"
                                    placeholder="Enter the seconde name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control" placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Specialty</label>
                                <input name="specialty" type="text" class="form-control" placeholder="Enter Specialty">
                            </div>
                            <input type="submit" class="btn btn-info mt-2" value="Save">
                            <input type="reset" class="btn btn-warning mt-2" value="Reset">
                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>

    @elseif ($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-5">
                @include("studentslist")
            </section>
            <section class="col-md-6"></section>
        </div>
    </div>

    @elseif ($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-5">
                @include("studentslist")
            </section>
            <section class="col-md-6">

                <div class="card mb-3">
                    <img src="{{ asset('images/typing_information.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Update indormations of student</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"
                                    placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input value="{{ $student->firstName }}" name="firstName" type="text"
                                    class="form-control" placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label>Seconde Name</label>
                                <input value="{{ $student->secondName }}" name="secondName" type="text"
                                    class="form-control" placeholder="Enter the seconde name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{ $student->age }}" name="age" type="text" class="form-control"
                                    placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Specialty</label>
                                <input value="{{ $student->specialty }}" name="specialty" type="text"
                                    class="form-control" placeholder="Enter Specialty">
                            </div>
                            <input type="submit" class="btn btn-info mt-2" value="Update">
                            <input type="reset" class="btn btn-warning mt-2" value="Reset">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @endif


    <footer></footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>
