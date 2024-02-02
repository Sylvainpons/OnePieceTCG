<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    protected $table = 'cartes';
    // Spécifiez la relation one-to-many inverse avec Rarity
    public function rarity()
    {
        return $this->belongsTo(Rarity::class, 'rarities_id'); // Assurez-vous que le nom de la clé étrangère est correct
    }
}
