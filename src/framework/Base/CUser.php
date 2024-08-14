<?php

namespace Framework;

use Framework\Models\Model;
use Framework\Enums\Role;

class CUser extends Model
{
    protected static string $table = "usersVue";
    protected array $fillable = ['name', 'tel'];
}
