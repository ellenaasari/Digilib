<x-html-layout>
    <x-slot:title>
        User | Digilib
        </x-slot>
        <x-sidebar-layout></x-sidebar-layout>
        <div id="main" class="pt-xl-0 pt-sm-3 mt-0 ml-1 px-4">
            <div class="row">
                <div class="col-6 order-md-1">
                    <div class="m-0 pt-2 ">
                        <h3 class="m-0 p-0 text-white">Data User</h3>
                        <p class="text-white-50">Tabel seluruh data user yang tersedia</p>
                    </div>
                </div>
                <div class="mt-3 col-6 order-md-2">
                    <nav class="breadcrumb-header float-end" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="text-white-50 breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item"><a class="text-white" href="stock">User</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div style="border-radius: 4px; border-bottom: 2px solid" class="card p-0 mt-3 border-primary">
                <div class="card-body mt-2">
                    <div style="position: absolute; top: -20px; left: 10px;border-radius: 5px;padding: 10px 10px; border-bottom: 2px solid;text-align: center; box-shadow: 0 0 10px rgba(0, 0, 0, .15);"
                        class="card border-0 shadow rounded">
                        <h6 style="margin: 0px;">Stok Buku</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="table">
                            <a href="{{ route('add-user') }}" type="button"
                                class="btn btn-success rounded-pill btn-sm float-end ms-2">
                                <i class="bi bi-plus-circle"></i>
                                <span> | Tambah User</span>
                            </a>
                            <thead>
                                <tr>
                                    <th width='5%'>NO</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Hp</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->code }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td class="text-center">                                          
                                            <a href="{{ route('data-user', ['code_user' => $user->code]) }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="bi bi-eye"></i> Detail
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <x-html-script-layout>
            <script>
                let jquery_datatable = $("#table").DataTable();                
            </script>
        </x-html-script-layout>
</x-html-layout>
