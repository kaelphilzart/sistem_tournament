<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\Turnament;
use App\Models\Pendaftar;
use App\Models\Team;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //buat_user
    public function createUser(){
        return view('admin.createUser');
    }

    
    public function dashboardAdmin(){
        return view('admin.home');
    }

    public function store(Request $request){
        //validasi form
        $message= [
            'required' =>':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
        ];

        $attributes = request()->validate([
            'username' => 'required|unique:m_user',
            'password' => 'required',
        ], $message);
        
        $attributes['password'] = bcrypt($attributes['password'] );

        $data = new m_user;
        $data->username = $request->username;
        $data->password = Hash::make($request->password);
        $data->save($attributes);
        return redirect('/data-admin')->with('success', 'Data berhasil disimpan');;
    }
        
    //tampil data m_user
    public function index(){
        $data = m_user::paginate(5);
    return view('admin.admin', ['data' => $data]);
    }

    public function destroy($id){
        $data = m_user::find($id);
        $data->delete();
        return redirect('/data-admin')->with('success', 'Data berhasil dihapus');;
    }


    public function edit($id){
        $data = m_user::find($id);
        return view('admin.updateForm', compact('data'));
    }

    public function update(Request $request, $id){
        //validasi form
        $message= [
            'required' =>':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
            'numeric' => 'attribute harus berupa angka',
        ];

        $this->validate($request, [
            'username' => 'required',
        ], $message);

        $data = m_user::find($id);
        $data->username = $request->username;
        $data->update();
        return redirect('/data-admin')->with('success', 'Data berhasil diubah');;
    }

//turnament
    public function newTur(){
        return view('admin.createTur');
    }

    public function turnament(){
        $data = Turnament::paginate(5);
        return view('admin.turnament', ['data' => $data]);
    }

    public function createTur(Request $request){
       
        // Validasi form
            
        $message= [
            'required' => ':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
            'numeric' => 'attribute harus berupa angka',
        ];
            
        $this->validate($request, [
            'nama_turnament' => 'required',
            'slot' => 'required',
            'prize' => 'required',
            'foto' => 'required',
            ], $message);
    
     
        // Simpan data ke tabel t_membership
        $data = new Turnament;
        $data->nama_turnament = $request->nama_turnament;
        $data->slot = $request->slot;
        $data->prize = $request->prize;
        $data->mulai = $request->mulai;
        $data->batas_dftr = $request->batas_dftr;
        if ($request->hasFile('foto')) { // Pastikan input berkas gambar bernama 'image_path'
            $imageFile = $request->file('foto');
            $imageFileName = $imageFile->getClientOriginalName();
            $imageFile->storeAs('public/images', $imageFileName); // Simpan gambar di direktori 'storage/app/public/images'
            $data->foto = 'storage/images/' . $imageFileName; // Simpan nama gambar dalam basis data
        }
        
        $data->save();
    
        return redirect('data-tur')->with('success', 'Data berhasil disimpan');
    }
    
    public function editTur($id){
        $data = Turnament::find($id);
        return view('admin.updateTur', compact('data'));
    }

    public function updateTur(Request $request, $id){
        //validasi form
        $message= [
            'required' =>':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
            'numeric' => 'attribute harus berupa angka',
        ];

        $this->validate($request, [
            'nama_turnament' => 'required',
            'slot' => 'required',
            'prize' => 'required',
            'foto' => 'required',
        ], $message);

        $data = Turnament::find($id);
        $data->nama_turnament = $request->nama_turnament;
        $data->slot = $request->slot;
        $data->prize = $request->prize;
        $data->mulai = $request->mulai;
        $data->batas_dftr = $request->batas_dftr;
        if ($request->hasFile('foto')) { // Pastikan input berkas gambar bernama 'image_path'
            $imageFile = $request->file('foto');
            $imageFileName = $imageFile->getClientOriginalName();
            $imageFile->storeAs('public/images', $imageFileName); // Simpan gambar di direktori 'storage/app/public/images'
            $data->foto = 'storage/images/' . $imageFileName; // Simpan nama gambar dalam basis data
        }
        $data->update();
        return redirect('data-tur')->with('success', 'Data berhasil diubah');;
    }

    public function destroyTur($id){
        $data = Turnament::find($id);
        $data->delete();
        return redirect('data-tur')->with('success', 'Data berhasil dihapus');;
    }

