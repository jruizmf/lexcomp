<h2 class="section-title">Listado de Ocursos</h2>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">URL</th>
        <th class="text-center">Creado</th>
        <th class="text-center">Modificado</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($list as $item)
        <tr>
            <td class="text-center">{{ $item->id }}</td>
            <td class="text-center">{{ $item->name }}</td>
            <td class="text-center">{{ $item->description }}</td>
            <td class="text-center">{{-- $item->url --}}uncomment</td>
            <td class="text-center">{{ $item->created_at }}</td>
            <td class="text-center">{{ $item->updated_at }}</td>
    
            <td class="text-center">
            <button onclick="$('#demoModal').modal('show')" type="button" class="btn btn-secondary btn-xs"  data-toggle="tooltip" data-toggle="modal" data-target="#demoModal" data-placement="top" title="Variables de ocurso">
                        <img src="../img/icons/print-icon.svg" width="16" heigth="21" alt="Print">
                    </button>
                <a href="{{ url('/ocursos/editar/'.$item->id.'') }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Modificar Ocurso" >
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"><img src="../img/icons/edit-icon.svg" width="14" heigth="14" alt="Edit"></span>
                </a>
                <form method="POST" action="{{ route('event/destroy', [ 'id'=> $item->id ]) }}">
                {{Form::hidden('_method','DELETE')}}
                @csrf
                <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Eliminar Ocurso" >
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"><img src="../img/icons/trash.svg" width="14" heigth="14" alt="Delete"></span>
                </button>
                {!! Form::close() !!}
                  <!-- Modal Example Start-->
            <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="demoModalLabel">Variables</h5>
								<button type="button" class="close" data-dismiss="modal" aria- 
                                label="Close" onclick=" $('#demoModal').modal('hide')">
									<span aria-hidden="true">&times;</span>
								</button>
						</div>
                     
						<div class="modal-body">
                       
                            {{ $item->data }}
						</div>
						<div class="modal-footer">
							<button onclick=" $('#demoModal').modal('hide')" type="button" class="btn btn-secondary" data- 
                            dismiss="modal">Cerrar</button>
								<button type="submit" class="btn btn-primary">Guardar 
                                </button>
						</div>

					</div>
				</div>
			</div>
            </td>
          

        </tr>
    @endforeach
  </tbody>

</table>
