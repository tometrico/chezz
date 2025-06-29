<?php

if (isset($_GET["TOTAL"])) {
    # code...

$TOTAL=$_GET["TOTAL"];

ECHO $TOTAL;


$ALFABETO="XYZWVUTSRQPONMLKJIHGFEDCBA";
        for($i=0;$i<$TOTAL;$i++)
                    {
                    ECHO "<br>";
                    $$ALFABETO[$i]=$_GET["$ALFABETO[$i]"];
                    ECHO $ALFABETO[$i];
                    ECHO "=";
                    ECHO $$ALFABETO[$i];
                    echo "</t>";
                    }

}

ECHO "<br>";

if (isset($_GET["MATRIZ"])) {
        # code...
    
    $MATRIZ=$_GET["MATRIZ"];
    echo $MATRIZ;
    echo '<br>';
    $A=0;
    $P=0;
    $B=0;
    $LIMITE=($TOTAL)*($TOTAL+1);
    $PASE=0;
                do {


               if ($MATRIZ[$A]!='/') {
                
                ECHO $MATRIZ[$A];
               }         



         
               if ($MATRIZ[$A]=='/')
                {
                        $B++;
                        /*
                        ECHO '<br>';
                        echo "b=";
                        ECHO $B;
                        echo "PARA LLEGAR A :";
                        ECHO $LIMITE;
                        ECHO '<br>';
                        */

                        if ($A>0) 
                        {
                                if ($PASE==0) {
                                        if ($P==0) {
                                                # code...
                                              //  ECHO "<br>";
                                        }
                                        ECHO $ALFABETO[$P];
                                }
                                
                                $P++;
                                if ($P==($TOTAL)) {
                                        ECHO '=';
                                        $PASE=1;
                                }

                                if ($P==($TOTAL+1)) {
                                        $P=0;
                                        ECHO "<br>";
                                        $PASE=0;
                                }
                        }
               }         
               $A++;
                } while ($B <= $LIMITE);
}

?>


<!DOCTYPE html> 
        <html lang="es"> 
            <head> 
                <title>ecuaciones</title> 
                <script>
                    var total=0 //indica el total de ecuaciones a trabajar
                    var cuna =0 //ESTA VARIABLE SE EMPLEA PARA IR GRABANDO LOS VALORES INGRESADOS POR TECLADO
                    var cuadro_x=1//COORDENADAS DEL RECUADRO DE DATOS EN LA POSICION X
                    var cuadro_y=1//COORDENADAS DEL RECUADRO DE DATOS EN LA POSICION Y
                    var flag_drive=0//ES UNA BANDERA QUE DA INDICACION DE QUE SE DEBE GRABAR  O NO 
                    var permiso=false// SI ESTA FUERA DE LA TABLA NO PERMITE ESCRIBIR DATOS
                    var flag_decimal= false//SE ACTIVA PARA INDICAR DECIMALES LUEGO DEL PUNTO
                    var pin=0
                    var pot=0 //EN COMBINACION CON LA BANDERA DECIMAL  VA INDICANDO DECIMAS CENTESIMAS MILESIMAS ETC A GRABAR 
                    var ratonx=0;//CONTIENE INFORMACION DE LA POSICION DEL RATON EN SU EJE X
                    var ratony=0;//CONTIENE INFORMACION DE LA POSICION DEL RATON EN SU EJE Y
                    var flecha_x=0// AUXILIAR DEL PUNTERO DEL MOUSE EN POSICION X SE USA EN LA FUNCION CALCULAPOS
                    var flecha_y=0// AUXILIAR DEL PUNTERO DEL MOUSE EN POSICION Y
                    var acumulado=0//LLEVA LA CUENTA EN LA REDUCCION DE LA MATRIZ 
                    var signo=1 //PARA DESIGNAR EL SIGNO DE UNA OPERACION SEA POSITIVA O NEGATIVA
                    var n=1 //se utiliza solo en la funcion de verificacion de cero 
                    var abc= new Array();//contiene el abecedario
                    abc="[XYZWVUTSRQPONMLKJIHGFEDCBA" //VECTOR CONTIENE LAS LETRAS ASIGNADAS A LAS VARIABLES DEL SISTEMA 
                    var boleto=true;//BANDERA QUE DA PERMISO DE OPERACION DE CALCULO
                    var respuestas= new Array()//EN ESTE ARREGLO SE VAN GUARDANDO LAS RESPUESTAS 
                    
                    var vector1=new Array()
                        var vector2=new Array()
                        var vector3=new Array()

                        for (i=1;i<=50;i++)
                        {
                             vector3[i]=new Array()   
                        }


                        var t=0
                        var inter=0

                    var cramer= new Array() //en este arreglo se guardan los datos del sitema de ecuaciones
                    for (i=0;i<=100;i++)
                        {
                        cramer[i]=new Array();    //SE DECLARA MATRIZ  
                        }

                    for(i=0;i<=100;i++)
                        {
                               for(j=0;j<=100;j++)
                               {
                                   cramer[j][i]=0    //LA MATRIZ SE LLENA DE CEROS  
                               } 
                        }
                        var reflejo= new Array()
                        for(i=0;i<=100;i++)
                        {
                                reflejo[i]=new Array()
                        }
