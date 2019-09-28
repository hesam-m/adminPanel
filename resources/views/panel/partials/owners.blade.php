@extends('panel.master.master')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    @can('add_owner',$user)
                    <div class="box-header">
                        <h3 class="box-title">صاحبان کسب و کار</h3><br><br>
                        <a href="{{route('dashboard.register')}}" class="btn mr-auto btn-primary btn-lg">افزودن کسب و کار جدید</a>
                    </div><!-- /.box-header -->
                    @endcan
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>نام</th>
                                <th>موبایل</th>
                                <th>تاریخ ثبت</th>
                                <th>تاریخ بروزرسانی</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($owners)>0)
                                @foreach($owners as $owner)
                            <tr>
                                <td>{{$owner->name}}</td>
                                <td>{{$owner->mobile}}</td>
                                <td>{{$owner->created_at}}</td>
                                <td>{{$owner->updated_at}}</td>
                            </tr>
                                @endforeach
                             @endif
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>نام</th>
                                <th>موبایل</th>
                                <th>تاریخ ثبت</th>
                                <th>تاریخ بروزرسانی</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

@stop
