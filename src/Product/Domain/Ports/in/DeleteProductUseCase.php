<?php
  
  namespace DDD\Product\Domain\Ports\in;
  
  use DDD\Product\Domain\ValueObjects\ProductId;
  
  interface DeleteProductUseCase
  {
    public function deleteProduct(ProductId $id): bool;
  }