<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $tables = 'districts';

    protected $fillable = [
        'id',
        'regency_id',
        'name',
    ];

    public function scopeByRegency($query, $regency_id)
    {
        if ($regency_id) {
            return $query->where('regency_id', $regency_id);
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
