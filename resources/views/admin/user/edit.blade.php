@extends('layouts.admin.app')


@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4">Edit User</h2>
        <p class="mb-0">Form untuk memperbarui data user.</p>
    </div>
    <div>
        <a href="{{ route('user.index') }}" class="btn btn-sm btn-gray-800 text-white">Kembali</a>
    </div>
</div>


<div class="card card-body border-0 shadow">
    <form action="{{ route('user.update', $dataUser->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label for="name" class="form-label fw-bold">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', $dataUser->name) }}" required>
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>


            <div class="col-md-6">
                <label for="password" class="form-label fw-bold">Password <small class="text-muted fw-normal">(Kosongkan jika tidak diubah)</small></label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>


            <div class="col-md-6">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email', $dataUser->email) }}" required>
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>


            <div class="col-md-6">
                <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
            </div>
        </div>


        <div class="mt-3">
            <button type="submit" class="btn btn-primary me-2">Update</button>
            <a href="{{ route('user.index') }}" class="btn btn-outline-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection