<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Student extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;

    protected $fillable=[

        'name',
        'email',
        'password',
        'contact',
        'city',
        'country',
        'date_of_birth',
        'registration_date',
    ];

    public function getAuthIdentifierName()
    {
        return 'id'; // nome da coluna que representa a identificação única do usuário
    }
    
    public function getAuthIdentifier()
    {
        return $this->getKey(); // retorna a identificação única do usuário
    }
    
    public function getAuthPassword()
    {
        return $this->password; // retorna a senha do usuário
    }


}
