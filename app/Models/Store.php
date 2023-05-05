<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
        'status',
    ];

        /**
     * Possible status for this model.
     */
    public function possibleStatus(): array
    {
        return [
            0 => 'inactive',
            1 => 'active',
        ];
    }
}
