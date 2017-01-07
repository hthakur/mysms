create table mysms_login(
	sign_id int auto_increment primary key,
	sign_name varchar(100), 
	sign_email varchar(100),
	sign_mob bigint,
	sign_pass varchar(100),
	sign_time timestamp
);
create table mysms_library(
	lib_id int auto_increment primary key,
	lib_name varchar(100),
	lib_signid int
);
create table mysms_group(
	group_id int auto_increment primary key,
	group_name varchar(100),
	group_signid int
);
create table mysms_msg table(
	msg_id int auto_increment primary key,
	msg_libid int,
	msg_signid int,
	msg_description longtext
);

create table mysms_contact table(
	con_id int auto_increment primary key,
	con_signid int,
	con_groupid int
	con_name varchar(100),
	con_number bigint(20)

);