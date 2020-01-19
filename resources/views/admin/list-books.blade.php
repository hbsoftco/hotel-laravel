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
                                    <span>لیست رزروها</span>
                                </a>
                                <a href="/admin/hotel/list" class="list-group-item list-group-item-action">لیست هتل‌ها</a>
                                <a href="/admin/books" class="list-group-item list-group-item-action active">لیست روزروها</a>
                                <a href="/admin/users/manage" class="list-group-item list-group-item-action">لیست کاربران</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">نام هتل</th>
                                        <th scope="col">ستاره</th>
                                        <th scope="col">کاربر</th>
                                        <th scope="col">مبلغ رزرو</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($books as $book)
                                    <tr>
                                        <td>{{$book->hotel->name}}</td>
                                        <td>{{$book->hotel->star}}</td>
                                        <td>{{$book->user->name}}</td>
                                        <td>{{$book->room->price}}</td>
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