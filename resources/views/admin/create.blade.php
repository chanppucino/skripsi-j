@extends('base')

@section('base')
<div class="container my-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title text-white">
                        Add Announcements
                    </h3>
                </div>
                <form action="{{ route('announcement.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Input Title" name="title">
                            <label>Title</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Input Subject" name="subject">
                            <label>Subject</label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Input Image</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px" name="contents"></textarea>
                            <label>Comments</label>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            Save Announcements
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
