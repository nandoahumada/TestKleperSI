update sections set name = '1.1 - Establecer y mantener inventario detallado de Hardware' where id = 1;
update sections set name = '3.3 - Configurar listas de control de acceso a la información (control de acceso a los sistemas, documentos, bases de datos y aplicaciones)' where id = 8;
update sections set name = '3.4 - Reforzar la mantención de la información corporativa' where id = 9;
update sections set name = '3.1 - Establecer y mantener un proceso de gestión de la información corporativa. Esto incluye: "información sensible, propietarios de la información, gestion de información, retención de la información y eliminación' where id = 6;
update sections set name = '4.7 - Gestionar las cuentas por defecto (root, admin, etc), de todo el hardware donde aplique dejándolas inhabilitadas' where id = 18;
update sections set name = '5.2 - Utilización de contraseñas únicas' where id = 20;
update sections set name = '5.3 - Deshabilitar cuentas "durmientes" (cuentas deshabilitadas o no usadas con frecuencia)'  where id = 21;
update sections set name = '5.4 - Restringir el acceso a privilegios de administrador' where id = 22;
update sections set name = '6.3 - Requerir MFA (autenticación multifactor) para las aplicaciones externas o expuestas' where id = 25;
update sections set name = '7.3 - Implemementar la gestión de parches de sistemas operativos de la organización' where id = 30;
update sections set name = '10.1 - Implementar y mantener un software Anti-Malware (Software que protege la información de codigo malicioso)' where id = 37;
update sections set name = '14.1 - Establecer y mantener un programa de concientización que abarque toda la organización' where id = 45;
update sections set name = '14.3 - Entrenar a los empleados en las mejores prácticas en autentificación' where id = 47;
update sections set name = '15.1 - Establecer y mantener un inventario de los proveedores' where id = 53;

update questions set content = '¿Cuéntan con un inventario de todo el hardware?' where id = 2;
update questions set content = '¿Qué se hace ante la conexión de un equipo que no pertenece al inventario de hardware?' where id = 7;
update questions set content = '¿El inventario de hardware ha sido aprobado por la gerencia general?' where id = 8;
update questions set content = '¿Existe un proceso donde se describan los tiempos de retención de la información corporativa?' where id = 24;
update questions set content = '¿Está definido el tiempo de mantencion mínima/máxima de los archivos corporativos?' where id = 30;
update questions set content = '¿Utiliza la empresa configuraciones seguras como protocolos SSH y VPN para las conexiones?' where id = 51;
update questions set content = '¿Su pagina institucional utiliza certificado seguro (ssl o https)?' where id = 53;
update questions set content = '¿Utiliza la empresa configuraciones seguras como protocolos SSH y VPN para las conexiones?' where id = 55;
update questions set content = '¿Se cuenta con un inventario de todas las cuentas de acceso a la compañía?' where id = 56;
update questions set content = '¿Están estas restricciones documentadas?' where id = 57;
update questions set content = '¿Está establecido el uso de contraseñas únicas por usuario?' where id = 59;
update questions set content = '¿Se há denegado el privilegio de administrador, y además el acceso a la cuenta de administrador?' where id = 64;
update questions set content = '¿Existe un proceso escrito de revocación de cuenta ante la salida de un usuario?' where id = 71;
update questions set content = '¿Existe un proceso escrito de remediación de vulnerabilidades de la empresa?' where id = 83;
update questions set content = '¿Es una política o directiva que se cumpla en un 100%?' where id = 96;
update questions set content = '¿Está escrita esta política?' where id = 97;
update questions set content = '¿Que Software Anti-Malware, y su versión asociada ocupa la empresa?' where id = 104;
update questions set content = '¿Todos los respaldos de las máquinas son automatizados?' where id = 115;
update questions set content = '¿Existe una destinación del respaldo que no esté conectada a la red / esté en la nube / o se encuentre en una ubicación distinta a la de la empresa? (esto es, que se encuentre en una red o ubicación distinta y no conectada a la del servidor en producción)' where id = 121;

update questions set content = '¿Se ha realizado esta implementacion?'  where id = 85;
update questions set content = '¿Este proceso es automatizado?'  where id = 84;

update questions set content = '¿Se ha realizado esta implementacion?'  where id = 87;
update questions set content = '¿Este proceso es automatizado?'  where id = 86;


delete from questions where id = 29;
delete from questions where id = 55;

update questions set options = '["SI", "NO", "NO CUENTO CON ESA INFORMACIÓN"]' where id = 49;
update questions set options = '["SI", "NO", "NO CUENTO CON ESA INFORMACIÓN"]' where id = 51;
update questions set options = '["SI", "NO", "ALGUNOS"]' where id = 81;
update questions set options = '["SOLO ESTACIONES DE TRABAJO", "SOLO SERVIDORES", "AMBOS", "NINGUNO"]' where id = 115;

SELECT QU.ID, QU.CONTENT, SE.ID, QU.REAL_SECTION, SE.NAME, QU.OPTIONS 
FROM QUESTIONS QU
INNER JOIN SECTIONS SE
ON QU.SECTION_ID = SE.ID
ORDER BY QU.ID;
