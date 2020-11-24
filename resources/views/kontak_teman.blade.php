@extends('layout/main')

@section('judul','Friends')

@section('isi_utama')
<div class="main">
    <div class="friendBG">
        <h1>FRIENDS</h1>
    </div>
    <div class="sides listFriend">
        <ul class="list-group">
            <li class="list-group-item">
                <div class="listGrid">
                    <img src="{{asset('images/notFound.jpg')}}" class="float-left rounded">
                    <div class="listInfo">
                        <h3>Friend A</h3>
                        <h3>0000000000000</h3>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="listGrid">
                    <img src="{{asset('images/notFound.jpg')}}" class="float-left rounded">
                    <div class="listInfo">
                        <h3>Friend B</h3>
                        <h3>0000000000000</h3>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="listGrid">
                    <img src="{{asset('images/notFound.jpg')}}" class="float-left rounded">
                    <div class="listInfo">
                        <h3>Friend C</h3>
                        <h3>0000000000000</h3>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="listGrid">
                    <img src="{{asset('images/notFound.jpg')}}" class="float-left rounded">
                    <div class="listInfo">
                        <h3>Friend D</h3>
                        <h3>0000000000000</h3>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="listGrid">
                    <img src="{{asset('images/notFound.jpg')}}" class="float-left rounded">
                    <div class="listInfo">
                        <h3>Friend E</h3>
                        <h3>0000000000000</h3>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
</div>
@endsection