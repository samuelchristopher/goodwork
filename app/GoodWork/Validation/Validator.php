<?php

namespace GoodWork\Validation;

use Violin\Violin;
use GoodWork\User\User;

class Validator extends Violin
{
  protected $user;
  public function __construct(User $user)
  {
    $this->user =$user;
    $this->addFieldMessages([
      'Email' => [
          'uniqueEmail' => 'That email is already in use.'
      ],
      'Username' => [
          'uniqueUsername' => 'That username is already in use.'
      ]
    ]);
  }

  public function validate_uniqueEmail($value, $input, $args)
  {
    $user = $this->user->where('Email', $value);

    return ! (bool) $user->count();
  }
  public function validate_uniqueUsername($value, $input, $args)
  {
    return ! (bool) $this->user->where('Username', $value)->count();
  }
}
