@extends('admin._app')

@section('js')
    <script>
        $(document).ready(function() {
            handleViewClick('.viewStudent', 'project-show', function(response) {
                $('#name').val(response.data.name);
                $('#edit_id').val(response.edit_id);
            });

            $('.is_active_change').change(function(e) {
                e.preventDefault();
                const url = 'project-is_active';
                const edit_id = $(this).attr('edit_id');
                const is_active = $(this).prop('checked') ? 1 : 0;
                handleIsActiveChange(edit_id, is_active, url);
            });

            $('.is_delete_change').change(function(e) {
                e.preventDefault();
                const url = 'project-delete';
                const edit_id = $(this).attr('edit_id');
                const is_active = $(this).prop('checked') ? 1 : 0;
                if (is_active === 1) {
                    const confirmed = confirm("Do you want to Restore this user?");
                    if (confirmed) {
                        handleToDeleteUser(edit_id, is_active, url);
                    }
                }
                if (is_active === 0) {
                    const confirmed = confirm("Do you want to delete this user?");
                    if (confirmed) {
                        handleToDeleteUser(edit_id, is_active, url);
                    }
                }
            });

        });
    </script>
@endsection

@section('body-containt')
<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mt-1 mb-4">
            <x-header-page url="/admin/project/create" buttonName="Add new" headerName="project" display="no" />
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-sm">
                        <thead>
                            <tr>

                                <th class="text-nowrap text-capitalize">{{ str_replace('_', ' ', 'Name') }}</th>

                                <th class="text-nowrap text-capitalize">{{ str_replace('_', ' ', 'is_active') }}</th>
                                <th class="text-nowrap text-capitalize">{{ str_replace('_', ' ', 'Delete') }}</th>


                            </tr>
                        </thead>
                        @foreach ($project as $item)
                            <tr>
                                <td>
                                    {{-- <a href="{{ $item->name }}" target="_blank">
                                        {{ $item->name }}
                                    </a> --}}
                                    @php
                                        $parsedUrl = parse_url($item->name);
                                        $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
                                        $query = isset($parsedUrl['query']) ? '?' . $parsedUrl['query'] : '';
                                        $relativeUrl = $path . $query;
                                        // return $relativeUrl;
                                    @endphp
                                    <a href="{{ url('store-time/' . $item->id) }}" target="_blank">
                                        {{ $item->name }}
                                    </a>
                                </td>

                                </a>

                                <td class="text-nowrap">
                                    <x-switch name="is_active" check="{{ $item->is_active }}" class="is_active_change"
                                        edit_id="{{ $item->id }}" />
                                </td>

                                <td class="text-nowrap">
                                    <x-switch name="is_delete" check="1" class="is_delete_change"
                                        edit_id="{{ $item->id }}" />
                                </td>
                            </tr>
                        @endforeach


                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card shadow mt-1 mb-4">
            <x-header-page url="/project-create" buttonName="Back" headerName="project" display="no" />
            <div class="card-body">
                <form action="{{ url('project-create') }}" method="post" class="row" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="edit_id" id="edit_id" />

                    <x-input name="name" label="Name" csize="col-lg-12" />
                    <x-button-info label="Submit" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
