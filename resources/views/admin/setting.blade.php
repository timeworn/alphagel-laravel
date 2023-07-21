@extends('layouts.app_admin')
@section('content')
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-switch.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-body">
                        <div class="form-header btn-secondary">
                            <h3>
                                {{__('admin_pages.setting')}}
                            </h3>
                        </div>
                        <div class="md-form">
                            <label class="active pb-1">{{__('admin_pages.choose_country_code')}}</label>
                                <select class="selectpicker" name="country_code" data-style="btn-secondary">
                                    @foreach ($countries as $item)
                                        <option value="{{$item->code}}" {{isset($setting_info->country_code)
                                                                                && $setting_info->country_code == $item->code ?
                                                                                 'selected' : ''}}>
                                            {{$item->lang_name}} - {{$item->code}}
                                        </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="md-form">
                            <input type="text" name="domain" class="form-control" value="{{isset($setting_info->domain)? $setting_info->domain : ''}}">
                            <label for="form1" class="">DOMAIN</label>
                        </div>
                        <div class="md-form">
                            <input type="text" name="api_key" class="form-control" value="{{isset($setting_info->api_key)? $setting_info->api_key : ''}}">
                            <label for="form1" class="">API KEY</label>
                        </div>
                        <hr>
                        <div class="text-right">
                            <button class="btn btn-secondary waves-effect waves-light">{{__('admin_pages.save')}}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>

@endsection
