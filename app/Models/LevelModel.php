<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelModel extends Model
{
    use HasFactory;
    protected $table = 'm_level'; //Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'level_id'; //Mendefinisikan primary key dari tabel yang digunakan
    
    // protected $fillable = ['level_id', 'level_kode', 'level_nama'];

    public function users(): HasMany //menunjukkan relasi One to Many dengan UserModel
    {
        return $this->hasMany(User::class);
    }
}
