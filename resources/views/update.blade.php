@extends('layout')

@section('content')
    <div class="row center-block">
        <div class="col-lg-12">
            <form action="{{ route('todos.save', ['id' => $todo->id]) }}" method="post">
                {{csrf_field()}}
                <input type="text" name="todo" class="form-control input-lg" value="{{$todo->todo}}" placeholder="Create a new todo">
            </form>
        </div>
    </div>
@stop