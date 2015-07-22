<?php

namespace GoodWork\Category;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Edu extends Eloquent
{
    protected $table = 'educational_institutions';

    protected $fillable = [
      'email',
      'active',
      'country',
      'website',
      'principal_name',
      'address',
      'institution_name',
      'phone_number',
    ];

    public function getName()
    {
      return "{$this->institution_name}";
    }
}
