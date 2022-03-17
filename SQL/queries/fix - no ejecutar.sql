update questions 
set content = '¿Cuentan con listas de control de acceso a la informacion?' 
where id = 25;

update scores
set question_content = '¿Cuentan con listas de control de acceso a la informacion?' 
where question_id = 25;

update questions
set options = '["SI", "NO","NO APLICA"]'
where id = 124;

update questions
set content = 'En caso de ser un programa o proveedor externo ¿Cuál?, Puede indicar NO APLICA si no cuenta con programa' 
where id = 25;

update questions
set rules = '["min:1", "max:255"]'
where id = 127;

update questions
set options = '["DENIEGA INSTALACION", "SE MANTIENE EN CUARENTENA", "SE VALIDA EXCEPCIÓN","NO APLICA"]'
where id = 18;

update questions
set content = '¿Existe un procedimiento que indica qué hacer ante la conexión de un dispositivo no autorizado?' 
where id = 6;

update scores
set question_content = '¿Existe un procedimiento que indica qué hacer ante la conexión de un dispositivo no autorizado?' 
where question_id = 6;

update questions
set content = '¿Cuentan con un inventario detallado de todo el hardware?' 
where id = 2;

update scores
set question_content = '¿Cuentan con un inventario detallado de todo el hardware?' 
where question_id = 2;

update questions
set content = '¿Qué se realiza ante la instalación de software no autorizado?' 
where id = 18;

update scores
set question_content = '¿Qué se realiza ante la instalación de software no autorizado?' 
where question_id = 18;

update questions
set content = '¿Este proceso está documentado?' 
where id = 31;

update scores
set question_content = '¿Este proceso está documentado?' 
where question_id = 31;

update questions
set options = '["SI Y ESTÁ DOCUMENTADO", "SI Y NO ESTÁ DOCUMENTADO", "NO"]'
where id = 33;

update questions
set content = '¿Tienen los administradores una cuenta en todos los equipos de red?' 
where id = 67;

update scores
set question_content = '¿Tienen los administradores una cuenta en todos los equipos de red?' 
where question_id = 67;

update sections set name = '1.2 .- Actuar frente a dispositivos no autorizados' where id = 2;

update questions
set rules = '["min:1", "max:255"]'
where id = 104;

update questions
set options = '["SI", "NO", "NO APLICA"]'
where id = 125;

update questions
set options = '["EXTERNO", "INTERNO", "NO APLICA"]'
where id = 126;

update questions
set rules = '["min:1", "max:255"]'
where id = 127;

update scores set question_content = '¿Tienen los administradores una cuenta en todos los equipos de red?' where question_id = 67;
