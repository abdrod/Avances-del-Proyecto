@extends('layouts.internal')
@section('content')

<a href="{{route('clientes.create')}}">Registrar Cliente</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre Cliente</th>
            <th>Edad</th>
            <th>Fecha de ingreso</th>
            <th>Telefono</th>
            <th>Regimen</th>
            <th>Correo</th>
           
          
        </tr>
    </thead>
    <tbody>
        @foreach($tableclientes as $rowclientes)
            <tr>
                <td>
                    <a href="{{route('clientes.show', $rowclientes->id)}}">{{$rowclientes->nombre}}</a>
                </td>
                <td>
                    <a href="{{route('clientes.show', $rowclientes->id)}}">{{$rowclientes->edad}}</a>
                </td>

                
                <td>
                    <a href="{{route('clientes.show', $rowclientes->id)}}">{{$rowclientes->fechaingreso}}</a>
                </td>
                <td>
                    <a href="{{route('clientes.show', $rowclientes->id)}}">{{$rowclientes->telefono}}</a>
                </td>

                <td>
                    <a href="{{route('clientes.show', $rowclientes->id)}}">{{$rowclientes->regimen}}</a>
                </td>

                <td>
                    <a href="{{route('clientes.show', $rowclientes->id)}}">{{$rowclientes->email}}</a>
                </td>


              
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
