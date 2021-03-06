<?php

namespace GoodWork\User;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User  extends Eloquent
{
  protected $table = 'users';

  protected $fillable = [
    'email',
    'username',
    'password',
    'active',
    'active_hash',
    'first_name',
    'last_name',
    'recover_hash',
    'remember_identifier',
    'remember_token',
    'future_ambition',
    'category',
    'qualifications',
    'country',
    'district',
  ];

  public function getFullName()
  {
    if(!$this->first_name || !$this->last_name) {
      return null;
    }

    return "{$this->first_name} {$this->last_name}";
  }

  public function getFullNameOrUsername()
  {
    return $this->getFullName() ?: $this->username;
  }

  public function activateAccount()
  {
    $this->update([
      'active' => true,
      'active_hash' => null
    ]);
  }

  public function getAvatarUrl($options = [])
  {
    $size = isset($options['size']) ? $options['size']: 45;
    return 'http://www.gravatar.com/avatar/' . md5($this->email) . '?s=' . $size . '&d=identicon';
  }

  public function updateRememberCredentials($identifier, $token)
  {
    $this->update([
        'remember_identifier' => $identifier,
        'remember_token' => $token
    ]);
  }

  public function removeRememberCredentials()
  {
    $this->updateRememberCredentials(null, null);
  }

  public function hasPermission($permission)
  {
    return (bool) $this->permissions->{$permission};
  }

  public function isAdmin()
  {
    return $this->hasPermission('is_admin');
  }

  public function permissions()
  {
    return $this->hasOne('GoodWork\User\UserPermission', 'user_id');
  }

  public function isStudent()
  {
    if ($this->category === 'Student') {
      return true;
    } else {
      return false;
    }
  }

  public function isGraduate()
  {
    if ($this->category === 'Graduate') {
      return true;
    } else {
      return false;
    }
  }

  public function isEmployer()
  {
    if ($this->category === 'Employer') {
      return true;
    } else {
      return false;
    }
  }

  public function isTraining()
  {
    if ($this->category === 'Training') {
      return true;
    } else {
      return false;
    }
  }
}
