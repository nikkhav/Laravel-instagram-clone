@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img
                    src="https://st3.depositphotos.com/6672868/13701/v/450/depositphotos_137014128-stock-illustration-user-profile-icon.jpg"
                    class="rounded-circle" style="height: 11rem" alt="profile image">
            </div>
            <div class="col-9 pt-2">
                <div class="d-flex justify-content-between align-baseline">
                    <h1>{{$user -> username}}</h1>
                    <a href="/p/create">Add new post</a>
                </div>
                <div class="d-flex">
                    <div class="pe-4">
                        <strong>
                            {{$user -> posts -> count()}}
                        </strong>
                        posts
                    </div>
                    <div class="pe-4">
                        <strong>
                            23k
                        </strong>

                        followers

                    </div>
                    <div class="pe-4">
                        <strong>
                            212
                        </strong>

                        following
                    </div>
                </div>
                <div class="pt-4 fw-bold">
                    {{$user -> profile -> title}}
                </div>
                <div>
                    {{$user -> profile -> description}}
                </div>
                <div>
                    <a href="https://www.freecodecamp.org/">{{$user->profile->url}}</a>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{$post->id}}">
                        <img class="w-100"
                             src="/storage/{{$post->image}}"
                             alt="post"/>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
