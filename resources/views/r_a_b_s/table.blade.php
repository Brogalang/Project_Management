<div class="table-responsive-sm">
    <table class="table table-striped" id="rABS-table">
        <thead>
            <tr>
                <th>RAB No</th>
                <th>RAB Tanggal Ttd</th>
                <th>RAB Tanggal Awal</th>
                <th>RAB Tanggal Akhir</th>
                <th>Project Rec Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rABS as $rAB)
            <tr>
                <td>{{ $rAB->rab_no }}</td>
                <td>{{ $rAB->rab_tgl_ttd }}</td>
                <td>{{ $rAB->rab_tgl_awal }}</td>
                <td>{{ $rAB->rab_tgl_akhir }}</td>
                <td>{{ $rAB->project_name }}</td>
                <td>
                    {!! Form::open(['route' => ['rABS.destroy', $rAB->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('rABS.show', [$rAB->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('rABS.edit', [$rAB->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
