<?php
function thumbnail($image , $type)
    {
        // We need to get extension type ( .jpeg , .png ...)
        $ext    = pathinfo($image, PATHINFO_EXTENSION);
        // We remove extension from file name so we can append thumbnail type
        $name   = rtrim($image, '.'. $ext);
        // We merge original name + type + extension
        return $name . '-' . $type . '.' . $ext;
    }

//product image helper method
function productImage($path)
{
    return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/macbook-pro.png');
}


//stock level helper method
function getStockLevel($quantity)
{

    if ($quantity > setting('site.stock_threshold')) {
        $stockLevel = '<div class="badge badge-success"> In Stock </div>';
    } elseif ($quantity <= setting('site.stock_threshold') && $quantity > 0) {
        $stockLevel = '<div class="badge badge-warning"> Low Stock </div>';
    } else {
        $stockLevel = '<div class="badge badge-danger"> Out of Stock </div>';
    }

    return $stockLevel;
}
 ?>