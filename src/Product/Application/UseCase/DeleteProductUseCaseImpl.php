<?php
  
  namespace DDD\Product\Application\UseCase;
  
  use DDD\Product\Domain\Ports\in\DeleteProductUseCase;
  use DDD\Product\Domain\Ports\out\ProductRepositoryPort;
  use DDD\Product\Domain\ValueObjects\ProductId;
  
  class DeleteProductUseCaseImpl implements DeleteProductUseCase
  {
    private ProductRepositoryPort $productRepositoryPort;
    
    public function __construct(ProductRepositoryPort $productRepositoryPort)
    {
      $this->productRepositoryPort = $productRepositoryPort;
    }
    
    public function deleteProduct(ProductId $id): bool
    {
      return $this->productRepositoryPort->deleteById($id);
    }
  }