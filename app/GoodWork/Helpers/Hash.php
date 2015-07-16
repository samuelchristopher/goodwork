<?php

namespace GoodWork\Helpers;

class Hash
{
  protected $config;
  public function __construct($config)
  {
    $this->config = $config;
  }

  public function password($password)
  {
      return password_hash(
        $password,
        $this->config->get('app.hash.algo'),
        ['cost' => $this->config->get('app.hash.cost')]
      );
  }

  public function passwordCheck($password, $hash)
  {
    return password_verify($password, $hash);
  }

  public function hash($input)
  {
    return hash('sha256', $input);
  }

  public function hashCheck($know, $user)
  {
    if (!function_exists('hash_equals')) {
      function hash_equals( $a, $b ) {
        $a_length = strlen( $a );
        if ( $a_length !== strlen( $b ) ) {
          return false;
        }
        $result = 0;

        // Do not attempt to "optimize" this.
        for ( $i = 0; $i < $a_length; $i++ ) {
          $result |= ord( $a[ $i ] ) ^ ord( $b[ $i ] );
        }

        return $result === 0;
      }
      return hash_equals($know, $user);
    } else {
      return hash_equals($know, $user);
    }
  }
}
