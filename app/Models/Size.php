<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Size extends Model
{
    // use HasTranslations;
    protected $fillable = ['name', 'is_active'];
    // public $translatable = ['name'];

    // Relationship with Item
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
