@extends('layouts.app')

@section('content')

<a href='/' class='btn btn-default'>Go back</a>

<h1>{{$todo->text}}</h1>
<div class="badge badge-danger">{{$todo->due}}</div>
<hr>

<p>{{$todo->body}}</p>
<br><br>
<a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>

{!! Form::open(['action' => ['TodosController@destroy', $todo->id],
               'method' => 'POST',
               'class' => 'pull-right' ]) !!}
{!! Form::hidden('_method', 'DELETE') !!}
{!! Form::bsSubmit('Delete', ['class'=>'btn btn-danger']) !!}

{!! Form::close() !!}

<hr>
@endsection
