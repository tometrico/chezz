
<?php 
include 'CARGA_INICIAL2.php';
//IMAGINAR_JUGADAS();
//ALMACENAR();
ECHO "<br> ANALISIS DE DATOS ";
set_time_limit(3600);//ESTA LINEA DE CODIGO SE AGREGO EL 18-06-2025 ESTE COMANDO VARIA EL LIMITE DE TIEMPO DE EJECUCION DEL PROGRAMA
//SE RECOMIENDA TAMBIEN MODIFICAR EN EL ARCHIVO PHP.INI MAX_EJECUTION_TIME=
//TAMBIEN MODIFICAR EL ARCHIVO HTACCESS PHP_VALUE MAX_EXECUTION_TIME

/****************ESTE FRAGMENTO DE CODIGO SE IMPLEMENTO EL DIA JUEVES 05-06-2025******************************* */
/****************SU FUNCION ES LA DE ABRIR LA BASE DE DATOS CORRESPONDIENTE AL JUEGO DE AJEDRES */
$servidor="localhost"; /********SERVIDOR LOCAL* */
$usuario="root";/*USUARIO*/
$clave="";/**NO SE HA ESTABLECIDO CONTRASEÑA POR AHORA*/
$baseDeDatos="AJEDRES";/****NOMBRE DE LA BASE DE DATOS ALOJADA EN EL SERVIDOR */
$enlace = new mysqli($servidor, $usuario, $clave, $baseDeDatos);/***CREA LA CONEXION A LA BASE DE DATOS */
if(!$enlace) /****SI EXISTE UN ERROR AL CONECTAR MUESTRA UN MENSAJE  */
{
    echo"Error en la conexion con el servidor";			
}
/*******************FIN DE LAS LINEAS QUE ABREN LA BASE DE DATOS***************************** */

/************************************************************************* */
STATIC $PAS0=0;
$TEMPORAL=1;
$TURNO=1;
$VISTA=2;
$FISICA=0;
$PISO=0;
$INICIO=0;
$SEGUIR=0;
$TABULADOR=3;
$ALMA="";

INICIO:
echo "<br> tabulador=".$TABULADOR;

$consultaTotal = "SELECT COUNT(*) AS total FROM TABLERO"; 
$ejecutarTotal = mysqli_query($enlace, $consultaTotal); 
$filaTotal = mysqli_fetch_array($ejecutarTotal); 
$totalRegistros = $filaTotal['total']; 

$consultaElementos = "SELECT * FROM TABLERO"; 
$ejecutarElementos = mysqli_query($enlace, $consultaElementos); 

echo " <br>Total de registros en TABLERO: " . $totalRegistros . "<br>";
//$PAGINADO=$consultaTotal;
//ECHO "TENGO UN TOTAL DE REGISTROS:".$PAGINADO ;


