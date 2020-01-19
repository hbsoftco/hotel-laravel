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
                                    <span>ثبت اتاق جدید</span>
                                </a>
                                <a href="/admin/hotel/create" class="list-group-item list-group-item-action">
                                    <span>ثبت هتل‌ جدید</span>
                                </a>
                                <a href="/admin/hotel/list" class="list-group-item list-group-item-action">لیست هتل‌ها</a>
                                <a href="/admin/books" class="list-group-item list-group-item-action">لیست روزروها</a>
                                <a href="/admin/users/manage" class="list-group-item list-group-item-action">لیست کاربران</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="alert alert-info alert-block">
                                <span>ثبت اتاق برای هتل </span>
                                <span class="badge badge-pill badge-danger">
                                    <span>{{$hotel->name}}</span>
                                </span>
                            </div>
                            <hr>

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            <hr>
                            @endif


                            <form action="/admin/room/create" method="POST">
                                @csrf
                                <input type="hidden" name="hotel_id" value={{$hotel->id}}>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <input type="number" class="form-control" required id="bed_count" name="bed_count" placeholder="تعداد تختخواب">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="number" class="form-control" required id="price" name="price" placeholder="قیمت اتاق  (تومان)">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="mize_tahrir">میز تحریر</label>
                                        <select required id="mize_tahrir" name="mize_tahrir" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="abajur">آباژور</label>
                                        <select required id="abajur" name="abajur" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="chayisaz">چای ساز</label>
                                        <select required id="chayisaz" name="chayisaz" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="ab_reyegan">آب رایگان</label>
                                        <select required id="ab_reyegan" name="ab_reyegan" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="rakht_aviz">رخت آویز</label>
                                        <select required id="rakht_aviz" name="rakht_aviz" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="room_service">روم سرویس</label>
                                        <select required id="room_service" name="room_service" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="sobhane"> صبحانه</label>
                                        <select required id="sobhane" name="sobhane" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="yakhchal"> یخچال</label>
                                        <select required id="yakhchal" name="yakhchal" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="mobleman"> مبلمان</label>
                                        <select required id="mobleman" name="mobleman" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="komod_lebas"> کمد لباس</label>
                                        <select required id="komod_lebas" name="komod_lebas" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="telefon"> تلفن</label>
                                        <select required id="telefon" name="telefon" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="tv"> تلویزیون</label>
                                        <select required id="tv" name="tv" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="sandoq_amanat"> صندوق امانات</label>
                                        <select required id="sandoq_amanat" name="sandoq_amanat" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="system_elam_hariq"> سیستم اعلام حریق</label>
                                        <select required id="system_elam_hariq" name="system_elam_hariq" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="system_tahvie"> سیستم تهویه</label>
                                        <select required id="system_tahvie" name="system_tahvie" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="wifi"> وای فای</label>
                                        <select required id="wifi" name="wifi" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="hamam"> حمام</label>
                                        <select required id="hamam" name="hamam" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="lavazem_behdashti"> لوازم بهداشتی</label>
                                        <select required id="lavazem_behdashti" name="lavazem_behdashti" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="dampayi"> دمپایی</label>
                                        <select required id="dampayi" name="dampayi" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="wc_faranfi"> توالت فرنگی</label>
                                        <select required id="wc_faranfi" name="wc_faranfi" class="form-control">
                                            <option value="" selected></option>
                                            <option value=1>دارد</option>
                                            <option value=0>ندارد</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">ثبت اتاق</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection