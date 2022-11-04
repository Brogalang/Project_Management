<div class="table-responsive-sm">
    <table class="table table-striped" id="projects-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Project</th>
                <th>Pemilik</th>
                <th>Client</th>
                <th>Kontrak</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($projects as $key => $project)
            <tr>
                <td>
                    {{ ++$key }}
                </td>
                <td>
                    <h6><strong>{{ $project->project_id }}</strong></h6>
                    <h6>{{ $project->project }}</h6>
                    <h6 class="text-danger">({{ $project->jenis_project }})</h6>
                </td>
                <td>
                    <small><strong>{{ $project->divisi }}</strong></small>
                    <h6>{{ $project->departement }}</h6>
                    <hr>
                    <small><strong>Sales AM</strong></small>
                    <h6>{{ $project->sales_am }}</h6>
                </td>
                <td><h6>{{ $project->client }}</h6></td>
                <td>
                    <small>No. Kontrak</small>
                    <h6><strong>{{ $project->kontrak_no }}</strong></h6>
                    <hr>
                    <small>Tanggal Kontrak</small>
                    <h6><strong>{{ $project->kontrak_tgl_mulai }} ~ {{ $project->kontrak_tgl_selesai }}</strong></h6>
                    <hr>
                    <small>Nilai Kontrak ~ BT (AT)</small>
                    <h6><strong>{{ number_format($project->nilai_kontrak_BT, 0) }}</strong></h6>
                    <h6><strong><i>({{ number_format($project->nilai_kontrak_AT, 0) }})</i></strong></h6>
                </td>
                <td>
                    @if ($project->status == 'Sedang Berjalan')
                        <h6><span class="badge badge-warning">{{ $project->status }}</span></h6>
                    @elseif ($project->status == 'Selesai')
                        <h6><span class="badge badge-success">{{ $project->status }}</span></h6>
                    @elseif ($project->status == 'Batal')
                        <h6><span class="badge badge-danger">{{ $project->status }}</span></h6>
                    @endif
                </td>
                <td>
                    {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('projects.show', [$project->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('projects.edit', [$project->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
