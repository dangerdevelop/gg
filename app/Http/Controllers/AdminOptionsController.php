<?php

namespace App\Http\Controllers;

use App\Attributes\HasPermissions;
use App\Models\AdminOptions;
use Illuminate\Http\Request;

class AdminOptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    #[HasPermissions('options')]
    public function index()
    {
        $options = AdminOptions::all();
        return view('admin.options', compact('options'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    #[HasPermissions('options')]
    public function store(Request $request)
    {
        AdminOptions::query()->truncate();
        $infos = collect($request->option);

        foreach ($infos as $info) {
            AdminOptions::create(['key' => $info['key'], 'value' => $info['value']]);
        }

        return back();

        // if ($request->option-) {
        //     foreach ($request->option as $option) {
        //         dd($option);
        //         // $create = AdminOptions::create(['key' => $option['key'], 'value' => $option['value']]);
        //     }

        //     // return back();
        // }
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
