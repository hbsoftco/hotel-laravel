@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">پنل مدیریت هتل</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="list-group">
                                <a href="/admin/hotel/create" class="list-group-item list-group-item-action">
                                    <span>ثبت هتل‌ جدید</span>
                                </a>
                                <a href="/admin/hotel/list" class="list-group-item list-group-item-action active">لیست هتل‌ها</a>
                                <a href="/admin/books/manage" class="list-group-item list-group-item-action">لیست روزروها</a>
                                <a href="/admin/users/manage" class="list-group-item list-group-item-action">لیست کاربران</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">نام هتل</th>
                                        <th scope="col">اتاق‌ها</th>
                                        <th scope="col">ستاره</th>
                                        <th scope="col">تعداد طبقه</th>
                                        <th scope="col">تعداد تخت‌ها</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>هتل الماس ۲ مشهد</td>
                                        <td>۱۰۰</td>
                                        <td>۵ ستاره</td>
                                        <td>۳ طبقه</td>
                                        <td>۳۲۰</td>
                                    </tr>
                                    <tr>
                                        <td>هتل درویشی مشهد</td>
                                        <td>۴۵۹</td>
                                        <td>۳ ستاره</td>
                                        <td>۱۰ طبقه</td>
                                        <td>۳۲۰</td>
                                    </tr>
                                    <tr>
                                        <td>هتل قصر طلایی مشهد</td>
                                        <td>۳۲۰</td>
                                        <td>۷ ستاره</td>
                                        <td>۵ طبقه</td>
                                        <td>۳۲۰</td>
                                    </tr>
                                    <tr>
                                        <td>هتل قصر طلایی مشهد</td>
                                        <td>۳۲۰</td>
                                        <td>۷ ستاره</td>
                                        <td>۵ طبقه</td>
                                        <td>۳۲۰</td>
                                    </tr>
                                    <tr>
                                        <td>هتل قصر طلایی مشهد</td>
                                        <td>۳۲۰</td>
                                        <td>۷ ستاره</td>
                                        <td>۵ طبقه</td>
                                        <td>۳۲۰</td>
                                    </tr>
                                    <tr>
                                        <td>هتل قصر طلایی مشهد</td>
                                        <td>۳۲۰</td>
                                        <td>۷ ستاره</td>
                                        <td>۵ طبقه</td>
                                        <td>۳۲۰</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection