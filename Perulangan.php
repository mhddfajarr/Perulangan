<?php

class Perulangan
{
    private $iterations;
    private $result = [];
    private $kompakCiptaCount = 0;
    private $kompakCiptaSwitch = false;

    public function __construct($iterations)
    {
        $this->iterations = $iterations;
        $this->run();
    }

    private function run()
    {
        for ($i = 1; $i <= $this->iterations; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $this->result[] = "Kompak Cipta";
                $this->kompakCiptaCount++;
                if ($this->kompakCiptaCount == 2) {
                    $this->kompakCiptaSwitch = true;
                }
                if ($this->kompakCiptaCount == 5) {
                    break;
                }
            } elseif ($i % 3 == 0) {
                $this->result[] = $this->kompakCiptaSwitch ? "Cipta" : "Kompak";
            } elseif ($i % 5 == 0) {
                $this->result[] = $this->kompakCiptaSwitch ? "Kompak" : "Cipta";
            } else {
                $this->result[] = $i;
            }
        }
    }

    public function getResult()
    {
        return $this->result;
    }
}

$input = 100;
$kompakCipta = new Perulangan($input);
$results = $kompakCipta->getResult();

foreach ($results as $result) {
    echo $result . "<br>";
}
?>
