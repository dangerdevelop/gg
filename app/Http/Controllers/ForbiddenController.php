<?php

namespace App\Http\Controllers;

use App\DataTables\ExternalListDatatable;
use App\Models\AdminOptions;
use App\Models\ForbiddensModel;
use Illuminate\Http\Request;

class ForbiddenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ExternalListDatatable $dataTable)
    {
        $title = 'Harici Yasak Listesi';
        $createButton = route('forbidden.create');
        return $dataTable->render('admin.datatable', ['title' => $title, 'createButton' => $createButton]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.forbidden-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->tip && $request->value) {
            ForbiddensModel::query()->updateOrCreate(['value' => $request->value], $request->except(['_token']));
            return redirect(route('forbidden.index'));
        }
    }
    public function delete(ForbiddensModel $forbidden)
    {
        $forbidden->delete();
        return back();
    }
    /**
     * Display the specified resource.
     */
    public function show(AdminOptions $adminOptions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminOptions $adminOptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminOptions $adminOptions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminOptions $adminOptions)
    {
        //
    }
}
