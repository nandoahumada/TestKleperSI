USE TESTKEPLERSI; 


CREATE TRIGGER SCORES_SI
BEFORE INSERT ON answers FOR EACH ROW


insert into answer (score,users)
values ('1',(select name from users us inner join entries en on us.id = en.participant_id inner join answers an on en.id = an.entry_id where an.entry_id = new.entry_id LIMIT 1));


