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
                                <a href="/admin/hotel/create" class="list-group-item list-group-item-action active">
                                    <span>ثبت هتل‌ جدید</span>
                                </a>
                                <a href="/admin/hotel/list" class="list-group-item list-group-item-action">لیست هتل‌ها</a>
                                <a href="/admin/books" class="list-group-item list-group-item-action">لیست روزروها</a>
                                <a href="/admin/users/manage" class="list-group-item list-group-item-action">لیست کاربران</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            <hr>
                            @endif

                            <form action="/admin/hotel/register" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" required id="name" name="name" placeholder="نام هتل">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required id="production_date" name="production_date" placeholder="سال ساخت">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required id="star" name="star" placeholder="تعداد ستاره">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required id="room_count" name="room_count" placeholder="تعداد اتاق">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required id="number_of_floors" name="number_of_floors" placeholder="تعداد طبقات">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required id="number_of_beds" name="number_of_beds" placeholder="تعداد تخت‌ها">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required id="labi_capacity" name="labi_capacity" placeholder="ظرفیت لابی">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="restaurant">رستوران</label>
                                        <select required id="restaurant" name="restaurant" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="parking">پارکینگ</label>
                                        <select required id="parking" name="parking" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="free_wifi">وای فای رایگان</label>
                                        <select required id="free_wifi" name="free_wifi" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="pool">استخر</label>
                                        <select required id="pool" name="pool" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="custom-file">
                                            <input name="img" type="file" class="custom-file-input" id="img" lang="fa">
                                            <label required class="custom-file-label" for="img">انتخاب تصویر</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="آدرس">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="description" id="description" placeholder="توضیحات">
                                </div>
                                <button type="submit" class="btn btn-primary">ثبت هتل</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection