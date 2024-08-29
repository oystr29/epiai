<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $tables = 'provinces';

    protected $fillable = [
        'id',
        'name',
    ];

    public function scopeSearch($query, $search)
    {
        if ($search) {
            return $query
                ->where('name', 'LIKE', '%' . $search . '%');
        }
    }

    use HasFactory;
}
