<?php

namespace no34\src;


 class Node {
     public $val = null;
     public $neighbors = null;
     function __construct($val = 0) {
         $this->val = $val;
         $this->neighbors = array();
     }
 }

