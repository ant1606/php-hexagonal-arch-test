<?php
  
  interface ProductRepositoryPort
  {
    
    public function save(Product $product): Product;
    
    public function update(Product $product): Product;
    
    public function get(ProductId $id): Product;
    
    public function delete(ProductId $id): bool;
  }
