drop database if exists phppractice;
create database phppractice;
use phppractice;

create table title (
    sifra int not null primary key auto_increment,
    title varchar(255)
);

create table post (
    sifra int not null primary key auto_increment,
    post_text text
);

