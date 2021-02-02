SELECT order_details_new.*, (product_price_details.GrossPricePartner - (product_price_details.GrossPricePartner * (product_price_details.DiscountPercentage/100))) * order_details_new.Quantity AS OrderedProductTotalPrice
FROM order_details_new
INNER JOIN product_price_details ON order_details_new.ProductId=product_price_details.ProductCode;
