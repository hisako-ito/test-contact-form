<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
        protected $fillable = [
            'category_id',
            'first_name',
            'last_name',
            'gender',
            'email',
            'tell',
            'address',
            'building',
            'detail'
        ];

    public function getDetail()
    {
        $txt = $this->last_name . ' ' . $this->first_name;
        return $txt;
    }

    public function processEachGender()
    {
        if ($this->gender === 1) {
            echo '男性';
        } elseif ($this->gender === 2) {
            echo '女性';
        }
        else { echo '女性';
        }
    }

    public function getContactType()
    {
        $contact_type = $this->category_id;
        switch ($contact_type) {

        case "1":
        echo "商品のお届けについて";
        break;

        case "2":
        echo "商品の交換について";
        break;

        case "3":
        echo "商品トラブル";
        break;

        case "4":
        echo "ショップへのお問い合わせ";
        break;

        case "5":
        echo "その他";
        break;
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
