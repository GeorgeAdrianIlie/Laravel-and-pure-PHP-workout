@extends('app')
@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 36rem;">
    <div class="card-body" >
        <img src="{{asset('uploads/'. $image->path)}}" class="image-fluid" alt="...">
        <form action="{{route('images.update', $image->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT') 
            @csrf
            <label for="path">File</label>
            <input class="form-control" name="path" type="file" accept="image/png, image/jpeg"/>
            <label for="name">Name</label>
            <input class="form-control" name="name" type="text" value="{{$image->name}}"/>
            <button class="btn btn-success mt-3" type="submit">UPDATE</button>
            <!-- <a href="{{route('tasks.index')}}" class="btn btn-danger mt-3" type="button">Cancel</a> -->
        </form>
    </div>
    </div>
</div>

@endsection

