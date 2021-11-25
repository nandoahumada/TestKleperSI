USE TESTKEPLERSI; 

CREATE TRIGGER SCORES_SI
AFTER INSERT ON answers FOR EACH ROW

IF (new.value = 'SI')

update answer
set score = ('select maxscore from questions qu inner join answers an on qu.id = an.question_id where an.id = new.id'),
set users = (new.id,new.entry_id,new.question_id,'1',(select name from users us inner join entries en on us.id = en.participant_id inner join answers an on en.id = an.entry_id where an.entry_id = new.entry_id LIMIT 1)); 

