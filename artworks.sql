drop database if exists artworks;
create database artworks;
use artworks;

create table artwork(
	artwork_id serial primary key,
	username text,
	title text,
	category text,
	description text,
	tags text,
	filename text
);

create table member(
	user_id serial primary key,
	username varchar(20),
	password char(40),
	reg_date datetime
);