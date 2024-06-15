<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tymon\JWTAuth\Claims\Subject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class UserModel extends Authenticatable implements JWTSubject
{
    public function getJWTIdentifier(){
        return $this->getKey();
    }
    public function getJWTCustomClaims(){
        return [];
    }
    protected $table = 'm_user'; 
    protected $primaryKey = 'user_id';
    protected $fillable = ['level_id', 'username', 'nama', 'password'];

    public function level():BelongsTo //menunjukkan relasi One to Many (Inverse) / Belongs To dengan class LevelModel
    {
        return $this->belongsTo(LevelModel::class, 'level_id','level_id');
    }
}

