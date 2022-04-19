@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div
          class="col-sm-4 p-5"
        >
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Instagram-Icon.png/800px-Instagram-Icon.png"
              width="100"
              height="100"
              alt="Instagram placeholder"
              class="rounded-circle"
            />
        </div>
        <div
          class="col-sm-8"
        >
            <div class="pt-5">
                <h1>Instagram Clone</h1>
            </div>
            <div class="d-flex flex-row">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">
                A project for Laravel
            </div>
            <div>
                My name is Son To, and this is my project: creating an Instagram clone
                from the PHP framework, Laravel. This maybe a bit clumsy but truly genuine attempt
                to understand Laravel and appreciate PHP more than the typical TS/JS. 
                Credits go to freeCodeCamp.org for helping me.
            </div>
            <div><a href="https://www.youtube.com/watch?v=ImtZ5yENzgE">freeCodeCamp.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img
              src="https://avatars.githubusercontent.com/u/20899059?v=4"
              alt="image1"
              class="w-100"
            />
        </div>
        <div class="col-4">
            <img
              src="https://avatars.githubusercontent.com/u/3869469?v=4"
              alt="image2"
              class="w-100"
            />
        </div>
        <div class="col-4">
            <img
              src="https://avatars.githubusercontent.com/u/22234862?v=4"
              alt="image3"
              class="w-100"
            />
        </div>
    </div>
</div>
@endsection
