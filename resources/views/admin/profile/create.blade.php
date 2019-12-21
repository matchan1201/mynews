{{-- layouts/ profile.blade.phpを読み込む--}}
@extends('layouts.admin')

{{-- profile.blade.phpの@yield('title')に'理系大学生のまっちゃん'を埋め込む --}}
@section('title', '理系大学生のまっちゃん')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>理系大学生まっちゃん</h2>
            </div>
        </div>
    </div>
@endsection    
