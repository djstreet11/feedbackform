<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int         $id
 * @property string      $fullName
 * @property string      $phone
 * @property string      $city
 * @property string      $text
 */
class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'phone',
        'city',
        'text',
    ];
}
