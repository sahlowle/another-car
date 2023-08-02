<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected $appends = ['file_name','full_path'];

    public function getFullPathAttribute()
    {
        return url('').'/'.$this->path;
    }

    public function getFileNameAttribute()
    {
        $data = [
            'company_doc' => 'السجل التجاري',
            'commercial_doc' => 'خطاب مصدق من الغرفة التجارية',
            'mcfool_doc' => 'هوية المكفول',
            'form_doc' => 'الاستمارة',
            'seller_doc' => 'هوية البائع',
            'buyer_doc' => 'هوية المشتري',
        ];

        return $data[$this->name];
    }
}
