@extends('app')
@section('content')

<div class="row" style="display: flex; justify-content: space-around; flex-wrap: wrap;">
    @foreach( $images as $image )
        <div class="card col-md-4 p-2" style="width: 18rem;">
            <img src="{{asset('uploads/'. $image->path)}}" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">{{$image->name}}</h5>
                <a href="{{route('images.edit', $image->id)}}" class="btn btn-primary">EDIT</a>
                <button class="btn btn-danger" data-target="#image{{$image->id}}" data-toggle="modal"  >
                    DELETE
                </button>
            </div>
        </div>
                <!-- Modal -->
                <div class="modal fade" id="image{{$image->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this record ?
                    </div>
                    <div class="modal-footer">
                        <form action="{{route('images.destroy', $image->id)}}" method="post">
                        @csrf
                                    {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Yes</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>

    @endforeach
</div>



@endsection