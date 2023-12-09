<?php

namespace App\Http\Controllers;

use App\Profil;
use Image;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images_name = 'Foto-';
        $profils = Profil::all();
        return view('pelamar.profil.form-pribadi', [
            'profils' => $profils,
            ['images_name' => $images_name],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        return view('pelamar.profil.form-pribadi_edit', [
            'profil' => $profil
        ]);
    }

    public function Gantipassword(Profil $profil)
    {
        return view('pelamar.profil.form-akun-edit', [
            'profil' => $profil,
        ]);
    }

    public function updatepassword(Request $request, Profil $profil)
    {
        $validateData = validator($request->all(), [
        'password' => 'required|min:10',
        ])->validate();

        $profil->password = $validateData['password'];
        $profil->save();

        return redirect(route('Profilindex'))->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        $validateData = validator($request->all(), [
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string',
        'ttl' => 'required|date',
        'jk' => 'required|in:Laki-Laki,Perempuan',
        'no_telp' => 'required|string',
        'pendidikan' => 'required|string',
        'nama_institusi' => 'required|string',
        'pengalaman_organisasi' => 'nullable|string',
        'pengalaman_kerja' => 'nullable|string',
        'skill' => 'nullable|string',
        'sertifikasi' => 'nullable|string',
        'nik' => 'required|string',
        'npwp' => 'nullable|string',
        'gaji_diinginkan' => 'required|string',
        'status_nikah' => 'required|string',
        'cv' => 'required|mimes:pdf,doc,docx',
        'lampiran' => 'required|mimes:pdf,doc,docx',
        // 'foto' => 'required|mimes:png,jpeg,jpg',
        ])->validate();

        if($request->file('cv')) 
        {
            $cv = $request->file('cv');
            $namaProfil = $validateData['nama'];
            $cvName = 'CV-' . $namaProfil . '.' .$request->file('cv')->extension();
            $cvPath = public_path() . '/landing/dokumen/cv';
            $cv->move($cvPath, $cvName);
        }

        if($request->file('lampiran')) 
        {
            $lampiran = $request->file('lampiran');
            $namaProfil = $validateData['nama'];
            $lampiranName = 'Lampiran-' . $namaProfil . '.' .$request->file('lampiran')->extension();
            $lampiranPath = public_path() . '/landing/dokumen/lampiran';
            $lampiran->move($lampiranPath, $lampiranName);
        }

        $image = $request->file('foto');

        $image_name = time() . '.' . $image->getClientOriginalExtension();

        $destinationPath = public_path('/landing/dokumen/foto');

        // Assuming you have the uploaded image in the $request
$foto = $request->file('foto');

// Get the original file name without extension
$namaProfil = pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);

// Set the image name with a prefix and the original file extension
$image_name = 'Foto-' . $namaProfil . '.' . $foto->getClientOriginalExtension();

// Specify the path where you want to save the resized image
$fotoPath = public_path('/landing/dokumen/foto');

// Create an Intervention Image instance
$resize_foto = Image::make($foto->getRealPath());

// Resize the image to, for example, 150x150 pixels
$resize_foto->resize(150, 150, function($constraint) {
    $constraint->aspectRatio();
});

// Save the resized image to the specified path
$resize_foto->save($fotoPath . '/' . $image_name);


        $profil->nama = $validateData['nama'];
        $profil->alamat = $validateData['alamat'];
        $profil->ttl = $validateData['ttl'];
        $profil->jk = $validateData['jk'];
        $profil->no_telp = $validateData['no_telp'];
        $profil->pendidikan = $validateData['pendidikan'];
        $profil->nama_institusi = $validateData['nama_institusi'];
        $profil->pengalaman_organisasi = $validateData['pengalaman_organisasi'];
        $profil->pengalaman_kerja = $validateData['pengalaman_kerja'];
        $profil->skill = $validateData['skill'];
        $profil->sertifikasi = $validateData['sertifikasi'];
        $profil->gaji_diinginkan = $validateData['gaji_diinginkan'];
        $profil->nik = $validateData['nik'];
        $profil->npwp= $validateData['npwp'];
        $profil->status_nikah = $validateData['status_nikah'];
        $profil->cv = $cvName;
        $profil->lampiran = $lampiranName;
        $profil->foto = $image_name;
        $profil->save();

        return redirect(route('Profilindex'))->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
