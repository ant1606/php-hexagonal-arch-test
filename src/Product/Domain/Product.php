<?php
  
  namespace DDD\Product\Domain;
  
  use DDD\Product\Domain\ValueObjects\ProductId;
  use DDD\Product\Domain\ValueObjects\ProductName;
  
  final class Product
  {
    private ProductId $id;
    private ProductName $name;
    
    public function __construct(ProductId $id, ProductName $name)
    {
      $this->id = $id;
      $this->name = $name;
    }
    
    /**
     * @return ProductId
     */
    public function getId(): ProductId
    {
      return $this->id;
    }
    
    /**
     * @return ProductName
     */
    public function getName(): ProductName
    {
      return $this->name;
    }
  }

  
