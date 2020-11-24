@extends('header/layout')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Masukan Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('student.update',$student)}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label >Name : </label>
                        <input type="text" class="form-control" name="name" value="{{ $student->name}}" >
                    </div>
                    <div class="form-group">
                        <label >Nim :</label>
                        <input class="form-control"  value ="{{ $student->nim}}" disabled>
                    </div>
                    <div class="form-group">
                        <label >Email :</label>
                        <input class="form-control"  value ="{{ $student->email}}" disabled>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection