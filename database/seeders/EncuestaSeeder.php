<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use MattDaneshvar\Survey\Models\Survey;

class EncuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $survey = Survey::create(['name' => 'Auto Evaluación de Seguridad']);

        $onepointone = $survey->sections()->create(['name' => '1.1 - Establecer y mantener inventario detallado de HW']);
        
        $onepointone->questions()->create([
            'content' => '¿Que prioridad le da la empresa a este punto de un 1 a 10?',
            'type' => 'number',
            'rules' => ['required','numeric', 'min:1', 'max:10']
        ]);

        $onepointone->questions()->create([
            'content' => '¿Cuentan con un inventario de todo el HW?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','EN PROCESO']
        ]);

        $onepointone->questions()->create([
            'content' => '¿Esta automatizado este inventario?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO', 'EN PARTE']
        ]);

        $onepointone->questions()->create([
            'content' => '¿Con que frecuencia se actualiza?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'TRIMESTRAL/SEMESTRAL', 'ANUALMENTE', 'OTROS']
        ]);

        $onepointone->questions()->create([
            'content' => '¿Existe un procedimiento que establezca el responsable del inventario, a quien reporta, qué se registra y cada cuánto se revisa?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO', 'EN PROCESO']
        ]);

        
        $onepointtwo = $survey->sections()->create(['name' => '1.2 .- Actuar frente activos no autorizados']);
        
        $onepointtwo->questions()->create([
            'content' => '¿Existe un procedimiento qué indica qué hacer ante la conexión de un activo no autorizado?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','EN PROCESO']
        ]);

        $onepointtwo->questions()->create([
            'content' => '¿Qué se realiza ante un activo no autorizado?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['Deniega la conexion', 'Se mantiene en cuarentena', 'Otro']
        ]);
        
        $onepointtwo->questions()->create([
            'content' => '¿El inventario de hardware a sido aprobado por la direccion?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO', 'EN PROCESO']
        ]);
		
		$twopointone = $survey->sections()->create(['name' => '2.1 .- Establecer y mantener inventario de software']);
        
		$twopointone->questions()->create([
            'content' => '¿Cuéntan con un inventario del software instalado en las maquinas de su red?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','EN PROCESO']
        ]);
		
		$twopointone->questions()->create([
            'content' => '¿Este inventario está automatizado?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','EN PROCESO']
        ]);
		
		$twopointone->questions()->create([
            'content' => '¿Con qué frecuencia se actualiza?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'TRIMESTRAL/SEMESTRAL', 'ANUALMENTE', 'OTROS']
        ]);
		
		$twopointone->questions()->create([
            'content' => '¿Existe un procedimiento que establezca el responsable del inventario, a quien reporta, qué se registra y cada cuánto se revisa?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','EN PROCESO']
        ]);
		
		$twopointone->questions()->create([
            'content' => '¿Tiene incluido en su inventario de software los firmware de routers, switch y firewall de su red?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$twopointtwo = $survey->sections()->create(['name' => '2.2 .- Asegurar que el software autorizado cuenta con soporte']);
        
		$twopointtwo->questions()->create([
            'content' => '¿Todo el software tiene soporte?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','PARCIALMENTE']
        ]);
		
			$twopointtwo->questions()->create([
            'content' => 'En caso de contar con software sin soporte ¿Se cuenta con un plan de mitigación de riesgos?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','PARCIALMENTE']
        ]);
		
			$twopointtwo->questions()->create([
            'content' => '¿Estan actualizados los firmware de los routers, switchs y firewalls de su red?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$twopointthree = $survey->sections()->create(['name' => '2.3 .- Actuar frente al software no autorizado']);
        
		$twopointthree->questions()->create([
            'content' => '¿Existe un procedimiento qué indica qué hacer ante la presencia de un sofware no autorizado?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','EN PROCESO']
        ]);
		
		$twopointthree->questions()->create([
            'content' => '¿Qué se realiza ante un activo no autorizado?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['DENIEGA INSTALACION', 'SE MANTIENE EN CUARENTENA','SE VALIDA EXCEPCIÓN']
        ]);
		
		$threepointone = $survey->sections()->create(['name' => '3.1 - Establecer y mantener un proceso de gestión de información']);
        
        $threepointone->questions()->create([
            'content' => '¿Cuéntan con un proceso de gestión de información sensible?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$threepointone->questions()->create([
            'content' => '¿Este proceso esta escrito?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$threepointone->questions()->create([
            'content' => '¿Con que frecuencia se actualiza?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'TRIMESTRAL/SEMESTRAL', 'ANUALMENTE', 'OTROS']
        ]);
		
		$threepointtwo = $survey->sections()->create(['name' => '3.2 - Establecer y mantener un inventario de información sensible']);
        
        $threepointtwo->questions()->create([
            'content' => '¿Cuentan con un inventario de información sensible?',
            'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
        ]);
		
		$threepointtwo->questions()->create([
            'content' => '¿Con que frecuencia se actualiza?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'TRIMESTRAL/SEMESTRAL', 'ANUALMENTE', 'OTROS']
        ]);
		
		$threepointthree = $survey->sections()->create(['name' => '3.3 - Configurar listas de control de acceso a la información = control de acceso a los sistemas, documentos, bases de datos y aplicaciones']);
        
		$threepointthree->questions()->create([
            'content' => '¿Este proceso esta escrito?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$threepointthree->questions()->create([
            'content' => '¿Cuentan con listas de control de acceso a la informacion?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
        ]);
		
		$threepointthree->questions()->create([
            'content' => '¿Los usuarios cuentan con cuentas de acceso personal para acceder al sistema?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','PARCIALMENTE']
        ]);
		
		$threepointthree->questions()->create([
            'content' => '¿Los administradores de la red cuentan con un perfil propio en todos los equipos?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','PARCIALMENTE']
        ]);
		
		$threepointfour = $survey->sections()->create(['name' => '3.4 - Reforzar la mantención de la información corporativa']);
        
       	$threepointfour->questions()->create([
            'content' => '¿Este proceso esta escrito?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$threepointfour->questions()->create([
            'content' => '¿Se incluye en el proceso de gestión de información sensible este punto, incluyendo retención minima y máxima?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$threepointfour->questions()->create([
            'content' => '¿Esta definido el tiempo de mantencion de los archivos corporativos?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$threepointfive = $survey->sections()->create(['name' => '3.5 - Asegurar la correcta eliminación de la información']);
        
		$threepointfive->questions()->create([
            'content' => '¿Este proceso esta escrito?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$threepointfive->questions()->create([
            'content' => '¿Se incluye en el proceso de gestión de información sensible este punto sobre la eliminación de información sensible?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$threepointfive->questions()->create([
            'content' => '¿Existe un procedimiento para manejar el equipo de un empleado que ha dejado la compañía?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','NO ESCRITO']
        ]);
		
		$threepointsix = $survey->sections()->create(['name' => '3.6 - Encriptar información en los dispositivos de los usuarios']);
        
        $threepointsix->questions()->create([
            'content' => '¿Este proceso esta escrito?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$threepointsix->questions()->create([
            'content' => '¿Cuentan con listas de control de acceso a la informacion?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
        ]);
		
		$threepointsix->questions()->create([
            'content' => '¿Cuentan los equipos con sistema de encriptacion activado?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','ALGUNOS']
        ]);
		
		$fourpointone = $survey->sections()->create(['name' => '4.1 - Establecer y mantener una configuración segura de los dispositivos']);
        
		$fourpointone->questions()->create([
            'content' => '¿Los equipos de la compañía cuenta con configuraciones seguras habilitadas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
        $fourpointone->questions()->create([
            'content' => '¿Estas configuraciones están documentadas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fourpointone->questions()->create([
            'content' => '¿Con qué frecuencia se actualiza?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'TRIMESTRAL/SEMESTRAL', 'ANUALMENTE', 'OTROS']
        ]);
		
		$fourpointtwo = $survey->sections()->create(['name' => '4.2 - Establecer y mantener una configuración segura para los disposiitivos de red']);
        
		$fourpointtwo->questions()->create([
            'content' => '¿Los equipos de la compañía cuenta con configuraciones seguras habilitadas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
        $fourpointtwo->questions()->create([
            'content' => '¿Estas configuraciones están documentadas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fourpointtwo->questions()->create([
            'content' => '¿Con qué frecuencia se actualiza?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'TRIMESTRAL/SEMESTRAL', 'ANUALMENTE', 'OTROS']
        ]);
		
		$fourpointthree = $survey->sections()->create(['name' => '4.3 - Configurar el bloqueo automático de sesión ante inactividad']);
        
		$fourpointthree->questions()->create([
            'content' => '¿Estas configuraciones están documentadas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fourpointthree->questions()->create([
            'content' => '¿Los equipos de la compañía cuenta con el bloqueo de sesión automático ante inactividad?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fourpointthree->questions()->create([
            'content' => '¿Después de qué periodo de inactividad se bloquea? (Minutos)',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['1', '5','10','15','OTRO']
        ]);
		
		$fourpointfour = $survey->sections()->create(['name' => '4.4 - Implementar y gestionar firewalls en los servidores, cuando sea posible']);
        
		$fourpointfour->questions()->create([
            'content' => '¿Estas configuraciones están documentadas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fourpointfour->questions()->create([
            'content' => '¿Cuéntan con firewall configurado? ',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fourpointfour->questions()->create([
            'content' => '¿De que tipo? ',
        ]);
		
		$fourpointfour->questions()->create([
            'content' => '¿Existe una regla "default-deny" que impide el tráfico excepto el de los servicios o puertos permitidos?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fourpointfive = $survey->sections()->create(['name' => '4.5 - Implementar y gestionar firewalls en los equipos de usuario']);
        
		$fourpointfive->questions()->create([
            'content' => '¿Estas configuraciones están documentadas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fourpointfive->questions()->create([
            'content' => '¿Utiliza la empresa configuraciones seguras como protocolos SSH y VPN para las conecciones?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fourpointsix = $survey->sections()->create(['name' => '4.6 - Gestionar de manera segura los activos y el software de la compañía']);
        
		$fourpointsix->questions()->create([
            'content' => '¿Estas configuraciones están documentadas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fourpointsix->questions()->create([
            'content' => '¿Su pagina institucional utiliza certificado?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fourpointseven = $survey->sections()->create(['name' => '4.7 - Gestionar las cuentas por defecto, dejandolas inhabilitadas']);
        
		$fourpointseven->questions()->create([
            'content' => '¿Estas configuraciones están documentadas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fourpointseven->questions()->create([
            'content' => '¿Utiliza la empresa configuraciones seguras como protocolos SSH y VPN para las conecciones?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fivepointone = $survey->sections()->create(['name' => '5.1 - Establecer y mantener un inventario de cuentas, tanto de usuario como de administrador']);
        
		$fivepointone->questions()->create([
            'content' => '¿Se cuenta con un inventario de cuentas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fivepointone->questions()->create([
            'content' => '¿Estas configuraciones están documentadas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fivepointone->questions()->create([
            'content' => '¿Con qué frecuencia se actualiza?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'TRIMESTRAL/SEMESTRAL', 'ANUALMENTE', 'OTROS']
        ]);
		
		$fivepointtwo = $survey->sections()->create(['name' => '5.2 - Utilización de contraseñas unicas']);
      		
		$fivepointtwo->questions()->create([
            'content' => '¿Estas configuraciones están documentadas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fivepointtwo->questions()->create([
            'content' => '¿Cuentan con segundo factor de autentificacion en las cuentas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fivepointtwo->questions()->create([
            'content' => '¿Las contraseñas utilizadas en la compañía tienen un minimo de 8 caracteres con+L39 2FA o 14 sin 2FA?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fivepointthree = $survey->sections()->create(['name' => '5.3 - Deshabilitar cuentas "durmientes"']);
        
		$fivepointthree->questions()->create([
            'content' => '¿Estas configuraciones están documentadas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fivepointthree->questions()->create([
            'content' => '¿Las cuentas sin uso o "durmientes" son desacticvadas despues de 45 días sin actividad?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
        ]);
		
		$fivepointfour = $survey->sections()->create(['name' => '5.4 - Restringir los accesos de administrador a las cuentas de administrador']);
        
		$fivepointfour->questions()->create([
            'content' => '¿Estas configuraciones están documentadas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fivepointfour->questions()->create([
            'content' => '¿Tienen todos los dispositivos de usuario configurada la cuenta administrador?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fivepointfour->questions()->create([
            'content' => 'El uso diario de los equipos ¿es realizado desde la cuenta de usuario solamente?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$fivepointfour->questions()->create([
            'content' => '¿Tienen los administradores de red una cuenta en todos los equipos?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
		
		$sixpointone = $survey->sections()->create(['name' => '6.1 - Establecer proceso de generación de usuario']);
      		
		$sixpointone->questions()->create([
            'content' => '¿Existe un proceso escrito de generación de cuenta ante una nueva contratación?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);

		$sixpointone->questions()->create([
            'content' => '¿Este proceso es automatizado?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);

		$sixpointone->questions()->create([
            'content' => '¿Se sigue este proceso también para cambios de rol de un usuario?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);

		$sixpointtwo = $survey->sections()->create(['name' => '6.2 - Establecer proceso de revocación de acceso']);
      		
		$sixpointtwo->questions()->create([
            'content' => '¿Existe un proceso escrito de generación de cuenta ante una nueva contratación?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);

		$sixpointtwo->questions()->create([
            'content' => '¿Este proceso es automatizado?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);

		$sixpointtwo->questions()->create([
            'content' => '¿Se sigue este proceso también para cambios de rol de un usuario?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);

		$sixpointthree = $survey->sections()->create(['name' => '6.3 - Requerir MFA para las aplicaciones externas o expuestas']);
      		
		$sixpointthree->questions()->create([
            'content' => '¿Existe esta configuración?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);

		$sixpointthree->questions()->create([
            'content' => '¿Está documentada?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);

		$sixpointfour = $survey->sections()->create(['name' => '6.4 - Requerir MFA para el acceso remoto a la red']);
      		
		$sixpointfour->questions()->create([
            'content' => '¿Existe esta configuración?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']	
		]);
        
		$sixpointfour->questions()->create([
            'content' => '¿Está documentada?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);

		$sixpointfive = $survey->sections()->create(['name' => '6.5 - Requerir MFA para cuentas de administración']);
      		
		$sixpointfive->questions()->create([
            'content' => '¿Existe esta configuración?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']			
		]);

		$sixpointfive->questions()->create([
            'content' => '¿Está documentada?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']	
		]);

		$sevenpointone = $survey->sections()->create(['name' => '7.1 - Establecer y mantener proceso de gestión de vulnerabilidades']);
      		
		$sevenpointone->questions()->create([
            'content' => '¿Existe un proceso escrito de gestión de vulnerabilidades de los dispositivos de la empresa?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);

		$sevenpointone->questions()->create([
            'content' => '¿Este proceso es automatizado?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);

		$sevenpointone->questions()->create([
            'content' => '¿Cada cuanto se revisa el proceso?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'MENSUALMENTE','SEMESTRALMENTE','ANUALMENTE']
		]);

		$sevenpointtwo = $survey->sections()->create(['name' => '7.2 - Establecer y mantener un proceso que incluya la estrategia de remediación de riesgos']);
              		
		$sevenpointtwo->questions()->create([
            'content' => '¿Existe un proceso escrito de gestión de vulnerabilidades de los dispositivos de la empresa?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);

		$sevenpointtwo->questions()->create([
            'content' => '¿Este proceso es automatizado?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);

		$sevenpointtwo->questions()->create([
            'content' => '¿Cada cuanto se revisa el proceso?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'MENSUALMENTE','SEMESTRALMENTE','ANUALMENTE']
		]);

		$sevenpointthree = $survey->sections()->create(['name' => '7.3 - Implemementar la gestión de parches del sistema operativo']);
      		
		$sevenpointthree->questions()->create([
            'content' => '¿Este proceso es automatizado?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);

		$sevenpointthree->questions()->create([
            'content' => '¿Se ha realizado esta implementacion?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);

		$sevenpointfour = $survey->sections()->create(['name' => '7.4 - Implemementar la gestión de parches de la aplicaciones']);
      		
		$sevenpointfour->questions()->create([
            'content' => '¿Este proceso es automatizado?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);

		$sevenpointfour->questions()->create([
            'content' => '¿Se ha realizado esta implementacion?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);

		$eightpointone = $survey->sections()->create(['name' => '8.1 - Establecer y mantener un proceso de gestión de logs de auditoria']);
      		
		$eightpointone->questions()->create([
            'content' => '¿Se ha realizado esta configuración?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);

		$eightpointone->questions()->create([
            'content' => '¿Existe un proceso escrito de gestión de logs de auditoria?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);

		$eightpointone->questions()->create([
            'content' => '¿Cada cuanto se revisa el proceso?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'MENSUALMENTE','SEMESTRALMENTE','ANUALMENTE']
		]);

		$eightpointtwo = $survey->sections()->create(['name' => '8.2 - Recopilar logs de auditoria']);

		$eightpointtwo->questions()->create([
            'content' => '¿Se ha realizado esta configuración?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);

		$eightpointthree = $survey->sections()->create(['name' => '8.3 - Asegurar un alojamiento adecuado para los logs']);

		$eightpointthree->questions()->create([
            'content' => '¿Se cumple este punto? ¿Cómo?',
            'rules' => ['required','min:1','max:255']
		]);

		$eightpointthree->questions()->create([
            'content' => '¿Se hacen backups de los logs?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);

		$ninepointone = $survey->sections()->create(['name' => '9.1 - Asegurar el uso de navegadores y correos con soporte']);
      		
		$ninepointone->questions()->create([
            'content' => '¿Se ha realizado esta configuración?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);

		$ninepointone->questions()->create([
            'content' => '¿Existe un proceso escrito?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);
        
		$ninepointone->questions()->create([
            'content' => '¿Cada cuanto se revisa el proceso?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'MENSUALMENTE','SEMESTRALMENTE','ANUALMENTE']
		]);
        	
		$ninepointtwo = $survey->sections()->create(['name' => '9.2 - Uso de servicios de filtro DNS']);

		$ninepointtwo->questions()->create([
            'content' => '¿Se ha realizado esta configuración?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);
        
		$ninepointtwo->questions()->create([
            'content' => '¿Existe un proceso escrito?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);
        
		$ninepointtwo->questions()->create([
            'content' => '¿Cada cuanto se revisa el proceso?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'MENSUALMENTE','SEMESTRALMENTE','ANUALMENTE']
		]);
        	
		$ninepointtwo->questions()->create([
            'content' => '¿Usa algun servicio de filtrado de DNS?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);
        	
		$tenpointone = $survey->sections()->create(['name' => '10.1 - Implementar y mantener un software Anti-Malware']);
      		
		$tenpointone->questions()->create([
            'content' => '¿Se ha realizado esta configuración?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);
        	
		$tenpointone->questions()->create([
            'content' => '¿Que Software ocupa la empresa?',
            'rules' => ['required','min:1','max:255']
		]);
        
		$tenpointone->questions()->create([
            'content' => '¿Existe un proceso escrito que detalle la configuracion?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);
        
		$tenpointone->questions()->create([
            'content' => '¿Cada cuanto se revisa el proceso?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'MENSUALMENTE','SEMESTRALMENTE','ANUALMENTE']
		]);
        	
		$tenpointone->questions()->create([
            'content' => '¿Tiene su software anti-malware un sistema centralizado de administracion?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);
        	
		$tenpointtwo = $survey->sections()->create(['name' => '10.2 - Configurar las actualizaciones automáticas del software Anti-Malware']);
      		
		$tenpointtwo->questions()->create([
            'content' => '¿Se ha realizado esta configuración?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);
        			
		$tenpointtwo->questions()->create([
            'content' => '¿Existe un proceso escrito que detalle la configuracion?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);
        
		$tenpointtwo->questions()->create([
            'content' => '¿Cada cuanto se revisa el proceso?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'MENSUALMENTE','SEMESTRALMENTE','ANUALMENTE']
		]);
        	
		$tenpointthree = $survey->sections()->create(['name' => '10.3 - Deshabilitar el auto-run o auto play para dispositivos usb ']);
      		
		$tenpointthree->questions()->create([
            'content' => '¿Se ha realizado esta configuración?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);
        			
		$tenpointthree->questions()->create([
            'content' => '¿Existe un proceso escrito que detalle la configuracion?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);
        
		$tenpointthree->questions()->create([
            'content' => '¿Cada cuanto se revisa el proceso?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'MENSUALMENTE','SEMESTRALMENTE','ANUALMENTE']
		]);
        	
		$elevenpointone = $survey->sections()->create(['name' => '11.1 - Establecer y mantener un proceso de recuperación de información ante desastres']);
      		
		$elevenpointone->questions()->create([
            'content' => '¿Cuentan con un proceso de recuperación ante desastres escrito?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
        
		$elevenpointone->questions()->create([
            'content' => '¿Los respaldos son automatizados?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);
        	
		$elevenpointone->questions()->create([
            'content' => '¿Cada cuanto se realizan respaldos?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['CONTINUAMENTE', 'DIARIAMENTE','SEMANALMENTE','MENSUALMENTE','OTRO']
		]);
        	
		$elevenpointtwo = $survey->sections()->create(['name' => '11.2 - Realizar Backups automatizados']);
      		
		$elevenpointtwo->questions()->create([
            'content' => '¿Cuentan con respaldo en todas las maquinas?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);
        	
		$elevenpointtwo->questions()->create([
            'content' => '¿Que software ocupa la empresa?',
            'rules' => ['required','min:1','max:255']
        ]);
        
			
		$elevenpointtwo->questions()->create([
            'content' => '¿Los respaldos están protegidos en su proceso y en destino? ¿cómo?',
            'rules' => ['required','min:1','max:255']
		]);
        	
		$elevenpointthree = $survey->sections()->create(['name' => '11.3 - Proteger los backups']);
			
		$elevenpointthree->questions()->create([
            'content' => '¿Los respaldos están protegidos en su proceso y en destino? ¿cómo?',
            'rules' => ['required','min:1','max:255']
		]);
        	
		$elevenpointfour = $survey->sections()->create(['name' => '11.4 - Establecer y mantener una instancia "aislada" donde depositar el respaldo']);
			
		$elevenpointfour->questions()->create([
            'content' => '¿Existe una destinación del respaldo que no esté conectada a la red / esté en la nube / o se encuentre en una ubicación distinta a la de la empresa?',
            'rules' => ['required','min:1','max:255']
		]);
        	
		$twelvepointone = $survey->sections()->create(['name' => '12.1 - Asegurar que la insfraestrucutura de red está actualizada']);
      		
		$twelvepointone->questions()->create([
            'content' => '¿Cuentan con este punto?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);
        		
		$twelvepointone->questions()->create([
            'content' => '¿Esta documentado?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
        ]);
        	
		$fourteenpointone = $survey->sections()->create(['name' => '14.1 - Establecer y mantener un programa de concientización']);
      		
		$fourteenpointone->questions()->create([
            'content' => '¿Se cuenta con un programa de concientización o capacitación en ciberseguridad?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);
        	
		$fourteenpointone->questions()->create([
            'content' => '¿Está documentado?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
		]);
        	
		$fourteenpointone->questions()->create([
            'content' => '¿Se rigen por un programa/plan externo o es realizado internamente?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['Externo', 'Interno']
        ]);
        
		$fourteenpointone->questions()->create([
            'content' => 'En caso de ser un programa o proveedor externo ¿Cuál?',
            'rules' => ['required','min:1','max:255']
        ]);
        
		$fourteenpointtwo = $survey->sections()->create(['name' => '14.2 - Entrenar a los empleados para reconocer los ataques de ingenieria social ']);
      		
		$fourteenpointtwo->questions()->create([
            'content' => '¿El programa incluye este punto?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']	
        ]);
        
		$fourteenpointthree = $survey->sections()->create(['name' => '14.3 - Entrenar a los empleados en las mejores prácticas en autenticación']);
      		
		$fourteenpointthree->questions()->create([
            'content' => '¿El programa incluye este punto?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
        
		$fourteenpointfour = $survey->sections()->create(['name' => '14.4 - Entrenar a los empleados en mejores prácticas en manejo de información sensible']);
      		
		$fourteenpointfour->questions()->create([
            'content' => '¿El programa incluye este punto?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
        
		$fourteenpointfive = $survey->sections()->create(['name' => '14.5 - Entrenar a los empleados en causas de exposición involuntaria de información']);
      		
		$fourteenpointfive->questions()->create([
            'content' => '¿El programa incluye este punto?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
        
		$fourteenpointsix = $survey->sections()->create(['name' => '14.6 - Entrenar a los empleados para reconocer y reportar los incidentes que afectan a la seguridad']);
      		
		$fourteenpointsix->questions()->create([
            'content' => '¿El programa incluye este punto?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']
        ]);
        
		$fourteenpointseven = $survey->sections()->create(['name' => '14.7 - Entrenar a los empleados para identificar si sus activos requieren actualizaciones de seguridad, y cómo reportarlo']);
      		
		$fourteenpointseven->questions()->create([
            'content' => '¿El programa incluye este punto?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']	
        ]);
        
		$fourteenpointteight = $survey->sections()->create(['name' => '14.8 - Entrenar a los empleados en los riesgos de conectarse o transmitir información en redes no seguras']);
      		
		$fourteenpointteight->questions()->create([
            'content' => '¿El programa incluye este punto?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO']	
        ]);
        
		$fifteenteenpointone = $survey->sections()->create(['name' => '15.1 - Establecer y mantener un inventario de los proveedores de servicio']);
      		
		$fifteenteenpointone->questions()->create([
            'content' => '¿Cuentan con un inventario de proveedores de servicio?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);
        	
		$fifteenteenpointone->questions()->create([
            'content' => '¿Está documentado?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']		
		]);
        	
		$seventeenteenpointone = $survey->sections()->create(['name' => '17.1 - Designar personal para gestionar los incidentes de seguridad']);
      		
		$seventeenteenpointone->questions()->create([
            'content' => '¿Cuentan con personal designado?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']
		]);
        	
		$seventeenteenpointone->questions()->create([
            'content' => '¿Es conocido por toda la organización?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']	
        ]);
        
		$seventeenteenpointtwo = $survey->sections()->create(['name' => '17.2 - Establecer y mantener la información de contacto para poder reportar incidentes de seguridad']);
      		
		$seventeenteenpointtwo->questions()->create([
            'content' => '¿Cuenta toda la organización con esta información?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']		
        ]);
        
		$seventeenteenpointthree = $survey->sections()->create(['name' => '17.3 - Establecer y mantener el proceso para el reporte de incidentes']);
      		
		$seventeenteenpointthree->questions()->create([
            'content' => '¿Se cuenta con un procedimiento escrito que relate este punto?',
			'type' => 'radio',
            'rules' => ['required'],
            'options' => ['SI', 'NO','OTRO']				
			
        ]);
		
		
    }
}
