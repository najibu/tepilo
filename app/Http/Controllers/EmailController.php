<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    protected $lead;
    protected $email;
    
    public function lead(Request $request)
    {
      $email = $request->get('email');

      if (getLead() && getEmail()) 
      {
        $customField = new CustomField();
        $customField->setId(1); 

      } else if (method_exists($this->lead, getLead() && method_exists($this->email, getEmail())) {
        $this->lead = new Lead();

        $this->lead->getLead()->setEmail($email);
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