/*********************************************************** */
                    function iniciar()
                        { 
                            var elemento=document.getElementById('lienzo'); 
                            lienzo=elemento.getContext('2d');   
                            lienzo.font="bold 15px verdana, sans-serif";
                            var boton=document.getElementById('enviar'); 
                            boton.addEventListener('click', binarSearch, false);

                            var cal=document.getElementById('procesar')
                            cal.addEventListener('click', calcula_ecuacion, false)

                            window.addEventListener('mousemove', puntero, false); 
                            window.addEventListener('keydown',teclado,false)  

                            var PARK=document.getElementById('lienzo'); 
                            lienzo=PARK.getContext('2d'); 
                            PARK.addEventListener('click',grabanota,false)
                            mostrar()                        
                        } 

                     function binarSearch()// ESTA FUNCION ES LLAMADA  AL DARLE CLICK AL BOTON INGRESAR
                        {
                            total=parseInt(document.getElementById('texto').value); 
                            mostrar() 
                            document.getElementById('texto').value=''; //se limpia el text luego de ingresado los datos
                        } 

                    function mostrar() //ESTA FUNCION MUESTRA LOS DATOS EN PANTALLA O LIENZO DEL CANVAS DE TRABAJO
                        {
                                
                            lienzo.clearRect(0,0,680,400)
                            lienzo.fillText("PRUEBA"+total,50,20);   
                            lienzo.fillText("cuadro x="+flecha_x,50,40)
                            lienzo.fillText("cuadro y="+flecha_y,50,60)
  
                            for(i=1;i<=total;i++)
                            {
                                for(j=1;j<=total;j++)
                                {
                                    lienzo.fillText(""+cramer[j][i]+""+abc[j],80+50*j,50+30*i)
                                }
                                lienzo.fillText("="+cramer[total+1][i],80+50*[total+1],50+30*i)

                            }
                            lienzo.strokeRect(70+50*cuadro_x,35+30*cuadro_y,40,13); 
                            if(pin>=1)
                                {
                                lienzo.clearRect(70+50*cuadro_x,35+30*cuadro_y,40,13)       
                                lienzo.fillText(" "+cuna,73+50*cuadro_x,50+30*cuadro_y)
                                }  
                                //calcula_ecuacion()
                        }
/*****************************************************************************************************************/
                        function puntero(e)
                                {
                                        ratonx=e.clientX
                                        ratony=e.clientY 
                                        mostrar()  
                                        calculpos()    
                                }
/*****************************************************************************************************************/
/*****************************************************************************************************************/
                        function calculpos()//se encarga de calcular la posicion del puntero del mouse  en la tabla de datos 
                                {
                                var i=0
                                        flecha_x= 4+parseInt((ratonx-380)/70)
                                        //flecha_y= 1+parseInt((ratony-166)/10)
                                        do
                                        {
                                                i++
                                        }while((108+30*i)<ratony)
                                        flecha_y=i;
                                }
