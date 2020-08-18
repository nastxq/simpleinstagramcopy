@extends('layouts.app')

@section('content')

<div class="container">

<div class="row">
<div class="col-8">
        <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>

        <div class="col-4">
        <div>
        <div class="d-flex align-items-center">
        <div class="p-3">
            <img src="{{$post->user->profile->profileImage()}}" alt="" class="w-100 rounded-circle" style="max-width:45px">
           </div>
           <div>
                <div class="font-weight-bold"><a class="text-dark" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a>
                <a class="pl-3" href="">Follow </a>
                </div>

           </div>
           </div>
           <hr>

            <p ><span class="font-weight-bold"><a class="text-dark" href="/profile/{{$post->user->id}}">{{$post->user->username}} </a> </span>{{$post->caption}} </p>
                 </div>
        </div>
</div>

 </div>



@endsection