select * from selectanswersbyuser
where id = 9
AND ENCUESTADO = 'Mandiolo';

SELECT SUM(PUNTAJE) FROM selectanswersbyuser
WHERE ID = 11
AND ENCUESTADO = 'Mandiolo';

select * from scores
where real_section = 5;

select * from
questions 
where real_section = 5;

select * from
questions 
where id = 25;

select * from
scores 
where question_id = 124;

select distinct(question_id),question_content from scores where real_section = 4;

select distinct(id),content from questions where real_section = 4;
