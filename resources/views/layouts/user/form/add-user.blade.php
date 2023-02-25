<x-html-layout>
    <x-slot:title>
        Tambah User | Digilib
        </x-slot>
        <x-sidebar-layout></x-sidebar-layout>
        <div id="main" class="pt-xl-0 pt-sm-3 mt-0 ml-1 px-4">
            <div class="row">
                <div class="col-6">
                    <div class="m-0 pt-2 ">
                        <h3 class="m-0 p-0 text-white">Tambah User</h3>
                        <p class="text-white-50">Form penambahan user</p>
                    </div>
                </div>

                <div class="col-6 mt-3">
                    <nav class="breadcrumb-header float-md-end" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-white-50">User</li>                        
                            <li class="breadcrumb-item"><a class="text-white" href="add-item">Tambah User</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <section class="section">
                <form action="{{ route('add-user') }}" method="POST">
                    <div style="border-bottom: 2px solid; border-radius: 4px;" class="card border-primary">
                        <div class="card-body">
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <div class="row">
                                @csrf
                                <div class="row p-0 m-0">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" name="name" class="form-control" placeholder="Nama"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="writter">Nomor HP</label>
                                            <input type="number" name="phone" class="form-control"
                                                placeholder="08*********" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="code">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="example@batuurip.co.id" required>
                                </div>                                
                                <div class="form-group">
                                    <label for="code">Alamat</label>
                                    <textarea class="form-control" name="address" placeholder="Rumah dekat dengan apa? Kelurahan-Kecamatan-Kabupaten"
                                        id="floatingTextarea" style="height: 44px;" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="categorySelect">Kategori</label>
                                    <select class="form-select" name="id_category" id="categorySelect" required>                                                                                                                        
                                            <option disabled selected value>Pilih Jenis Kelamin</option>                                        
                                            <option value="l" required>Laki-Laki</option>                                        
                                            <option value="p" required>Perempuan</option>                                        
                                    </select>
                                    <p>
                                        <small class="text-muted">Nama kategori pilihan kamu.</small>
                                    </p>
                                </div>
                            </div>
                            <div class="px-2 d-flex justify-content-end">
                                <button class="btn btn-primary w-auto" type="submit">Buka Rekening Baru</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        <x-html-script-layout></x-html-script-layout>
</x-html-layout>
