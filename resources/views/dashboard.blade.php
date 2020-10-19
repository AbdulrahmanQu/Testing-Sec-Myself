@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')


{{--        For Export button, currently it's not working--}}
{{--    Ref: https://datatables.net/extensions/buttons/examples/html5/simple.html--}}
    <script src="/public/assets/js/exportexcel.js"></script>
    <button id="excelHtml5" class="excelHtml5" style="background-color: #2f9c0a">Export excel</button>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">

    <div class="table-responsive">
        <table class="table align-items-center table-flush" id="example">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name">id</th>
                <th scope="col" class="sort" data-sort="name">Seciton</th>
                <th scope="col" class="sort" data-sort="budget">Spock</th>
                <th scope="col" class="sort" data-sort="status">NCA Req Status</th>
                <th scope="col">PAM Details</th>
                <th scope="col" class="sort" data-sort="completion">NCA Completion</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody class="list">
            <tr>
                <td>1</td>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                            <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm"><a href="./section/Infrastructure">Infrastructure</a></span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    Adham
                </td>
                <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                </td>

                <td>
                      <span class="badge badge-dot mr-4">
                        <span class="status">Available</span>
                      </span>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="completion mr-2">60%</span>
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-right">
{{--                    Drop Down For Later--}}
{{--                    <div class="dropdown">--}}
{{--                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            <i class="fas fa-ellipsis-v"></i>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">--}}
{{--                            <a class="dropdown-item" href="#">Action</a>--}}
{{--                            <a class="dropdown-item" href="#">Another action</a>--}}
{{--                            <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </td>
            </tr>

            </tbody>
        </table>
    </div>

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
