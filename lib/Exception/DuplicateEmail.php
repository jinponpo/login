<?php

namespace MyApp\Exception;

class DuplicateEmail extends \Exception {
  protected $message = 'Dupulicate Email!';
}
