<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Study extends Model
{
    // public $table = "studies";
 
    // public $timestamp = true;
 
    public $perPage = 5;

    public $fillable = [
        'description',
        'date_init',
        'date_finish',
        'status',
        'area_id'
    ];
 
    public function area()
    {
        // $this->belongsTo('App\Models\Area');
        // return $this->belongsTo(Area::class, 'area_id', 'id');
        return $this->belongsTo(Area::class);
    }


    public function estudoEmAtraso()
    {
        return $this->where('status', 'Em atraso')->count();
    }

    public function estudoEmAndamento()
    {
        return $this->where('status', 'Em andamento')->count();
    }

    public function estudoEmFinalizado()
    {
        return $this->where('status', 'Finalizado')->count();
    }
    

}