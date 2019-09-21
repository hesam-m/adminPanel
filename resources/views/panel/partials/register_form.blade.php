@extends('panel.master.master')
    @section('content')
        <div class="box box-warning">

            <div class="box-body">
                <form  method="post" role="form" action="{{route('dashboard.store')}}"  enctype="multipart/form-data">
                    @csrf
                    <div class="container col-md-6">
                        <div class="form-group">
                            <label>نام کسب و کار</label>
                            <input type="text"  name="name" class="form-control" >
                        </div>
                        @error('name')
                        <p class="alert text-red  ">{{ $message }}</p>
                        @enderror

                        <div class="form-group">
                            <label>عرض جغرافیایی</label>
                            <input type="text"  name="latitude" class="form-control" >
                        </div>
                        @error('latitude')
                        <p class="alert text-red  ">{{ $message }}</p>
                        @enderror

                        <div class="form-group">
                            <label>طول جغرافیایی</label>
                            <input type="text"  name="longitude" class="form-control" >
                        </div>
                        @error('longitude')
                        <p class="alert text-red  ">{{ $message }}</p>
                        @enderror

                        <div class="form-group">
                            <label>موبایل</label>
                            <input type="text"  name="mobile" class="form-control" >
                        </div>
                        @error('mobile')
                        <p class="alert text-red  ">{{ $message }}</p>
                        @enderror

                        <div class="form-group">
                            <label>تلفن ثابت</label>
                            <input type="text"  name="tel" class="form-control" >
                        </div>
                        @error('tel')
                        <p class="alert text-red  ">{{ $message }}</p>
                        @enderror

                        <div class="form-group">
                            <label>ایمیل</label>
                            <input type="text"  name="email" class="form-control" >
                        </div>
                        @error('email')
                        <p class="alert text-red  ">{{ $message }}</p>
                        @enderror


                        <button type="submit">ثبت</button>



                    </div>
                    <div class="container col-md-6">
                        <div class="form-group">
                            <label>رمز عبور</label>
                            <input type="password"  name="password" class="form-control" >
                        </div>
                        @error('password')
                        <p class="alert text-red  ">{{ $message }}</p>
                        @enderror


                        <div class="form-group">
                            <label>تکرار رمز عبور</label>
                            <input type="password"  name="password_confirmation" class="form-control" >
                        </div>

                        <!-- textarea -->
                        <div class="form-group">
                            <label>آدرس</label>
                            <textarea class="form-control" rows="3" name="address"></textarea>
                        </div>
                        @error('address')
                        <p class="alert text-red  ">{{ $message }}</p>
                        @enderror

                        <div class="form-group">
                            <label >وضعیت</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="activation_status" id="optionsRadios1" value="{{\App\Models\UserEntity\Owner::$activation_status['activated']}}" >
                                    فعال
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="activation_status" id="optionsRadios2" value="{{\App\Models\UserEntity\Owner::$activation_status['deactivated']}}">
                                    غیرفعال
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="activation_status" id="optionsRadios3" value="{{\App\Models\UserEntity\Owner::$activation_status['blocked']}}" >
                                    مسدود
                                </label>
                            </div>
                        </div>
                        @error('activation_status')
                        <p class="alert text-red  ">{{ $message }}</p>
                        @enderror

                        <!-- select -->
                        <div class="form-group">
                            <label>نوع کسب و کار</label>
                            <select class="form-control" name="owner_category">
                                <option selected>نوع کسب و کار خود را انتخاب کنید</option>
                                @if(count($owner_categories)>0)
                                    @foreach($owner_categories as $owner_category)
                                <option value="{{$owner_category->id}}">{{$owner_category->title}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        @error('owner_category')
                        <p class="alert text-red  ">{{ $message }}</p>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputFile">لوگو</label>
                            <input type="file" name="logo_path" id="exampleInputFile">
                            <p class="help-block">یک لوگو برای کسب و کار خود بارگذاری کنید</p>
                        </div>
                        @error('logo_pathp')
                        <p class="alert text-red ">{{ $message }}</p>
                        @enderror


                    </div>
                    <!-- text input -->

                    <!-- radio -->

                </form>
            </div><!-- /.box-body -->
        </div>
    @stop