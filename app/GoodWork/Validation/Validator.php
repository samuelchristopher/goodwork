<?php

namespace GoodWork\Validation;

use Violin\Violin;
use GoodWork\User\User;
use GoodWork\Helpers\Hash;

class Validator extends Violin
{
  protected $user;
  protected $hash;
  protected $auth;
  public function __construct(User $user, Hash $hash, $auth = null)
  {
    $this->user =$user;
    $this->hash =$hash;
    $this->auth =$auth;

    $this->addFieldMessages([
      'Email' => [
          'uniqueEmail' => 'That email is already in use.'
      ],
      'Username' => [
          'uniqueUsername' => 'That username is already in use.'
      ]
    ]);

    $this->addRuleMessages([
      'matchesCurrentPassword' => 'That does not match your current password.'
    ]);
  }

  public function validate_uniqueEmail($value, $input, $args)
  {
    $user = $this->user->where('Email', $value);

    if ($this->auth && $this->auth->email === $value) {
      return true;
    }

    return ! (bool) $user->count();
  }
  public function validate_uniqueUsername($value, $input, $args)
  {
    return ! (bool) $this->user->where('Username', $value)->count();
  }

  public function validate_matchesCurrentPassword($value, $input, $args)
  {
    if ($this->auth && $this->hash->passwordCheck($value, $this->auth->password)) {
      return true;
    }

    return false;
  }
}
