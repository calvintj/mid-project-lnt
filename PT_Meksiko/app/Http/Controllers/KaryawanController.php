<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::orderBy('id','desc')->paginate(5);
        return view('index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawans.create');
    }

    public function store(Request $request)
    {
        Validator::extend('phone_number', function($attribute, $value, $parameters)
        {
            return substr($value, 0, 2) == '08';
        });
        $request->validate([
            'nama' => 'required|min:5|max:20',
            'umur' => 'required|numeric|min:20',
            'alamat' => 'required|min:10|max:40',
            'telp' => 'required|phone_number|min:9|max:12',
        ]);
        
        Karyawan::create($request->post());

        return redirect()->route('index')->with('success','Data karyawan berhasil dibuat!');
    }

    public function show(Karyawan $karyawan)
    {
        return view('show',compact('karyawan'));
    }

    public function edit(Karyawan $karyawan)
    {
        return view('karyawans.edit',compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        Validator::extend('phone_number', function($attribute, $value, $parameters)
        {
            return substr($value, 0, 2) == '08';
        });
        $request->validate([
            'nama' => 'required|min:5|max:20',
            'umur' => 'required|numeric|min:20',
            'alamat' => 'required|min:10|max:40',
            'telp' => 'required|phone_number|min:9|max:12',
        ]);
        
        $karyawan->fill($request->post())->save();

        return redirect()->route('index')->with('success','Data karyawan berhasil diedit!');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('index')->with('success','Data karyawan berhasil dihapus!');
    }

}
