<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentlyVisit extends Model
{
    use HasFactory;
    protected $table = 'recently_visit';    
    protected $primaryKey = 'id_recently_visit';
    protected $fillable = [
    	'id_user',
    	'id_wisata'
    ];
}
