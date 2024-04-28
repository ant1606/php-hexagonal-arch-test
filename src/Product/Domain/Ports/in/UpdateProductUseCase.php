<?php
  
  namespace DDD\Product\Domain\Ports\in;
  
  use DDD\Product\Domain\Product;
  
  interface UpdateProductUseCase
  {
    public function updateProduct(Product $product): Product|null;
  }