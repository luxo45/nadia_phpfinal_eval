<?php

class Cat
{

    // class with a property: cat
    // private: can't be change from outside
    private $firstName;

    private $age;

    private $color;

    private $sex;

    private $race;

    // set is always protected but public beacause of catbuilder we can acces these properties
    public function setFirstname(string $newFirstname)
    {
        if (strlen($newFirstname) < 3 && strlen($newFirstname) > 20) { // number of letters between 3 et 20
            throw new Exception();
        }
        $this->firstname = $newFirstname;
    }

    public function setAge(int $newAge)
    {
        $this->age = $newAge;
    }

    public function setColor(string $newColor)
    {
        if (strlen($newColor) < 3 && strlen($newColor) > 10) {
            throw new Exception();
        }
        $this->color = $newColor;
    }

    public function setSex(string $newSex)
    {
        if (in_array($newSex, [
            'male',
            'female'
        ])) {
            $this->sex = $newSex;
        } else {
            // Else throw an exception
            throw new Exception();
        }
        
        return $this;
    }

    public function setRace(string $newRace)
    {
        if (strlen($newRace) < 3 && strlen($newRace) > 20) {
            throw new Exception();
        }
        $this->race = $newRace;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function getRace()
    {
        return $this->race;
    }

    public function getInfo()
    {
        return [ // to return the array of cat:
            'firstName' => $this->firstName,
            'age' => $this->age,
            'color' => $this->color,
            'sex' => $this->sex,
            'race' => $this->race
        ];
    }
}

class newCat
{

    public function __construct($Firstname, $Age, $Color, $Sex, $Race)
    
    {
        $this->FirstName = 'Samy';
        $this->Age = '2.5';
        $this->Color = 'Ginger';
        $this->Sex = 'male';
        $this->Race = 'European';
    }
}

class CatBuilder extends Cat
{

    public function setColor(string $newColor, Cat $catObject)
    {
        $catObject->setColor($newColor);
    }
}

$cat = new Cat();
$builder = new CatBuilder();
$builder->setColor('color', $cat);
