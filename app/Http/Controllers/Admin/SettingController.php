<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Lang;
use App\Models\Admin\SettingModel;
use App\Models\Admin\CountryModel;
use Config;

class SettingController extends Controller
{
    protected $settingModel;
    public function __construct()
    {
        $this->settingModel = new SettingModel();
    }
    public function index(Request $request)
    {
        $item = $this->settingModel::first();
        $countryModel = new CountryModel();
        return view('admin.setting', [
            'page_title_lang' => Lang::get('admin_pages.setting'),
            'controller' => $this,
            'locales' => Config::get('app.locales'),
            'currentLocale' => app()->getLocale(),
            'setting_info' => $item,
            'countries' => $countryModel::all()
        ]);
    }

    public function save(Request $request)
    {
        $request_data = [
            "country_code" => trim($request['country_code']),
            "domain" => trim($request['domain']),
            "api_key" => trim($request['api_key']),
        ];

        $edit_id = 0;
        if($this->settingModel::first()) {
            $edit_id = $this->settingModel::first()->id;
        }else {
            $edit_id = 0;
        }
        if ($edit_id > 0) {
            $result = $this->settingModel::whereId($edit_id)->update($request_data);
        } else {
            $result = $this->settingModel::create($request_data);
        }
        return redirect(lang_url('admin/setting'))->with(['msg' => Lang::get('admin_pages.action_done'), 'result' => $result['result']]);
    }
}
