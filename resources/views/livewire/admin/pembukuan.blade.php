
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach ($tabs as $index => $tab)
                    <li class="nav-item">
                        <a class="nav-link{{ $index === 0 ? ' active' : '' }}" id="{{ $tab['id'] }}-tab" data-toggle="tab" href="#{{ $tab['id'] }}" role="tab" aria-controls="{{ $tab['id'] }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}">{{ $tab['label'] }}</a>
                    </li>
                @endforeach
                <li class="nav-item">
                    <a class="nav-link" id="add-tab" href="#" role="tab" aria-controls="add" aria-selected="false">+ Add Tab</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                @foreach ($tabs as $index => $tab)
                    <div class="tab-pane fade{{ $index === 0 ? ' show active' : '' }}" id="{{ $tab['id'] }}" role="tabpanel" aria-labelledby="{{ $tab['id'] }}-tab">
                        <div class="container">
                            <h3>{{ $tab['label'] }} Tab</h3>
                            <!-- Tambahkan konten sesuai kebutuhan -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script>
    $(document).ready(function() {
        $('#myTab a').on('click', function(e) {
            e.preventDefault();
            $(this).tab('show');
        });

        $('#add-tab').on('click', function(e) {
            e.preventDefault();
            var newTabId = 'tab-' + Date.now();
            var newTabLabel = 'New Tab';
            var newTabContent = '<div class="container"><h3>' + newTabLabel + ' Tab</h3></div>';

            var newTabNavItem = '<li class="nav-item">' +
                                '<a class="nav-link" id="' + newTabId + '-tab" data-toggle="tab" href="#' + newTabId + '" role="tab" aria-controls="' + newTabId + '" aria-selected="false">' + newTabLabel + '</a>' +
                                '</li>';

            var newTabContentPane = '<div class="tab-pane fade" id="' + newTabId + '" role="tabpanel" aria-labelledby="' + newTabId + '-tab">' +
                                    newTabContent +
                                    '</div>';

            $('#myTab').append(newTabNavItem);
            $('#myTabContent').append(newTabContentPane);

            $('#' + newTabId + '-tab').tab('show');
        });
    });
</script>
@endpush