while ($fila = mysqli_fetch_array($ejecutarElementos)) 
{
    if ($fila['RELACION_UNIVERSO']==0) 
    {
        # code...

        // Conexión a la base de datos
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "AJEDRES";/****NOMBRE DE LA BASE DE DATOS ALOJADA EN EL SERVIDOR */
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Verificar conexión
                    if ($conn->connect_error) {
                        die("Conexión fallida: " . $conn->connect_error);
                    }

                    $sql = "UPDATE TABLERO SET RELACION_UNIVERSO = 1 WHERE TABLERO_ID = $fila[0]";

                    if ($conn->query($sql) === TRUE) {
                        echo "Registro actualizado correctamente.";
                    } else {
                    echo "Error al actualizar el registro: " . $conexion->error;
                    }
                   // $conn->close();


                    POSTEAR_PIEZAS();
                    echo "ID: " . $fila['TABLERO_ID'] . " - Nombre: " . $fila[1] . " - Descripción: " . $fila[2] . "<br>";
                    echo "TORRE 1A =". $fila[3];
                    echo "CABALLO 1A =". $fila[4];
                    echo "ALFIL 1A =". $fila[5];
                    echo "REY 1A =". $fila[6] ;
                    echo "REINA 1A =". $fila[7] ;
                    echo "ALFIL 2A =". $fila[8] ;
                    echo "CABALLO 2A =". $fila[9] ;
                    echo "TORRE 2A =". $fila[10] ;
                    echo "PEON 1A =". $fila[11] ;
                    echo "PEON 2A =". $fila[12] ;
                    echo "PEON 3A =". $fila[13] ;
                    echo "PEON 4A =". $fila[14] ;
                    echo "PEON 5A =". $fila[15] ;
                    echo "PEON 6A =". $fila[16] ;
                    echo "PEON 7A =". $fila[17] ;
                    echo "PEON 8A =". $fila[18] ;
                    echo "TORRE 1B =". $fila[19] ;
                    echo "CABALLO 1B =". $fila[20] ;
                    echo "ALFIL 1B =". $fila[21] ;
                    echo "REY 1B =". $fila[22] ;
                    echo "REINA 1B =". $fila[23] ;
                    echo "TORRE 2B =". $fila[24] ;
                    echo "CABALLO 2B =". $fila[25] ;
                    echo "ALFIL 2B =". $fila[26] ;
                    echo "PEON 1B =". $fila[27] ;
                    echo "PEON 2B =". $fila[28] ;
                    echo "PEON 3B =". $fila[29] ;
                    echo "PEON 4B =". $fila[30] ;
                    echo "PEON 5B =". $fila[31] ;
                    echo "PEON 6B =". $fila[32] ;
                    echo "PEON 7B =". $fila[33] ;
                    echo "PEON 8B =". $fila[34] ;
                    echo "turno =". $fila[35] . "<br>";

                    $TURNO=$fila[35];
                    for($i=3;$i<=35;$i++)
                    {
                    $PUENTE[$i-2]=$fila[$i]; 
                    }

                $IDENTIDAD=$fila[2];
                /*************EN ESTE PUNTO SE EMPIEZA A REALIZAR LAS ITERACIONES******************************* */
                CARGAR();
                IMAGINAR_JUGADAS();
                ALMACENAR();

    }
}
//se procede a realizar lectura de cada elemento de la base de  datos 
//como ya se tiene ese valor calculado en $totalregistros
        for($estudio=1;$estudio<=$totalRegistros;$estudio++)
        {
        echo "analizando a :".$estudio;            
        } 
        
/**** *
CARGAR();
IMAGINAR_JUGADAS();
ALMACENAR();
**/
function CARGAR()
{
global $MATRIZ;
global $PUENTE;    
global $NOMBRE;
global $IDENTIDAD;
global $TURNO;

ECHO "GRABADO ".$IDENTIDAD;

for($i=1;$i<=32;$i++)
{
    $MATRIZ[$i][2]=$PUENTE[$i]; 
}


}

