@extends('layouts.app')

@section('content')

	<div class="container">
        <p>
            {{ $data-> total() }} registros |
                pag {{ $data-> currentPage() }}
                de {{ $data-> lastPage() }}
        </p>                  
        <table class="table table-hover">
            <thead>
               	<th>Nombre</th>
                <th>Nodo</th>
                <th>Fecha Creación</th>
            </thead>
                @foreach($data as $device)
                <tbody>
                   	<td>
                   		<p>{{ $device->nombre }}</p>
                   	</td>
                   	<td>
                   		<p>{{ $device->id_nodo }}</p>
                   	</td>
                   	<td>
                   		<p>{{ $device->created_at }}</p>
                   	</td>                   			
                </tbody>
                @endforeach  
        </table>
        {!! $data-> render() !!}
    </div>

@endsection	
