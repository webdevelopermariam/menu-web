CREATE TABLE categories (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);
CREATE TABLE products (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category_id INT, -- FOREIGN KEY
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
);

CREATE TABLE customers (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    isAdmin BOOLEAN
);

CREATE TABLE orders (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    customer_id INT, -- FOREIGN KEY
    order_date DATE NOT NULL,
    status ENUM('Delivered', 'Processing', 'Rejected', 'Out for Delivery'),
    total DECIMAL(10,2) NOT NULL
);

CREATE TABLE ordered_products (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    order_id INT, -- FOREIGN KEY
    product_id INT, -- FOREIGN KEY
    no_of_products_ordered INT
);


