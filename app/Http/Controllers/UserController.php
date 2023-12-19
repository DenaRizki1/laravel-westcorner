<?php

namespace App\Http\Controllers;

use App\Models\TreatmentModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class ValidatedData
{
    protected function validatedData(Request $request, $foto = null)
    {
        $validatedData = $request->validate([
            'kd_treatment'        => 'required',
            'nama_treatment'      => 'required',
            'deskripsi_treatment' => 'required',
            'harga_treatment'     => 'required',
            'diskon_treatment'    => 'required',
            'foto'                => Rule::requiredIf($foto == null), 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fileName  = pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = pathinfo($foto->getClientOriginalName(), PATHINFO_EXTENSION);
            $foto->move(public_path('src/gambar/'), $fileName . time() . '.' . $extension);
            $validatedData['foto'] = $fileName . time() . '.' . $extension;
        }



        return $validatedData;
    }
}

class UserController extends ValidatedData
{
    public function index()
    {
        $treatment = TreatmentModel::all();

        return view('dashboard', compact('treatment'));
    }

    public function tambah()
    {
        $kd = Str::random(10);
        return view('tambah', ['kd' => $kd]);
    }

    public function simpanData(Request $request)
    {
        $validated = $this->validatedData($request);
        print_r($validated);

        TreatmentModel::create($validated);

        return redirect('/')->with('success', "Berhasil Menambah Data");
    }

    public function delete($id_treatment)
    {
        print_r($id_treatment);
        $data = TreatmentModel::where("id_treatment", $id_treatment);
        $data->delete();

        return redirect('');
    }

    public function edit($id_treatment)
    {
        $data = TreatmentModel::where("id_treatment", $id_treatment)->first();
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $treatment = TreatmentModel::find($id);
        $validated = $this->validatedData($request);


        $treatment->update($validated);
        return redirect('')->with('success', 'Berhasil mengubah data');
    }
}
