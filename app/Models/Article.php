<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    // relation entre les deux tables
    public function r_article_categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

}
