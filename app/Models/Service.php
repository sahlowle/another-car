<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function files()
    {
        return $this->hasMany(File::class, 'service_id');
    }

    static function genOrderNumber()  {
        $latestOrder = Service::latest('id')->first();

        $id = 0;
        
        if (is_null($latestOrder)) {
            $id = 0;
        } else {
            $id = $latestOrder->id;
        }

        

        $order_no = '#'.str_pad($id + 1, 8, "0");

        return $order_no;
    }

    protected static function booted()
    {
        static::creating(function ($service) {

           $service->order_no = Service::genOrderNumber();

        });
    }
}
