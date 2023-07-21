@extends('layouts.app_admin')

@section('content')
    <div class="card card-cascade narrower">
        <div class="table-responsive">
            <table class="table">
                <thead class="blue-grey lighten-4">
                <tr>
                    <th>#</th>
                    <th>{{__('admin_pages.country_code')}}</th>
                    <th class="text-right">
                        <a href="{{lang_url('admin/create/seo')}}" class="btn btn-sm btn-secondary waves-effect waves-light">
                            {{__('admin_pages.add')}}
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($items as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->country_code}}</td>
                        <td class="text-right">
                            <a href="{{lang_url('admin/edit/seo/'.$item->id)}}" class="btn btn-sm btn-secondary waves-effect waves-light">{{__('admin_pages.edit')}}</a>
                            <a href="{{lang_url('admin/delete/seo/'.$item->id)}}" class="btn btn-sm btn-secondary waves-effect waves-light confirm" data-my-message="{{__('admin_pages.are_u_sure_delete_i')}}">{{__('admin_pages.delete')}}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
