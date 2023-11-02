<?php

  namespace coocki;

  class Vid
  {

    private string $type;

    public array $setType = [
      'Сахарное',
      'Галеты',
      'Затяжное',
      'Овсяное',
      'Сдобное',
    ];

    public function setType(string $value) : void {
      if(in_array($value, $this->setType)){
        $this->type = $value;
      
      }
      //  else {
      //   echo 'Вид печенья не найден';
      // }
    }

    public function getType() {
      if(!empty($this->type)) {
          return 'Вид печенья: ' . $this->type;
      } else {
          return 'Вид печенья не найден';
      }
  }

  }

?>