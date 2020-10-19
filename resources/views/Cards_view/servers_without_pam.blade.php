@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    الادارة
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">محفظة القضاء</a>
                    <a class="dropdown-item" href="#">محفظة التنفيذ</a>
                    <a class="dropdown-item" href="#">محفظة التوثيق</a>
                    <a class="dropdown-item" href="#">محفظة الثروة العقارية</a>
                    <a class="dropdown-item" href="#">التحول الرقمي</a>
                    <a class="dropdown-item" href="#">البنية التحتية</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    الادارة التابعة
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">محفظة القضاء</a>
                    <a class="dropdown-item" href="#">محفظة التنفيذ</a>
                    <a class="dropdown-item" href="#">محفظة التوثيق</a>
                    <a class="dropdown-item" href="#">محفظة الثروة العقارية</a>
                    <a class="dropdown-item" href="#">التحول الرقمي</a>
                    <a class="dropdown-item" href="#">البنية التحتية</a>
                </div>
            </div>
        </div>
    </div>
    <button id="excelHtml5" class="excelHtml5" style="background-color: #2f9c0a">Export excel</button>
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name">id</th>
                <th scope="col" class="sort" data-sort="status">Server</th>
                <th scope="col" class="sort" data-sort="status">environment</th>
                <th scope="col" class="sort" data-sort="status">DR , DMZ , DC</th>
                <th scope="col" class="sort" data-sort="status">Port</th>
                <th scope="col" class="sort" data-sort="status">Qradar</th>
                <th scope="col" class="sort" data-sort="status">PAM</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody class="list">
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm">1</span>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    10.161.118.34
                </td>
                <td>
                      <span class="badge badge-dot mr-4">
                        <span class="status"></span>
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
