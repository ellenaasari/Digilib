<x-html-layout>
    <x-slot:title>
        Data User | Digilib
        </x-slot>
        <x-sidebar-layout></x-sidebar-layout>
        <div id="main" class="pt-xl-0 pt-sm-3 mt-0 ml-1 px-4">
            <div class="row">
                <div class="col-6 order-md-1">
                    <div class="m-0 pt-2 ">
                        <h3 class="m-0 p-0 text-white">Profile</h3>
                        <p class="text-white-50">Data pribadi anda</p>
                    </div>
                </div>
                <div class="mt-3 col-6 order-md-2">
                    <nav class="breadcrumb-header float-end" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="text-white-50 breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item"><a class="text-white" href="stock">Profile</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div style="border-radius: 4px; border-bottom: 2px solid" class="card p-0 mt-3 border-primary">
                <div class="card-body pt-3">
                    <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
                        <li class="nav-item" role="presentation"> <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview" aria-selected="true" role="tab">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#profile-edit" aria-selected="false" tabindex="-1"
                                role="tab">Lengkapi
                                Profile</button>
                        </li>
                        {{-- <li class="nav-item" role="presentation"> <button class="nav-link" data-bs-toggle="tab"
                            data-bs-target="#profile-settings" aria-selected="false" tabindex="-1"
                            role="tab">Pengaturan</button>
                    </li> --}}
                    </ul>
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview" role="tabpanel">
                            <div class="container d-flex h-100 mt-1">
                                <div class="user-img">
                                    <div class="avatar">
                                        @if ($user->photo_profile_path == null)
                                            <img style="width: 75px; height: 75px;"
                                                src="{{ asset('assets/images/faces/1.jpg') }}">
                                        @else
                                            <img style="width: 75px; height: 75px;"
                                                src="{{ asset('storage/profile/' . $user->photo_profile_path) }}">
                                        @endif
                                    </div>
                                </div>
                                <div class="justify-content-center align-self-center ms-3">
                                    <h5 class="">{{ $user->name }}</h5>
                                    <hr class="m-0">
                                    <p class="text-muted mb-0">{{ $user->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <h5 class="card-title">Tentang Saya</h5>
                            @if (empty($user->about))
                                <p class="small fst-italic">Tidak mempunyai identitas</p>
                            @else
                                <p class="small fst-italic">{{ $user->about }}</p>
                            @endif
                            <h5 class="card-title">Profile Details</h5>
                            <div class="table-responsive ">
                                <table class="table table-striped mb-0">
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            @if ($user->gender == 'l')
                                                <td>Laki - Laki</td>
                                            @else
                                                <td>Perempuan</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            @if (empty($user->date_birth))
                                                <td></td>
                                            @else
                                                <td>{{ \Carbon\Carbon::parse($user->date_birth)->translatedFormat('l, j F Y') }}
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tempat Lahir</th>
                                            <td>{{ $user->place_birth }}</td>
                                        </tr>

                                        <tr>
                                            <th>Nomor Handphone</th>
                                            <td>{{ $user->phone }}</td>
                                        </tr>

                                        <tr>
                                            <th>Alamat</th>
                                            <td>{{ $user->address }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">
                            <form action="{{ route('updateProfile', ['id' => $user]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3"> <label for="profileImage"
                                        class="col-md-4 col-lg-3 col-form-label">Foto Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        @if ($user->photo_profile_path == null)
                                            <img style="width: 75px; height: 75px;"
                                                src="{{ asset('assets/images/faces/1.jpg') }}">
                                        @else
                                            <img style="width: 75px; height: 75px;"
                                                src="{{ asset('storage/profile/' . $user->photo_profile_path) }}">
                                        @endif
                                        <div class="pt-2">
                                            <label for="photo_profile_path">
                                                <a class="btn btn-primary btn-sm" title="Upload new profile image"><i
                                                        class="bi bi-upload"></i>
                                                </a>
                                            </label>
                                            <input type="file" name="photo_profile_path" id="photo_profile_path"
                                                style="display: none">
                                            <a href="{{ route('delete-profile') }}" class="btn btn-danger btn-sm"
                                                title="Remove my profile image"><i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap*</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="name" type="text"class="form-control"
                                            value="{{ $user->name }}" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Tentang Saya</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="about" class="form-control" style="height: 100px">{{ $user->about }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email*</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control"
                                            value="{{ $user->email }}" readonly required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="gender" class="col-md-4 col-lg-3 col-form-label">Jenis
                                        Kelamin*</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="form-select" name="gender" id="gender">
                                            <option value="l">Laki - Laki</option>
                                            <option value="p">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="date_birth"class="col-md-4 col-lg-3 col-form-label">Tanggal
                                        Lahir</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="date_birth" type="date" class="form-control"
                                            value="{{ $user->date_birth }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="place_birth" class="col-md-4 col-lg-3 col-form-label">Tempat
                                        Lahir</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="place_birth" type="text" class="form-control"
                                            value="{{ $user->place_birth }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">No HP*</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="phone" type="text" class="form-control"
                                            value="{{ $user->phone }}" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Alamat*</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="address" class="form-control" style="height: 100px" required>{{ $user->address }}</textarea>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                        {{-- <div class="tab-pane fade pt-3" id="profile-settings" role="tabpanel">
                        <form>
                            <div class="row mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                    Password</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="password" type="password" class="form-control"
                                        id="currentPassword">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                    Password</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="renewpassword" type="password" class="form-control"
                                        id="renewPassword">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <x-html-script-layout>\
            <script>
                @if (Session::has('success'))
                    {
                        const swalWithBootstrapButtons = Swal.mixin({
                            customClass: {
                                confirmButton: 'btn btn-success ms-2',
                                cancelButton: 'btn btn-danger'
                            },
                            buttonsStyling: false
                        })
                        swalWithBootstrapButtons.fire(
                            'Mengubah data',
                            'Datamu berhasil diubah!',
                            'success'
                        )
                    }
                    @elseif (Session::has('message'))
                        {
                            const swalWithBootstrapButtons = Swal.mixin({
                                customClass: {
                                    confirmButton: 'btn btn-success ms-2',
                                    cancelButton: 'btn btn-danger'
                                },
                                buttonsStyling: false
                            })
                            swalWithBootstrapButtons.fire(
                                'Foto Terhapus!',
                                'Foto profilmu berhasil dihapus!',
                                'warning'
                            )
                        }
                    @endif
            </script>
        </x-html-script-layout>
</x-html-layout>
