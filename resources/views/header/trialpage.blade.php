@extends('layouts/app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List Data</h1>
        </div>
        <div class="row">
            {{-- auth to limit content, it cannot be accessed until login --}}
            @auth()
            <div class="col-md-2">
            <a href="{{route('creator.event.create')}}" class="btn btn-primary btn-block" role="button" aria-pressed="true">Tambah</a>
            </div>
            @endauth
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Owned By</th>
                        <th scope="col">Update at</th>
                        <th scope="col">Create at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td><a href="@auth(){{route('creator.event.edit',$event)}}@endauth">{{$event->title}}</div></a></td>
                        <td>{{$event->description}}</td>
                        <td>{{$event->status}}</td>
                        <td>{{$event->creator->name}}</td>
                        <td>{{$event->updated_at}}</td>
                        <td>{{$event->created_at}}</td>
                        @auth()
                        <td><form action="{{route('creator.event.destroy',$event)}}" method="post">
                            {{csrf_field()}}
                            {{-- orr @csrf --}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form></td>
                        @endauth
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
