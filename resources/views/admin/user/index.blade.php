@extends('layouts.admin.app')


@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4">Data User</h2>
        <p class="mb-0">List data seluruh user</p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{ route('user.create') }}" class="btn btn-sm btn-success text-white">
            + Tambah User
        </a>
    </div>
</div>


@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif


<div class="card card-body border-0 shadow table-wrapper table-responsive">
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th class="border-gray-200">NAME</th>
                <th class="border-gray-200">EMAIL</th>
                <th class="border-gray-200">PASSWORD</th>
                <th class="border-gray-200 text-center">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dataUser as $user)
                <tr>
                    <td class="fw-bold">{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><small class="text-muted">{{ Str::limit($user->password, 30) }}</small></td>
                    <td class="text-center">
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary me-1">
                            Edit
                        </a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-4">Belum ada data user.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection