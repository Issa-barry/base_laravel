<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    // php artisan tinker
    // App\Entreprise::create(['name' => "Agro-Fraternity Service"]);
    // App\Entreprise::create(['name' => "FruitLeg company"]);
    protected $guarded = [];
    /**
     * Get the clients for the Entreprise.
     */
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
