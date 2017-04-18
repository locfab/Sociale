@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>User</h1>
                <div class="col-md-12">
                    @foreach($users as $user)
                        @if(Auth::user() != $user)
                            <h2>
                                <a href="{{ route('admin.users.show', $user->id) }}" class="text-capitalize">{{ $user->name }}</a>
                                <small><span class="label label-info btn-md">{{ Auth::user()->getNameFriendship($user) }}</span></small>
                            </h2>
                            @if($user->profil)
                                <img src={{url("/img/profils/{$user->id}.png")}} style="width:80px">
                            @else
                                <p>no Picture</p>
                            @endif
                            @include('admin.users.status_bar')
                            <br>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection