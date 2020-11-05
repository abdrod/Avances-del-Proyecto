@extends('layouts.internal')
@section('content')


<a href="{{route('roles.index')}}">Inicio Roles</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del rol</th>
            <th>
                {{ Form::open(array('url' => route('roles.destroy', $modelo->id), 'class' => 'pull-right')) }}
                    <a class="btn btn-primary" href="{{route('roles.edit', $modelo->id)}}">Editar rol</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Nombre del rol </td> <td>{{$modelo->nombre}}</td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
             <tr><td> Nombre Rol </td> <td>{{$modelo->nombre}}</td></tr>
    </tbody>

</table>


@endsection