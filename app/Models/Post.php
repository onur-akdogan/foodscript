<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'post_video',
        'hazirlanma_suresi',
        'kisi_sayisi',
        'pisirme_süresi',
        'malzemeler',
        'yapilis',
        'kalori',
        'status',
        'category_id',
        'zorluk',
        'user_id',
        'keywords',
        'description',
        'tags',
        'gunun_yemegi',
        'slider',
        'onerilenler',
        'onecikart',
    ];
}
