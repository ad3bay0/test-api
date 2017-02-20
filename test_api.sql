create table users(
id int(11) primary key auto_increment,
unique_id varchar(23) not null unique,
name varchar(50) not null,
email varchar(100) not null unique,
pass_encrypt varchar(80) not null,
pass_salt varchar(10) not null,
created_at datetime,
updated_at datetime null
);
