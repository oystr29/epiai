<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $tables = 'villages';

    protected $fillable = [
        'id',
        'district_id',
        'name',
    ];

    public function scopeByDistrict($query, $district_id)
    {
        if ($district_id) {
            return $query->where('district_id', $district_id);
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
