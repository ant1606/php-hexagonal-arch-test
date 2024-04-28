<?php
  
  namespace DDD\Product\Domain\ValueObjects;
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
    
    /**
     * @throws Exception
     */
    private function validate(int $id): void
    {
      if ($id < 0) {
        throw new Exception('El identificador no puede ser menor o igual a 0');
      }
    }
    
    public function __toString()
    {
      return (string)$this->id;
    }
  }