<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class KategoriController extends Controller
{
    // public function index(KategoriDataTable $dataTable)
    // {
    //     return $dataTable->render('kategori.index');
    // }

    // public function create ()
    // {
    //     return view('kategori.create');
    // }

    // public function store (Request $request)
    // {
    //     KategoriModel::create([
    //         'kategori_kode' => $request->kodeKategori,
    //         'kategori_nama' => $request->namaKategori
    //     ]);
    //     return redirect('/kategori');
    // }

    public function index(KategoriDataTable $dataTable)
    {
        $breadcrumb = (object) [ 
            'title' => 'Daftar Kategori', 
            'list' => ['Home', 'Kategori']
        ];

        $page = (object) [ 
            'title' => 'Daftar kategori yang terdaftar dalam sistem'
        ];

        $activeMenu = 'category'; // set menu yang sedang aktif

        return view('kategori.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    //Retrieve category data in json form for datatables 
    public function list(Request $request) 
    { 
    $categories = KategoriModel::select('kategori_id','kategori_kode', 'kategori_nama'); 

    return DataTables::of($categories) 
        ->addIndexColumn()                                  //adds column index/no sort (default column name: DT_RowIndex) 
        ->addColumn('action', function ($category) {        //add action column 
            $btn = '<a href="'.url('/category/' . $category->kategori_id).'" class="btn btn-info btn-sm">Detail</a> '; 
            $btn .= '<a href="'.url('/category/' . $category->kategori_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> '; 
            $btn .= '<form class="d-inline-block" method="POST" action="'. url('/category/'.$category->kategori_id).'">'
                . csrf_field() . method_field('DELETE') . 
                '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure to delete this data?\');" >Delete</button></form>'; 
            return $btn; 
        }) 
        ->rawColumns(['action']) // tells that the action column is html 
        ->make(true); 
    }

}
