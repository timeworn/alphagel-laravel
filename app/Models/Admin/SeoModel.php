<?php

namespace App\Models\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Validation\Rule;

class SeoModel extends Model
{

    private $id;
    protected $table = 'seo_pages';

    public function getAll()
    {
        $items = DB::table('seo_pages')->paginate(10);
        return $items;
    }

    public function createItem($post)
    {
        DB::table('seo_pages')->insert([
            'country_code' => trim($post['country_code']),
            'content' => trim($post['content'])
        ]);
    }

    public function updateItem($post, $id)
    {
        $this->id = $id;
        $update = [
            'country_code' => trim($post['country_code']),
            'content' => trim($post['content'])
        ];
        DB::table('seo_pages')->where('id', $this->id)->update($update);
    }

    public function getOne($id)
    {
        $item = DB::table('seo_pages')->where('id', $id)->first();
        return $item;
    }

    public function deleteItem($id)
    {
        $this->id = $id;
        DB::table('seo_pages')->where('id', $this->id)->delete();
    }

}
