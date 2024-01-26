@extends('app')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 36rem;">
    <div class="card-body" >
        <form action="{{route('tasks.update', $task->id)}}" method="post" >
            @method('PUT') 
            @csrf
            <label for="name">Name</label>
            <input class="form-control" name="name" type="text" value="{{$task->name}}"/>
            <label for="description">Description</label>
            <input class="form-control" name="description" type="text" value="{{$task->description}}"/>
            <label for="amount">Amount</label>
            <input class="form-control" name="amount" type="text" value="{{$task->amount}}"/>
            <button class="btn btn-success mt-3" type="submit">Update</button>
            <a href="{{route('tasks.index')}}" class="btn btn-danger mt-3" type="button">Cancel</a>
        </form>
    </div>
    </div>
</div>

@endsection