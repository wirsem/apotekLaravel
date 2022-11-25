<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DrugRequest;
use App\Models\Drug;

class DrugController extends Controller
{
    public function index()
    {
    	return view('data/drug/index', [
    		'drugs' => Drug::latest()->get()
    	]);
    }

    public function indexUser () {
        return view('data/drug/indexUser', [
    		'drugs' => Drug::latest()->get()
        ]);
    }

    public function show(Drug $drug)
    {
    	return view('/data/drug/show', [
            'drug' => $drug
        ]);
    }

    public function add()
    {
    	return view('data/drug/add', [
        
        ]);
    }

    public function store(DrugRequest $request)
    {
    	if ($request->file('icon')) {
    		$icon = $request->file('icon')->store('public/images');
    	} else {
    		$icon = 'public/images/default.png';
    	}

        // mengambil data dalam semua form
        $data = $request->all();
        $data['icon'] = $icon;

        // menyimpan ke database
        Drug::create($data);

        // kembali ke halaman drug sambil membawa session
        return redirect('/drug')->with('created', 'Obat berhasil ditambahkan');
    }

    public function edit(Drug $drug)
    {
        return view('/data/drug/edit', [
            'drug' => $drug,
            

        ]);
    }

    public function update(DrugRequest $request, Drug $drug)
    {
        if ($request->file('icon')) {
            if ($drug->icon === 'public/images/default.png') {
                $icon = $request->file('icon')->store('public/images');
            } else {
                \Storage::delete($drug['icon']);
                $icon = $request->file('icon')->store('public/images');
            }
        } else {
            $icon = $drug['icon'];
        }

        // mengambil data dalam semua form
        $data = $request->all();
        $data['icon'] = $icon;

        // update isi data lalu simpan ke database
        $drug->update($data);

        // kembali ke halaman drug sambil membawa session
        return redirect('/drug')->with('updated', 'Obat berhasil diperbarui');
    }

    public function delete(Drug $drug)
    {
        if ($drug->icon !== 'public/images/default.png') {
            \Storage::delete($drug['icon']);
        }

        $drug->delete();

        return redirect()->to('/drug')->with('deleted', 'Obat berhasil dihapus');
    }
}















