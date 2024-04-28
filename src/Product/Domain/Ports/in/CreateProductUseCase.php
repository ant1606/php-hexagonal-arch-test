<?php
  
  namespace DDD\Product\Domain\Ports\in;
  
  use DDD\Product\Domain\Product;
  
  interface CreateProductUseCase
  {
    public function createProduct(Product $product): Product|null;
  }