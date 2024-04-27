<?php
  
  final class ProductId
  {
    private int $id;
    
    /**
     * @throws Exception
     */
    public function __construct(int $id)
    {
      $this->validate($id);
      $this->id = $id;
    }
    
    public function __toString()
    {
      return (string)$this->id;
    }
    
    /**
     * @throws Exception
     */
    private function validate(int $id): void
    {
      if ($id < 0) {
        throw new Exception('El identificador no puede ser menor o igual a 0');
      }
    }
  }