
<div class="card">
    <div class="card-body">
        <!-- Form untuk menambah pengguna -->
        <form wire:submit.prevent="addUser">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" wire:model.defer="newUserName">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" wire:model.defer="newUserEmail">
            </div>
            <!-- Tambahkan input lain yang diperlukan -->
        </form>
    </div>
    <div class="card-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button id="refreshButton" type="button" class="btn btn-primary" wire:click="addUser">Simpan</button>
    </div>
</div>
    <br>
    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td> 
                            @foreach ($user->tugas as $role)
                            {{ $role->user_id }}
                            @endforeach
                        </td>
                        <td>
                            <button id="refreshButton" class="btn btn-success btn-sm" wire:click="role">Role</button>
                            <button id="refreshButton" class="btn btn-danger btn-sm" wire:click="confirmDeleteUser({{ $user->id }})">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah Pengguna -->

    <!-- Modal Konfirmasi Penghapusan -->
    <div class="modal fade" id="confirmDeleteUserModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteUserModalLabel" aria-hidden="true">
        
    </div>

    @livewireScripts
    <script>
         document.getElementById('refreshButton').addEventListener('click', function() {
            location.reload();
        });
        Livewire.on('userAdded', () => {
            $('#addUserModal').modal('hide');
        });

        Livewire.on('userDeleted', () => {
            $('#confirmDeleteUserModal').modal('hide');
        });
    </script>