//peserta
    public function indexPeserta()
    {
        $data = Pendaftar::join('m_user', 'pendaftar.id_user', '=', 'm_user.id_user')
                        ->join('turnament', 'pendaftar.id_turnament', '=', 'turnament.id_turnament')
        ->get();                    
        return view('admin.peserta', [
            'dataPeserta' => $data,
        ]);
    }

//TEAM
// public function viewTeam($id)
// {
//     $data = Turnament::find($id);

//     // Mengambil daftar tim yang terkait dengan turnamen dari tabel 'teams'
//     $team = Team::join('turnament', 'team.id_turnament', '=', 'turnament.id_turnament')
//         ->where('turnament.id_turnament', $data->id)
//         ->select('team.*')
//         ->get();

//     $pendaftar = Pendaftar::join('m_user', 'pendaftar.id_user', '=', 'm_user.id_user')
//         ->join('turnament', 'pendaftar.id_turnament', '=', 'turnament.id_turnament')
//         ->where('turnament.id_turnament', $data->id)
//         ->where(function ($query) use ($data) {
//             $query->whereNotIn('pendaftar.id_pendaftar', function ($subquery) use ($data) {
//                 $subquery->select('id_pendaftar1')->from('team')->where('team.id_turnament', $data->id);
//             })
//             ->orWhereNotIn('pendaftar.id_pendaftar', function ($subquery) use ($data) {
//                 $subquery->select('id_pendaftar2')->from('team')->where('team.id_turnament', $data->id);
//             })
//             ->orWhereNotIn('pendaftar.id_pendaftar', function ($subquery) use ($data) {
//                 $subquery->select('id_pendaftar3')->from('team')->where('team.id_turnament', $data->id);
//             })
//             ->orWhereNotIn('pendaftar.id_pendaftar', function ($subquery) use ($data) {
//                 $subquery->select('id_pendaftar4')->from('team')->where('team.id_turnament', $data->id);
//             })
//             ->orWhereNotIn('pendaftar.id_pendaftar', function ($subquery) use ($data) {
//                 $subquery->select('id_pendaftar5')->from('team')->where('team.id_turnament', $data->id);
//             });
//         })
//         ->get();

//     return view('admin.team', compact('data', 'team', 'pendaftar'));
// }




public function viewTeam($id)
{
    $data = Turnament::find($id);

    $teams = Team::where('id_turnament', $data->id_turnament)
        ->with(['player1', 'player2', 'player3', 'player4', 'player5'])
        ->get();

    $registeredPlayers = collect($teams)->flatMap(function ($team) {
        return [
            $team->player1->id_user,
            $team->player2->id_user,
            $team->player3->id_user,
            $team->player4->id_user,
            $team->player5->id_user,
        ];
    });

    // Dapatkan semua pemain yang belum terdaftar dalam tabel team untuk turnamen yang sesuai
    $pendaftar = Pendaftar::join('m_user', 'pendaftar.id_user', '=', 'm_user.id_user')
        ->where('pendaftar.id_turnament', $data->id_turnament)
        ->whereNotIn('pendaftar.id_user', $registeredPlayers)
        ->get();

    return view('admin.team', compact('data', 'teams', 'pendaftar'));
}





public function buatTeam(Request $request){
       
    // Validasi form
        
    $message= [
        'required' => ':attribute tidak boleh kosong',
        'unique' => 'attribute sudah digunakan',
        'numeric' => 'attribute harus berupa angka',
    ];
        
    $this->validate($request, [
        'id_turnament' => 'required',
        'nama_team' => 'required|unique:team',
        'id_pendaftar1' => 'required',
        'id_pendaftar2' => 'required',
        'id_pendaftar3' => 'required',
        'id_pendaftar4' => 'required',
        'id_pendaftar5' => 'required',
    ], $message);

 
    // Simpan data ke tabel t_membership
    $dataTeam = new Team;
    $dataTeam->id_turnament = $request->id_turnament;
    $dataTeam->nama_team = $request->nama_team;
    $dataTeam->id_pendaftar1 = $request->id_pendaftar1;
    $dataTeam->id_pendaftar2 = $request->id_pendaftar2;
    $dataTeam->id_pendaftar3 = $request->id_pendaftar3;
    $dataTeam->id_pendaftar4 = $request->id_pendaftar4;
    $dataTeam->id_pendaftar5 = $request->id_pendaftar5;
    $dataTeam->save();

    return redirect('data-tur')->with('success', 'Team Berhasil Dibuat');
}

public function destroyTeam($id){
    $data = Team::find($id);
    $data->delete();
    return redirect('data-tur')->with('success', 'Team berhasil dihapus');;
}

}
