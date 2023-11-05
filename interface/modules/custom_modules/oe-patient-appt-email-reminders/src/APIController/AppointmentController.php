<?php

/**
 * package    Patient Reminder Module
 *  link      https://affordablecustomehr.com
 *  author    Sherwin Gaddis <sherwingaddis@gmail.com>
 *  copyright Copyright (c )2021. Sherwin Gaddis <sherwingaddis@gmail.com>
 *  All rights reserved
 */

namespace  Juggernaut\Modules\APIController;
require_once(dirname(__FILE__,6) . '/globals.php');

use Juggernaut\Modules\APIController\API;
use Juggernaut\Modules\Database;

class AppointmentController extends API
{
   public function confirm($args, $file)
   {
      if($this->method == 'GET')
      {
         if(sizeof($args) > 0)
         {
            $pc_eid = $args[0];
            return Database::updateApptStatus($pc_eid);
         }
      }
      if($this->method == "PUT") {
         if(sizeof($args) > 0) {
            echo "PUT";
            $pc_eid = $args[0];
            return Database::updateApptStatus($pc_eid);
         }
      }
   }
}