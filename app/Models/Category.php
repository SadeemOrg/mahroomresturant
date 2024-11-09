<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;

    protected $fillable = ['name'];
    public $translatable = ['name', 'description'];


    // Relationship with Item
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
