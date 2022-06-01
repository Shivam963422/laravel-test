<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workshop extends Model
{
	use HasFactory, Notifiable;

	public $table = 'workshops';

	public function menu_items_relation()
    {
        return $this->hasMany('App\Models\MenuItem')->where('id', '!=', 'NULL');
    }

}
