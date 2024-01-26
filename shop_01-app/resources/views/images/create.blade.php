@extends('app')
@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 36rem;">
    <div class="card-body" >
        <form action="{{route('images.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="path">File</label>
            <input class="form-control" name="path" type="file" accept="image/png, image/jpeg"/>
            <label for="name">Name</label>
            <input class="form-control" name="name" type="text"/>
            <button class="btn btn-success mt-3" type="submit">Add new</button>
            <!-- <a href="{{route('tasks.index')}}" class="btn btn-danger mt-3" type="button">Cancel</a> -->
        </form>
    </div>
    </div>
</div>

@endsection