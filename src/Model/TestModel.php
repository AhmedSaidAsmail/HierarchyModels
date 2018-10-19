<?php

namespace HierarchyModels\Model;

use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    protected $fillable = ['id', 'parent', 'name'];

}
