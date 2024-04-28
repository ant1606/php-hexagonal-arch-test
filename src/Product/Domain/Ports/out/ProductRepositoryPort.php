<?php
  
  namespace DDD\Product\Domain\Ports\out;
  
  use DDD\Product\Domain\Product;
  use DDD\Product\Domain\ValueObjects\ProductId;

  interface ProductRepositoryPort
  {
    public function save(Product $product): Product;
    
    public function update(Product $product): Product;
    
    public function findById(ProductId $id): ?Product;
    
    public function findAll(): ?array;
    
    public function deleteById(ProductId $id): bool;
  }