function GRABAR_BASE_DATOS(&$ALMA)
{
//global $ALMA;    
global $POSTEAR;
global $enlace;
global $TURNO;
ECHO "<br> SE VA A VERIFICAR SI EL NOMBRE (".$ALMA. ")GENERADO EN ALMA ESTA EN LA BASE DE DATOS";
ECHO "<br>________________________________________________________________________________________";

// Conexión a la base de datos
/**/ 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AJEDRES";//NOMBRE DE LA BASE DE DATOS ALOJADA EN EL SERVIDOR //
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexión
if ($conn->connect_error) 
{
    die("Conexión fallida: " . $conn->connect_error);
}
/**/

/*
// Nombre a buscar
$nombre = $ALMA;
// Consulta para verificar si el registro existe
$sql = "SELECT * FROM TABLERO WHERE UNIVERSO = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nombre ,$POSTEAR[1],$POSTEAR[2],$POSTEAR[3],$POSTEAR[4],$POSTEAR[5],$POSTEAR[6],$POSTEAR[7],$POSTEAR[8],$POSTEAR[9],$POSTEAR[10],$POSTEAR[11],$POSTEAR[12],$POSTEAR[13],$POSTEAR[14],$POSTEAR[15],$POSTEAR[16],$POSTEAR[17],$POSTEAR[18],$POSTEAR[19],$POSTEAR[20],$POSTEAR[21],$POSTEAR[22],$POSTEAR[23],$POSTEAR[24],$POSTEAR[25],$POSTEAR[26],$POSTEAR[27],$POSTEAR[28],$POSTEAR[29],$POSTEAR[30],$POSTEAR[31],$POSTEAR[32]);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "El registro ya existe.";
} 

else {
    // Insertar el nuevo registro si no existe
    $sql_insert = "INSERT INTO TABLERO (UNIVERSO,TORRE_1A,CABALLO_1A,ALFIL_1A,REY_1A,REINA_1A,ALFIL_2A,CABALLO_2A,TORRE_2A,PEON_1A,PEON_2A,PEON_3A,PEON_4A,PEON_5A,PEON_6A,PEON_7A,PEON_8A,TORRE_1B,CABALLO_1B,ALFIL_1B,REY_1B,REINA_1B,ALFIL_2B,CABALLO_2B,TORRE_2B,PEON_1B,PEON_2B,PEON_3B,PEON_4B,PEON_5B,PEON_6B,PEON_7B,PEON_8B) VALUES (?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("s", $nombre,$POSTEAR[1],$POSTEAR[2],$POSTEAR[3],$POSTEAR[4],$POSTEAR[5],$POSTEAR[6],$POSTEAR[7],$POSTEAR[8],$POSTEAR[9],$POSTEAR[10],$POSTEAR[11],$POSTEAR[12],$POSTEAR[13],$POSTEAR[14],$POSTEAR[15],$POSTEAR[16],$POSTEAR[17],$POSTEAR[18],$POSTEAR[19],$POSTEAR[20],$POSTEAR[21],$POSTEAR[22],$POSTEAR[23],$POSTEAR[24],$POSTEAR[25],$POSTEAR[26],$POSTEAR[27],$POSTEAR[28],$POSTEAR[29],$POSTEAR[30],$POSTEAR[31],$POSTEAR[32]);
    
    if ($stmt_insert->execute()) {
        echo "Registro creado exitosamente.";
    } else {
        echo "Error al crear el registro: " . $stmt_insert->error;
    }
}

// Cerrar conexión
$stmt->close();
$stmt_insert->close();
$conn->close();
return $ALMA;
*/
// Nombre a buscar
$nombre = $ALMA;
// Consulta para verificar si el registro existe
$sql = "SELECT * FROM TABLERO WHERE UNIVERSO = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nombre);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) 
{
    echo "El registro ya existe.";
} 

else {
    // Insertar el nuevo registro si no existe
    //$insertarDatos = "INSERT INTO TABLERO (UNIVERSO,TORRE_1A,CABALLO_1A,ALFIL_1A,REY_1A,REINA_1A,ALFIL_2A,CABALLO_2A,TORRE_2A,PEON_1A,PEON_2A,PEON_3A,PEON_4A,PEON_5A,PEON_6A,PEON_7A,PEON_8A,TORRE_1B,CABALLO_1B,ALFIL_1B,REY_1B,REINA_1B,ALFIL_2B,CABALLO_2B,TORRE_2B,PEON_1B,PEON_2B,PEON_3B,PEON_4B,PEON_5B,PEON_6B,PEON_7B,PEON_8B) VALUES($nombre ,$POSTEAR[1],$POSTEAR[2],$POSTEAR[3],$POSTEAR[4],$POSTEAR[5],$POSTEAR[6],$POSTEAR[7],$POSTEAR[8],$POSTEAR[9],$POSTEAR[10],$POSTEAR[11],$POSTEAR[12],$POSTEAR[13],$POSTEAR[14],$POSTEAR[15],$POSTEAR[16],$POSTEAR[17],$POSTEAR[18],$POSTEAR[19],$POSTEAR[20],$POSTEAR[21],$POSTEAR[22],$POSTEAR[23],$POSTEAR[24],$POSTEAR[25],$POSTEAR[26],$POSTEAR[27],$POSTEAR[28],$POSTEAR[29],$POSTEAR[30],$POSTEAR[31],$POSTEAR[32])";
	//$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    //$sql_insert = "INSERT INTO TABLERO (UNIVERSO,TORRE_1A,CABALLO_1A,ALFIL_1A,REY_1A,REINA_1A,ALFIL_2A,CABALLO_2A,TORRE_2A,PEON_1A,PEON_2A,PEON_3A,PEON_4A,PEON_5A,PEON_6A,PEON_7A,PEON_8A,TORRE_1B,CABALLO_1B,ALFIL_1B,REY_1B,REINA_1B,ALFIL_2B,CABALLO_2B,TORRE_2B,PEON_1B,PEON_2B,PEON_3B,PEON_4B,PEON_5B,PEON_6B,PEON_7B,PEON_8B) VALUES ($nombre ,$POSTEAR[1],$POSTEAR[2],$POSTEAR[3],$POSTEAR[4],$POSTEAR[5],$POSTEAR[6],$POSTEAR[7],$POSTEAR[8],$POSTEAR[9],$POSTEAR[10],$POSTEAR[11],$POSTEAR[12],$POSTEAR[13],$POSTEAR[14],$POSTEAR[15],$POSTEAR[16],$POSTEAR[17],$POSTEAR[18],$POSTEAR[19],$POSTEAR[20],$POSTEAR[21],$POSTEAR[22],$POSTEAR[23],$POSTEAR[24],$POSTEAR[25],$POSTEAR[26],$POSTEAR[27],$POSTEAR[28],$POSTEAR[29],$POSTEAR[30],$POSTEAR[31],$POSTEAR[32])";
    //$stmt_insert = $conn->prepare($sql_insert);
    //$stmt_insert->bind_param("s", $nombre,$POSTEAR[1],$POSTEAR[2],$POSTEAR[3],$POSTEAR[4],$POSTEAR[5],$POSTEAR[6],$POSTEAR[7],$POSTEAR[8],$POSTEAR[9],$POSTEAR[10],$POSTEAR[11],$POSTEAR[12],$POSTEAR[13],$POSTEAR[14],$POSTEAR[15],$POSTEAR[16],$POSTEAR[17],$POSTEAR[18],$POSTEAR[19],$POSTEAR[20],$POSTEAR[21],$POSTEAR[22],$POSTEAR[23],$POSTEAR[24],$POSTEAR[25],$POSTEAR[26],$POSTEAR[27],$POSTEAR[28],$POSTEAR[29],$POSTEAR[30],$POSTEAR[31],$POSTEAR[32]);
if ($TURNO==1) 
{
    # code...
    $CONF=2;
}

if ($TURNO==2) 
{
    # code...
    $CONF=1;
}




    $sql_insert = "INSERT INTO TABLERO (UNIVERSO, TORRE_1A, CABALLO_1A, ALFIL_1A, REY_1A, REINA_1A, ALFIL_2A, CABALLO_2A, TORRE_2A, PEON_1A, PEON_2A, PEON_3A, PEON_4A, PEON_5A, PEON_6A, PEON_7A, PEON_8A, TORRE_1B, CABALLO_1B, ALFIL_1B, REY_1B, REINA_1B, ALFIL_2B, CABALLO_2B, TORRE_2B, PEON_1B, PEON_2B, PEON_3B, PEON_4B, PEON_5B, PEON_6B, PEON_7B, PEON_8B,RELACION_UNIVERSO,turno ) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


$TORRE_1A=$POSTEAR[2];
ECHO "<br> definicion de torre ".$TORRE_1A."<br>" ;
$pin=0;
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("siiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii",$nombre, $POSTEAR[3], $POSTEAR[4], $POSTEAR[5], $POSTEAR[6], $POSTEAR[7], $POSTEAR[8], $POSTEAR[9], $POSTEAR[10], $POSTEAR[11], $POSTEAR[12], $POSTEAR[13], $POSTEAR[14], $POSTEAR[15], $POSTEAR[16], $POSTEAR[17], $POSTEAR[18], $POSTEAR[19], $POSTEAR[20], $POSTEAR[21], $POSTEAR[22], $POSTEAR[23], $POSTEAR[24], $POSTEAR[25], $POSTEAR[26], $POSTEAR[27], $POSTEAR[28], $POSTEAR[29], $POSTEAR[30], $POSTEAR[31], $POSTEAR[32], $POSTEAR[33], $POSTEAR[34],$pin,$CONF);
    
    if ($stmt_insert->execute()) {
        echo "Registro creado exitosamente.";
    } 
    else {
        echo "Error al crear el registro: " . $stmt_insert->error;
    }

// Cerrar conexión
$stmt->close();
$stmt_insert->close();
$conn->close();

}

return $ALMA;

}


