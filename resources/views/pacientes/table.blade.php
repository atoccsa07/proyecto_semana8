<div class="table-responsive">
    <table class="table" id="pacientes-table">
        <thead>
            <tr>
            <th>CODIGO</th>
                <th>APELLIDO Y NOMBRES</th>
        <th>DNI</th>
        <th>CELULAR</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <tr>
            <td>{{ $paciente->id_paciente }}</td>
                <td>{{ $paciente->ape_nom }}</td>
            <td>{{ $paciente->dni }}</td>
            <td>{{ $paciente->celular }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pacientes.destroy', $paciente->id_paciente], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pacientes.show', [$paciente->id_paciente]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pacientes.edit', [$paciente->id_paciente]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
