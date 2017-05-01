<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request, $id)
    {
        // Untuk sementara, data program dan kegiatan ditempatkan di service.
        $service = resolve('Services\Activity');
        $data    = $service->getProgramData();
        
        return View('pages.activity.show', [
            'program'  => $data[0],
            'activity' => $data[0]['activities'][0]
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
