<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caches extends CI_Controller {

  public function cacheApc() {
    $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
    if ( ! $foo = $this->cache->get('foo') )
    {
      echo 'Saving to the cache!<br />';
      $foo = 'foobarbaz!';
      // Save into the cache for 1 minute
      $this->cache->save('foo', $foo, 60);
    }
    echo $foo;
    var_dump($this->cache->cache_info());
  }
  
  public function RedisCache() {
    $this->load->driver('cache');
    $this->cache->redis->save('foo', 'bar', 10);
  }
  
}