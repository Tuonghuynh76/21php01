-- Sắp xếp theo tên tăng dần --
SELECT productID, productName FROM products ORDER BY productName;
-- Lấy ra danh sách sản phẩm có giá nhỏ hơn $500 --
SELECT * FROM products 
WHERE listPrice < 500
ORDER BY listPrice ASC
-- Lấy ra danh sách đơn hàng (bảng order) được mua vào tháng 5 năm 2014 --
SELECT orderDate FROM orders
WHERE orderDate LIKE '2014-05-__%'
-- Sửa tên sản phẩm có chữ chữ “Fe” thành chữ “Good product” -- 
UPDATE products SET productName = "Good product" WHERE productName LIKE 'Fe%';
-- Xóa sản phẩm có giá lớn hơn $800 --
DELETE FROM products WHERE listPrice > 800
