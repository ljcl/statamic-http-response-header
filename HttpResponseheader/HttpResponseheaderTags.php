<?php

namespace Statamic\Addons\HttpResponseheader;

use Statamic\Extend\Tags;

class HttpResponseheaderTags extends Tags
{
    /**
   * The {{ http_responseheader }} tag.
   *
   * @param string  $field    The HTTP header field to set
   * @param string  $value    Any HTTP header value to set
   */
  public function index()
  {
      $field = $this->getParam('field');
      $value = $this->getParam('value');

      if (!empty($field) && !empty($value)) {
          header($field.': '.$value);
      }
  }
}
