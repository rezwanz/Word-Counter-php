<?php


namespace App\classes;


class WordCount
{
    public $givenString;
    public $totalWord;
    public $totalChar;
    public $result = [];

    public function __construct($data)
    {
        $this->givenString = $data['given_string'];
    }

    public function index()
    {
        $this->totalWord = str_word_count($this->givenString);
        $this->totalChar = strlen($this->givenString);
        $this->result = [
          'given_string' => 'Given string is: '.$this->givenString,
            'total_word' => 'Total word is: '.$this->totalWord,
            'total_char' => 'Total character is: '.$this->totalChar,
        ];
        return $this->result;
    }
}