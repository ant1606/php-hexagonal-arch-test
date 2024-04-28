<?php
  
  namespace DDD\Product\Domain\ValueObjects;
  final class ProductName
  {
    private string $name;
    
    /**
     * @throws Exception
     */
    public function __construct(int $name)
    {
      $this->validate($name);
      $this->name = $name;
    }
    
    /**
     * @throws Exception
     */
    private function validate(int $name): void
    {
      if (strlen($name) === 0) {
        throw new Exception('El nombre no puede estar vacío');
      }
    }
    
    public function __toString()
    {
      return $this->name;
    }
  }