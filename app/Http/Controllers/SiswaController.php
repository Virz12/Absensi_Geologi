<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    function siswa()
    {
    return view('siswa.absen');
    }

    function profilesiswa()
    {
        return view('siswa.profile');
    }

    function info()
    {
        return view('siswa.infoAbsen');
    }

    function pulang()
    {
        return view('siswa.absen');
    }

    function profile()
    {
        $data_user = user::findOrFail(Auth::id());

        return view('siswa.profile')
                ->with('data_user',$data_user);
    }

    function updateprofile(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute belum terisi.',
            'alpha' => 'Kolom :attribute hanya boleh berisi huruf.',
            'alpha_dash' => 'Kolom :attribute hanya boleh berisi huruf, angka, (-), (_).',
            'alpha_num' => 'Kolom :attribute hanya boleh berisi huruf dan angka',
            'size' => 'Kolom :attribute tidak boleh lebih dari 20 karakter',
            'numeric' => 'Kolom :attribute hanya boleh berisi angka',
            'unique' => ':attribute sudah digunakan',
            'regex:/^[\pL\s]+$/u' => 'Kolom :attribute hanya boleh berisi huruf dan spasi.',
            'image' => 'File Harus Berupa Gambar.',
            'max:15' => 'Kolom :attribute maksimal berisi 15 karakter.',
            'max:2048' => 'Ukuran file maksimal 2MB.',
            'digits_between:1,20' => 'Kolom :attribute maksimal berisi angka 20 digit.',
        ];

        $request->validate([
            'username' => 'required',
            'telefone' => 'required',
            'passwordOld' => 'required',
            'password' => 'nullable',
            'passwordConfirm' => 'nullable',
        ],$messages);
 
        $data_user = user::findOrFail(Auth::id());
        $verify_password = Hash::check($request->input('passwordOld'),$data_user->password);

        if($verify_password == true)
        {
            if($request->input('password') == null)
            {
                $data_user->update([
                    'username' => $request->input('username'),
                    'telefone' => $request->input('telefone')
                ]);
            }else {
                if($request->input('password') == $request->input('passwordConfirm'))
                {
                    $data_user->update([
                        'username' => $request->input('username'),
                        'password' => $request->input('password'),
                        'telefone' => $request->input('telefone')
                    ]);
                }
            }
        }else {
            return redirect('/siswa_profile')->withErrors('Password tidak sesuai');
        }

        return redirect('/absen')
                ->with('notification', 'Data Berhasil Diubah.');
    }
}