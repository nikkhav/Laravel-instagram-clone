@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img
                    src="{{$user->profile->profileImage()}}"
                    class="rounded-circle" style="height: 15rem" alt="profile image">
            </div>
            <div class="col-9 pt-2">
                <div class="d-flex justify-content-between align-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <h1>{{$user -> username}}</h1>

                        <button class="btn btn-primary btn-sm ms-4">
                            Follow
                        </button>
                    </div>
                    @can("update", $user->profile)
                        <a href="/p/create">Add new post</a>
                    @endcan
                </div>
                @can("update", $user->profile)
                    <a href="/profile/{{$user->id}}/edit">
                        Edit profile
                    </a>
                @endcan

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
