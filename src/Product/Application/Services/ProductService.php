<?php
  
  namespace DDD\Product\Application\Services;
  
  use DDD\Product\Domain\Ports\in\CreateProductUseCase;
  use DDD\Product\Domain\Ports\in\DeleteProductUseCase;
  use DDD\Product\Domain\Ports\in\RetrieveProductUseCase;
  use DDD\Product\Domain\Ports\in\UpdateProductUseCase;
  use DDD\Product\Domain\Product;
  use DDD\Product\Domain\ValueObjects\ProductId;
  
  class ProductService implements CreateProductUseCase, UpdateProductUseCase, DeleteProductUseCase, RetrieveProductUseCase
  {
    
    public function __construct(
      private readonly CreateProductUseCase   $createProductUseCase,
      private readonly UpdateProductUseCase   $updateProductUseCase,
      private readonly DeleteProductUseCase   $deleteProductUseCase,
      private readonly RetrieveProductUseCase $retrieveProductUseCase
    )
    {
    }
    
    public function createProduct(Product $product): Product|null
    {
      return $this->createProductUseCase->createProduct($product);
    }
    
    public function deleteProduct(ProductId $id): bool
    {
      return $this->deleteProductUseCase->deleteProduct($id);
    }
    
    public function getProductById(ProductId $id): Product|null
    {
      return $this->retrieveProductUseCase->getProductById($id);
    }
    
    public function getAllProducts(): array|null
    {
      $this->retrieveProductUseCase->getAllProducts();
    }
    
    public function updateProduct(Product $product): Product|null
    {
      $this->updateProductUseCase->updateProduct($product);
    }
  }