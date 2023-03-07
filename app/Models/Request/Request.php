<?php

namespace App\Models\Request;

use App\Models\Product\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Request extends Model
{
    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function type() {
        return $this->belongsTo(Type::class);
    }
}
