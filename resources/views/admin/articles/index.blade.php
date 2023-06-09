@extends('admin.layouts.app')

@section('main-content')
    <link type="text/css" rel="stylesheet" href="{{ asset('app-assets/image-uploader-master/dist/image-uploader.min.css') }}">

    <style>
        tbody>tr>td:hover {
            cursor: grab !important;
        }
    </style>

    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">@lang('common.articles')</h4>
                </div>
                <div class="card-body">
                    @can('create_articles')
                        <button type="button" class="btn btn-outline-primary add_btn" style="float: left"
                            data-bs-original-title="Edit" data-bs-toggle="modal" id="create_btn"
                            data-bs-target=".create_modal">+ @lang('common.add')</button>
                    @endcan

                    {{--                @if (auth()->user()->hasAnyPermission(['edit_country_status'])) --}}
                    {{-- <button value="1" disabled="disabled" id="status_btn" class="status_btn btn btn-dark">
                        @lang('common.activate')
                    </button>
                    <button value="0" disabled="disabled" id="status_btn" class="status_btn btn btn-warning">
                        @lang('common.deactivate')
                    </button> --}}
                    {{--                @endif --}}
                    {{--                @if (auth()->user()->hasAnyPermission(['delete_country'])) --}}
                    @can('delete_articles')
                    <button disabled="disabled" id="delete_btn" class="delete-btn btn btn-danger"><i
                            class="fa fa-lg fa-trash-o"></i> @lang('common.delete')</button>
                    @endcan

                    {{--                @endif
                </div>
                {{-- <form id="search_form" style="margin-right: 25px;margin-top: 30px"> --}}
                    {{-- <h6>@lang('common.search')</h6>
                    <div class="form-row">
                        <div class="form-group">
                            <input id="s_name" name="name" class="form-control" style="width: 15%; display: inline" placeholder="@lang('common.name')">
                            <select id="s_country_id" name="country_id" class="form-control" style="width: 15%; display: inline">
                                <option selected disabled>@lang('common.choose') @lang('common.country')</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            <input type="button" id="search_btn"
                            class="btn btn-info" value="@lang('common.search')">
                            <input type="button" id="clear_btn"
                            class="btn btn-secondary" value="@lang('common.clear_search')">
                        </div>
                    </div>
                </form> --}}
                    @can('show_articles')
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th class="checkbox-column sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 35px;" aria-label="Record Id">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="select_all" />
                                            <label class="form-check-label" for="select_all"></label>
                                        </div>
                                    </th>
                                    <th>@lang('common.id')</th>
                                    <th>@lang('common.title')</th>
                                    <th>@lang('common.short_desc')</th>
                                    <th>@lang('common.type')</th>
                                    <th>@lang('common.author_name')</th>
                                    <th>@lang('common.image')</th>
                                    @canany(['edit_articles','delete_articles'])
                                    <th>@lang('common.actions')</th>
                                    @endcanany
                                </tr>
                            </thead>
                            <tbody id="articles_table">
                            </tbody>
                        </table>
                    </div>
                    @endcan
                    {{-- @endcan --}}
                </div>
            </div>
        </div>
        <div class="modal fade create_modal" id="create_modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                <div class="modal-content">
                    <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-5 px-sm-5 pt-50">
                        <div class="text-center mb-2">
                            <h1 class="mb-1">@lang('common.add') @lang('common.article')</h1>
                        </div>
                        <form id="create_form" data-reset="true" method="POST" class="row gy-1 pt-75 ajax_form"
                            onsubmit="return false" enctype="multipart/form-data">
                            @csrf
                            @foreach (locales() as $key => $value)
                                <div class="col-12 col-md-6">
                                    <label class="form-label"
                                        for="title_{{ $key }}">{{ __('common.title') . ' - ' . __('common.' . $value) }}</label>
                                    <input type="text" id="title_{{ $key }}" name="title_{{ $key }}"
                                        class="form-control"
                                        placeholder="{{ __('common.title') . ' - ' . __('common.' . $value) }}" />
                                    <div class="invalid-feedback"></div>
                                </div>
                            @endforeach
                            @foreach (locales() as $key => $value)
                                <div class="col-12 col-md-6">
                                    <label class="form-label"
                                        for="short_desc_{{ $key }}">{{ __('common.short_desc') . ' - ' . __('common.' . $value) }}</label>
                                    <textarea type="text" id="short_desc_{{ $key }}" name="short_desc_{{ $key }}" class="form-control"
                                        placeholder="{{ __('common.short_desc') . ' - ' . __('common.' . $value) }}"></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>
                            @endforeach

                            <!--Include the JS & CSS-->
                            <link rel="stylesheet" href="{{ asset('texteditor/richtexteditor/rte_theme_default.css') }}" />
                            <script type="text/javascript" src="{{ asset('texteditor/richtexteditor/rte.js') }}"></script>
                            <script type="text/javascript" src='{{ asset('texteditor/richtexteditor/plugins/all_plugins.js') }}'></script>
                            @foreach (locales() as $key => $value)
                                <label class="form-label"
                                    for="full_desc_{{ $key }}">{{ __('common.full_desc') . ' - ' . __('common.' . $value) }}</label>

                                <textarea type="text" id="full_desc_{{ $key }}" name="full_desc_{{ $key }}" class="form-control"
                                    placeholder="{{ __('common.full_desc') . ' - ' . __('common.' . $value) }}"></textarea>

                                <script>
                                    var editor1 = new RichTextEditor("#full_desc_{{ $key }}");
                                </script>
                            @endforeach
                            {{-- <div class="col-12 col-md-6">
                                    <label class="form-label"
                                        for="full_desc_{{ $key }}">{{ __('common.full_desc') . ' - ' . __('common.' . $value) }}</label>
                                    <textarea type="text" id="full_desc_{{ $key }}" name="full_desc_{{ $key }}" class="form-control"
                                        placeholder="{{ __('common.full_desc') . ' - ' . __('common.' . $value) }}"></textarea>
                                    <div class="invalid-feedback"></div>
                                </div> --}}

                            <div class="col-12 col-md-6">
                                <label class="form-label" for="type">{{ __('common.type') }}</label>
                                <select id="type" name="type" class="form-control">
                                    <option value="" disabled selected>@lang('common.select')</option>
                                    <option value="1">@lang('common.article')</option>
                                    <option value="2">@lang('common.ads')</option>
                                    <option value="3">@lang('common.activity')</option>
                                </select>
                                {{-- @if ($errors->has('title_' . $key))
                                        <div style="color: red">{{ $errors->first('title_' . $key) }}</div>
                                    @endif --}}
                            </div>
                            @php
                                $authorName = auth()->user()->full_name;
                            @endphp
                            <div class="col-12 col-md-6" hidden>
                                <label class="form-label" for="author_name">{{ __('common.author_name') }}</label>
                                <input type="text" id="author_name" name="author_name" class="form-control" value="{{ $authorName }}"
                                    placeholder="{{ __('common.author_name') }}" />
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="image">{{ __('common.image') }}</label>
                                <input type="file" id="image" name="image" class="form-control"
                                    placeholder="{{ __('common.image') }}" />
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12 text-center mt-2 pt-50">
                                <button type="submit" class="btn btn-primary me-1 submit_btn"
                                    form="create_form">@lang('common.save_changes')</button>
                                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    @lang('common.discard')
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                <div class="modal-content">
                    <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-5 px-sm-5 pt-50">
                        <div class="text-center mb-2">
                            <h1 class="mb-1">@lang('common.edit') @lang('common.article')</h1>
                        </div>
                        <form id="editUserForm" data-reset="true" method="POST" class="row gy-1 pt-75 ajax_form"
                            onsubmit="return false" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @foreach (locales() as $key => $value)
                                <div class="col-12 col-md-6">
                                    <label class="form-label"
                                        for="edit_title_{{ $key }}">{{ __('common.title') . ' - ' . __('common.' . $value) }}</label>
                                    <input type="text" id="edit_title_{{ $key }}"
                                        name="title_{{ $key }}" class="form-control"
                                        placeholder="{{ __('common.title') . ' - ' . __('common.' . $value) }}" />
                                    <div class="invalid-feedback"></div>
                                </div>
                            @endforeach
                            @foreach (locales() as $key => $value)
                                <div class="col-12 col-md-6">
                                    <label class="form-label"
                                        for="edit_short_desc_{{ $key }}">{{ __('common.short_desc') . ' - ' . __('common.' . $value) }}</label>
                                    <textarea type="text" id="edit_short_desc_{{ $key }}" name="short_desc_{{ $key }}"
                                        class="form-control" placeholder="{{ __('common.short_desc') . ' - ' . __('common.' . $value) }}"></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>
                            @endforeach
                            @foreach (locales() as $key => $value)
                                <div class="col-12 col-md-6">
                                    <label class="form-label"
                                        for="edit_full_desc_{{ $key }}">{{ __('common.full_desc') . ' - ' . __('common.' . $value) }}</label>
                                    <textarea type="text" id="edit_full_desc_{{ $key }}" name="full_desc_{{ $key }}"
                                        class="form-control" placeholder="{{ __('common.full_desc') . ' - ' . __('common.' . "$value") }}"></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>
                            @endforeach
                            <div class="col-12 col-md-6" hidden>
                                <label class="form-label" for="edit_author_name">date</label>
                                <input type="text" id="edit_author_name" name="author_name" class="form-control"
                                    placeholder="{{ __('common.author_name') }}" />
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="edit_image">{{ __('common.image') }}</label>
                                <input type="file" id="edit_image" name="image" class="form-control"
                                    placeholder="{{ __('common.image') }}" />
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="edit_type">{{ __('common.type') }}</label>
                                <select id="edit_type" name="type" class="form-control">
                                    <option value="" disabled selected>@lang('common.select')</option>
                                    <option value="1">@lang('common.article')</option>
                                    <option value="2">@lang('common.ads')</option>
                                    <option value="3">@lang('common.activity')</option>
                                </select>
                            </div>
                            <img id="show_image" style="width: 150px">
                            <div class="col-12 text-center mt-2 pt-50">
                                <button type="submit" class="btn btn-primary me-1 submit_btn"
                                    form="editUserForm">@lang('common.save_changes')</button>
                                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    @lang('common.discard')
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
            integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            var url = '{{ url(app()->getLocale() . '/admin/articles/') }}/';
            var dt_adv_filter = $('#datatable').DataTable({
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>'
                    },
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "@lang('common.search')",
                    "sLengthMenu": "@lang('common.show') @lang('common.menu') @lang('common.data')",
                },
                'columnDefs': [{
                        "targets": 1,
                        "visible": false
                    },
                    {
                        'targets': 0,
                        "searchable": false,
                        "orderable": false
                    },
                ],
                // dom: 'lrtip',
                "order": [
                    [1, 'asc']
                ],
                processing: true,
                serverSide: true,
                searching: false,
                ajax: {
                    url: url + 'indexTable',
                    data: function(d) {
                        d.country_id = $('#s_country_id').val();
                        d.name = $('#s_name').val();
                    }
                },
                columns: [{
                        "render": function(data, type, full, meta) {
                            return `<td class="checkbox-column sorting_1">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input table_ids" type="checkbox" name="table_ids[]" value="` +
                                full.id + `"/>
                                        <label class="form-check-label"></label>
                                    </div>
                                </td>`;
                        }
                    },
                    {
                        data: 'id',
                        name: 'id',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'title',
                        name: 'title',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'short_desc',
                        name: 'short_desc',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'type',
                        name: 'type',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'author_name',
                        name: 'author_name',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'id',
                        'render': function(data, type, full, meta) {
                            return '<img src="' + full.image + '" style="width: 100px;">';
                        }
                    },

                    @canany(['edit_articles','delete_articles'])
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                    @endcanany

                ]
            });
            $(document).ready(function() {
                dt_adv_filter.on('draw', function() {
                    $("#select_all").prop("checked", false)
                    $('#delete_btn').prop('disabled', 'disabled');
                    $('.status_btn').prop('disabled', 'disabled');
                });
                $(document).on('click', '.edit_btn', function(event) {
                    var button = $(this);
                    var id = button.data('id');
                    console.log(button.data());
                    $('#editUserForm').attr('action', url + id + '/update');
                    $('#edit_title_ar').val(button.data('title_ar'));
                    $('#edit_title_en').val(button.data('title_en'));
                    $('#edit_short_desc_ar').val(button.data('short_desc_ar'));
                    $('#edit_short_desc_en').val(button.data('short_desc_en'));
                    $('#edit_full_desc_ar').val($('#full_desc_' + id).html());
                    $('#edit_full_desc_en').val(button.data('full_desc_en'));
                    $('#edit_author_name').val(button.data('author_name'));
                    $('#edit_type').val(button.data('type'));
                    $('#show_image').attr('src', button.data('image'));
                });
                $(document).on('click', '#create_btn', function(event) {
                    $('#create_form').attr('action', '{{ route('articles.store') }}');
                });
            });

            function add_remove(id) {
                $(this).removeClass('btn btn-dark');
                $(this).addClass('btn btn-warning');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                $.ajax({
                    url: '{{ url(app()->getLocale() . '/mmr/cities/update_status/') }}/' + id,
                    method: 'PUT',
                    success: function(data) {
                        $('#btn_' + id).removeClass(data.remove);
                        $('#btn_' + id).addClass(data.add);
                        $('#btn_' + id).text(data.text);
                        $('#msg').html(data.message).show();
                        setTimeout(function() {
                            $("#msg").hide();
                        }, 5000);
                    }
                });
            }

            function Delete(id) {
                Swal.fire({
                    title: 'هل متأكد من الحذف ؟',
                    type: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#3085D6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'نعم',
                    cancelButtonText: 'لا',
                }).then((result) => {
                    if (result.value) {
                        event.preventDefault();
                        document.getElementById('delete-form-' + id).submit();
                    }
                })
            }
        </script>
    @endsection
