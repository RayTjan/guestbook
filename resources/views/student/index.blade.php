@extends('header/layout')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List Data</h1>
        </div>
        <div class="row">
            <div class="col-md-2">
            <a href="{{route('student.create')}}" class="btn btn-primary btn-block" role="button" aria-pressed="true">Tambah</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Email</th>
                        <th scope="col">Update at</th>
                        <th scope="col">Create at</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{dd($students)}} it shows the data and then die, used for debugging --}}
                    @foreach($students as $student)  
                    <tr>
                        <td><a href="{{route('student.edit',$student)}}">{{$student->name}}</a></td>
                        <td>{{$student->nim}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->updated_at}}</td>
                        <td>{{$student->created_at}}</td>
                        <td><form action="{{route('student.destroy',$student)}}" method="post">
                            {{csrf_field()}}
                            {{-- orr @csrf --}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection