<?php
interface UpdateProductCaseUse{
  public function updateProduct(Product $product): Product|null;
}