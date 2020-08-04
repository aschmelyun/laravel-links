@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Your links</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Url</th>
                                <th scope="col">Visits</th>
                                <th scope="col">Last Visit</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($links as $link)
                                <tr>
                                    <td>{{ $link->name }}</td>
                                    <td><a href="{{ $link->link }}">{{ $link->link }}</a></td>
                                    <td>{{ $link->visits_count }}</td>
                                    <td>{{ $link->latest_visit ? $link->latest_visit->created_at->format('M j Y - H:ia') : 'N/A' }}</td>
                                    <td><a href="/dashboard/links/{{ $link->id }}">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="/dashboard/links/new" class="btn btn-primary">Add Link</a>
                </div>
            </div>
        </div>
    </div>
@endsection
