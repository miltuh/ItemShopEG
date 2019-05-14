create database products

use products

create table product (
  id int NOT NULL,
  product_name varchar(99) NOT NULL,
  price decimal(12,2) NOT NULL,
  is_active tinyint NOT NULL
);
