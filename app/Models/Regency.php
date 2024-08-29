<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    protected $tables = 'regencies';

    protected $fillable = [
        'id',
        'province_id',
        'name',
    ];

    public function scopeByProvince($query, $province_id)
    {
        if ($province_id) {
            return $query->where('province_id', $province_id);
        }
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            return $query
                ->where('name', 'LIKE', '%' . $search . '%');
        }
    }

    use HasFactory;
}
