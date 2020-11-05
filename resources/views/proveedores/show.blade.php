@extends('layouts.internal')
@section('content')


<a href="{{route('proveedores.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del Proveedor</th>
            <th>
                {{ Form::open(array('url' => route('proveedores.destroy', $modelo->id), 'class' => 'pull-right')) }}
                    <a class="btn btn-primary" href="{{route('proveedores.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Nombre del Proveedor </td> <td>{{$modelo->nombre}}</td></tr>
            
           <tr><td> Correo   </td> <td>{{$modelo->email}}</td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
    </tbody>

</table>


@endsection