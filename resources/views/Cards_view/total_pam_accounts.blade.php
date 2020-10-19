@extends('layouts.app')

@section('content')
    <script src=".../"></script>
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
        </div>
    </div>
    <button id="excelHtml5" class="excelHtml5" style="background-color: #2f9c0a">Export excel</button>
        <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="budget">id</th>
                <th scope="col" class="sort" data-sort="budget">Section</th>
                <th scope="col" class="sort" data-sort="budget">Account Name</th>
                <th scope="col" class="sort" data-sort="status">Total Servers</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody class="list">
            <tr>
                <td class="budget">
                    1
                </td>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                            <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">Najiz</span>
                        </div>
                    </div>
                </th>
                <td>
                      <span class="badge badge-dot mr-4">
                        <span class="status">PAM_Najiz_DC</span>
                      </span>
                </td>
                <td>
                      <span class="badge badge-dot mr-4">
                        <span class="status">10.161.118.34</span>
                      </span>
                </td>
                <td class="text-right">
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
