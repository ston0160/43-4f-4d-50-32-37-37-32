--Calling first image for product category page.
SELECT imageRef FROM product, productimage WHERE product.prodID = productimage.prodID AND category = "Jedi" AND imageRef LIKE "%1%";