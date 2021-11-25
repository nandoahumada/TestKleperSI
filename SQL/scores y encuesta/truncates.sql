truncate table testkeplersi.answers;

truncate table testkeplersi.entries;

truncate table testkeplersi.scores;

alter table answers
add column score int unsigned
after value;

alter table answers
add column users varchar (50)
after score;

drop table scores;

create table scores
(id int(5) unsigned not null auto_increment primary key,
question_id int not null, 
options varchar(255) null,
value int(5) unsigned null);

insert into scores (question_id)
select id from questions;

insert into scores (options)
select options from questions;

select options from questions;

select id,section_id, content,options from questions;

select * from answers;


 
