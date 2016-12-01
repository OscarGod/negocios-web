<? Php

$ Host = "localhost";
$ Port = 3306;
$ Socket = "";
$ User = "root";
$ Password = "";
$ Dbname = "login";

$ Con = new mysqli ($ host, $ usuario, $ password, $ nombredb, el puerto $, $ socket)
    or die ( "No se pudo conectar con el servidor de base de datos 'mysqli_connect_error ().);

// $ Con-> close ();

$ Query = "SELECT actor_id, nombre, apellido, last_update
          del actor
          DONDE last_update>? ";
$ Last_update = '';

$ Stmt-> bind_param ( 's', $ last_update);

if ($ stmt = $ con-> prepare ($ consulta)) {

    $ Stmt-> execute ();
    $ Stmt-> bind_result ($ actor_id, $ nombre apellido, apellidos $, $ last_update);

    while ($ stmt-> fetch ()) {
        // Printf ( "% s,% s,% s,% s \ n",
        // $ Actor_id, $ nombre apellido, apellidos $, $ last_update);
    }

    $ Stmt-> close ();
}

?>
