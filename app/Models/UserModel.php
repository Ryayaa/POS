<?php

namespace App\Models;
use App\Models\LevelModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
{
    use HasFactory;
    // pengentian Jobsheet 3 Praktikum 6 bagian 3
    protected $table = 'm_user';            // mendefinisikan tabel yang digunakan
    protected $primaryKey = 'user_id';     // mendefinisikan primary key tabel yang digunakan

    // pengerjaan jobsheet 4 praktikum 1 bagian 1
    // protected $fillable = ['level_id','username','nama','password'];

    // pengerjaan jobsheet 4 praktikum 1 bagian 4
    // protected $fillable = ['level_id','username','nama'];

    // pengerjaan jobsheet 4 praktikum 2.4 bagian 4 untuk bisa mengerjakan
    protected $fillable = ['level_id','username','nama','password'];

    // pengerjaan jobsheet 4 praktikum 2.7 bagian 1
    public function level():BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}