create database db_pub;
use db_pub;
create table pub_dept(
    id int not null auto_increment,
    name varchar(50) not null,
    tel varchar(50) not null,
    sort int not null  default 50,
    remark varchar(255),
    primary key(id)
)engine=myisam default charset=utf8;