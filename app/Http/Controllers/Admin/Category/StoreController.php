<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;


class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
       Category::firstOrcreate($data);
        //return view('admin.categories.index');
        return redirect()->route('admin.category.index');
    }
}
