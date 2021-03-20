<?php
namespace cursoPHP {
    class Usuario {
        private $email;

        public function __construct($e) {
            $this->email = $e;
        }
    }
}
