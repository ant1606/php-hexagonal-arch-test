<?php
  
  namespace DDD\Product\Application\UseCase;
  
  use DDD\Product\Domain\Ports\in\UpdateProductUseCase;
  use DDD\Product\Domain\Ports\out\ProductRepositoryPort;
  use DDD\Product\Domain\Product;
  
  class UpdateProductUseCaseImpl implements UpdateProductUseCase
  {
    private ProductRepositoryPort $productRepositoryPort;
    
    public function __construct(ProductRepositoryPort $productRepositoryPort)
    {
      $this->productRepositoryPort = $productRepositoryPort;
    }
    
    public function updateProduct(Product $product): Product|null
    {
      return $this->productRepositoryPort->update($product);
    }
  }