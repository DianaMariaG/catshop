drop database catshop;
create database if not exists catshop;
use catshop;

create table if not exists cat (id int not null auto_increment primary key,
name varchar(45) not null,
image_url varchar(200),
age int not null,
breed varchar(45) not null,
status varchar(45) not null);

create table if not exists user (id int not null auto_increment primary key,
first_name varchar(45),
last_name varchar(45),
email varchar(45) unique not null,
password varchar(100) not null,
mobile_number varchar(45),
birthdate date,
country varchar(45),
city varchar(45),
address varchar(100));

create table if not exists history (id int not null auto_increment primary key,
purchase_date varchar(45) not null,
user_id int not null,
cat_id int not null,
foreign key (user_id) references user(id),
foreign key(cat_id) references cat(id));

insert into cat(name, image_url, age, breed, status) values
('Tiger', './cats/tiger_cat1.jpeg', 2, 'Bengal Cats', 'AVAILABLE'),
('Rajah', './cats/tiger_cat2.png', 1, 'Bengal Cats', 'AVAILABLE'),
('Dawon', './cats/tiger_cat3.jpeg', 1, 'Bengal Cats', 'AVAILABLE'),
('Ginger', './cats/yellow_cat1.jpeg', 2, 'Red Tabby Cats', 'AVAILABLE'),
('Amber', './cats/yellow_cat2.jpeg', 3, 'Red Tabby Cats', 'AVAILABLE'),
('Coral', './cats/yellow_cat3.jpeg', 4, 'Red Tabby Cats', 'AVAILABLE'),
('Opal', './cats/silver_cat1.jpeg', 4, 'Siberian Cats', 'AVAILABLE'),
('Luna', './cats/silver_cat2.jpeg', 1, 'Siberian Cats', 'AVAILABLE'),
('Ivory', './cats/silver_cat3.jpeg', 2, 'Siberian Cats', 'AVAILABLE'),
('Crystal', './cats/mixed_cat1.jpeg', 2, 'Black and White Cats', 'AVAILABLE'),
('Onyx', './cats/mixed_cat2.jpeg', 2, 'Black and White Cats', 'AVAILABLE'),
('Cruella', './cats/mixed_cat3.jpeg', 2, 'Black and White Cats', 'AVAILABLE');
