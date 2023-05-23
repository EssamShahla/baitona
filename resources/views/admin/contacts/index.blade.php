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
                    <h4 class="card-title">@lang('common.contacts')</h4>
                </div>
                <div class="card-body">
                    @can('delete_contacts')
                    <button disabled="disabled" id="delete_btn" class="delete-btn btn btn-danger"><i
                        class="fa fa-lg fa-trash-o"></i> @lang('common.delete')</button>
                        @endcan
                        
                        @can('show_contacts')
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
                                    <th>@lang('common.name')</th>
                                    <th>@lang('common.email')</th>
                                    <th>@lang('common.mobile')</th>
                                    <th>@lang('common.message')</th>
                                    <th>@lang('common.type')</th>
                                    {{-- <th>@lang('common.actions')</th> --}}
                                </tr>
                            </thead>
                            <tbody id="contacts_table">
                            </tbody>
                        </table>
                    </div>
                    @endcan
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
        var url = '{{ url(app()->getLocale() . '/admin/contacts/') }}/';
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
                    data: 'name',
                    name: 'name',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'email',
                    name: 'email',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'mobile',
                    name: 'mobile',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'message',
                    name: 'message',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'type_name',
                    name: 'type_name',
                    orderable: false,
                    searchable: false
                },
                // {
                //     data: 'id',
                //     'render': function(data, type, full, meta) {
                //         return '<img src="' + full.image + '" style="width: 100px;">';
                //     }
                // },
                // {
                //     data: 'action',
                //     name: 'action',
                //     orderable: false,
                //     searchable: false
                // }
            ]
        });
        // $(document).ready(function() {
        //     dt_adv_filter.on('draw', function() {
        //         $("#select_all").prop("checked", false)
        //         $('#delete_btn').prop('disabled', 'disabled');
        //         $('.status_btn').prop('disabled', 'disabled');
        //     });
        //     $(document).on('click', '.edit_btn', function(event) {
        //         var button = $(this);
        //         var id = button.data('id');
        //         console.log(button.data());
        //         $('#editUserForm').attr('action', url + id + '/update');
        //         $('#edit_name_ar').val(button.data('name_ar'));
        //         $('#edit_name_en').val(button.data('name_en'));
        //         $('#edit_email').val(button.data('email'));
        //         $('#edit_mobile').val(button.data('mobile'));
        //         $('#edit_message_ar').val(button.data('message_ar'));
        //         $('#edit_message_en').val(button.data('message_en'));
        //         $('#type').val(button.data('type'));
        //     });
        //     $(document).on('click', '#create_btn', function(event) {
        //         $('#create_form').attr('action', '{{ route('contacts.store') }}');
        //     });
        // });
        // function add_remove(id) {
        //     $(this).removeClass('btn btn-dark');
        //     $(this).addClass('btn btn-warning');
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //         }
        //     });
        //     $.ajax({
        //         url: '{{ url(app()->getLocale() . '/mmr/cities/update_status/') }}/' + id,
        //         method: 'PUT',
        //         success: function(data) {
        //             $('#btn_' + id).removeClass(data.remove);
        //             $('#btn_' + id).addClass(data.add);
        //             $('#btn_' + id).text(data.text);
        //             $('#msg').html(data.message).show();
        //             setTimeout(function() {
        //                 $("#msg").hide();
        //             }, 5000);
        //         }
        //     });
        // }
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
