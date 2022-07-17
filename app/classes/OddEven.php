<?php


namespace App\classes;


class OddEven
{
    public $startingNumber;
    public $endingNumber;
    public $option;
    public $result;

    public function __construct($data)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber = $data['ending_number'];
        if (isset($data['option']))
        {
            $this->option = $data['option'];
        }
    }

    public function index()
    {
        if($this->startingNumber < $this->endingNumber)
        {
            for ($this->startingNumber; $this->startingNumber <= $this->endingNumber; $this->startingNumber++)
            {
                if ($this->option == 'odd')
                {
                    if ($this->startingNumber % 2 == 1)
                    {
                        $this->result.= $this->startingNumber.' ';
                    }
                }
                elseif ($this->option == 'even')
                {
                    if ($this->startingNumber % 2 == 0)
                    {
                        $this->result.=$this->startingNumber.' ';
                    }
                }
            }
        }
        return $this->result;
    }
}