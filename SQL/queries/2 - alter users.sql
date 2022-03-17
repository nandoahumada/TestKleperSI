alter table users
add column comp_name varchar(20)
after name;

alter table users
add column area varchar(20)
after comp_name;

alter table users
add column phone varchar(20)
after password;

alter table users
add column workers_num int unsigned
after phone;

alter table users
add column pcs_num int unsigned
after workers_num;

