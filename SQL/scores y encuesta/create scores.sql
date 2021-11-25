drop table scores;

create table scores
(id int(5) unsigned not null auto_increment primary key,
question_id int not null,
question_content varchar(255) not null,
options varchar(50) null,
value int(5) unsigned null)


COLLATE=utf8mb4_unicode_ci;

Select * from Scores sc
inner join an
