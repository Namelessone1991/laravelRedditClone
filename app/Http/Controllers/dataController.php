<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataController extends Controller
{
    
  public function variableOutput($variable)
   {
      return 'This is the variable value '.$variable; 
      
   }

}
