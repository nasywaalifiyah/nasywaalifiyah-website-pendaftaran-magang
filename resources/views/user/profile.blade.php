@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container mt-5">
    <div class="card p-4 shadow-lg" style="background-color: #24005f; color: white;">
        <h4 class="fw-bold text-center">Edit Profile</h4>

        <!-- Menampilkan pesan sukses jika profil berhasil diperbarui -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form untuk mengedit profil -->
        <form action="{{ route('updateprofile') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Profile Picture Upload (Placed at the top and center) -->
            <div class="mb-3 text-center">
                <label for="profile-picture" class="profile-picture-label">
                    <img src="{{ asset('sizuka.svg') }}" id="profile-preview" class="profile-img" alt="Profile Photo">
                    <span class="change-photo-text">Click to change photo</span>
                </label>
                <input type="file" id="profile-picture" name="profile-picture" accept="image/*" style="display:none;" onchange="previewImage(event)">
                @error('profile-picture') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="" required>
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="" required>
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi Baru</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</div>

<script>
    function previewImage(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        
        reader.onload = function() {
            const profileImage = document.getElementById('profile-preview');
            profileImage.src = reader.result;
        }
        
        reader.readAsDataURL(file);
    }
</script>

<style>
    .profile-picture-label {
        cursor: pointer;
        display: inline-block;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        background-color: #e0e0e0;
        overflow: hidden;
        position: relative;
    }

    .profile-picture-label img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .change-photo-text {
        position: absolute;
        bottom: 5px;
        left: 0;
        right: 0;
        text-align: center;
        color: white;
        font-size: 12px;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 2px;
    }

    .form-label {
        font-weight: bold;
    }

    .mb-3 {
        margin-bottom: 1.5rem;
    }

    .text-center {
        text-align: center;
    }
</style>
@endsection
