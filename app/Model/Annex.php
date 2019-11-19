<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Annex extends Model
{
    //定义模型关联的数据表
    protected $table = 'annexes';
    //定义主键
    protected $primaryKey = '';
    //定义禁止操作时间
    public $timestamps = false;
}
