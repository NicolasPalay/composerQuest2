<?php
namespace Source;
class Hello{
    private string $talk;

    public function __construct(string $talk){
        $this->talk = $talk;
    }

    /**
     * @return mixed
     */
    public function getTalk() :string
    {
        return $this->talk;
    }

    /**
     * @param mixed $talk
     */
    public function setTalk(string $text) :void
    {
        $this->talk = $text;
            }

    public function suiteTalk(string $suit) : void{
        $this -> talk = $this->talk . " " . $suit;
    }
}