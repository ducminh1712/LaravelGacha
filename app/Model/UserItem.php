<?php namespace Gacha\Model;

use Illuminate\Database\Eloquent\Model;

class UserItem extends Model {
    protected $fillable = ['user_id', 'item_id', 'num'];
}
