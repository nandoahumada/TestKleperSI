
alter table users
add column razon_social varchar(20)
after name;

alter table users
add column RUT varchar(10)
after razon_social;

alter table users
add column direccion varchar(50)
after RUT;

alter table users
add column plan_contratado varchar(20)
after direccion;

alter table users
add column proveedor varchar(50)
after plan_contratado;

alter table users
add column persona_poliza varchar(50)
after proveedor;

alter table users
add column contacto_poliza varchar(50)
after persona_poliza;

alter table users
add column mail_poliza varchar(50)
after contacto_poliza;
