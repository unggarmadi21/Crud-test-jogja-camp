<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = Category::query();
            return Datatables::of($query)
                ->addColumn('category', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                Aksi
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="' . route('category.edit', $item->id) . '">
                                Sunting
                                </a>
                                <form action="' . route('category.destroy', $item->id) . '" method="POST">
                                ' . method_field('delete') . csrf_field() . '
                                    <button type="submit" class="dropdown-item text-danger">
                                        Hapus
                                    </button>
                                </form>
                                </div>
                            </div>
                        </div>
                    ';
                })
                ->addColumns(['category'])
                ->make();
        }
        return view('welcome');
    }

    public function edit()
    {
        return view('edit');
    }


    public function destroy()
    {
        return view('edit');
    }
}
