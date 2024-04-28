<?php
  
  namespace DDD\Product\Application\UseCase;
  
  use DDD\Product\Domain\Ports\in\RetrieveProductUseCase;
  use DDD\Product\Domain\Ports\out\ProductRepositoryPort;
  use DDD\Product\Domain\Product;
  use DDD\Product\Domain\ValueObjects\ProductId;
  
  class RetrieveProductUseCaseImpl implements RetrieveProductUseCase
  {
    private ProductRepositoryPort $productRepositoryPort;
    
    public function __construct(ProductRepositoryPort $productRepositoryPort)
    {
      $this->productRepositoryPort = $productRepositoryPort;
    }
    
    public function getProductById(ProductId $id): Product|null
    {
      return $this->productRepositoryPort->findById($id);
    }
    
    public function getAllProducts(): array|null
    {
      return $this->productRepositoryPort->findAll();
    }
  }