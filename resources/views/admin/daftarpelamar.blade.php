@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                @include('layouts.sidebar')  <!-- Sidebar partial -->
            </div>
            <!-- Main Content -->
            <div class="col-md-9">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="mb-4">Daftar Pelamar</h2>
                    <!-- Table Content -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>NIM</th>
                                <th>Nama Instansi</th>
                                <th>Prodi/Jurusan</th>
                                <th>Minat Magang</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applicants as $index => $applicant)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $applicant->name }}</td>
                                    <td>{{ $applicant->email }}</td>
                                    <td>{{ $applicant->nim }}</td>
                                    <td>{{ $applicant->institution_name }}</td>
                                    <td>{{ $applicant->major }}</td>
                                    <td>{{ $applicant->internship_interest }}</td>
                                    <td>{{ $applicant->status }}</td>
                                    <td>
                                        <a href="{{ route('applicant.edit', $applicant->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('applicant.destroy', $applicant->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                        <a href="{{ route('applicant.show', $applicant->id) }}" class="btn btn-info btn-sm">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                {{ $applicants->links() }}
            </div>
        </div>
    </div>
@endsection
