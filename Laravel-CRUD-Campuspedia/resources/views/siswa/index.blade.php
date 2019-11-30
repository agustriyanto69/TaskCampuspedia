@extends ('layout.master')

@section('content')
            <div class="row">
                <div class="col-6">
                    <h2>Data Siswa Campuspedia</h2>
                </div>

                <div class="col-6">
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                    </button>
                </div>

                <table class="table table-hover">
                    <tr>
                        <th>Nama Siswa</th>
                        <th>No. Telepon</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>

                @foreach ($data_siswa as $siswa)
                    <tr>
                        <td>{{$siswa->nama}}</td>
                        <td>{{$siswa->nohp}}</td>
                        <td>{{$siswa->email}}</td>
                        <td>
                            <a href="/campuspedia-siswa/{{$siswa->id}}/update" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/campuspedia-siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/campuspedia-siswa/sukses" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="InputNama">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control" id="InputNama" placeholder="Nama Lengkap"> 
                </div>
                <div class="form-group">
                    <label for="InputNohp">No Telepon</label>
                    <input name="nohp" type="text" class="form-control" id="InputNohp" placeholder="No Telepon">
                </div>
                <div class="form-group">
                    <label for="InputEmail">Email</label>
                    <input name="email" type="Email" class="form-control" id="InputEmail" placeholder="Email">
                </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
        </div>
@endsection