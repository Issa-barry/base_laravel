<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // protected $fillable = ['name','email','status']; //Les champs a remplire
     protected $guarded = [];//Peut importe les champs remplis, il va les accepter
     protected $attributes = [
         'status' =>0
     ];

     /**
     * Get the entreprise that owns the client.
     */
    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }

    public function scopeStatus($query)
    {
        return $query->where('status',1)->get();
    }
    public function getStatusAttribute($attributes)
    {
        return $this->getStatusOption()[$attributes];
    }
    public function getStatusOption()
    {
        return [
            '0' => 'Inactif',
            '1' => 'Actif',
            '2' => 'En attente..'
        ];
    }
}
