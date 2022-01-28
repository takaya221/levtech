<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model  
//PostはModelを継承しているためget関数はModelに含まれる
//ModelはDBのテーブルである -> Model = table -> Post = posts  複数と単数
{
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}