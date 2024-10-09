<x-layout>
    <div class="container mt-5">
        <div class="card ">
            <h3 class="card-header">Ini Halaman Buku</h3>
            <div class="card-body">
                <div class="col-sm-7">
                    <a href="/buku/create" class="btn btn-primary">Tambah Buku</a>
                </div>
            </div>
            <table class="table table-bordered table-striped table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Sampul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($bukus as $buku) 
                    <tr class="text-center">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->penulis }}</td>
                        <td>{{ $buku->kategori }}</td>
                        <td>
                            <img src="storage/{{ $buku->sampul }}" class="rounded img-fluid" width="100px">
                        </td>
                        <td>
                            <a class="btn btn-warning" href="/buku/{{ $buku->id }}/edit">Ubah</a>
                            <form action="/buku/{{ $buku->id }}" method="post" class="d-inline ms-1">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="deleteData()">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function deleteData() {
            let isConfirmed = confirm('Are you sure?');
        }
    </script>
</x-layout>