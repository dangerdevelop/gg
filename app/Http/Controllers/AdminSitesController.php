<?php

namespace App\Http\Controllers;

use App\Attributes\HasPermissions;
use App\Classes\SiteStatusEnum;
use App\DataTables\SitesDataTable;
use App\Models\Sites;
use Illuminate\Http\Request;

class AdminSitesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    #[HasPermissions('sites')]
    public function index(SitesDataTable $dataTable)
    {
        return $dataTable->render('admin.datatable', ['title' => 'Siteler', 'page' => 'sites', 'createButton' => route('sites.create')]);
    }

    /**
     * Show the form for creating a new resource.
     */
    #[HasPermissions('sites')]
    public function create()
    {

        return view('admin.sites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    #[HasPermissions('sites')]
    public function store(Request $request)
    {
        $request->validate([
            'site' => 'required'
        ]);
        
        
        $payload = $request->except(['_token']);
        Sites::query()->create($payload);

        return redirect()->route('sites.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sites $sites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    #[HasPermissions('sites')]
    public function edit(Sites $site)
    {
        return view('admin.sites.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     */
    #[HasPermissions('sites')]
    public function update(Request $request, Sites $site)
    {
        $request->validate([
            'site' => 'required'
        ]);
        
        $payload = $request->except(['_token', '_method']);
        $site->update($payload);
        return redirect()->route('sites.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sites $sites)
    {
        //
    }
}
