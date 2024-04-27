<?php
interface DestroyProductCaseUse{
  public function destroyProduct(ProductId $id): bool;
}