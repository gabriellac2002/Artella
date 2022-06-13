create database if not exists `Artella`;

use `Artella`;
start transaction;
set time_zone = "+00:00";

create table if not exists `categories` (
	id int(11) unsigned not null AUTO_INCREMENT,
    `name` varchar(64) not null unique,
    primary key(id)
) Engine=InnoDB charset latin1;

create table if not exists `users` (
	id int(11) unsigned not null AUTO_INCREMENT,
    `name` varchar(80) not null,
    `email` varchar(128) not null unique,
    `password` varchar(32) not null,
    primary key(id)
) Engine=InnoDB charset latin1;

create table if not exists `products`(
	id int(11) unsigned not null AUTO_INCREMENT,
    `name` varchar(128) not null unique,
    `price` Decimal(11,2) unsigned not null ,
    categoryId int(11) unsigned not null,
    description varchar(255),
    primary key(id),
    constraint CategoryFK
    foreign key (categoryId) references categories(id)
)Engine=InnoDB charset latin1;

create table if not exists `images` (
	id bigint unsigned not null AUTO_INCREMENT,
    `url` varchar(255) not null,
    productId int(11) unsigned not null,
    primary key(id),
    constraint ProductFK
    foreign key (productId) references products(id)
    ON DELETE CASCADE ON UPDATE CASCADE
)Engine=InnoDB charset latin1;

ALTER TABLE users ADD CONSTRAINT MINI CHECK (CHAR_LENGTH(`password`) >= 6);

CREATE INDEX nameindex on `products` (`name`);
commit;