<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turnament extends Model
{
    use HasFactory;
    protected $table = 'turnament';
    protected $primaryKey = 'id_turnament';
    protected $fillable = ['nama_turnament', 'slot', 'prize', 'mulai','batas_dftr', 'foto'];

    public function teams()
{
    return $this->hasMany(Team::class, 'id_turnament');
}

}
