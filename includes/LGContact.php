<?php  

class LGContact
{
    public $name;
    public $email;
    public $phone;
    public $instagram;
    public $twitter;
    public $address1;
    public $address2;
    public $city;
    public $state;
    public $zip;
    public $country;
    
    public function __construct($input)
    {
        $this->name = isset($input['name']) ? $input['name'] : '';
        $this->email = isset($input['email']) ? $input['email'] : '';
        $this->phone = isset($input['phone']) ? $input['phone'] : '';
        $this->instagram = isset($input['instagram']) ? $input['instagram'] : '';
        $this->twitter = isset($input['twitter']) ? $input['twitter'] : '';
        $this->address1 = isset($input['address1']) ? $input['address1'] : '';
        $this->address2 = isset($input['address2']) ? $input['address2'] : '';
        $this->city = isset($input['city']) ? $input['city'] : '';
        $this->state = isset($input['state']) ? $input['state'] : '';
        $this->zip = isset($input['zip']) ? $input['zip'] : '';
        $this->country = isset($input['country']) ? $input['country'] : '';
    }
}