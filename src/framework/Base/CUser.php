<?php

namespace Framework;

use Framework\Models\Model;
use Framework\Enums\Role;

class CUser extends Model
{
    protected static string $table = "users";
    protected array $fillable = ['name', 'email', 'password'];
}
