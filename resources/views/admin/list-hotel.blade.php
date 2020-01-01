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
                            <table class="table table-sm text-center table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">نام هتل</th>
                                        <th scope="col">اتاق‌ها</th>
                                        <th scope="col">ستاره</th>
                                        <th scope="col">تعداد طبقه</th>
                                        <th scope="col">تعداد تخت‌ها</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($hotels as $hotel)
                                    <tr>
                                        <td>{{$hotel->name}}</td>
                                        <td>{{$hotel->room_count}}</td>
                                        <td>{{$hotel->star}}</td>
                                        <td>{{$hotel->number_of_floors}}</td>
                                        <td>{{$hotel->number_of_beds}}</td>
                                        <td>
                                        <a href={{"/admin/hotel/room/".$hotel->id}}>
                                                <small>ثبت اتاق</small>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
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