/****************************************************************************************************************/
function grabanota()
 {
         cuadro_x=flecha_x
         cuadro_y=flecha_y
         mostrar()       
 }
/***************************************************************************************************************/
                        function teclado(event)//esta funcion avisa que tecla se ha oprimido
                        {
                            var keyValue = event.key;
                            var codeValue = event.code;  
                            mostrar()

                            //rutina de verificacion de teclado//   
                            if (codeValue=='ArrowRight')
                            {
                                    ajuste();       
                                    cuna=0;
                                    cuadro_x++ 
                                    flag_drive=1
                                    signo=1
                            }
                            if (codeValue=='ArrowLeft')
                            {
                                    ajuste()
                                    cuna=0;
                                    cuadro_x-- 
                                    flag_drive=1
                                    signo=1
                            }

                            if (codeValue=='ArrowUp')
                            {
                                    ajuste()
                                    cuna=0;
                                    cuadro_y-- 
                                    flag_drive=1
                                    signo=1
                            }

                            if (codeValue=='ArrowDown')
                            {
                                    ajuste()
                                    cuna=0;
                                    cuadro_y++ 
                                    flag_drive=1
                                    signo=1
                            }

                            if (codeValue=='Enter')
                            {
                                    if (pin>1)
                                    {
                                    ajuste()
                                    cuna=0;     
                                    }
                            pin=0
                            flag_drive=1
                            cuadro_y++ 
                            signo=1
                            }
                            
                            if (codeValue=='NumpadEnter')
                            {
                                    if (pin>1)
                                    {
                                    ajuste()
                                    cuna=0;     
                                    }
                            pin=0
                            flag_drive=1
                            cuadro_y++ 
                            signo=1
                            }

                            if (codeValue=='NumpadDecimal')
                            {
                                    flag_decimal=true
                            }

                            if (codeValue=='NumpadSubtract')
                            {
                                signo=-signo
                            }

                            if (flag_drive==0)
                            {
                                        if((keyValue!='a')&&(keyValue!='b')&&(keyValue!='c')&&(keyValue!='d')&&(keyValue!='e')&&(keyValue!='f')&&(keyValue!='g')&&(keyValue!='h')&&(keyValue!='i')&&(keyValue!='j')&&(keyValue!='k')&&(keyValue!='l')&&(keyValue!='m')&&(keyValue!='n')&&(keyValue!='ñ')&&(keyValue!='o')&&(keyValue!='p')&&(keyValue!='q')&&(keyValue!='r')&&(keyValue!='s')&&(keyValue!='t')&&(keyValue!='u')&&(keyValue!='v')&&(keyValue!='w')&&(keyValue!='x')&&(keyValue!='y')&&(keyValue!='z')&&(keyValue!='A')&&(keyValue!='B')&&(keyValue!='C')&&(keyValue!='D')&&(keyValue!='E')&&(keyValue!='F')&&(keyValue!='G')&&(keyValue!='H')&&(keyValue!='I')&&(keyValue!='J')&&(keyValue!='K')&&(keyValue!='L')&&(keyValue!='M')&&(keyValue!='N')&&(keyValue!='Ñ')&&(keyValue!='O')&&(keyValue!='P')&&(keyValue!='Q')&&(keyValue!='R')&&(keyValue!='S')&&(keyValue!='T')&&(keyValue!='U')&&(keyValue!='V')&&(keyValue!='W')&&(keyValue!='X')&&(keyValue!='Y')&&(keyValue!='Z')&&(keyValue!='.')&&(keyValue!='CapsLock')&&(keyValue!='Alt')&&(keyValue!=' ')&&(keyValue!='Meta')&&(keyValue!='Shift')&&(keyValue!='Control')&&(keyValue!='-'))
                                                {
                                                    if(flag_decimal==false)
                                                            {
                                                            cuna= Math.abs(cuna*10) +parseInt(keyValue)
                                                            }
                                                    if(flag_decimal==true)
                                                            {
                                                            pot++       
                                                            cuna=Math.abs(cuna)+parseInt(keyValue)/Math.pow(10,pot)
                                                            }
                                                    cuna=cuna*signo        
                                                    pin++;
                                                }
                            }
                            if(flag_drive==1)
                            {
                                    flag_drive=0;
                                    cuna=0;
                            }
                            mostrar()
                        }

