@extends('layouts.app')
<style type="text/css">
	.tabla{
		height:400px !important;overflow-y:auto !important;
	}
</style>
@section('content')
<div class="container">
	<div class="tabla">
		<table border="1" class="table table-fixed table-striped table-light">
		<thead class="thead-dark">
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Descripción</th>
					<th scope="col">Total</th>
					<th scope="col">Fecha</th>
					<th scope="col">Eliminar</th>
				</tr>
		</thead>
		<tbody>
				@if($datos)
					@foreach($datos as $producto )
					<tr>
						<td>{{ $producto->product_name }}</td>
						<td>{{ $producto->description }}</td>
						<td>{{ $producto->total }}</td>
						<td>{{ $producto->created_at }}</td>
						<td><a href="/delete/{{ $producto->id }}">Eliminar</a></td>
					</tr>
				@endforeach
				@endif
	            
			
		</tbody>
		</table>
	</div>
</div>
@endsection

