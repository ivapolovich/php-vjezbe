<?php
 
class PrijevoznoSredstvo{
    private $naziv = 'osobni automobil';
    private string $registracija;
    private $kasnjenje = false;

    public function getNaziv() 
    {
        return $this-> naziv;
    }

    public function __construct($registracija)
    {
        $this -> registracija = $registracija;
    }
    
    public function vozi()
    {
        if ($this->kasnjenje) {
            return "Zakasnili ste sa " . $this->naziv;
        } else {
            return "Došli ste na vrijeme sa " . $this->naziv;
        }
    }

}

$putovanje = new PrijevoznoSredstvo('KA 192 BR');

echo $putovanje->vozi();




?>