/*****************************************************************************************************************/
function transcribe() //se traslada todos los valores de la matriz de datos a la matriz reflejo
{
        for (i=1;i<=total;i++)
                        {
                                for(j=1;j<=total+1;j++)
                                {
                                  reflejo[j][i]=cramer[j][i]      
                                }
                        }

}
/****************************************************************************************************************/
                function calcula_ecuacion()
                {
                        revisar()   //se encarga de verificar si no hay ecuaciones repetidas o proporcionales
                        inter=parseInt(total) 
                       t=0
                        transcribe() //paso 1 se traslada todos los valores de la matriz de datos a la matriz reflejo
                        //non_cero()//se encarga de verificar que el valor 1,1 de la matriz no sea cero
                        if(boleto==true)
                        {
                          for(k=1;k<=parseInt(total);k++)
                                {     
                                        t++
                                                do
                                                {             
                                                        non_cero()//se encarga de verificar que el valor 1,1 de la matriz no sea cero 
                                                        //paso 2 empieza la reduccion de las ecuaciones
                                                        for(i=2;i<=parseInt(inter);i++)
                                                        {          
                                                                for(j=1;j<=(parseInt(inter))+1;j++)
                                                                {
                                                                vector1[j]=reflejo[j][1]*reflejo[1][i] 
                                                                vector2[j]=reflejo[j][i]*reflejo[1][1]
                                                                        if(j>1)
                                                                        {
                                                                        vector3[j-1][i]=vector1[j]-vector2[j]  
                                                                        } 
                                                                } 
                                                                
                                                        }
                                                        //paso 3 los resultados de la reduccion se vuelven a colocar en la matriz
                                                        inter=inter-1 
                                                        for(i=1;i<=(parseInt(inter));i++)
                                                        {        
                                                               // document.write("<br>")                         
                                                                for(j=1;j<=(parseInt(inter)+1 );j++)
                                                                {      
                                                                reflejo[j][i]= parseFloat(vector3[j][i+1])            
                                                                }
                                                        }                                                        
                                                }while(inter>=2)     
                                               // document.write("el valor "+abc[total+1-t]+"="+reflejo[2][1]+"/"+reflejo[1][1]+"iteracion numero "+t)
                                                respuestas[total+1-t]=reflejo[2][1]/reflejo[1][1]
                                                cambiar()
                                }             
                        }


/******************************ESTA ZONA DEL CODIGO MUESTRA LAS RESPUESTAS OBTENIDAS***************************************************** */

let direccion='RESPUESTAS.PHP?TOTAL='+total;
                    //document.write("<br>RESPUESTAS<br>")
                        for(i=1;i<=total;i++)
                        {
                         //document.write("<br>"+abc[i]+"="+respuestas[i]) 
                         
                         direccion=direccion+'&'+abc[i]+'='+respuestas[i]
                        }

                        //document.write("<br>SOLUCION AL SISTEMA DE ECUACIONES<br>")
                       // mostrar();
direccion=direccion+'&MATRIZ='

                        for(i=1;i<=total;i++)
                            {
                                for(j=1;j<=total;j++)
                                {
                                    if (cramer[j][i]>0)
                                        {
                                            //document.write("   +")
                                        }
                                    //document.write("     "+cramer[j][i]+""+abc[j])
                                    direccion=direccion+'/'+cramer[j][i]
                                }
                                direccion=direccion+'/'+cramer[total+1][i]
                                //document.write("="+cramer[total+1][i])
                                //document.write("<br>");

                            }
direccion=direccion+'/'                            
/*********************************************************************************** */
//let direccion='SISTEMA_DE_ECUACIONES.PHP?TOTAL='+total;
location= direccion      

                }
