<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * Возвращает категорию выбранного товара
     */
    public function getCategory() {
        return Category::find($this->category_id);
    }
    /**
     * Возвращает бренд выбранного товара
     */
    public function getBrand() {
        return Brand::find($this->brand_id);
    }

    /**
     * Связь «товар принадлежит» таблицы `products` с таблицей `categories`
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Связь «товар принадлежит» таблицы `products` с таблицей `brands`
     */
    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
