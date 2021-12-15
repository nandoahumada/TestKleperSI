drop view SelectAnswersByUser;

create view SelectAnswersByUser

as
      
select qu.real_section as ID,
se.name as Seccion,
qu.id as Nro_Pregunta,
qu.content as Pregunta,
an.value as Respuesta,
us.name as Encuestado,
sc.value as Puntaje,
(select DISTINCT sum(scs.value)
from answers ans 
inner join questions qus
on qus.id = ans.question_id
inner join entries ens
on ans.entry_id = ens.id
inner join users uss
on uss.id = ens.participant_id
inner join scores scs
on qus.id = scs.question_id
where ans.value = scs.options) as SumaScores
from answers an 
inner join entries en 
on an.entry_id = en.id 
inner join questions qu
on qu.id = an.question_id
inner join scores sc
on qu.id = sc.question_id
inner join users us 
on en.participant_id = us.id
inner join sections se
on se.id = qu.section_id
WHERE AN.value = SC.options;
