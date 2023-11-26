<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\t_membership;
use App\Models\m_user;
use Illuminate\Support\Facades\Validator;
use App\Models\Turnament;
use App\Models\Team;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //
    // public function turnament(){
    //     return view('member.tournament');
    // }

    public function turnament(){
        $data = Turnament::paginate(6);
    return view('member.tournament', ['dataTur' => $data]);
    }
    //buat member

    public function showProfile()
    {
    // Ambil data t_membership yang terkait dengan pengguna saat ini
    $userMembership = t_membership::where('nickname', auth()->user()->username)->first();

    return view('member.profile', compact('userMembership'));
    }

    public function home(){
        return view('landingPage');
    }
    public function store(Request $request){
       
        // Validasi form
            
        $message= [
            'required' => ':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
            'numeric' => 'attribute harus berupa angka',
        ];
            
        $this->validate($request, [
            'nama_depan' => 'required',
            'nickname' => 'required|unique:t_membership',
            'kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'id_discord' => 'required',
        ], $message);
    
     
        // Simpan data ke tabel t_membership
        $data_membership = new t_membership;
        $data_membership->nama_depan = $request->nama_depan;
        $data_membership->nama_belakang = $request->nama_belakang;
        $data_membership->nickname = $request->nickname;
        $data_membership->kelamin = $request->kelamin;
        $data_membership->tempat_lahir = $request->tempat_lahir;
        $data_membership->tanggal_lahir = $request->tanggal_lahir;
        $data_membership->email = $request->email;
        $data_membership->no_hp = $request->no_hp;
        $data_membership->id_discord = $request->id_discord;
        $data_membership->save();
    
        // Simpan data ke tabel m_user
        $data_user = new m_user;
        $data_user->username = $request->nickname;
        $data_user->password = bcrypt($request->nickname);
        $data_user->level = 'member';
        $data_user->save(); 
    
        return redirect('Thank-You')->with('success', 'Data berhasil disimpan');
    }
    

    //tampil data t_membership
    public function index(){
        $data = t_membership::paginate(5);
    return view('admin.member', ['data' => $data]);
    }

    public function destroy($id){
        $data = t_membership::find($id);
        $data->delete();
        return redirect('/data-member')->with('success', 'Data berhasil dihapus');;
    }


    public function edit($id){
        $data = t_membership::find($id);
        return view('admin.updateMember', compact('data'));
    }

    public function update(Request $request, $id){
        //validasi form
        $message= [
            'required' =>':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
            'numeric' => 'attribute harus berupa angka',
        ];

        $this->validate($request, [
            'kode_member' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'nickname' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'id_discord' => 'required',
           
        ], $message);

        $data = t_membership::find($id);
        $data->kode_member = $request->kode_member;
        $data->nama_depan = $request->nama_depan;
        $data->nama_belakang = $request->nama_belakang;
        $data->nickname = $request->nickname;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->id_discord = $request->id_discord;
        // $data->phone = $request->phone;
        // $data->alamat = $request->alamat;
        $data->update();
        return redirect('/data-member')->with('success', 'Data berhasil diubah');;
    }


    //daftar turnamnet

    public function daftarTur($id){
        $data = Turnament::find($id);
        return view('member.daftar-tur', compact('data'));
    }

    public function createDaftar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_turnament' => 'required',
            'id_user' => 'required',
            // Validasi lainnya
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Memeriksa apakah data daftar sudah ada
        $daftar = Pendaftar::where('id_turnament', $request->id_turnament)
            ->where('id_user', $request->id_user)
            ->first();
    
        if ($daftar) {
            return redirect('turnament')->with('error', 'Anda sudah daftar Pada Turnament ini');
        }
    
        // Data daftar belum ada, simpan data baru
        Pendaftar::create($request->all());
        // $data->nama = $request->nama;
        // $data->tanggal = $request->tanggal;
        // $data->stand = $request->stand;
        // $data->status = $request->status;
        // $data->save();
    
        return redirect('turnament')->with('success', 'Daftar Turnament ini berhasil');
    }

    //Team

    // public function yourTeam(){
    //     $data = Pendaftar::paginate(5);

    //     return view('member.team', ['data' => $data]);
    // }


    public function yourTeam() {
        // Mendapatkan ID user yang sedang login
        $userId = Auth::id();
    
        $data = Team::with(['player1', 'player2', 'player3', 'player4', 'player5'])
            ->join('turnament', 'team.id_turnament', '=', 'turnament.id_turnament')
            ->where(function ($query) use ($userId) {
                $query->where('id_pendaftar1', $userId)
                    ->orWhere('id_pendaftar2', $userId)
                    ->orWhere('id_pendaftar3', $userId)
                    ->orWhere('id_pendaftar4', $userId)
                    ->orWhere('id_pendaftar5', $userId);
            })
            ->paginate(5);
    
        return view('member.team', ['data' => $data]);
    }
    
    
    
}
