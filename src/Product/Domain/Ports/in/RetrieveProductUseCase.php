<?php
  interface RetrieveProductUseCase{
    public function getProductById(ProductId $id): Product|null;
    /**
     * Obtiene todos los productos.
     *
     * @return array<Product>|null Un array de objetos Product o null si no hay productos.
     */
    public function getAllProducts(): array|null;
  }