<?php

namespace App\Models\Configuration;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sucursale extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "name",
        "address",
        "state",

    ];

    public function setCreatedAtAttribute($value) {
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $this->attributes["created_at"] = Carbon::now();
        }
        public function setUpdatedAtAttribute($value) {
            date_default_timezone_set("America/Argentina/Buenos_Aires");
        $this->attributes["created_at"] = Carbon::now();
    }
}
