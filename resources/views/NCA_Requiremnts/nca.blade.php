@extends('layouts.app')

@section('content')
    <script src=".../"></script>

    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    المستوى
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">المستوى الاول</a>
                    <a class="dropdown-item" href="#">المستوى الثاني</a>
                    <a class="dropdown-item" href="#">المستوى الثالث</a>
                    <a class="dropdown-item" href="#">المستوى الرابع</a>
                </div>
            </div>
        </div>
    </div>
        <button id="TheElement" class="fa fa-file-excel-o">Export excel</button>
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="budget">رقم الضابط</th>
                <th scope="col" class="sort" data-sort="budget">رقم الضابط الفرعي</th>
                <th scope="col" class="sort" data-sort="budget">تفاصيل الضابط</th>
                <th scope="col" class="sort" data-sort="status">الإدارة المعنية</th>
                <th scope="col" class="sort" data-sort="status">وزن الضابط</th>
                <th scope="col" class="sort" data-sort="status">إجراءات التصحيح</th>
                <th scope="col" class="sort" data-sort="status">حالة الإلتزام</th>
                <th scope="col" class="sort" data-sort="status">نسبة انجاز الضابط الفعلي من %100</th>
                <th scope="col" class="sort" data-sort="status">ملاحظات (مالك النظام)</th>
                <th scope="col" class="sort" data-sort="status">ملاحظات إدارة الحوكمة والمخاطر</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody class="list">
            <tr>
                <td class="budget">

                </td>
                <th scope="row">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <span class="name mb-0 text-sm"></span>
                        </div>
                    </div>
                </th>
                <td>
                      <span class="badge badge-dot mr-4">
                        <span class="status"></span>
                      </span>
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
