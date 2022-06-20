<?php 
class Cat{
    public int $id;
    public string $name;
    public string $image_url;
    public int $age;
    public string $breed;
    public string $status;

    public function __construct($id, $name, $image_url, $age, $breed, $status){
        $this->id = $id;
        $this->name = $name;
        $this->image_url = $image_url;
        $this->age = $age;
        $this->breed = $breed;
        $this->status = $status;
    }
}

class History{
    public int $id;
    public int $cat_id;
    public int $user_id;
    public string $purchase_date; 
    
    public function __construct($cat_id, $user_id) {
        $this->cat_id = $cat_id;
        $this->user_id = $user_id;
        $this->purchase_date = strval(date("d.m.y")); 
    }
}

class User{
    public int $id;
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $password;
    public string $mobile_number;
    public date $birthdate;
    public string $country;
    public string $city;
    public string $home_address;

    public function __construct($id, $first_name, $last_name, $email, $password, $mobile_number, $birthdate, $country, $city, $home_address){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->mobile_number = $mobile_number;
        $this->birthdate = $birthdate;
        $this->country = $country;
        $this->city = $city;
        $this->home_address = $home_address;
    }

}

?>

