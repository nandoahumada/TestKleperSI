@extends('layouts.master')

@section('content')

<div class="container m-sm-5">
<div class="container">
    <div class="container">
      <h5 class="card-title">Cyber Risk Assessment</h5>
      <p class="card-text"> Bienvenidos a ONION 3! ¡La más innovadora solución de administración de ciber riesgo en tu ecosistema de negocios! 

        <p class="card-text">En el presente assessment será denominado como Proveedor quien responda las preguntas aquí contenidas con el objeto de evaluar sus ciber defensas, 
        determinar el grado vulnerabilidad de la empresa y compromiso de afección del ecosistema de negocios frente a ciberataques.</p>
        
        <p class="card-text">  Se denominará Master Client a quien requirió del Proveedor la contratación y ejecución del assessment, y, por su parte, 
        la empresa Kepler será la encargada de recibir y analizar las respuestas del Proveedor y entregar los resultados correspondientes.  </p>
        
        <p class="card-text">  Este assessment se realiza de acuerdo con los controles establecidos por la CIS (Center for Internet Security), 
        una de las comunidades de ciberseguridad más respetadas y reconocidas del mundo y adecuados por la empresa Kepler, la que cuenta con 20 años de trayectoria y 
        está altamente comprometida con la innovación en ciberseguridad.  </p>

        <p class="card-text">  Los resultados de este assessment serán procesados por Kepler con el fin de entregar un estado actual de defensas, 
        capacidad de respuesta y vulnerabilidades del Proveedor evaluado.  </p>

        <p class="card-text">  La información resultante deeste assesstment generará, por parte de Kepler, un reporte de riesgo cibernético, 
        que permitirá la gestión y administración del riesgo en la empresa del Proveedor y ecosistema de negocios.</p>
</p>
    </div>
    <ul class="list-group list-group-flush">
        <p class="card-text"> Consideraciones importantes:</p>
      <p class="card-text">1.	Este assesstment contiene preguntas relacionadas con los ámbitos técnicos de hardware y software de la empresa del Proveedor  
        destinados a la ciberseguridad. Dichas  preguntas, están basadas en los 18 controles de la CIS, divididos en 3 grupos y enfocados en IG1 (Implementation Group 1).</p>
      <p class="card-text">2.	Las preguntas deberán ser respondidas por la o las personas designadas por el Proveedor y que posean el conocimiento técnico para 
        responderlas. Si por cualquier motivo o circunstancia la o las personas designadas no pudieran  responder  alguna de las preguntas contenidas en el assessment, el 
        Proveedor podrá contactar  a Kepler  para solicitar el apoyo requerido.</p>
      <p class="card-text">3.  El contenido de las respuestas de este assessment tendrán  el  carácter de confidencial y no será divulgado ni compartido con terceros.
        Sin perjuicio de lo anterior, la información de clasificación y puntajes obtenidos de la realización del assessment podrán ser compartidas 
        con el Master Client, sin necesidad de autorización por parte del Proveedor. La divulgación de la información tiene por objeto el establecimiento de criterios 
        generales de protección del ecosistema de negocios y planes de mejora por parte del Proveedor.</p>
      <p class="card-text">4.	Con el fin de mejorar el ecosistema nacional y la concientización en ciberseguridad, los datos recogidos a través de la página web 
        podrán ser conservados y tratados con fines estadísticos, siempre y cuando sea imposible la identificación de sus titulares. Los datos recabados a 
        través del medio web no se comunicarán a terceros, salvo que:</p>
      <p class="card-text">4-A.	Dicha comunicación sea necesaria para la prestación del servicio solicitado, y siempre que ese tercero cumpla con las garantías 
        necesarias sobre protección de datos.</p>
      <p class="card-text">4-B.	Se trate de datos estadísticos, agregados y anónimos donde no sea posible la identificación directa o indirecta de los 
        titulares de dichos datos.</p>
      <p class="card-text">4-C.	Se realice en cumplimiento de un mandato legal o un requerimiento judicial o en los casos en que sea 
        necesario para garantizar la seguridad nacional o el interés público.</p>
      <p class="card-text">5.  El tiempo de respuesta es de aproximadamente 100 minutos y deberá ser contestado de una sola vez. Tenga en consideración que este 
        formulario no almacena las respuestas en ningún momento, sólo las envía a una base de datos segura una vez contestado completo y 
        enviado por el Proveedor al pulsar el botón ENVIAR.</p>
      <p class="card-text">¡Éxito en tu assesstment de ciber riesgo y gracias por confiar en nosotros!</p>
          
    <p class="card-text">•	Si no puedes o no tienes el tiempo de contestar este Cyber Risk Assessment, podemos hacerlo por ti. Enviaremos un ingeniero especialista en 
      ciberseguridad para realizar un assessment (el cual tendrá un costo adicional) Recuerda además que debes siempre contar con un EDR, Firewall y políticas de parchado 
      continuo. Si necesitas ayuda con esto, puedes ponerte en contacto con nosotros escribiendo a 
      nuestro <a href="mailto:redteam@kepler.cl" target="_blank" class="btn btn-primary">REDTEAM</a></p>
      <p class="card-text">Equipo ONION 3 </p> 
      
      <p class="card-text">Haciendo click en el boton Iniciar, se darán por leídos y aceptados los términos y condiciones descritos”</p>

     
</ul>
  </div>
</div>
    


        
        <div class="col-auto m-5">
            <a class="btn btn-primary m-5" href="startsurvey" role="button">Iniciar</a>
        </div>

    </div>
    </form>

@endsection