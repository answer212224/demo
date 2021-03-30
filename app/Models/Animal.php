<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'name',
        'birthday',
        'area',
        'fix',
        'description',
        'personality',
        // 'user_id', //不建議允許批量寫入，將在後續身分驗證章節修改這邊的設定。
    ];

    public function type()
    {
        // belongsTo(類別名稱, 參照欄位, 主鍵)
        return $this->belongsTo('App\Models\Type');
    }

    public function getAgeAttribute()
    {
        $diff = now()->diff($this->birthday);
        return "{$diff->y}歲{$diff->m}月";
    }

    /**
     * 取得動物的刊登會員，一對多的反向關聯
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * 多對多關聯 animal 與 user 我的最愛關係
     */
    public function likes()
    {
        return $this->belongsToMany('App\Models\User', 'animal_user_likes')
            ->withTimestamps();
    }
}
