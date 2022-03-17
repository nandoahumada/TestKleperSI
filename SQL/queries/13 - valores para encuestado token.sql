insert into questions (survey_id,real_section,section_id,content,type,rules,created_at,updated_at)
values (1,18,57,'Persona de contacto técnica que completa el CRA','text','["required", "min:1", "max:50"]',(DATE "2022-03-16"),(DATE "2022-03-16"));

insert into questions (survey_id,real_section,section_id,content,type,rules,created_at,updated_at)
values (1,18,57,'Teléfono de contacto técnico','text','["required", "min:1", "max:50"]',(DATE "2022-03-16"),(DATE "2022-03-16"));

insert into questions (survey_id,real_section,section_id,content,type,rules,created_at,updated_at)
values (1,18,57,'Email persona de contacto técnico','text','["required", "min:1", "max:50"]',(DATE "2022-03-16"),(DATE "2022-03-16"));

insert into questions (survey_id,real_section,section_id,content,type,rules,created_at,updated_at)
values (1,18,57,'Área a la que presta el servicio en su cliente (solo para programa Proveedores)','text','["min:1", "max:50"]',(DATE "2022-03-16"),(DATE "2022-03-16"));

insert into sections (survey_id,name,created_at,updated_at)
values ('1','18.1 - Datos del encuestado',(DATE "2022-03-16"),(DATE "2022-03-16"));
