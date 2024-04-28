<?php
  
  namespace DDD\Product\Domain\Ports\in;
  
  use DDD\Product\Domain\Product;
  use DDD\Product\Domain\ValueObjects\ProductId;
  
  interface RetrieveProductUseCase
  {
    public function getProductById(ProductId $id): Product|null;
    
    /**
     * Obtiene todos los productos.
     *
     * @return array<Product>|null Un array de objetos Product o null si no hay productos.
     */
    public function getAllProducts(): array|null;
  }