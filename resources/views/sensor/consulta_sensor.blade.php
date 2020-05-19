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
               	<th>Device</th>
                <th>Marca</th>
                <th>Fecha Creación</th>
            </thead>
                @foreach($data as $sensor)
                <tbody>
                   	<td>
                   		<p>{{ $sensor->id_device }}</p>
                   	</td>
                   	<td>
                   		<p>{{ $sensor->id_marca }}</p>
                   	</td>
                   	<td>
                   		<p>{{ $sensor->created_at }}</p>
                   	</td>                   			
                </tbody>
                @endforeach  
        </table>
        {!! $data-> render() !!}
    </div>

@endsection	
