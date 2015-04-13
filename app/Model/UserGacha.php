<?php namespace Gacha\Model;

use Illuminate\Database\Eloquent\Model;

class UserGacha extends Model {
    protected $fillable = ['user_id', 'gacha_id', 'last_free_draw_time'];
}
