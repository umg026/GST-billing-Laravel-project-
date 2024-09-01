@extends('layout.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="page-title-box">
            <h2 class="page-title font-weight-bold text-uppercase">Manage Clients</h2>
        </div>
    </div>

</div>
@if (session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
@endif
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <a href="{{route('add-party')}}" class="btn btn-sm btn-blue waves-effect waves-light float-right">
                <i class="mdi mdi-plus-circle"></i> Add Client
            </a>
            <h4 class="header-title mb-4 text-uppercase">Manage Clients</h4>
            <div class="row">
                <div class="col-sm-12 col-md-10">
                    <div class="dataTables_length" id="alternative-page-datatable_length"><label>Show
                            <select name="alternative-page-datatable_length" aria-controls="alternative-page-datatable"
                                class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries</label></div>
                </div>
                <div class="col-sm-12 col-md-2">
                    <div id="alternative-page-datatable_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="alternative-page-datatable"></label>
                    </div>
                </div>
            </div>
            <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100 table-bordered"
                id="tickets-table">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Client Type</th>
                        <th>Client info</th>
                        <th>Bank details</th>
                        <th>State</th>
                        <th>Created At</th>
                        <th class="hidden-sm">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($data))
                        @foreach ($data as $index => $tabelData)
                            <tr>
                                <td><b>{{$index + 1}}</b></td>
                                <td><span class="badge badge-info">{{ $tabelData->party_type }}</span></td>
                                <td>
                                    <ul class="list-unstyled">
                                        <li><b>Name :</b><span> {{ $tabelData->full_name}}</span></li>
                                        <li><b>Phone :</b><span> {{ $tabelData->phone_number}}</span></li>
                                        <li><b>Zip code :</b><span> {{ $tabelData->zip_code}}</span></li>

                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-unstyled">
                                        <li><b>Holder Name :</b><span> {{ $tabelData->account_holder_name}}</span></li>
                                        <li><b>Acount Number :</b><span> {{ $tabelData->account_no}}</span></li>
                                        <li><b>Bank name :</b><span> {{ $tabelData->bankname}}</span></li>
                                        <li><b>IFSC code :</b><span> {{ $tabelData->isfc_code}}</span></li>
                                        <li><b>Branch Address :</b><span> {{ $tabelData->branch_address}}</span></li>
                                    </ul>
                                </td>
                                <td>{{ $tabelData->state}}</td>
                                <td>{{ date("d-m-y", strtotime($tabelData->created_at))}}</td>
                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);"
                                            class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm"
                                            data-toggle="dropdown" aria-expanded="false"><i
                                                class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{route('edit-party', $tabelData->id)}}"><i
                                                    class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit</a>
                                            <!-- <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</a> -->
                                            <form method="post" action="{{ route('deleteParty', $tabelData->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="dropdown-item"><i
                                                        class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

        </div><!-- end col -->
    </div>
</div>

@endsection