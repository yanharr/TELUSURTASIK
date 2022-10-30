<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $table = 'about_us';
    protected $primaryKey = 'id_about_us';
    protected $fillable = [
    	'cover',
    	'judul',
    	'desc',
    	'develop_1',
        'nim_develop_1',
    	'foto_develop_1',
        'develop_2',
        'nim_develop_2',
    	'foto_develop_2',
        'develop_3',
        'nim_develop_3',
    	'foto_develop_3',
        'develop_4',
        'nim_develop_4',
    	'foto_develop_4',
        'develop_5',
        'nim_develop_5',
    	'foto_develop_5'
    ];
    public $timestamps = false;
}
