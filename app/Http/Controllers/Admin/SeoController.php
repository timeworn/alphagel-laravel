<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Lang;
use App\Models\Admin\SeoModel;
use App\Models\Admin\CountryModel;
use Config;

class SeoController extends Controller
{

    public function index(Request $request)
    {
        $seoModel = new SeoModel();
        $items = $seoModel->getAll();
        return view('admin.seo', [
            'page_title_lang' => Lang::get('admin_pages.seo_page'),
            'controller' => $this,
            'locales' => Config::get('app.locales'),
            'currentLocale' => app()->getLocale(),
            'items' => $items
        ]);
    }

    public function create(Request $request)
    {
        $itemInfo = null;
        $countryModel = new CountryModel();
        if (isset($request->number) && (int) $request->number > 0) {
            $seoModel = new SeoModel();
            $itemInfo = $seoModel->getOne($request->number);
            if ($itemInfo == null) {
                abort(404);
            }
        }

        return view('admin.seo_edit', [
            'page_title_lang' => Lang::get('admin_pages.seo_page'),
            'locales' => Config::get('app.locales'),
            'currentLocale' => app()->getLocale(),
            'itemInfo' => $itemInfo,
            'countries' => $countryModel::all()
        ]);
    }

    public function save(Request $request)
    {
        $seoModel = new SeoModel();
        if (isset($request->number) && $request->number > 0) {
            $result = $seoModel->updateItem($request->all(), $request->number);
        } else {
            $result = $seoModel->createItem($request->all());
        }
        return redirect(lang_url('admin/seo'))->with(['msg' => Lang::get('admin_pages.action_done'), 'result' => $result['result']]);
    }
    public function delete(Request $request)
    {
        if (isset($request->itemId) && (int) $request->itemId > 0) {
            $seoModel = new SeoModel();
            $seoModel->deleteItem($request->itemId);
            return redirect(lang_url('admin/seo'))->with(['msg' => Lang::get('admin_pages.item_is_deleted'), 'result' => true]);
        } else {
            abort(404);
        }
    }
}
