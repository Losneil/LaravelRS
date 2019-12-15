@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="data-user">
                @if($user->image)
                    <div class="container-avatar-profile">
                        <img src="{{ route('user.avatar',['filename'=>$user->image]) }}">
                    </div>
                @endif
                <div class="user-info">
                    <h1>{{ '@'. $user->nick }}</h1>
                    <h2>{{ $user->name .' '. $user->surname }}</h2>
                    <p class="union">{{ 'Se unió '.\FormatTime::LongTimeFilter($user->created_at) }}</p>
                </div>
                <br><br>
            </div>
            <hr>
            @foreach ($user->images as $image)
                @include('includes.image', ['image'=>$image])
            @endforeach
        </div>
    </div>
</div>
@endsection