/**********************************************************************************************************/
                function cambiar()
                {
                    transcribe()
                    for(i=1;i<=total;i++)
                    {
                        vector1[i]=reflejo[total][i]
                        vector2[i]=reflejo[total-t][i]
                    }

                    for(i=1;i<=total;i++)
                    {
                        reflejo[total][i]=vector2[i]
                        reflejo[total-t][i]=vector1[i]
                    }

                    inter=parseInt(total)
                }
/*********************************************************************************************************************/
                function non_cero() //se encarga de determinar si  las filas tienen cero si lo tiene las intercambia
                {
                         
                        if (reflejo[1][1]==0)
                        {
                                n=1
                                do{
                                        n++
                                        
                                     }   while((reflejo[1][n]==0)&&(n<=total))
 

                                       if(n<=(parseInt(inter)))
                                        {
                                                for (i=1;i<=(parseInt(inter))+1;i++)
                                                {
                                                        vector1[i]=reflejo[i][1]
                                                        vector2[i]=reflejo[i][n]
                                                }
                                                for (i=1;i<=(parseInt(inter))+1;i++)
                                                {
                                                        reflejo[i][1]=vector2[i]
                                                        reflejo[i][n]=vector1[i]
                                                }
                                        }
                                        else
                                        { 
                                                boleto=false
                                        }
                        }
                       
                        return boleto;
                }

/************************************************************************************************************/
function ver_matriz()
{
        for (i=1;i<=total;i++)
                        {
                                document.write("<br>")
                                for(j=1;j<=total+1;j++)
                                {
                                  document.write(" /"+reflejo[j][i])     
                                }
                        }

}
/************************************************************************************************************/
                function revisar()   //se encarga de verificar si no hay ecuaciones repetidas o proporcionales
                {
                 var apunte =new Array()  
                 var suma=0;     
                        for (i=1;i<=total-1;i++)
                        {
                                for(j=i+1;j<=total;j++)
                                {
                                        //document.write("<br>comparado fila "+i+"con fila "+j+" =")
                                        for(k=1;k<=total;k++)
                                        {
                                                apunte[k]=cramer[k][i]/cramer[k][j]
                                                //document.write(""+apunte[k]+" /")
                                        }  
                                        suma =0
                                        for(k=2;k<=total;k++)
                                        {
                                                if(apunte[k]==apunte[k-1])
                                                {suma++}
                                        }  
                                        if(suma==total-1)
                                        {
                                         document.write("<br>error no se puede procesar la informacion<br>") 
                                         boleto=false      
                                        }
                                }
                        }
                }
/************************************************************************************************************/
                function ajuste()//se encarga de grabar datos en la tablilla
                        {
                                pot=0
                                flag_decimal=false
                                permiso=false
                                if((cuadro_y)<=(total)&&(cuadro_x<=total+1))
                                        {
                                        permiso=true
                                        }
                                if((pin>=1)&&(permiso==true))
                                {
                                //valores[cuadro_x][cuadro_y]=cuna
                                cramer[cuadro_x][cuadro_y]=cuna
                                //esculpir(cuadro_y)
                                pin=0
                                }  
                        }
/*****************************************************************************/
                    window.addEventListener("load", iniciar, false);
                </script>
            </head> 
            <body> 
                    <section> 
                        <form name="informacion" method="get"> 
                            <!--
                                INDIQUE LA CANTIDAD DE VARIABLES:                                 
                                <textarea name="text" id="texto"></textarea>
                                   --> 
                                <input type="button" id="enviar" value="ingresar"> 
                                        
                                <input type="button" id="procesar" value="calcular">

           
                        </form> 
                    </section> 
             
                    <section id="cajalienzo" > 
                        <canvas id="lienzo" width="1300" height="1000"> 
                        Su navegador no soporta el elemento canvas 
                        </canvas> 
                    </section> 
                    
            </body> 
        </html>
