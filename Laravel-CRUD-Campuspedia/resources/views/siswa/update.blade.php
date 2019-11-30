@extends ('layout.master')

@section ('content')
            <div class="row">
                <div class="col-lg-12">
                <div class="col-6">
                    <h2>Update Data Siswa</h2>
                </div>
                <form action="/campuspedia-siswa/{{$siswa->id}}/update_data" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="InputNama">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control" id="InputNama" placeholder="Nama Lengkap" value="{{$siswa->nama}}"> 
                    </div>
                    <div class="form-group">
                        <label for="InputNohp">No Telepon</label>
                        <input name="nohp" type="text" class="form-control" id="InputNohp" placeholder="No Telepon" value="{{$siswa->nohp}}">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email</label>
                        <input name="email" type="Email" class="form-control" id="InputEmail" placeholder="Email" value="{{$siswa->email}}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-warning">Submit</button>
                </form>
            </div>
@endsection