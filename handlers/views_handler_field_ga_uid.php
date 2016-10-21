<?php

/**
 * Created by PhpStorm.
 * User: ethanhinson
 * Date: 10/21/16
 * Time: 1:32 PM
 */
class views_handler_field_ga_uid extends views_handler_field {
  public function render($values) {
    return ga_uid_hmac_get($this->get_value($values));
  }

}
