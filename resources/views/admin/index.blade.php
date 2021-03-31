@extends('base')

@section('base')
<div class="container my-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title text-white">
                        Announcements
                    </h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Image</th>
                                <th scope="col">Contents</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($annoucement as $ann)
                            <tr>
                                <th scope="row">{{ $loop -> iteration }}</th>
                                <td>{{ $ann->title }}</td>
                                <td>{{ $ann->subject }}</td>
                                <td><img src="{{ asset('storage/announcementsImages/'.$ann->image) }}" class="img-fluid"></td>
                                <td>{{ $ann->contents }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('announcement.create') }}" class="btn btn-primary float-end">
                        Add Announcements
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
