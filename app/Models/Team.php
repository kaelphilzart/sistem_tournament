<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'team';
    protected $primaryKey = 'id_team';
    protected $fillable = ['id_turnament', 'nama_team', 'id_pendaftar1', 'id_pendaftar2', 'id_pendaftar3','id_pendaftar4', 'id_pendaftar5'];

   // Team.php
public function player1()
{
    return $this->hasOne(m_user::class, 'id_user', 'id_pendaftar1');
}

public function player2()
{
    return $this->hasOne(m_user::class, 'id_user', 'id_pendaftar2');
}

public function player3()
{
    return $this->hasOne(m_user::class, 'id_user', 'id_pendaftar3');
}

public function player4()
{
    return $this->hasOne(m_user::class, 'id_user', 'id_pendaftar4');
}

public function player5()
{
    return $this->hasOne(m_user::class, 'id_user', 'id_pendaftar5');
}

    
}

// Team.php
