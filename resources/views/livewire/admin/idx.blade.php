<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="user-tab" data-toggle="tab" href="#user" role="tab" aria-controls="user" aria-selected="true">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="arsip-tab" data-toggle="tab" href="#arsip" role="tab" aria-controls="arsip" aria-selected="false">Arsip</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">
                    <!-- Konten tab User -->
                    <div class="container">
                        @livewire('admin.user')
                        <!-- Tambahkan konten sesuai kebutuhan -->
                    </div>
                </div>
                <div class="tab-pane fade" id="arsip" role="tabpanel" aria-labelledby="arsip-tab">
                    <!-- Konten tab Arsip -->
                    <div class="container">
                       @livewire('admin.data')
                        <!-- Tambahkan konten sesuai kebutuhan -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script>
       document.getElementById('refreshButton').addEventListener('click', function() {
            location.reload();
        });
    $(document).ready(function() {
        $('#myTab a').on('click', function(e) {
            e.preventDefault();
            $(this).tab('show');
        });
    });
</script>
@endpush
