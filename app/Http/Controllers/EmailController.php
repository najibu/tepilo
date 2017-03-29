<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    protected $lead;
    protected $email;
    protected $number_of_valuation = 0;

    public function lead(Request $request)
    {
      $email = $request->get('email');

      if (getLead() && getEmail()) 
      {

      }
    }

  /**
   * Returns the Lead
   * @return lead
   */
   public function getLead() {
    if (is_null($this->lead)) {
      $this->lead = new Lead();
    }
    return $this->lead;
   }

   /**
   * Shortcut to set the email
   * @param string
   */
  public function setEmail($email) {
    $this->getlead()->setEmail($email);
  }

  public function getEmail(){
    return $this->email;
  }


}
