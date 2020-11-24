@extends('layout/main')
@section('judul','ITS HOME')
@section('isi_utama')
<div class="main">
    <div class="bgindexpage">
        <div class="indexpage sides">
            <div class="mainImage">
                <img src="{{asset('images/OweekPose.jpg')}}" class="rounded float-center selfimage">
            </div>
            <div class="name">
                <h3 class="ml-2">My name is</h3>
                <h1 class="font-weight-bold">RAY</h1>
            </div>
            <div class="detailinfo">
                <div class="infos">
                    <img src="{{asset('images/icon/placeholder.png')}}" class="float-left">
                    <p> Surabaya, Indonesia</p>
                </div>
                <div class="infos">
                    <img src="{{asset('images/icon/date.png')}}" class="float-left">
                    <p> 10th October 2020</p>
                </div>
                <div class="infos">
                    <img src="{{asset('images/icon/user.png')}}" class="float-left">
                    <p> Reader,Coder, etc...</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bgindexpage2">
        <div class="indexpage2">
            <div class="indextext2">
                <br>
                <br>
                <br>
                <p><strong>Here a potato</strong></p>
                <p>I ran out of ideas..</p>
            </div>
            <div class="indeximage2">
                <img src="{{asset('images/potato.png')}}" class="float-right">
            </div>          
        </div>
    </div>
    {{-- <p>Projects</p> --}}
</div>
@endsection