@extends('layouts.app')

@section('title','Listado De Ciudades')

@section('content')

<div class="content-wrapper">
    <section class="content-header" style="text-align: right;">
		<div class="container-fluid">
		</div>
    </section>
	@include('layouts.partials.msg')
    <section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header bg-secondary" style="font-size: 1.75rem;font-weight: 500; line-height: 1.2; margin-bottom: 0.5rem;">
							@yield('title')
							@can('employees.create')
								<a href="{{ route('employees.create') }}" class="btn btn-primary float-right" title="Nuevo"><i class="fas fa-plus nav-icon"></i></a>
							@endcan
						</div>
						<div class="card-body">
							<table id="example1" class="table table-bordered table-hover" style="width:100%">
                                <thead class="text-primary">
									<th width="10px">ID</th>
									<th>name</th>
									<th>documentNumber</th>
									<th>address</th>
									<th>phone</th>
									<th>email</th>
                                    <th width="60px">Estado</th>
									<th width="50px">Acción</th>
                                </thead>
                                <tbody>
									@foreach($employees as $employee)
									<tr>
										<td>{{ $employee->id }}</td>
										<td>{{ $employee->name }}</td>
										<td>{{ $employee->documentNumber }}</td>
										<td>{{ $employee->address }}</td>
                                        <td>{{ $employee->phone }}</td>
                                        <td>{{ $employee->email }}</td>
										<td>
											@can('employees.cambioestadoemployee')
												<input data-type="employee" data-id="{{$employee->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" 
												data-toggle="toggle" data-on="Activo" data-off="Inactivo" {{ $ciudad->estado ? 'checked' : '' }}>
											@endcan
										</td>
										<td>
										@can('employees.edit')
											<a href="{{ route('employees.edit',$ciudad->id) }}" class="btn btn-info btn-sm" title="Editar"><i class="fas fa-pencil-alt"></i></a>
										@endcan
										@can('employees.destroy')
											<form class="d-inline delete-form" action="{{ route('employees.destroy', $employee) }}"  method="POST">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger btn-sm" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
											</form>
										@endcan
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
 </div>
@endsection