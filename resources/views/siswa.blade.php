<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-3">Data Siswa</h2>
        <div class="d-flex justify-content-between mb-3">
            <div>
                <a href="{{ route('kelas.index') }}" class="btn btn-primary">Kelola Kelas</a>
                <a href="{{ route('wali.index') }}" class="btn btn-primary">Kelola Wali Murid</a>
            </div>
            <form method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari siswa..." value="">
                <button type="submit" class="btn btn-success">Cari</button>
            </form>
            <a href="{{ route('siswa.create') }}" class="btn btn-success">Tambah Siswa</a>
        </div>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Kelas</th>
                    <th>Wali Murid</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                    <tr>
                        <td>{{ $s->nis }}</td>
                        <td>{{ $s->nama_siswa }}</td>
                        <td>{{ $s->jenis_kelamin }}</td>
                        <td>{{ $s->tempat_lahir }}</td>
                        <td>{{ $s->tanggal_lahir }}</td>
                        <td>{{ $s->nama_kelas }}</td>
                        <td>{{ $s->nama_wali }}</td>
                        <td>
                            <a href="{{ route('siswa.edit', ['id' => $s->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDelete{{ $s->id }}">Hapus</button>

                            <!-- Modal Konfirmasi Hapus -->
                            <div class="modal fade" id="confirmDelete{{ $s->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $s->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel{{ $s->id }}">Konfirmasi Hapus</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data siswa {{ $s->nama_siswa }}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <a href="{{ route('siswa.delete', ['id' => $s->id]) }}" class="btn btn-danger">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
