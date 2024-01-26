@extends('app')
@section('content')
    
    <h1>Table</h1>

    <!-- <a class="btn btn-primary" href="tasks/create">Create</a> -->
    <a class="btn btn-primary mb-2" href="{{route('tasks.create')}}">Create</a>
    <table class="table">
        <tr>
            <th>
                Id
            </th>
            <th>
                Name
            </th>
            <th>
                Description
            </th>
            <th>
                Amount
            </th>
            <th>
                Action
            </th>
        </tr>
    @foreach($tasks as $task)

        <tr>
            <td>
                {{$task->id}}
            </td>
            <td>
                {{$task->name}}
            </td>
            <td>
                {{$task->description}}
            </td>
            <td>
                {{$task->amount}}
            </td>
            <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop{{$task->id}}">
                DELETE
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop{{$task->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Chiar vrei sa faci aceasta actiune ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="/tasks/{{$task->id}}" method="post" >
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-primary">Yes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <a type="button" class="btn btn-primary" href="{{ route(('tasks.edit'), $task->id) }}">
                EDIT
                </a>
            </td>
        </tr>

    @endforeach
    </table>

@endsection