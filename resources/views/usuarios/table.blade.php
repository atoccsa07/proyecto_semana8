<div class="table-responsive">
    <table class="table" id="usuarios-table">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>APELLIDO Y NOMBRES</th>
        <th>USUARIOS</th>
        <th>PASSWORD</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
            <td>{{ $usuario->id_usuario }}</td>
                <td>{{ $usuario->ape_nom }}</td>
            <td>{{ $usuario->usuario }}</td>
            <td>{{ $usuario->password }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['usuarios.destroy', $usuario->id_usuario], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('usuarios.show', [$usuario->id_usuario]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('usuarios.edit', [$usuario->id_usuario]) }}" class='btn btn-default btn-xs'>
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
