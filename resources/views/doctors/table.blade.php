<div class="table-responsive">
    <table class="table" id="doctors-table">
        <thead>
            <tr>
            <th>CODIGO</th>
                <th>APELLIDO Y NOMBRES</th>
        <th>NDI</th>
        <th>ESPECIALIDAD</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
            <tr>
            <td>{{ $doctor->id_doctor }}</td>
                <td>{{ $doctor->ape_nom }}</td>
            <td>{{ $doctor->ndi }}</td>
            <td>{{ $doctor->especialidad }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['doctors.destroy', $doctor->id_doctor], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('doctors.show', [$doctor->id_doctor]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('doctors.edit', [$doctor->id_doctor]) }}" class='btn btn-default btn-xs'>
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
