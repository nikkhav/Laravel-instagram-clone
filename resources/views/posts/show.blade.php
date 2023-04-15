@extends('layouts.app')

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" class="w-100" alt="{{$post->caption}}">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pe-3">
                            <a href="/profile/{{$post->user->id}}">
                                <img src="{{$post->user->profile->profileImage()}}" style="max-width: 50px"
                                     class="w-100 rounded-circle"
                                     alt="Profile image"/>
                            </a>
                        </div>
                        <div>
                            <div class="fw-bold">
                                <a href="/profile/{{$post->user->id}}" style="text-decoration: none">
                                    <span class="text-dark">
                                     {{$post->user->username}}
                                </span>
                                </a>
                                <a href="#" class="ps-3" style="text-decoration: none">Follow</a>
                            </div>
                        </div>
                    </div>

                    <hr/>

                    <p><span class="fw-bold">
                            <a href="/profile/{{$post->user->id}}" style="text-decoration: none">
                                <span class="text-dark">
                                     {{$post->user->username}}
                                </span>

                            </a>
                        </span>{{$post->caption}}</p>
                </div>
            </div>
        </div>

    </div>

@endsection
