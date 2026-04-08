create database amusementpark;
use amusementpark;
create table users (
	Date	       char(32)	    not null primary key,
	Name		   char(32)  	character set utf8,
	enterchild		int(3),
	enteradult 	    int(3),
	childBIG3		int(3),
	adultBIG3		int(3),
	childfree       int(3),
	adultfree       int(3),
	childyear		int(3),
	adultyear		int(3)
);
describe users;
