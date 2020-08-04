@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                @foreach($user->links as $link)
                    <div class="link">
                        <a
                            class="user-link d-block p-4 mb-4 rounded h3 text-center"
                            style="border: 2px solid {{ $textColor }}; color: {{ $textColor }}"
                            href="{{ $link->link }}"
                            target="_blank"
                            rel="nofollow"
                            data-link-id="{{ $link->id }}"
                        >{{ $link->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
