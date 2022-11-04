<div class="table-responsive-sm">
    <table class="table table-striped" id="clients-table">
        <thead>
            <tr>
                <th>Client Id</th>
                {{-- <th>Bidang Usaha</th> --}}
                <th>Npwp</th>
                <th>Nama Perusahaan</th>
                {{-- <th>Alamat 1</th> --}}
                {{-- <th>Alamat 2</th> --}}
                {{-- <th>Kelurahan</th> --}}
                {{-- <th>Kecamatan</th> --}}
                {{-- <th>Kota</th> --}}
                {{-- <th>Provinsi</th> --}}
                {{-- <th>No Kontak Billing</th> --}}
                {{-- <th>Email Billing</th> --}}
                {{-- <th>Website Billing</th> --}}
                {{-- <th>Pic Billing</th> --}}
                {{-- <th>Jabatan Billing</th> --}}
                {{-- <th>No Telepon</th> --}}
                {{-- <th>Mobile</th> --}}
                {{-- <th>Email</th> --}}
                {{-- <th>Nama Pic</th> --}}
                {{-- <th>Jabatan</th> --}}
                <th>Status Pelanggan</th>
                <th>Product Layanan</th>
                {{-- <th>Hasil Produksi</th> --}}
                <th>Potensi Penjualan</th>
                <th>Valid</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clients as $clients)
            <tr>
                <td>{{ $clients->client_id }}</td>
                {{-- <td>{{ $clients->bidang_usaha }}</td> --}}
                <td>{{ $clients->npwp }}</td>
                <td>{{ $clients->nama_perusahaan }}</td>
                {{-- <td>{{ $clients->alamat_1 }}</td> --}}
                {{-- <td>{{ $clients->alamat_2 }}</td>
                <td>{{ $clients->kelurahan }}</td>
                <td>{{ $clients->kecamatan }}</td>
                <td>{{ $clients->kota }}</td>
                <td>{{ $clients->provinsi }}</td>
                <td>{{ $clients->no_kontak_billing }}</td>
                <td>{{ $clients->email_billing }}</td>
                <td>{{ $clients->website_billing }}</td>
                <td>{{ $clients->pic_billing }}</td>
                <td>{{ $clients->jabatan_billing }}</td>
                <td>{{ $clients->no_telepon }}</td>
                <td>{{ $clients->mobile }}</td>
                <td>{{ $clients->email }}</td>
                <td>{{ $clients->nama_pic }}</td>
                <td>{{ $clients->jabatan }}</td> --}}
                <td>{{ $clients->status_pelanggan }}</td>
                <td>{{ $clients->product_layanan }}</td>
                {{-- <td>{{ $clients->hasil_produksi }}</td> --}}
                <td>{{ $clients->potensi_penjualan }}</td>
                <td>{{ $clients->valid }}</td>
                <td>
                    {!! Form::open(['route' => ['clients.destroy', $clients->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clients.show', [$clients->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('clients.edit', [$clients->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
