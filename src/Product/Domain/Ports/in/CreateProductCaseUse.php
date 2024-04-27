<?php
interface CreateProductCaseUse{
  public function createProduct(Product $product): Product|null;
}