<?php

abstract class Stripe
{
  /**
   * @var string The Stripe API key to be used for requests.
   */
  public static $apiKey;
  /**
   * @var string The base URL for the Stripe API.
   */
  public static $apiBase;
  /**
   * @var string|null The version of the Stripe API to use for requests.
   */
  public static $apiVersion = null;
  /**
   * @var boolean Defaults to true.
   */
  public static $verifySslCerts = false;

  const VERSION = '1.17.2';

  public static $token = null;

  /**
   * @return string The API key used for requests.
   */
  public static function getApiKey()
  {
    return self::$apiKey;
  }

  /**
   * Sets the API key to be used for requests.
   *
   * @param string $apiKey
   */
  public static function setApiKey($apiKey)
  {
    self::$apiKey = $apiKey;
  }

  /**
   * @return string The API version used for requests. null if we're using the
   *    latest version.
   */
  public static function getApiVersion()
  {
    return self::$apiVersion;
  }

  /**
   * @param string $apiVersion The API version to use for requests.
   */
  public static function setApiVersion($apiVersion)
  {
    self::$apiVersion = $apiVersion;
  }

  /**
   * @return boolean
   */
  public static function getVerifySslCerts()
  {
    return self::$verifySslCerts;
  }

  /**
   * @param boolean $verify
   */
  public static function setVerifySslCerts($verify)
  {
    self::$verifySslCerts = $verify;
  }
  
  /**
   * Sets the base URL for the Stripe API
   *
   * @param string $apiKBase
   */
  public static function setApiBase($apiBase)
  {
    self::$apiBase = $apiBase;
  }
  /**
   * @return null
   */
  public static function getToken()
  {
    return self::$token;
  }

  /**
   * @param null $token
   */
  public static function setToken($token)
  {
    self::$token = $token;
  }
}
