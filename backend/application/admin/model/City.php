<?php

namespace app\admin\model;

use think\Model;


class City extends Model
{

    

    

    // 表名
    protected $name = 'city';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [

    ];
    

    







    public function province()
    {
        return $this->belongsTo('Province', 'provinceCode', 'code', [], 'LEFT')->setEagerlyType(0);
    }
}