function POSTEAR_PIEZAS()
{
global $POSTEAR;
global $fila;

    for ($H=1; $H <=34 ; $H++) { 
        # code...
        $POSTEAR[$H]=$fila[$H];
    }
    
}


function ALMACENAR()
{
global $MATRIZ;
global $POSTEAR;
echo "EN ESTE PUNTO SE VA A MOSTRAR LAS POSIBLES COMBINACIONES EN MATRIZ";

$SERIE=0;
$NUEVA_POSICION=0;
for($i=1;$i<=32;$i++)
{
    if($MATRIZ[$i][7]>0)
    {
        echo "<br>hay posibilidades de L1 con ".$MATRIZ[$i][7]."movimientos posibles";
        $SERIE++;
        $PROCESO=$MATRIZ[$i][7];
        for ($L=1; $L <=$PROCESO ; $L++)
         { 
            echo"<br>_________________________________________________________________";
            echo "<br>moviendo PIEZA--".$MATRIZ[$i][1]."--desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]+(8*$L);
            $NUEVA_POSICION=$POSTEAR[$i+2]+(8*$L);
            $POSTEAR[$i+2]=$NUEVA_POSICION;//cambridge
            ECHO "<br> APELLIDO=".$POSTEAR [2];
            $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
            ECHO "<br> nombre=".$ALMA;
            echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
            GRABAR_BASE_DATOS($ALMA);
            POSTEAR_PIEZAS();
        }
    }

    if($MATRIZ[$i][8]>0)
    {
        echo "<br>hay posibilidades de L2 con ".$MATRIZ[$i][8]."movimientos posibles";
        $SERIE++;
        $PROCESO=$MATRIZ[$i][8];
        for ($L=1; $L <=$PROCESO ; $L++)
         { 
            echo"<br>_________________________________________________________________";
            echo "<br>moviendo PIEZA--".$MATRIZ[$i][1]."--desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]-(8*$L);
            $NUEVA_POSICION=$POSTEAR[$i+2]-(8*$L);
            $POSTEAR[$i+2]=$NUEVA_POSICION;
            ECHO "<br> APELLIDO=".$POSTEAR[2];
            $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
            ECHO "<br> nombre=".$ALMA;
            echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
            GRABAR_BASE_DATOS($ALMA);
            POSTEAR_PIEZAS();
        }
    }

    if($MATRIZ[$i][9]>0)
    {
        echo "<br>hay posibilidades de L3 con ".$MATRIZ[$i][9]."movimientos posibles";
        $SERIE++;

        $PROCESO=$MATRIZ[$i][9];
        for ($L=1; $L <=$PROCESO ; $L++)
         { 
            echo"<br>_________________________________________________________________";
            echo "<br>moviendo PIEZA--".$MATRIZ[$i][1]."--desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]+($L);
            $NUEVA_POSICION=$POSTEAR[$i+2]+($L);
            $POSTEAR[$i+2]=$NUEVA_POSICION;
            ECHO "<br> APELLIDO=".$POSTEAR[2];
            $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
            ECHO "<br> nombre=".$ALMA;
            echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
            GRABAR_BASE_DATOS($ALMA);
            POSTEAR_PIEZAS();
        }
    }

    if($MATRIZ[$i][10]>0)
    {
        echo "<br>hay posibilidades de L3 con ".$MATRIZ[$i][10]."movimientos posibles";
        $SERIE++;
        $PROCESO=$MATRIZ[$i][10];
        for ($L=1; $L <=$PROCESO ; $L++)
         { 
            echo"<br>_________________________________________________________________";
            echo "<br>moviendo PIEZA--".$MATRIZ[$i][1]."--desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]-($L);
            $NUEVA_POSICION=$POSTEAR[$i+2]-($L);
            $POSTEAR[$i+2]=$NUEVA_POSICION;
            ECHO "<br> APELLIDO=".$POSTEAR[2];
            $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
            ECHO "<br> nombre=".$ALMA;
            echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
            GRABAR_BASE_DATOS($ALMA);
            POSTEAR_PIEZAS();
        }
    }

    if($MATRIZ[$i][11]>0)
    {
        echo "<br>hay posibilidades de L3 con ".$MATRIZ[$i][11]."movimientos posibles";
        $SERIE++;
        $PROCESO=$MATRIZ[$i][11];
        for ($L=1; $L <=$PROCESO ; $L++)
         { 
            echo"<br>_________________________________________________________________";
            echo "<br>moviendo PIEZA--".$MATRIZ[$i][1]."--desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]+(9*$L);
            $NUEVA_POSICION=$POSTEAR[$i+2]+(9*$L);
            $POSTEAR[$i+2]=$NUEVA_POSICION;
            ECHO "<br> APELLIDO=".$POSTEAR[2];
            $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
            ECHO "<br> nombre=".$ALMA;
            echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
            GRABAR_BASE_DATOS($ALMA);
            POSTEAR_PIEZAS();
        }
    }


    if($MATRIZ[$i][12]>0)
    {
        echo "<br>hay posibilidades de L3 con ".$MATRIZ[$i][12]."movimientos posibles";
        $SERIE++;
        $PROCESO=$MATRIZ[$i][12];
        for ($L=1; $L <=$PROCESO ; $L++)
         { 
            echo"<br>_________________________________________________________________";
            echo "<br>moviendo PIEZA--".$MATRIZ[$i][1]."--desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]-(9*$L);
            $NUEVA_POSICION=$POSTEAR[$i+2]-(9*$L);
            $POSTEAR[$i+2]=$NUEVA_POSICION;
            ECHO "<br> APELLIDO=".$POSTEAR[2];
            $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
            ECHO "<br> nombre=".$ALMA;
            echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
            GRABAR_BASE_DATOS($ALMA);
            POSTEAR_PIEZAS();
        }

    }

    if($MATRIZ[$i][13]>0)
    {
        echo "<br>hay posibilidades de L3 con ".$MATRIZ[$i][13]."movimientos posibles";
        $SERIE++;
        $PROCESO=$MATRIZ[$i][13];
        for ($L=1; $L <=$PROCESO ; $L++)
         { 
            echo"<br>_________________________________________________________________";
            echo "<br>moviendo PIEZA--".$MATRIZ[$i][1]."--desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]+(7*$L);
            $NUEVA_POSICION=$POSTEAR[$i+2]+(7*$L);
            $POSTEAR[$i+2]=$NUEVA_POSICION;
            ECHO "<br> APELLIDO=".$POSTEAR[2];
            $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
            ECHO "<br> nombre=".$ALMA;
            echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
            GRABAR_BASE_DATOS($ALMA);
            POSTEAR_PIEZAS();
        }
    }


    if($MATRIZ[$i][14]>0)
    {
        echo "<br>hay posibilidades de L3 con ".$MATRIZ[$i][14]."movimientos posibles";
        $SERIE++;
        $PROCESO=$MATRIZ[$i][14];
        for ($L=1; $L <=$PROCESO ; $L++)
         { 
            echo"<br>_________________________________________________________________";
            echo "<br>moviendo PIEZA--".$MATRIZ[$i][1]."--desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]-(7*$L);
            $NUEVA_POSICION=$POSTEAR[$i+2]-(7*$L);
            $POSTEAR[$i+2]=$NUEVA_POSICION;
            ECHO "<br> APELLIDO=".$POSTEAR[2];
            $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
            ECHO "<br> nombre=".$ALMA;
            echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
            GRABAR_BASE_DATOS($ALMA);
            POSTEAR_PIEZAS();
        }
    }


    if($MATRIZ[$i][15]>0)
    {
        $SERIE++;
        echo "<br>hay posibilidades de L9 con ".$MATRIZ[$i][15]."movimientos posibles estando i=".$i;
        echo "moviendo caballo desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]+17;
        $NUEVA_POSICION=$POSTEAR[$i+2]+17;
        $POSTEAR[$i+2]=$NUEVA_POSICION;
        ECHO "<br> APELLIDO=".$POSTEAR[2];
        $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
        ECHO "<br> nombre=".$ALMA;
        echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
        GRABAR_BASE_DATOS($ALMA);
        POSTEAR_PIEZAS();
    }

    if($MATRIZ[$i][16]>0)
    {
        $SERIE++;
        echo "<br>hay posibilidades de L10 con ".$MATRIZ[$i][16]."movimientos posibles estando i=".$i;
        echo "moviendo caballo desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]+10;
        $NUEVA_POSICION=$POSTEAR[$i+2]+10;
        $POSTEAR[$i+2]=$NUEVA_POSICION;
        ECHO "<br> APELLIDO=".$POSTEAR[2];
        $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
        ECHO "<br> nombre=".$ALMA;
        echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
        GRABAR_BASE_DATOS($ALMA);
        POSTEAR_PIEZAS();
    }


    if($MATRIZ[$i][17]>0)
    {
        $SERIE++;
        echo "<br>hay posibilidades de L11 con ".$MATRIZ[$i][17]."movimientos posibles estando i=".$i;
        echo "moviendo caballo desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]+15;
        $NUEVA_POSICION=$POSTEAR[$i+2]+15;
        $POSTEAR[$i+2]=$NUEVA_POSICION;
        ECHO "<br> APELLIDO=".$POSTEAR[2];
        $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
        ECHO "<br> nombre=".$ALMA;
        echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
        GRABAR_BASE_DATOS($ALMA);
        POSTEAR_PIEZAS();
    }

    if($MATRIZ[$i][18]>0)
    {
        $SERIE++;
        echo "<br>hay posibilidades de L12 con ".$MATRIZ[$i][18]."movimientos posibles estando i=".$i;
        echo "moviendo caballo desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]+6;
        $NUEVA_POSICION=$POSTEAR[$i+2]+6;
        $POSTEAR[$i+2]=$NUEVA_POSICION;
        ECHO "<br> APELLIDO=".$POSTEAR[2];
        $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
        ECHO "<br> nombre=".$ALMA;
        echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
        GRABAR_BASE_DATOS($ALMA);
        POSTEAR_PIEZAS();
    }

    if($MATRIZ[$i][19]>0)
    {
        $SERIE++;
        echo "<br>hay posibilidades de L13 con ".$MATRIZ[$i][19]."movimientos posibles estando i=".$i;
        echo "moviendo caballo desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]-17;
        $NUEVA_POSICION=$POSTEAR[$i+2]-17;
        $POSTEAR[$i+2]=$NUEVA_POSICION;
        ECHO "<br> APELLIDO=".$POSTEAR[2];
        $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
        ECHO "<br> nombre=".$ALMA;
        echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
        GRABAR_BASE_DATOS($ALMA);
        POSTEAR_PIEZAS();
    }

    if($MATRIZ[$i][20]>0)
    {
        $SERIE++;
        echo "<br>hay posibilidades de L14 con ".$MATRIZ[$i][20]."movimientos posibles estando i=".$i;
        echo "moviendo caballo desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]-10;
        $NUEVA_POSICION=$POSTEAR[$i+2]-10;
        $POSTEAR[$i+2]=$NUEVA_POSICION;
        ECHO "<br> APELLIDO=".$POSTEAR[2];
        $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
        ECHO "<br> nombre=".$ALMA;
        echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
        GRABAR_BASE_DATOS($ALMA);
        POSTEAR_PIEZAS();
    }

    if($MATRIZ[$i][21]>0)
    {
        $SERIE++;
        echo "<br>hay posibilidades de L15 con ".$MATRIZ[$i][21]."movimientos posibles estando i=".$i;
        echo "moviendo caballo desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]-15;
        $NUEVA_POSICION=$POSTEAR[$i+2]-15;
        $POSTEAR[$i+2]=$NUEVA_POSICION;
        ECHO "<br> APELLIDO=".$POSTEAR[2];
        $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
        ECHO "<br> nombre=".$ALMA;
        echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
        GRABAR_BASE_DATOS($ALMA);
        POSTEAR_PIEZAS();
    }

    if($MATRIZ[$i][22]>0)
    {
        $SERIE++;
        echo "<br>hay posibilidades de L16 con ".$MATRIZ[$i][22]."movimientos posibles estando i=".$i;
        echo "moviendo caballo desde".$POSTEAR[$i+2]. "al ".$POSTEAR[$i+2]-6;
        $NUEVA_POSICION=$POSTEAR[$i+2]-6;
        $POSTEAR[$i+2]=$NUEVA_POSICION;
        ECHO "<br> APELLIDO=".$POSTEAR[2];
        $ALMA=strval($POSTEAR[2]).",C".strval($MATRIZ[$i][1])."-".strval($NUEVA_POSICION);
        ECHO "<br> nombre=".$ALMA;
        echo "<br> esto quedo asi:".$POSTEAR[1]."-".$POSTEAR[2]."-".$POSTEAR[3]."-".$POSTEAR[4]."-".$POSTEAR[5]."-".$POSTEAR[6]."-".$POSTEAR[7]."-".$POSTEAR[8]."-".$POSTEAR[9]."-".$POSTEAR[10]."-".$POSTEAR[11]."-".$POSTEAR[12]."-".$POSTEAR[13]."-".$POSTEAR[14]."-".$POSTEAR[15]."-".$POSTEAR[16]."-".$POSTEAR[17]."-".$POSTEAR[18]."-".$POSTEAR[19]."-".$POSTEAR[20]."-".$POSTEAR[21]."-".$POSTEAR[22]."-".$POSTEAR[23]."-".$POSTEAR[24]."-".$POSTEAR[25]."-".$POSTEAR[26]."-".$POSTEAR[27]."-".$POSTEAR[28]."-".$POSTEAR[29]."-".$POSTEAR[30]."-".$POSTEAR[31]."-".$POSTEAR[32]."-";  
        GRABAR_BASE_DATOS($ALMA);
        POSTEAR_PIEZAS();
    }
}

}

?>