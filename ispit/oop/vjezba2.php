<?php

class UserAccount{
    private $username;
    private $email;
    private $password;

    // Setteri

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function userInfo()
    {
        echo "Korisničko ime: " . $this->getUsername();
    }
}

$user = new UserAccount();
$user->setUsername("Ivica Ivić");
echo $user->userInfo();


?>