<?php

namespace App\Http\Controllers;

use App\Pelamar;

use Illuminate\Http\Request;

class AkunPelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelamars = Pelamar::all();
        $title = 'Akun Pelamar';
        return view('admin.akun.pelamar.index', ['title' => $title, 'pelamars' => $pelamars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelamar = Pelamar::all();
        $title = 'Tambah Pelamar';
        return view('admin.akun.pelamar.create', ['title' => $title, 'pelamar' => $pelamar]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        $pelamar = new Pelamar(); 
        $pelamar->nama = $validateData['nama'];
        $pelamar->alamat = $validateData['alamat'];
        $pelamar->ttl = $validateData['ttl'];
        $pelamar->jk = $validateData['jk'];
        $pelamar->no_telp = $validateData['no_telp'];
        $pelamar->pendidikan = $validateData['pendidikan'];
        $pelamar->nama_institusi = $validateData['nama_institusi'];
        $pelamar->pengalaman_organisasi = $validateData['pengalaman_organisasi'];
        $pelamar->pengalaman_kerja = $validateData['pengalaman_kerja'];
        $pelamar->skill = $validateData['skill'];
        $pelamar->sertifikasi = $validateData['sertifikasi'];
        $pelamar->gaji_diinginkan = $validateData['gaji_diinginkan'];
        $pelamar->nik = $validateData['nik'];
        $pelamar->npwp= $validateData['npwp'];
        $pelamar->status_nikah = $validateData['status_nikah'];
        $pelamar->cv = $cvName;
        $pelamar->lampiran = $lampiranName;
        $pelamar->foto = $image_name;
        $pelamar->id_user = $validateData['id_user'];
        $pelamar->password = $validateData['password'];
        $pelamar->password = $
        $pelamar->save();

            return redirect(route('Pelamar'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelamar $pelamar)
    {
        $title = 'Edit Data Pelamar';
        return view('admin.akun.pelamar.edit', [
            'pelamar' => $pelamar,
            'title' => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelamar $pelamar)
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
    
            $userId = auth()->user()->id;
            $email = auth()->user()->email;
            $password = auth()->user()->password;
    
            $pelamar->nama = $validateData['nama'];
            $pelamar->alamat = $validateData['alamat'];
            $pelamar->ttl = $validateData['ttl'];
            $pelamar->jk = $validateData['jk'];
            $pelamar->no_telp = $validateData['no_telp'];
            $pelamar->pendidikan = $validateData['pendidikan'];
            $pelamar->nama_institusi = $validateData['nama_institusi'];
            $pelamar->pengalaman_organisasi = $validateData['pengalaman_organisasi'];
            $pelamar->pengalaman_kerja = $validateData['pengalaman_kerja'];
            $pelamar->skill = $validateData['skill'];
            $pelamar->sertifikasi = $validateData['sertifikasi'];
            $pelamar->gaji_diinginkan = $validateData['gaji_diinginkan'];
            $pelamar->nik = $validateData['nik'];
            $pelamar->npwp= $validateData['npwp'];
            $pelamar->status_nikah = $validateData['status_nikah'];
            $pelamar->cv = $cvName;
            $pelamar->lampiran = $lampiranName;
            $pelamar->foto = $image_name;
            $pelamar->id_user = $userId;
            $pelamar->email = $email;
            $pelamar->password = $password;
            $pelamar->save();
        return redirect(route('daftarPelamar'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelamar $pelamar)
    {
        $pelamar->delete();
        return redirect(route('daftarPelamar'))->with('success', 'Data Berhasil Dihapus');
    }
}
