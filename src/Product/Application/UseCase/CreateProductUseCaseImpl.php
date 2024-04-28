<?php
  
  namespace DDD\Product\Application\UseCase;
  
  use DDD\Product\Domain\Ports\in\CreateProductUseCase;
  use DDD\Product\Domain\Ports\out\ProductRepositoryPort;
  use DDD\Product\Domain\Product;
  
  class CreateProductUseCaseImpl implements CreateProductUseCase
  {
    
    private ProductRepositoryPort $productRepositoryPort;
    
    public function __construct(ProductRepositoryPort $productRepositoryPort)
    {
      $this->productRepositoryPort = $productRepositoryPort;
    }
    
    public function createProduct(Product $product): Product|null
    {
      return $this->productRepositoryPort->save($product);
    }
  }