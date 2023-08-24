<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item ">
                    <a class="nav-link" id="User-tab" href="#" style="cursor:pointer" wire:click="selectMenu('User')" data-toggle="tab" role="tab" aria-controls="User" aria-selected="true">User Panel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="Data-tab" href="#" style="cursor:pointer" wire:click="selectMenu('Data')" data-toggle="tab" role="tab" aria-controls="Data" aria-selected="false">Arsip</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="card">
        <div class="card-body">
            <div class="col-lg-12">
                <div x-data>
                    <div x-show="UserTab">
                        <livewire:admin.user :wire:key="'admin-user'">
                    </div>
                </div>
                <div x-data>
                    <div x-show="DataTab">
                        <livewire:admin.pembukuan :wire:key="'admin-pembukuan'">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
    <script>
        $(document).ready(function () {
            window.livewire.on('DataActive', () => {
                $('#Data-tab').addClass('active');
                $('#User-tab').removeClass('active');
            });
            window.livewire.on('UserActive', () => {
                $('#User-tab').addClass('active');
                $('#Data-tab').removeClass('active');
            });
        });
    </script>
    @endpush
</div>
