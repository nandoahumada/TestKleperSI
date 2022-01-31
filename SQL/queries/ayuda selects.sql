select * from SelectAnswersByUser
where id = 4
AND ENCUESTADO = 'danitza';

  SELECT SUM(PUNTAJE) FROM SelectAnswersByUser
  WHERE ID = 4
  AND ENCUESTADO = 'danitza';

select qu.id,qu.real_section,qu.content,sc.id,sc.options,sc.value from questions qu
inner join scores sc
on qu.id = sc.question_id
where sc.real_section in (4,9,11);

select * from
questions 
where real_section = 14;

select * from
sections 
where id = 2;

select * from
questions 
where id = 25;

select * from
scores 
where question_id = 124;

select distinct(question_id),question_content from scores where real_section = 4;

select distinct(id),content from questions where real_section = 4;
