<?php 
ECHO "ANALISIS DE DATOS ";

for ($I=1; $I <=32 ; $I++) 
{     
    for ($J=1; $J <=5 ; $J++) 
    { 
        for ($K=1; $K<=15000 ; $K++) 
        { 
            $ESCENA[$I][$J][$K]=0;
        }
    }
}

for ($J=1; $J <=35000 ; $J++) 
{ 
    $PREFIJO[$J]=0;
    for ($K=1; $K<=500 ; $K++) 
    { 
        $HISTORIA[$J][$K]=0;
        if ($K==1) 
        {
            $HISTORIA[$J][$K]=1;
        }
    }
}

$HISTORIA[1][1]=4;

$HISTORIA[3][1]=8;


#LA COLUMNA 1 INDICA EL NUMERO DE PIEZA
$MATRIZ[1][1]=1;
$MATRIZ[2][1]=2;
$MATRIZ[3][1]=3;
$MATRIZ[4][1]=4;
$MATRIZ[5][1]=5;
$MATRIZ[6][1]=6;
$MATRIZ[7][1]=7;
$MATRIZ[8][1]=8;
$MATRIZ[9][1]=9;
$MATRIZ[10][1]=10;
$MATRIZ[11][1]=11;
$MATRIZ[12][1]=12;
$MATRIZ[13][1]=13;
$MATRIZ[14][1]=14;
$MATRIZ[15][1]=15;
$MATRIZ[16][1]=16;
$MATRIZ[17][1]=17;
$MATRIZ[18][1]=18;
$MATRIZ[19][1]=19;
$MATRIZ[20][1]=20;
$MATRIZ[21][1]=21;
$MATRIZ[22][1]=22;
$MATRIZ[23][1]=23;
$MATRIZ[24][1]=24;
$MATRIZ[25][1]=25;
$MATRIZ[26][1]=26;
$MATRIZ[27][1]=27;
$MATRIZ[28][1]=28;
$MATRIZ[29][1]=29;
$MATRIZ[30][1]=30;
$MATRIZ[31][1]=31;
$MATRIZ[32][1]=32;

/*************************************************************************************************/ 
#LA COLUMNA 2 INDICA LA POSICION DE CADA PIEZA 
/*****************************************************************************************/
$ESCENA[1][2][1]=1;//ORIGINALMENTE 1  //TORRE
$ESCENA[2][2][1]=2;//ORIGINALMENTE 2  //CABALLO
$ESCENA[3][2][1]=3;//ORIGINALMENTE 3 //ALFIL
$ESCENA[4][2][1]=4;//ORIGINALMENTE 4//REY
$ESCENA[5][2][1]=5;//ORIGINALMENTE 5//REINA
$ESCENA[6][2][1]=6;//ORIGINALMENTE 6//ALFIL
$ESCENA[7][2][1]=7;//ORIGINALMENTE 7//CABALLO
$ESCENA[8][2][1]=8;//ORIGINALMENTE 8//TORRE
$ESCENA[9][2][1]=9;//originalmente era 9 //PEON
$ESCENA[10][2][1]=10;//ORIGINALMENTE10   //PEON
$ESCENA[11][2][1]=11;//ORIGINALMENTE 11   //PEON
$ESCENA[12][2][1]=12;//ORIGINALMENTE 12   //PEON
$ESCENA[13][2][1]=13;//ORIGINALMENTE 13  //PEON
$ESCENA[14][2][1]=14;//ORIGINALMENTE 14  //PEON
$ESCENA[15][2][1]=15;//ORIGINALMENTE 15 //PEON
$ESCENA[16][2][1]=16;//ORIGINALMENTE 16 //PEON
$ESCENA[17][2][1]=57;////ORIGINALMENTE 57//TORRE
$ESCENA[18][2][1]=58;//ORIGINALMENTE 58 //CABALLO
$ESCENA[19][2][1]=59;//ORIGINALMENTE 59 //ALFIL
$ESCENA[20][2][1]=60;//ORIGINALMENTE 60//REY
$ESCENA[21][2][1]=61;//ORIGINALMENTE 61 //REINA
$ESCENA[22][2][1]=62;//ORIGINALMENTE 62 //ALFIL
$ESCENA[23][2][1]=63;////ORIGINALMENTE 63//CABALLO
$ESCENA[24][2][1]=64;//ORIGINALMENTE 64//TORRE
$ESCENA[25][2][1]=49;//ORIGINALMENTE 49 //PEON
$ESCENA[26][2][1]=50;//ORIGINALMENTE 50 //PEON
$ESCENA[27][2][1]=51;//ORIGINALMENTE 51 //PEON
$ESCENA[28][2][1]=52;//ORIGINALMENTE 52 //PEON 
$ESCENA[29][2][1]=53;//ORIGINALMENTE 53//PEON
$ESCENA[30][2][1]=54;//ORIGINALMENTE 54//PEON
$ESCENA[31][2][1]=55;//ORIGINALMENTE 55//PEON
$ESCENA[32][2][1]=56;//ORIGINALMENTE 56//PEON
$ESCENA[33][2][1]=0;//EN ESTA CASILLA SE VA A COLOCAR LA CANTIDAD DE POSIBLES COMBINACIONES QUE PUEDE TENER LA ESCENA

/*****************************************************************************************/ 
#LA COLUMNA 3 INDICA EL TIPO DE PIEZA 1=TORRE, 2=CABALLO, 3=ALFIL, 4=REY, 5=REINA, 6= PEON
$MATRIZ[1][3]=1;
$MATRIZ[2][3]=2;
$MATRIZ[3][3]=3;
$MATRIZ[4][3]=4;
$MATRIZ[5][3]=5;
$MATRIZ[6][3]=3;
$MATRIZ[7][3]=2;
$MATRIZ[8][3]=1;
$MATRIZ[9][3]=6;
$MATRIZ[10][3]=6;
$MATRIZ[11][3]=6;
$MATRIZ[12][3]=6;
$MATRIZ[13][3]=6;
$MATRIZ[14][3]=6;
$MATRIZ[15][3]=6;
$MATRIZ[16][3]=6;
$MATRIZ[17][3]=1;
$MATRIZ[18][3]=2;
$MATRIZ[19][3]=3;
$MATRIZ[20][3]=4;
$MATRIZ[21][3]=5;
$MATRIZ[22][3]=3;
$MATRIZ[23][3]=2;
$MATRIZ[24][3]=1;
$MATRIZ[25][3]=6;
$MATRIZ[26][3]=6;
$MATRIZ[27][3]=6;
$MATRIZ[28][3]=6;
$MATRIZ[29][3]=6;
$MATRIZ[30][3]=6;
$MATRIZ[31][3]=6;
$MATRIZ[32][3]=6;

/********************************************************************************************/
#COLUMNA 4 INDICA EL BANDO
$MATRIZ[1][4]=1;
$MATRIZ[2][4]=1;
$MATRIZ[3][4]=1;
$MATRIZ[4][4]=1;
$MATRIZ[5][4]=1;
$MATRIZ[6][4]=1;
$MATRIZ[7][4]=1;
$MATRIZ[8][4]=1;
$MATRIZ[9][4]=1;
$MATRIZ[10][4]=1;
$MATRIZ[11][4]=1;
$MATRIZ[12][4]=1;
$MATRIZ[13][4]=1;
$MATRIZ[14][4]=1;
$MATRIZ[15][4]=1;
$MATRIZ[16][4]=1;
$MATRIZ[17][4]=2;
$MATRIZ[18][4]=2;
$MATRIZ[19][4]=2;
$MATRIZ[20][4]=2;
$MATRIZ[21][4]=2;
$MATRIZ[22][4]=2;
$MATRIZ[23][4]=2;
$MATRIZ[24][4]=2;
$MATRIZ[25][4]=2;
$MATRIZ[26][4]=2;
$MATRIZ[27][4]=2;
$MATRIZ[28][4]=2;
$MATRIZ[29][4]=2;
$MATRIZ[30][4]=2;
$MATRIZ[31][4]=2;
$MATRIZ[32][4]=2;

/******************************************************************************/
#COLUMNA 5 INDICA ESTADO DE LA PIEZA 1= ACTIVO,  0= MUERTO
$MATRIZ[1][5]=1;
$MATRIZ[2][5]=1;
$MATRIZ[3][5]=1;
$MATRIZ[4][5]=1;
$MATRIZ[5][5]=1;
$MATRIZ[6][5]=1;
$MATRIZ[7][5]=1;
$MATRIZ[8][5]=1;
$MATRIZ[9][5]=1;
$MATRIZ[10][5]=1;
$MATRIZ[11][5]=1;
$MATRIZ[12][5]=1;
$MATRIZ[13][5]=1;
$MATRIZ[14][5]=1;
$MATRIZ[15][5]=1;
$MATRIZ[16][5]=1;
$MATRIZ[17][5]=1;
$MATRIZ[18][5]=1;
$MATRIZ[19][5]=1;
$MATRIZ[20][5]=1;
$MATRIZ[21][5]=1;
$MATRIZ[22][5]=1;
$MATRIZ[23][5]=1;
$MATRIZ[24][5]=1;
$MATRIZ[25][5]=1;
$MATRIZ[26][5]=1;
$MATRIZ[27][5]=1;
$MATRIZ[28][5]=1;
$MATRIZ[29][5]=1;
$MATRIZ[30][5]=1;
$MATRIZ[31][5]=1;
$MATRIZ[32][5]=1;
/***************************************************************************************/
#COLUMNA 6 INDICA OPORTUNIDAD
$MATRIZ[1][6]=1;
$MATRIZ[2][6]=1;
$MATRIZ[3][6]=1;
$MATRIZ[4][6]=1;
$MATRIZ[5][6]=1;
$MATRIZ[6][6]=1;
$MATRIZ[7][6]=1;
$MATRIZ[8][6]=1;
$MATRIZ[9][6]=1;
$MATRIZ[10][6]=1;
$MATRIZ[11][6]=1;
$MATRIZ[12][6]=1;
$MATRIZ[13][6]=1;
$MATRIZ[14][6]=1;
$MATRIZ[15][6]=1;
$MATRIZ[16][6]=1;
$MATRIZ[17][6]=2;
$MATRIZ[18][6]=2;
$MATRIZ[19][6]=2;
$MATRIZ[20][6]=2;
$MATRIZ[21][6]=2;
$MATRIZ[22][6]=2;
$MATRIZ[23][6]=2;
$MATRIZ[24][6]=2;
$MATRIZ[25][6]=2;
$MATRIZ[26][6]=2;
$MATRIZ[27][6]=2;
$MATRIZ[28][6]=2;
$MATRIZ[29][6]=2;
$MATRIZ[30][6]=2;
$MATRIZ[31][6]=2;
$MATRIZ[32][6]=2;
/***************************************************************************************************************************************************/

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


INICIO:
echo "<br> tabulador=".$TABULADOR;

$FILA=0;
do
{
    $FILA++;
}while ($HISTORIA[$FILA][1] != 4); 

$INICIO=$FILA+1;

while ($HISTORIA[$FILA][1] != 8) 
{
    $FILA++;
}
$FIN=$FILA-1;

/***************SE MUESTRA LA MATRIZ HISTORIA****************************** */
echo "<br>";
echo "HISTORIA ";
echo "<br>";
$BIN=1;
while ($HISTORIA[$BIN][1]!=8) 
{

    for ($C=1; $C <8 ; $C++) { 
        
        ECHO "-".$HISTORIA[$BIN][$C];        
    }
    echo "<br>";
$BIN++;
}


for ($C=1; $C <4 ; $C++) { 
        
    ECHO "-".$HISTORIA[$FIN+1][$C];        
}

/************************************************** */

echo "<br>";
ECHO "COMIENZA EN FILA".$INICIO."TERMINA EN :".$FIN;
$LECTURA=0;
echo "<br>";
//INICIO:
for ($M=1; $M <=32 ; $M++) 
{ 
    $MATRIZ[$M][2]=$ESCENA[$M][2][$TEMPORAL];
}

for ($Z=$INICIO; $Z <$FIN+1 ; $Z++) 
{ 
    # SE CALCULA EL PREFIJO 
    ECHO "<br>";   
    echo"se calcula el prefijo";
    $COLUMNA=1;

    /*
    while ($HISTORIA[$Z+$LECTURA][$COLUMNA]!= 0) 
    {
        $PREFIJO[$COLUMNA]=$HISTORIA[$Z][$COLUMNA];
        ECHO "-".$PREFIJO[$COLUMNA];
        $COLUMNA++;
    }
*/


//while ($HISTORIA[$Z+$LECTURA][$COLUMNA]!= 0) 
{
    //$PREFIJO[$COLUMNA]=$HISTORIA[$Z][$COLUMNA];
    //ECHO "-".$PREFIJO[$COLUMNA];
    //$COLUMNA++;
}


for ($P=1; $P <10 ; $P++) { 
    # code...
    $PREFIJO[$P]=$HISTORIA[$Z][$P];
        ECHO "-".$PREFIJO[$P];

    if ($PREFIJO[$P]>0) 
    {
        $COLUMNA++;
    }

}
ECHO "COLUMNA=".$COLUMNA;


#FIN DEL CALCULO DEL PREFIJO
#SE CALCULA LA MATRIZ
/*INICIO PROCESO CALCULO DE MATRIZ************************************************************* */

$TOTAL=0;
for ($i=1; $i <=32; $i++) 
{     
$MATRIZ[$i][7]=0;
$MATRIZ[$i][8]=0;
$MATRIZ[$i][9]=0;
$MATRIZ[$i][10]=0;
$MATRIZ[$i][11]=0;
$MATRIZ[$i][12]=0;
$MATRIZ[$i][13]=0;
$MATRIZ[$i][14]=0;
$MATRIZ[$i][15]=0;
$MATRIZ[$i][16]=0;
$MATRIZ[$i][17]=0;
$MATRIZ[$i][18]=0;
$MATRIZ[$i][19]=0;
$MATRIZ[$i][20]=0;
$MATRIZ[$i][21]=0;
$MATRIZ[$i][22]=0;

$POSICION=2;

ARRANQUE:

if (($MATRIZ[$i][2]>0)&&($MATRIZ[$i][6]==$TURNO)) {    
$AVANCE=1;
$L1=0;
/*************AVANCE FRONTAL PARA TORRE Y DAMA********************************************************************************************************/
if(($MATRIZ[$i][3]==1)||($MATRIZ[$i][3]==5))//PARA TORRE =1 Y PARA DAMA =5 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]+(8*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]+(8*$L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $L1++;
                        $ILUSION=$MATRIZ[$i][2]+(8*$L1);
                    }
           // echo "<br>";        
           // echo "se ha determinado a L1=";
           // echo $L1-1;

                }while(($AVANCE==1)&&($ILUSION<64));

                $L1=$L1-1;
                if ($L1<=0)
                 {
                    $L1=0;
                }
            $MATRIZ[$i][7]=$L1;
    }
/*********************************FIN AVANCE FRONTAL TORRE Y DAMA ******************************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS************************************************/
$ALFA=0;
//echo "LINEA 349=".$PAS0;
while ($L1 > $ALFA) {
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 351=".$PAS0;
$ALFA++;
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(8*$ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;


} 
//ECHO "<BR>";
/**********************************************************************************************************************************************/
$AVANCE=1;
$L1=0;
/*************RETROCESO PARA TORRE Y DAMA********************************************************************************************************/
if(($MATRIZ[$i][3]==1)||($MATRIZ[$i][3]==5))//PARA TORRE =1 Y PARA DAMA =5 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]-(8*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]-(8*$L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               // echo "aqui hay coincidencia";
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                               {
                               $L1++; 
                              }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $L1++;
                        $ILUSION=$MATRIZ[$i][2]-(8*$L1);
                    }
           // echo "<br>";        
           // echo "se ha determinado a L1=";
           // echo $L1-1;
                }while(($AVANCE==1)&&($ILUSION>0));

                $L1=$L1-1;
                if ($L1<=0)
                 {
                    $L1=0;
                }
            $MATRIZ[$i][8]=$L1;
    }
/*********************************FIN RETROCESO FRONTAL TORRE Y DAMA *********************************************************************/

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS************************************************/

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 411=".$PAS0;
$ALFA++;
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(8*$ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
    echo "match";
}

$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
//ECHO "<BR>";
/**********************************************************************************************************************************************/


/***********************INICIO ESTUDIO PIEZA EN EL EJE X*******************************************************************/
if (($MATRIZ[$i][2]>=1)&&($MATRIZ[$i][2]<=8)) 
{
    $LIMITE_ESTE=1;
    $LIMITE_OESTE=8;
}

if (($MATRIZ[$i][2]>=9)&&($MATRIZ[$i][2]<=16)) 
{
    $LIMITE_ESTE=9;
    $LIMITE_OESTE=16;
}


if (($MATRIZ[$i][2]>=17)&&($MATRIZ[$i][2]<=24)) 
{
    $LIMITE_ESTE=17;
    $LIMITE_OESTE=24;
}

if (($MATRIZ[$i][2]>=25)&&($MATRIZ[$i][2]<=32)) 
{
    $LIMITE_ESTE=25;
    $LIMITE_OESTE=32;
}

if (($MATRIZ[$i][2]>=33)&&($MATRIZ[$i][2]<=40)) 
{
    $LIMITE_ESTE=33;
    $LIMITE_OESTE=40;
}

if (($MATRIZ[$i][2]>=41)&&($MATRIZ[$i][2]<=48)) 
{
    $LIMITE_ESTE=41;
    $LIMITE_OESTE=48;
}

if (($MATRIZ[$i][2]>=49)&&($MATRIZ[$i][2]<=56)) 
{
    $LIMITE_ESTE=49;
    $LIMITE_OESTE=56;
}

if (($MATRIZ[$i][2]>=57)&&($MATRIZ[$i][2]<=64)) 
{
    $LIMITE_ESTE=57;
    $LIMITE_OESTE=64;
}


/*************AVANCE EJE X  PARA TORRE Y DAMA********************************************************************************************************/

$AVANCE=1;
$L1=0;
if(($MATRIZ[$i][3]==1)||($MATRIZ[$i][3]==5))//PARA TORRE =1 Y PARA DAMA =5 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            //$ILUSION=$MATRIZ[$i][2]+(8*$L1);
                            //$OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]+($L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $L1++;
                        $ILUSION=$MATRIZ[$i][2]+($L1);
                    }
           // echo "<br>";        
           // echo "se ha determinado a L1=";
           // echo $L1-1;

                }while(($AVANCE==1)&&($ILUSION<=$LIMITE_OESTE));
    }


    $L1=$L1-1;
    if ($L1<=0)
     {
        $L1=0;
    }
$MATRIZ[$i][9]=$L1;

/*********************************FIN AVANCE HORIZONTAL TORRE Y DAMA *********************************************************************/

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS************************************************/

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 533=".$PAS0;
$ALFA++;
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+($ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
//ECHO "<BR>";

/**********************************************************************************************************************************************/


/*************RETROCESO EJE X  PARA TORRE Y DAMA********************************************************************************************************/

$AVANCE=1;
$L1=0;
if(($MATRIZ[$i][3]==1)||($MATRIZ[$i][3]==5))//PARA TORRE =1 Y PARA DAMA =5 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            //$ILUSION=$MATRIZ[$i][2]+(8*$L1);
                            //$OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]-($L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $L1++;
                        $ILUSION=$MATRIZ[$i][2]-($L1);
                    }
           // echo "<br>";        
           // echo "se ha determinado a L1=";
           // echo $L1-1;

                }while(($AVANCE==1)&&($ILUSION>=$LIMITE_ESTE));
    }


    $L1=$L1-1;
    if ($L1<=0)
     {
        $L1=0;
    }
$MATRIZ[$i][10]=$L1;

/*********************************FIN AVANCE HORIZONTAL TORRE Y DAMA *********************************************************************/

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 601=".$PAS0;
$ALFA++;
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-($ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
//ECHO "<BR>";

/********************************************************************************************************************************************* */



//  ESTUDIO DEL ALFIL Y LA DAMA
$LIMITE_ALFIL[1]=8;
$LIMITE_ALFIL[2]=16;
$LIMITE_ALFIL[3]=24;

$LIMITE_ALFIL[4]=32;
$LIMITE_ALFIL[5]=40;
$LIMITE_ALFIL[6]=48;

$LIMITE_ALFIL[7]=56;
$LIMITE_ALFIL[8]=57;
$LIMITE_ALFIL[9]=58;

$LIMITE_ALFIL[10]=59;
$LIMITE_ALFIL[11]=60;
$LIMITE_ALFIL[12]=61;

$LIMITE_ALFIL[13]=62;
$LIMITE_ALFIL[14]=63;
$LIMITE_ALFIL[15]=64;

$AVANCE=1;
$L1=0;
/*************ESTUDIO ALFIL  Y DAMA******************************************************************************************************* */
if(($MATRIZ[$i][3]==3)||($MATRIZ[$i][3]==5))//PARA ALFIL =3 Y PARA DAMA =5 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            //$ILUSION=$MATRIZ[$i][2]+(8*$L1);
                            //$OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]+(9*$L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        
                        for ($k=1; $k <=15 ; $k++) 
                        { 
                            //ECHO "<BR>";
                            //ECHO "COMPARANDO ".$MATRIZ[$i][2]+(9*$L1);
                            //ECHO "CON";
                            //ECHO $LIMITE_ALFIL[$k];
                            if ($LIMITE_ALFIL[$k]==($MATRIZ[$i][2]+(9*$L1))) 
                            {
                                $AVANCE=0;           
                                //ECHO "TERMINA ESTUDIO";
                            }
                        }

                        $L1++;
                    }

                    if (($MATRIZ[$i][2]+(9*$L1)>64)) 
                    {
                        $AVANCE=0;
                        //ECHO "TERMINA ESTUDIO";
                    }
                }while($AVANCE==1);
    }


    $L1=$L1-1;
    if ($L1<=0)
     {
        $L1=0;
    }
$MATRIZ[$i][11]=$L1;
/********************************FIN DE ESTUDIO DE ESE MOVIMIENTO******************************* */
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 701=".$PAS0;
$ALFA++;
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(9*$ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */

/******************************************************************************************************************************************** */
//  ESTUDIO DEL ALFIL Y LA DAMA
$LIMITE_ALFIL[1]=1;
$LIMITE_ALFIL[2]=2;
$LIMITE_ALFIL[3]=3;

$LIMITE_ALFIL[4]=4;
$LIMITE_ALFIL[5]=5;
$LIMITE_ALFIL[6]=6;

$LIMITE_ALFIL[7]=7;
$LIMITE_ALFIL[8]=8;
$LIMITE_ALFIL[9]=9;

$LIMITE_ALFIL[10]=17;
$LIMITE_ALFIL[11]=25;
$LIMITE_ALFIL[12]=33;

$LIMITE_ALFIL[13]=41;
$LIMITE_ALFIL[14]=49;
$LIMITE_ALFIL[15]=57;

$AVANCE=1;
$L1=0;
/*************ESTUDIO ALFIL  Y DAMA******************************************************************************************************* */
if(($MATRIZ[$i][3]==3)||($MATRIZ[$i][3]==5))//PARA TORRE =1 Y PARA DAMA =5 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                           // $ILUSION=$MATRIZ[$i][2]+(8*$L1);
                           // $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]-(9*$L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        
                        for ($k=1; $k <=15 ; $k++) 
                        { 
                            //ECHO "<BR>";
                            //ECHO "COMPARANDO ".$MATRIZ[$i][2]+(9*$L1);
                            //ECHO "CON";
                            //ECHO $LIMITE_ALFIL[$k];
                            if ($LIMITE_ALFIL[$k]==($MATRIZ[$i][2]-(9*$L1))) 
                            {
                                $AVANCE=0;           
                                //ECHO "TERMINA ESTUDIO";
                            }
                        }

                        $L1++;
                    }

                    if (($MATRIZ[$i][2]-(9*$L1)<0)) 
                    {
                        $AVANCE=0;
                        //ECHO "TERMINA ESTUDIO";
                    }
                }while($AVANCE==1);
    }


    $L1=$L1-1;
    if ($L1<=0)
     {
        $L1=0;
    }
$MATRIZ[$i][12]=$L1;
/************************************FIN DEL ANALISIS *****************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 801=".$PAS0;
$ALFA++;
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(9*$ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */

/*************************************************************************** */
//  ESTUDIO DEL ALFIL Y LA DAMA
$LIMITE_ALFIL[1]=1;
$LIMITE_ALFIL[2]=2;
$LIMITE_ALFIL[3]=3;

$LIMITE_ALFIL[4]=4;
$LIMITE_ALFIL[5]=5;
$LIMITE_ALFIL[6]=6;

$LIMITE_ALFIL[7]=7;
$LIMITE_ALFIL[8]=8;
$LIMITE_ALFIL[9]=9;

$LIMITE_ALFIL[10]=17;
$LIMITE_ALFIL[11]=25;
$LIMITE_ALFIL[12]=33;

$LIMITE_ALFIL[13]=41;
$LIMITE_ALFIL[14]=49;
$LIMITE_ALFIL[15]=57;

$AVANCE=1;
$L1=0;
/*************ESTUDIO ALFIL  Y DAMA******************************************************************************************************* */
if(($MATRIZ[$i][3]==3)||($MATRIZ[$i][3]==5))//PARA TORRE =1 Y PARA DAMA =5 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                           // $ILUSION=$MATRIZ[$i][2]+(8*$L1);
                           // $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]+(7*$L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        
                        for ($k=1; $k <=15 ; $k++) 
                        { 
                            //ECHO "<BR>";
                            //ECHO "COMPARANDO ".$MATRIZ[$i][2]+(9*$L1);
                            //ECHO "CON";
                            //ECHO $LIMITE_ALFIL[$k];
                            if ($LIMITE_ALFIL[$k]==($MATRIZ[$i][2]+(7*$L1))) 
                            {
                                $AVANCE=0;           
                                //ECHO "TERMINA ESTUDIO";
                            }
                        }

                        $L1++;
                    }

                    if (($MATRIZ[$i][2]+(7*$L1)>64)) 
                    {
                        $AVANCE=0;
                        //ECHO "TERMINA ESTUDIO";
                    }
                }while($AVANCE==1);
    }


    $L1=$L1-1;
    if ($L1<=0)
     {
        $L1=0;
    }
$MATRIZ[$i][13]=$L1;

/******************************FIN DE ESE ANALISIS************************************ */
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 901=".$PAS0;
$ALFA++;
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(7*$ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */


/*************************************************************************** */
//  ESTUDIO DEL ALFIL Y LA DAMA
$LIMITE_ALFIL[1]=1;
$LIMITE_ALFIL[2]=2;
$LIMITE_ALFIL[3]=3;

$LIMITE_ALFIL[4]=4;
$LIMITE_ALFIL[5]=5;
$LIMITE_ALFIL[6]=6;

$LIMITE_ALFIL[7]=7;
$LIMITE_ALFIL[8]=8;
$LIMITE_ALFIL[9]=16;

$LIMITE_ALFIL[10]=24;
$LIMITE_ALFIL[11]=32;
$LIMITE_ALFIL[12]=40;

$LIMITE_ALFIL[13]=48;
$LIMITE_ALFIL[14]=56;
$LIMITE_ALFIL[15]=64;

$AVANCE=1;
$L1=0;
/*************ESTUDIO ALFIL  Y DAMA******************************************************************************************************* */
if(($MATRIZ[$i][3]==3)||($MATRIZ[$i][3]==5))//PARA TORRE =1 Y PARA DAMA =5 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                            //echo "<br>";
                            //ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            //$ILUSION=$MATRIZ[$i][2]+(8*$L1);
                            //$OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]-(7*$L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        
                        for ($k=1; $k <=15 ; $k++) 
                        { 
                            //ECHO "<BR>";
                            //ECHO "COMPARANDO ".$MATRIZ[$i][2]+(9*$L1);
                            //ECHO "CON";
                            //ECHO $LIMITE_ALFIL[$k];
                            if ($LIMITE_ALFIL[$k]==($MATRIZ[$i][2]-(7*$L1))) 
                            {
                                $AVANCE=0;           
                                //ECHO "TERMINA ESTUDIO";
                            }
                        }
                        $L1++;
                        //ECHO "L1 VALE".$L1;
                    }

                    if (($MATRIZ[$i][2]-(7*$L1)<0)) 
                    {
                        $AVANCE=0;
                        //ECHO "TERMINA ESTUDIO";
                    }
                }while($AVANCE==1);
    }

    $L1=$L1-1;
    if ($L1<=0)
     {
        $L1=0;
    }
$MATRIZ[$i][14]=$L1;
/******************************************FIN DEL ANALISIS************************************** */
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 969=".$PAS0;
$ALFA++;
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(7*$ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */
/********************************************************************************* */
$LIMITE_CABALLO[1]=8;
$LIMITE_CABALLO[2]=16;
$LIMITE_CABALLO[3]=24;
$LIMITE_CABALLO[4]=32;
$LIMITE_CABALLO[5]=40;
$LIMITE_CABALLO[6]=48;
$LIMITE_CABALLO[7]=56;
$LIMITE_CABALLO[8]=64;
$LIMITE_CABALLO[9]=49;
$LIMITE_CABALLO[10]=50;
$LIMITE_CABALLO[11]=51;
$LIMITE_CABALLO[12]=52;
$LIMITE_CABALLO[13]=53;
$LIMITE_CABALLO[14]=54;
$LIMITE_CABALLO[15]=55;
$LIMITE_CABALLO[16]=57;
$LIMITE_CABALLO[17]=58;
$LIMITE_CABALLO[18]=59;
$LIMITE_CABALLO[19]=60;
$LIMITE_CABALLO[20]=61;
$LIMITE_CABALLO[21]=62;
$LIMITE_CABALLO[22]=63;

$AVANCE=1;
$L1=0;
/*******************ESTUDIO DEL CABALLO**************************************************************************************** */
$ADMISION=0;
if($MATRIZ[$i][3]==2)//PARA EL CABALLO=2
    {
                do
                {
                    $ADMISION=1;
                    
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                            //echo "<br>";
                            //ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]+(17*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR PARTE DE " .$OTRO." LLEGARIA A :".$ILUSION;
                            if((($MATRIZ[$i][2]+(17))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                                $ADMISION=0;
                                //ECHO "COINCIDE ";
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                                $ADMISION=1;
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $AVANCE=0;
                        $L1++;
                        //ECHO "<BR>";
                        //echo "PARTE DE=".$MATRIZ[$i][2]."DEBERIA LLEGAR A:".$MATRIZ[$i][2]+(17*$L1) ;
                        //ECHO $MATRIZ[$i][2]+(17*$L1);
                        for ($K=1; $K <=22 ; $K++)
                        { 
                            //ECHO "<BR>"; 
                           //echo "COMPARANDO".$MATRIZ[$i][2]."CON:".$LIMITE_CABALLO[$K];
                           if ($LIMITE_CABALLO[$K]==$MATRIZ[$i][2])
                           {
                            //ECHO "<BR>";
                           // ECHO "-- PERO NO DEBERIA FUNCIONAR".$L1;
                            $ADMISION=0; 
                            //ECHO "<BR>";
                            $L1=$L1-1;
                            //$L1=0;
                            //$AVANCE=0;
                           }
                        }
                    }
           // echo "<br>";        
                        if (($MATRIZ[$i][2]+(17*$L1))>64) 
                        {
                            $AVANCE=0;
                            $ADMISION=0;
                            $L1=0;
                        }
           // echo $L1-1;
                }while(($AVANCE==1)&&($MATRIZ[$i][2]<48));
    }

    if ($ADMISION==1)
     {
        $MATRIZ[$i][15]=1;
        //echo "grabar movimiento del caballo";
    }

/*****************************FIN L1 *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;
//ECHO "<BR>";
//ECHO "PASO LINEA 1079=".$PAS0;
//echo "<br>";
//echo "caballo en nueva posicion=".$MATRIZ[$i][2]."+17=".$MATRIZ[$i][2]+(17);

for ($M=1; $M <=32 ; $M++) 
{ 
    $ESCENA[$M][2][$PAS0]=$ESCENA[$M][2][$TEMPORAL];
}


$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(17);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */

/***********************************INICIO L2********************************************** */
$LIMITE_CABALLO[1]=8;
$LIMITE_CABALLO[2]=16;
$LIMITE_CABALLO[3]=24;
$LIMITE_CABALLO[4]=32;
$LIMITE_CABALLO[5]=40;
$LIMITE_CABALLO[6]=48;
$LIMITE_CABALLO[7]=56;
$LIMITE_CABALLO[8]=64;
$LIMITE_CABALLO[9]=7;
$LIMITE_CABALLO[10]=15;
$LIMITE_CABALLO[11]=23;
$LIMITE_CABALLO[12]=31;
$LIMITE_CABALLO[13]=39;
$LIMITE_CABALLO[14]=47;
$LIMITE_CABALLO[15]=55;
$LIMITE_CABALLO[16]=63;
$LIMITE_CABALLO[17]=57;
$LIMITE_CABALLO[18]=58;
$LIMITE_CABALLO[19]=59;
$LIMITE_CABALLO[20]=60;
$LIMITE_CABALLO[21]=61;
$LIMITE_CABALLO[22]=62;
//$LIMITE_CABALLO[23]=63;


$AVANCE=1;
$L1=0;
/*******************ESTUDIO DEL CABALLO**************************************************************************************** */
$ADMISION=0;
if($MATRIZ[$i][3]==2)//PARA EL CABALLO=2
    {
                do
                {
                    $ADMISION=1;
                    
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                            //echo "<br>";
                            //ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]+(10*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]+(10))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                                $ADMISION=0;
                                //ECHO "COINCIDE ";
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                                $ADMISION=1;
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $AVANCE=0;
                        $L1++;
                       // ECHO "<BR>";
                        //echo "PARTE DE=".$MATRIZ[$i][2]."DEBERIA LLEGAR A:".$MATRIZ[$i][2]+(10) ;
                                           
                        for ($K=1; $K <=22 ; $K++)
                        { 
                            //ECHO "<BR>"; 
                           //echo "COMPARANDO".$MATRIZ[$i][2]."CON:".$LIMITE_CABALLO[$K];
                           if ($LIMITE_CABALLO[$K]==$MATRIZ[$i][2])
                           {
                            //ECHO "<BR>";
                            //ECHO "--PERO NO DEBERIA FUNCIONAR".$L1;
                            $ADMISION=0; 
                            //ECHO "<BR>";
                            $L1=$L1-1;
                            //$L1=0;
                            //$AVANCE=0;
                           }
                        }
                    }
           // echo "<br>";        
                        if (($MATRIZ[$i][2]+(10*$L1))>64) 
                        {
                            $AVANCE=0;
                            $ADMISION=0;
                            $L1=0;
                        }
           // echo $L1-1;
                }while(($AVANCE==1)&&($MATRIZ[$i][2]<49));
    }

    if ($ADMISION==1)
     {
        $MATRIZ[$i][16]=1;
       // echo "grabar movimiento del caballo";
    }

/*****************************FIN L2 *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;
//ECHO "<BR>";
//ECHO "PASO LINEA 1200=".$PAS0;
//echo "<br>";
//echo "caballo en nueva posicion".$MATRIZ[$i][2]."+10=".$MATRIZ[$i][2]+(10);
for ($M=1; $M <=32 ; $M++) 
{ 
    $ESCENA[$M][2][$PAS0]=$ESCENA[$M][2][$TEMPORAL];
}
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(10);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */

/***********************************INICIO L3********************************************** */
$LIMITE_CABALLO[1]=1;
$LIMITE_CABALLO[2]=9;
$LIMITE_CABALLO[3]=17;
$LIMITE_CABALLO[4]=15;
$LIMITE_CABALLO[5]=33;
$LIMITE_CABALLO[6]=41;
$LIMITE_CABALLO[7]=49;
$LIMITE_CABALLO[8]=57;
$LIMITE_CABALLO[9]=50;
$LIMITE_CABALLO[10]=51;
$LIMITE_CABALLO[11]=52;
$LIMITE_CABALLO[12]=53;
$LIMITE_CABALLO[13]=54;
$LIMITE_CABALLO[14]=55;
$LIMITE_CABALLO[15]=56;
$LIMITE_CABALLO[16]=58;
$LIMITE_CABALLO[17]=59;
$LIMITE_CABALLO[18]=60;
$LIMITE_CABALLO[19]=61;
$LIMITE_CABALLO[20]=62;
$LIMITE_CABALLO[21]=63;
$LIMITE_CABALLO[22]=64;

$AVANCE=1;
$L1=0;
/*******************ESTUDIO DEL CABALLO**************************************************************************************** */
$ADMISION=0;
if($MATRIZ[$i][3]==2)//PARA EL CABALLO=2
    {
                do
                {
                    $ADMISION=1;
                    
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                            //echo "<br>";
                            //ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]+(15*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]+(15))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                                $ADMISION=0;
                                //ECHO "COINCIDE ";
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                                $ADMISION=1;
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $AVANCE=0;
                        $L1++;
                        //ECHO "<BR>";
                        //echo "PARTE DE=".$MATRIZ[$i][2]."DEBERIA LLEGAR A:".$MATRIZ[$i][2]+(15) ;

                        for ($K=1; $K <=22 ; $K++)
                        { 
                            //ECHO "<BR>"; 
                           //echo "COMPARANDO".$MATRIZ[$i][2]."CON:".$LIMITE_CABALLO[$K];
                           if ($LIMITE_CABALLO[$K]==$MATRIZ[$i][2])
                           {
                            //ECHO "<BR>";
                            //ECHO "--PERO NO DEBERIA FUNCIONAR".$L1;
                            $ADMISION=0; 
                            //ECHO "<BR>";
                            $L1=$L1-1;
                            //$L1=0;
                            //$AVANCE=0;
                           }
                        }
                    }
           // echo "<br>";        
                        if (($MATRIZ[$i][2]+(10*$L1))>64) 
                        {
                            $AVANCE=0;
                            $ADMISION=0;
                            $L1=0;
                        }
           // echo $L1-1;
                }while(($AVANCE==1)&&($MATRIZ[$i][2]<49));
    }

    if ($ADMISION==1)
     {
        $MATRIZ[$i][17]=1;
       // echo "grabar movimiento del caballo";
    }

/*****************************FIN L3 *********************************************************************/

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */
$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 1316=".$PAS0;
$ALFA++;
//echo "<br>";
//echo "caballo en nueva posicion".$MATRIZ[$i][2]."+15=".$MATRIZ[$i][2]+(15);
for ($M=1; $M <=32 ; $M++) 
{ 
    $ESCENA[$M][2][$PAS0]=$ESCENA[$M][2][$TEMPORAL];
}
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(15);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
   
}

$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
echo "match especial caballo";
} 
/********************************************************************************************************************************************* */




/***********************************INICIO L4********************************************** */
$LIMITE_CABALLO[1]=1;
$LIMITE_CABALLO[2]=9;
$LIMITE_CABALLO[3]=17;
$LIMITE_CABALLO[4]=15;
$LIMITE_CABALLO[5]=33;
$LIMITE_CABALLO[6]=41;
$LIMITE_CABALLO[7]=49;
$LIMITE_CABALLO[8]=57;
$LIMITE_CABALLO[9]=2;
$LIMITE_CABALLO[10]=10;
$LIMITE_CABALLO[11]=18;
$LIMITE_CABALLO[12]=26;
$LIMITE_CABALLO[13]=34;
$LIMITE_CABALLO[14]=42;
$LIMITE_CABALLO[15]=50;
$LIMITE_CABALLO[16]=58;
$LIMITE_CABALLO[17]=59;
$LIMITE_CABALLO[18]=60;
$LIMITE_CABALLO[19]=61;
$LIMITE_CABALLO[20]=62;
$LIMITE_CABALLO[21]=63;
$LIMITE_CABALLO[22]=64;

$AVANCE=1;
$L1=0;
/*******************ESTUDIO DEL CABALLO**************************************************************************************** */
$ADMISION=0;
if($MATRIZ[$i][3]==2)//PARA EL CABALLO=2
    {
                do
                {
                    $ADMISION=1;
                    
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                            //echo "<br>";
                            //ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]+(6*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]+(6))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                                $ADMISION=0;
                                //ECHO "COINCIDE ";
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                                $ADMISION=1;
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $AVANCE=0;
                        $L1++;
                        //ECHO "<BR>";
                        //echo "PARTE DE=".$MATRIZ[$i][2]."DEBERIA LLEGAR A:".$MATRIZ[$i][2]+(6) ;

                        for ($K=1; $K <=22 ; $K++)
                        { 
                            //ECHO "<BR>"; 
                           //echo "COMPARANDO".$MATRIZ[$i][2]."CON:".$LIMITE_CABALLO[$K];
                           if ($LIMITE_CABALLO[$K]==$MATRIZ[$i][2])
                           {
                            //ECHO "<BR>";
                            //ECHO "--PERO NO DEBERIA FUNCIONAR".$L1;
                            $ADMISION=0; 
                            //ECHO "<BR>";
                            $L1=$L1-1;
                            //$L1=0;
                            //$AVANCE=0;
                           }
                        }
                    }
           // echo "<br>";        
                        if (($MATRIZ[$i][2]+(10*$L1))>64) 
                        {
                            $AVANCE=0;
                            $ADMISION=0;
                            $L1=0;
                        }
           // echo $L1-1;
                }while(($AVANCE==1)&&($MATRIZ[$i][2]<49));
    }

    if ($ADMISION==1)
     {
        $MATRIZ[$i][18]=1;
    }

/*****************************FIN L4 *********************************************************************/

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 1472=".$PAS0;
$ALFA++;

//echo "<br>";
//echo "caballo en nueva posicion".$MATRIZ[$i][2]."+6=".$MATRIZ[$i][2]+(6);
for ($M=1; $M <=32 ; $M++) 
{ 
    $ESCENA[$M][2][$PAS0]=$ESCENA[$M][2][$TEMPORAL];
}
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(6);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */


/************************************INICI0 L1B********************************************* */
$LIMITE_CABALLO[1]=1;
$LIMITE_CABALLO[2]=9;
$LIMITE_CABALLO[3]=17;
$LIMITE_CABALLO[4]=15;
$LIMITE_CABALLO[5]=33;
$LIMITE_CABALLO[6]=41;
$LIMITE_CABALLO[7]=49;
$LIMITE_CABALLO[8]=57;
$LIMITE_CABALLO[9]=10;
$LIMITE_CABALLO[10]=11;
$LIMITE_CABALLO[11]=12;
$LIMITE_CABALLO[12]=13;
$LIMITE_CABALLO[13]=14;
$LIMITE_CABALLO[14]=15;
$LIMITE_CABALLO[15]=16;
$LIMITE_CABALLO[16]=2;
$LIMITE_CABALLO[17]=3;
$LIMITE_CABALLO[18]=4;
$LIMITE_CABALLO[19]=5;
$LIMITE_CABALLO[20]=6;
$LIMITE_CABALLO[21]=7;
$LIMITE_CABALLO[22]=8;

$AVANCE=1;
$L1=0;
/*******************ESTUDIO DEL CABALLO**************************************************************************************** */
$ADMISION=0;
if($MATRIZ[$i][3]==2)//PARA EL CABALLO=2
    {
                do
                {
                    $ADMISION=1;
                    
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                            //echo "<br>";
                            //ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]-(17*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR PARTE DE " .$OTRO." LLEGARIA A :".$ILUSION;
                            if((($MATRIZ[$i][2]-(17))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                                $ADMISION=0;
                                //ECHO "COINCIDE ";
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                                $ADMISION=1;
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $AVANCE=0;
                        $L1++;
                       // ECHO "<BR>";
                       // echo "PARTE DE=".$MATRIZ[$i][2]."DEBERIA LLEGAR A:".$MATRIZ[$i][2]-(17*$L1) ;
                        //ECHO $MATRIZ[$i][2]+(17*$L1);
                        for ($K=1; $K <=22 ; $K++)
                        { 
                            //ECHO "<BR>"; 
                           //echo "COMPARANDO".$MATRIZ[$i][2]."CON:".$LIMITE_CABALLO[$K];
                           if ($LIMITE_CABALLO[$K]==$MATRIZ[$i][2])
                           {
                            //ECHO "<BR>";
                            //ECHO "-- PERO NO DEBERIA FUNCIONAR".$L1;
                            $ADMISION=0; 
                            //ECHO "<BR>";
                            $L1=$L1-1;
                            //$L1=0;
                            //$AVANCE=0;
                           }
                        }
                    }
           // echo "<br>";        
                        if (($MATRIZ[$i][2]-(17*$L1))<0) 
                        {
                            $AVANCE=0;
                            $ADMISION=0;
                            $L1=0;
                        }
           // echo $L1-1;
                }while(($AVANCE==1)&&($MATRIZ[$i][2]<48));
    }

    if ($ADMISION==1)
     {
        $MATRIZ[$i][19]=1;
    }

/*****************************FIN L1B *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 1588=".$PAS0;
$ALFA++;

//echo "<br>";
//echo "caballo en nueva posicion".$MATRIZ[$i][2]."-17=".$MATRIZ[$i][2]-(17);
for ($M=1; $M <=32 ; $M++) 
{ 
    $ESCENA[$M][2][$PAS0]=$ESCENA[$M][2][$TEMPORAL];
}
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(17);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */

/***********************************INICIO L2-B********************************************** */
$LIMITE_CABALLO[1]=1;
$LIMITE_CABALLO[2]=9;
$LIMITE_CABALLO[3]=17;
$LIMITE_CABALLO[4]=15;
$LIMITE_CABALLO[5]=33;
$LIMITE_CABALLO[6]=41;
$LIMITE_CABALLO[7]=49;
$LIMITE_CABALLO[8]=57;
$LIMITE_CABALLO[9]=2;
$LIMITE_CABALLO[10]=10;
$LIMITE_CABALLO[11]=18;
$LIMITE_CABALLO[12]=26;
$LIMITE_CABALLO[13]=34;
$LIMITE_CABALLO[14]=42;
$LIMITE_CABALLO[15]=50;
$LIMITE_CABALLO[16]=58;
$LIMITE_CABALLO[17]=3;
$LIMITE_CABALLO[18]=4;
$LIMITE_CABALLO[19]=5;
$LIMITE_CABALLO[20]=6;
$LIMITE_CABALLO[21]=7;
$LIMITE_CABALLO[22]=8;


$AVANCE=1;
$L1=0;
/*******************ESTUDIO DEL CABALLO**************************************************************************************** */
$ADMISION=0;
if($MATRIZ[$i][3]==2)//PARA EL CABALLO=2
    {
                do
                {
                    $ADMISION=1;
                    
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                            //echo "<br>";
                            //ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            //$ILUSION=$MATRIZ[$i][2]+(10*$L1);
                            //$OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]-(10))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                                $ADMISION=0;
                                //ECHO "COINCIDE ";
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                                $ADMISION=1;
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $AVANCE=0;
                        $L1++;
                        //ECHO "<BR>";
                        //echo "PARTE DE=".$MATRIZ[$i][2]."DEBERIA LLEGAR A:".$MATRIZ[$i][2]-(10) ;
                                           
                        for ($K=1; $K <=22 ; $K++)
                        { 
                            //ECHO "<BR>"; 
                           //echo "COMPARANDO".$MATRIZ[$i][2]."CON:".$LIMITE_CABALLO[$K];
                           if ($LIMITE_CABALLO[$K]==$MATRIZ[$i][2])
                           {
                            //ECHO "<BR>";
                            //ECHO "--PERO NO DEBERIA FUNCIONAR".$L1;
                            $ADMISION=0; 
                            //ECHO "<BR>";
                            $L1=$L1-1;
                            //$L1=0;
                            //$AVANCE=0;
                           }
                        }
                    }
           // echo "<br>";        
                        if (($MATRIZ[$i][2]-(10*$L1))<0) 
                        {
                            $AVANCE=0;
                            $ADMISION=0;
                            $L1=0;
                        }
           // echo $L1-1;
                }while(($AVANCE==1)&&($MATRIZ[$i][2]<49));
    }

    if ($ADMISION==1)
     {
        $MATRIZ[$i][20]=1;
    }

/*****************************FIN L2-B *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 1708=".$PAS0;
$ALFA++;
//echo "<br>";
//echo "caballo en nueva posicion".$MATRIZ[$i][2]."-10=".$MATRIZ[$i][2]-(10);
for ($M=1; $M <=32 ; $M++) 
{ 
    $ESCENA[$M][2][$PAS0]=$ESCENA[$M][2][$TEMPORAL];
}
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(10);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */



/***********************************INICIO L3-B********************************************** */
$LIMITE_CABALLO[1]=8;
$LIMITE_CABALLO[2]=16;
$LIMITE_CABALLO[3]=24;
$LIMITE_CABALLO[4]=32;
$LIMITE_CABALLO[5]=40;
$LIMITE_CABALLO[6]=48;
$LIMITE_CABALLO[7]=56;
$LIMITE_CABALLO[8]=64;
$LIMITE_CABALLO[9]=10;
$LIMITE_CABALLO[10]=11;
$LIMITE_CABALLO[11]=12;
$LIMITE_CABALLO[12]=13;
$LIMITE_CABALLO[13]=14;
$LIMITE_CABALLO[14]=15;
$LIMITE_CABALLO[15]=9;
$LIMITE_CABALLO[16]=2;
$LIMITE_CABALLO[17]=3;
$LIMITE_CABALLO[18]=4;
$LIMITE_CABALLO[19]=5;
$LIMITE_CABALLO[20]=6;
$LIMITE_CABALLO[21]=7;
$LIMITE_CABALLO[22]=1;

$AVANCE=1;
$L1=0;
/*******************ESTUDIO DEL CABALLO**************************************************************************************** */
$ADMISION=0;
if($MATRIZ[$i][3]==2)//PARA EL CABALLO=2
    {
                do
                {
                    $ADMISION=1;
                    
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                            //echo "<br>";
                            //ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]+(15*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]-(15))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                                $ADMISION=0;
                                //ECHO "COINCIDE ";
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                                $ADMISION=1;
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $AVANCE=0;
                        $L1++;
                        //ECHO "<BR>";
                        //echo "PARTE DE=".$MATRIZ[$i][2]."DEBERIA LLEGAR A:".$MATRIZ[$i][2]-(15) ;

                        for ($K=1; $K <=22 ; $K++)
                        { 
                            //ECHO "<BR>"; 
                           //echo "COMPARANDO".$MATRIZ[$i][2]."CON:".$LIMITE_CABALLO[$K];
                           if ($LIMITE_CABALLO[$K]==$MATRIZ[$i][2])
                           {
                            //ECHO "<BR>";
                            //ECHO "--PERO NO DEBERIA FUNCIONAR".$L1;
                            $ADMISION=0; 
                            //ECHO "<BR>";
                            $L1=$L1-1;
                            //$L1=0;
                            //$AVANCE=0;
                           }
                        }
                    }
           // echo "<br>";        
                        if (($MATRIZ[$i][2]+(10*$L1))<1) 
                        {
                            $AVANCE=0;
                            $ADMISION=0;
                            $L1=0;
                        }
           // echo $L1-1;
                }while(($AVANCE==1)&&($MATRIZ[$i][2]<64));
    }

    if ($ADMISION==1)
     {
        $MATRIZ[$i][21]=1;
    }

/*****************************FIN L3-B *********************************************************************/

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 1827=".$PAS0;
$ALFA++;
//echo "<br>";
//echo "caballo en nueva posicion".$MATRIZ[$i][2]-(15);
for ($M=1; $M <=32 ; $M++) 
{ 
    $ESCENA[$M][2][$PAS0]=$ESCENA[$M][2][$TEMPORAL];
}
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(15);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */

/***********************************INICIO L4-B********************************************** */
$LIMITE_CABALLO[1]=1;
$LIMITE_CABALLO[2]=2;
$LIMITE_CABALLO[3]=3;
$LIMITE_CABALLO[4]=4;
$LIMITE_CABALLO[5]=5;
$LIMITE_CABALLO[6]=6;
$LIMITE_CABALLO[7]=7;
$LIMITE_CABALLO[8]=8;
$LIMITE_CABALLO[9]=15;
$LIMITE_CABALLO[10]=23;
$LIMITE_CABALLO[11]=31;
$LIMITE_CABALLO[12]=39;
$LIMITE_CABALLO[13]=47;
$LIMITE_CABALLO[14]=55;
$LIMITE_CABALLO[15]=63;
$LIMITE_CABALLO[16]=16;
$LIMITE_CABALLO[17]=24;
$LIMITE_CABALLO[18]=32;
$LIMITE_CABALLO[19]=40;
$LIMITE_CABALLO[20]=48;
$LIMITE_CABALLO[21]=56;
$LIMITE_CABALLO[22]=64;

$AVANCE=1;
$L1=0;
/*******************ESTUDIO DEL CABALLO**************************************************************************************** */
$ADMISION=0;
if($MATRIZ[$i][3]==2)//PARA EL CABALLO=2
    {
                do
                {
                    $ADMISION=1;
                    
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                            //echo "<br>";
                            //ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]-(6*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]-(6))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                                $ADMISION=0;
                                //ECHO "COINCIDE ";
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                                $ADMISION=1;
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $AVANCE=0;
                        $L1++;
                        //ECHO "<BR>";
                        //echo "PARTE DE=".$MATRIZ[$i][2]."DEBERIA LLEGAR A:".$MATRIZ[$i][2]-(6) ;

                        for ($K=1; $K <=22 ; $K++)
                        { 
                            //ECHO "<BR>"; 
                           //echo "COMPARANDO".$MATRIZ[$i][2]."CON:".$LIMITE_CABALLO[$K];
                           if ($LIMITE_CABALLO[$K]==$MATRIZ[$i][2])
                           {
                            //ECHO "<BR>";
                            //ECHO "--PERO NO DEBERIA FUNCIONAR".$L1;
                            $ADMISION=0; 
                            //ECHO "<BR>";
                            $L1=$L1-1;
                            //$L1=0;
                            //$AVANCE=0;
                           }
                        }
                    }
           // echo "<br>";        
                        if (($MATRIZ[$i][2]+(10*$L1))<1) 
                        {
                            $AVANCE=0;
                            $ADMISION=0;
                            $L1=0;
                        }
           // echo $L1-1;
                }while(($AVANCE==1)&&($MATRIZ[$i][2]<64));
    }

    if ($ADMISION==1)
     {
        $MATRIZ[$i][22]=1;
    }

/*****************************FIN L4-B *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 1943=".$PAS0;
$ALFA++;
//echo "<br>";
//echo "caballo en nueva posicion".$MATRIZ[$i][2]-(6);
for ($M=1; $M <=32 ; $M++) 
{ 
    $ESCENA[$M][2][$PAS0]=$ESCENA[$M][2][$TEMPORAL];
}
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(6);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
}
/********************************************************************************************************************************************* */
/***********************ANALISIS DEL REY 1************************************* */
$AVANCE=1;
$L1=0;
/*************AVANCE REY******************************************************************************************************* */
if($MATRIZ[$i][3]==4)//PARA REY=4 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]+(8*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]+(8*$L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $L1++;
                        $ILUSION=$MATRIZ[$i][2]+(8*$L1);
                    }
           // echo "<br>";        
           // echo "se ha determinado a L1=";
           // echo $L1-1;

                }while(($AVANCE==1)&&($ILUSION<64));

         if ($MATRIZ[$i][2]>56) {
            $L1=0;
         }
                
         $L1=$L1-1;
         if ($L1<=0)
          {
             $L1=0;
         }
         else {
             $L1=1;
         }
     $MATRIZ[$i][7]=$L1;
    }

/*********************************FIN AVANCE FRONTAL REY *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 2019=".$PAS0;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(8*$ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */

$AVANCE=1;
$L1=0;
/*************RETROCESO REY******************************************************************************************************* */
if($MATRIZ[$i][3]==4)//PARA REY=4 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            //$ILUSION=$MATRIZ[$i][2]+(8*$L1);
                            //$OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]-(8*$L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $L1++;
                        $ILUSION=$MATRIZ[$i][2]-(8*$L1);
                    }
           // echo "<br>";        
           // echo "se ha determinado a L1=";
           // echo $L1-1;

                }while(($AVANCE==1)&&($ILUSION>0));

         if ($MATRIZ[$i][2]<9) {
            $L1=0;
         }
                
         $L1=$L1-1;
         if ($L1<=0)
          {
             $L1=0;
         }
         else {
             $L1=1;
         }
     $MATRIZ[$i][8]=$L1;
    }

/*********************************FIN RETROCESO REY *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 2085=".$PAS0;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(8*$ALFA);
HISTORIAL();
ECHO "HOLA PREFIJO REY(".$PAS0.")=";
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */


$AVANCE=1;
$L1=0;
$LIMITE_REY[1]=8 ;
$LIMITE_REY[2]=16 ;
$LIMITE_REY[3]=24 ;
$LIMITE_REY[4]=32 ;
$LIMITE_REY[5]=40 ;
$LIMITE_REY[6]=48 ;
$LIMITE_REY[7]=56 ;
$LIMITE_REY[8]=64 ;
/*************AVANCE DERECHA REY******************************************************************************************************* */
if($MATRIZ[$i][3]==4)//PARA REY=4 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]+($L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]+($L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $L1++;
                        $ILUSION=$MATRIZ[$i][2]+(8*$L1);
                    }
           // echo "<br>";        
           // echo "se ha determinado a L1=";
           // echo $L1-1;

                }while(($AVANCE==1)&&($ILUSION<64));

         for ($K=1; $K <=8 ; $K++) 
         {
            if ($MATRIZ[$i][2]==$LIMITE_REY[$K]) 
            {
                $L1=0;
             }
         }       
                
         $L1=$L1-1;
         if ($L1<=0)
          {
             $L1=0;
         }
         else {
             $L1=1;
         }
     $MATRIZ[$i][9]=$L1;
    }

/*********************************FIN AVANCE DERECHA REY *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 2169=".$PAS0;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+($ALFA);
HISTORIAL();
ECHO "HOLA PREFIJO REY(".$PAS0.")=";
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */

$AVANCE=1;
$L1=0;
$LIMITE_REY[1]=1 ;
$LIMITE_REY[2]=9 ;
$LIMITE_REY[3]=17 ;
$LIMITE_REY[4]=25 ;
$LIMITE_REY[5]=33 ;
$LIMITE_REY[6]=41 ;
$LIMITE_REY[7]=49 ;
$LIMITE_REY[8]=57 ;
/*************IZQUIERDA REY******************************************************************************************************* */
if($MATRIZ[$i][3]==4)//PARA REY=4 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]-($L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]-($L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $L1++;
                        $ILUSION=$MATRIZ[$i][2]-($L1);
                    }
           // echo "<br>";        
           // echo "se ha determinado a L1=";
           // echo $L1-1;

                }while(($AVANCE==1)&&($ILUSION>1));

         for ($K=1; $K <=8 ; $K++) 
         {
            if ($MATRIZ[$i][2]==$LIMITE_REY[$K]) 
            {
                $L1=0;
             }
         }       
                
         $L1=$L1-1;
         if ($L1<=0)
          {
             $L1=0;
         }
         else {
             $L1=1;
         }
     $MATRIZ[$i][10]=$L1;
    }

/*********************************FIN IZQUIERDA REY *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 2249=".$PAS0;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-($ALFA);
HISTORIAL();
ECHO "HOLA PREFIJO REY(".$PAS0.")=";
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */


$AVANCE=1;
$L1=0;
$LIMITE_REY[1]=8 ;
$LIMITE_REY[2]=16 ;
$LIMITE_REY[3]=24 ;
$LIMITE_REY[4]=32 ;
$LIMITE_REY[5]=40 ;
$LIMITE_REY[6]=48 ;
$LIMITE_REY[7]=56 ;
$LIMITE_REY[8]=57 ;
$LIMITE_REY[9]=58 ;
$LIMITE_REY[10]=59 ;
$LIMITE_REY[11]=60 ;
$LIMITE_REY[12]=61 ;
$LIMITE_REY[13]=62 ;
$LIMITE_REY[14]=63 ;
$LIMITE_REY[15]=64 ;

/*************DIAGONAL NEGATIVA BAJA REY******************************************************************************************************* */
if($MATRIZ[$i][3]==4)//PARA REY=4 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]+(9*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]+(9*$L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $L1++;
                        $ILUSION=$MATRIZ[$i][2]+(9*$L1);
                    }
           // echo "<br>";        
           // echo "se ha determinado a L1=";
           // echo $L1-1;

                }while(($AVANCE==1)&&($ILUSION<57));

         for ($K=1; $K <=15 ; $K++) 
         {
            if ($MATRIZ[$i][2]==$LIMITE_REY[$K]) 
            {
                $L1=0;
             }
         }       
                
         $L1=$L1-1;
         if ($L1<=0)
          {
             $L1=0;
         }
         else {
             $L1=1;
         }
     $MATRIZ[$i][11]=$L1;
    }

/*********************************FIN DIAGONAL BAJA NEGATIVA REY *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 2338=".$PAS0;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(9*$ALFA);
HISTORIAL();
ECHO "HOLA PREFIJO REY(".$PAS0.")=";
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */

$AVANCE=1;
$L1=0;
$LIMITE_REY[1]=1 ;
$LIMITE_REY[2]=2 ;
$LIMITE_REY[3]=3 ;
$LIMITE_REY[4]=4 ;
$LIMITE_REY[5]=5 ;
$LIMITE_REY[6]=6 ;
$LIMITE_REY[7]=7 ;
$LIMITE_REY[8]=8 ;
$LIMITE_REY[9]=9 ;
$LIMITE_REY[10]=17 ;
$LIMITE_REY[11]=25 ;
$LIMITE_REY[12]=33 ;
$LIMITE_REY[13]=41 ;
$LIMITE_REY[14]=49 ;
$LIMITE_REY[15]=57 ;

/*************DIAGONAL NEGATIVA SUBE REY******************************************************************************************************* */
if($MATRIZ[$i][3]==4)//PARA REY=4 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]-(9*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]-(9*$L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $L1++;
                        $ILUSION=$MATRIZ[$i][2]-(9*$L1);
                    }
           // echo "<br>";        
           // echo "se ha determinado a L1=";
           // echo $L1-1;

                }while(($AVANCE==1)&&($ILUSION>0));

         for ($K=1; $K <=15 ; $K++) 
         {
            if ($MATRIZ[$i][2]==$LIMITE_REY[$K]) 
            {
                $L1=0;
             }
         }       
                
         $L1=$L1-1;
         if ($L1<=0)
          {
             $L1=0;
         }
         else {
             $L1=1;
         }
     $MATRIZ[$i][12]=$L1;
    }

/*********************************FIN DIAGONAL BAJA NEGATIVA REY *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 2424=".$PAS0;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(9*$ALFA);
HISTORIAL();
ECHO "HOLA PREFIJO REY(".$PAS0.")=";
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */

$AVANCE=1;
$L1=0;
$LIMITE_REY[1]=1 ;
$LIMITE_REY[2]=9 ;
$LIMITE_REY[3]=17 ;
$LIMITE_REY[4]=25 ;
$LIMITE_REY[5]=33 ;
$LIMITE_REY[6]=41 ;
$LIMITE_REY[7]=49 ;
$LIMITE_REY[8]=57 ;
$LIMITE_REY[9]=58 ;
$LIMITE_REY[10]=59 ;
$LIMITE_REY[11]=60 ;
$LIMITE_REY[12]=61 ;
$LIMITE_REY[13]=62 ;
$LIMITE_REY[14]=63 ;
$LIMITE_REY[15]=64 ;

/*************DIAGONAL POSITIVA BAJA REY******************************************************************************************************* */
if($MATRIZ[$i][3]==4)//PARA REY=4 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]+(7*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]+(7*$L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $L1++;
                        $ILUSION=$MATRIZ[$i][2]+(7*$L1);
                    }
           // echo "<br>";        
           // echo "se ha determinado a L1=";
           // echo $L1-1;

                }while(($AVANCE==1)&&($ILUSION<64));

         for ($K=1; $K <=15 ; $K++) 
         {
            if ($MATRIZ[$i][2]==$LIMITE_REY[$K]) 
            {
                $L1=0;
             }
         }       
                
         $L1=$L1-1;
         if ($L1<=0)
          {
             $L1=0;
         }
         else {
             $L1=1;
         }
     $MATRIZ[$i][13]=$L1;
    }


/*********************************FIN DIAGONAL POSITIVA BAJA NEGATIVA REY *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 2415=".$PAS0;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(7*$ALFA);
HISTORIAL();
ECHO "HOLA PREFIJO REY(".$PAS0.")=";
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */


$AVANCE=1;
$L1=0;
$LIMITE_REY[1]=1 ;
$LIMITE_REY[2]=2 ;
$LIMITE_REY[3]=3 ;
$LIMITE_REY[4]=4 ;
$LIMITE_REY[5]=5 ;
$LIMITE_REY[6]=6 ;
$LIMITE_REY[7]=7 ;
$LIMITE_REY[8]=8 ;
$LIMITE_REY[9]=9 ;
$LIMITE_REY[10]=17 ;
$LIMITE_REY[11]=25 ;
$LIMITE_REY[12]=33 ;
$LIMITE_REY[13]=41 ;
$LIMITE_REY[14]=49 ;
$LIMITE_REY[15]=57 ;

/*************DIAGONAL POSITIVA SUBE REY******************************************************************************************************* */
if($MATRIZ[$i][3]==4)//PARA REY=4 
    {
                do
                {
                    for($j=1; $j <=32 ; $j++)
                    {
                        if($j!=$i)
                        {
                           // echo "<br>";
                           // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                            $ILUSION=$MATRIZ[$i][2]-(7*$L1);
                            $OTRO= $MATRIZ[$j][2];
                            //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                            if((($MATRIZ[$i][2]-(7*$L1))==$MATRIZ[$j][2]))
                            {
                                $AVANCE=0;
                               if ($MATRIZ[$j][4]!=$MATRIZ[$i][4])
                                {
                                $L1++; 
                               }
                            }
                        }
                    }
                    if($AVANCE==1)
                    {
                        $L1++;
                        $ILUSION=$MATRIZ[$i][2]-(7*$L1);
                    }


                    
           // echo "<br>";        
           // echo "se ha determinado a L1=";
           // echo $L1-1;

                }while(($AVANCE==1)&&($ILUSION>0));

         for ($K=1; $K <=15 ; $K++) 
         {
            if ($MATRIZ[$i][2]==$LIMITE_REY[$K]) 
            {
                $L1=0;
             }
         }       
                
         $L1=$L1-1;
         if ($L1<=0)
          {
             $L1=0;
         }
         else {
             $L1=1;
         }
     $MATRIZ[$i][14]=$L1;
    }
/*********************************FIN DIAGONAL POSITIVA SUBE  REY *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 2606=".$PAS0;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(7*$ALFA);
HISTORIAL();
ECHO "HOLA PREFIJO REY(".$PAS0.")=";
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */

/**************************************ANALISIS DE PEONES************************************************************* */
$AVANCE=1;
$L1=1;
//$CORONA=0;
$LIMITE_IZQUIERDO[1]=9;
$LIMITE_IZQUIERDO[2]=17;
$LIMITE_IZQUIERDO[3]=25;
$LIMITE_IZQUIERDO[4]=33;
$LIMITE_IZQUIERDO[5]=41;
$LIMITE_IZQUIERDO[6]=49;
$LIMITE_IZQUIERDO[7]=57;

$LIMITE_DERECHO[1]=16;
$LIMITE_DERECHO[2]=24;
$LIMITE_DERECHO[3]=32;
$LIMITE_DERECHO[4]=40;
$LIMITE_DERECHO[5]=48;
$LIMITE_DERECHO[6]=56;
$LIMITE_DERECHO[7]=64;


if ($MATRIZ[$i][3]==6)
 {
        if($MATRIZ[$i][4]==1)
        {
            $CORONA[1]=57;
            $CORONA[2]=58;
            $CORONA[3]=59;
            $CORONA[4]=60;
            $CORONA[5]=61;
            $CORONA[6]=62;
            $CORONA[7]=63;
            $CORONA[8]=64;
            for ($K=1; $K <=8 ; $K++) 
            { 
                if ($MATRIZ[$i][2]==$CORONA[$K]) 
                {
                    $MATRIZ[$i][3]=5;
                    ECHO "CORONA";
                    GOTO ARRANQUE;
                }
            }
        }    
    } 


if ($MATRIZ[$i][3]==6)
 {

    if($MATRIZ[$i][4]==1)
    {
        //ECHO "<BR>";
        //ECHO "ANALISIS PEON";
        $INICI0_PEON[1]=9;
        $INICI0_PEON[2]=10;
        $INICI0_PEON[3]=11;
        $INICI0_PEON[4]=12;
        $INICI0_PEON[5]=13;
        $INICI0_PEON[6]=14;
        $INICI0_PEON[7]=15;
        $INICI0_PEON[8]=16;

        do
        {
            for($j=1; $j <=32 ; $j++)
            {
                if($j!=$i)
                {
                   // echo "<br>";
                   // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                    $ILUSION=$MATRIZ[$i][2]+(8*$L1);
                    $OTRO= $MATRIZ[$j][2];
                    //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                    if((($MATRIZ[$i][2]+(8*$L1))==$MATRIZ[$j][2]))
                    {
                        $AVANCE=0;                  
                    }
                }
            }
            if($AVANCE==1)
            {
                $L1++;
                $ILUSION=$MATRIZ[$i][2]+(8*$L1);

                if ($L1==2)
                 {
                    $AVANCE=0;
                        for ($K=1; $K <=8 ; $K++)
                         { 
                            $L1=1;
                          if ($MATRIZ[$i][2]==$INICI0_PEON[$K])
                           {
                            $L1=2;
                            $K=8;
                          }  
                            for($P=1; $P <=32 ; $P++)
                            {
                                if ($P!=$i) 
                                {
                                    if($MATRIZ[$i][2]+(8*$L1)==$MATRIZ[$P][2])
                                    {
                                        $L1=1;                  
                                    }
                                }
                            }
                        }
                }
            }

        }while(($AVANCE==1)&&($ILUSION<64));

        $MATRIZ[$i][7]=$L1;
        //ECHO "PUEDE AVANZAR ".$L1."HASTA ".$ILUSION;

/**********************************************FIN ANALISIS MOVIMIENTO********************************** */
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
//ECHO "MODIFICANDO peon".$i;
    
$PAS0=$PAS0+1;
$ALFA++;
for ($M=1; $M <=32 ; $M++) 
{ 
    $ESCENA[$M][2][$PAS0]=$ESCENA[$M][2][$TEMPORAL];
}

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(8*$ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
//ECHO "a la posicion".$MATRIZ[$i][2]+(8*$ALFA);
//echo "paso=".$PAS0;
} 
/********************************************************************************************************************************************* */
        $L1=0;
        for($j=1; $j <=32 ; $j++)
        {
            if($j!=$i)
            {
                if(($MATRIZ[$i][2]+9)==$MATRIZ[$j][2])
                {
                    if($MATRIZ[$j][4]==2)
                        {
                            $L1=1;
                            for ($K=1; $K <=7 ; $K++) 
                            { 
                                if ($MATRIZ[$i][2]==($LIMITE_DERECHO[$K])) 
                                {
                                  $L1=0;
                                  $K=7;  
                                }
                            }
                        }
                }
            }
        }
        $MATRIZ[$i][11]=$L1;
        $L1=0;
        
        for($j=1; $j <=32 ; $j++)
        {
            if($j!=$i)
            {
                if(($MATRIZ[$i][2]+7)==$MATRIZ[$j][2])
                {
                    if($MATRIZ[$j][4]==2)
                        {
                            $L1=1;
                            for ($K=1; $K <=7 ; $K++) 
                            { 
                                if ($MATRIZ[$i][2]==($LIMITE_IZQUIERDO[$K])) 
                                {
                                  $L1=0;
                                  $K=7;  
                                }
                            }
                        }
                }
            }
        }
        $MATRIZ[$i][13]=$L1;

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 2809=".$PAS0;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(9*$ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;

} 
/********************************************************************************************************************************************* */

    }
    

    if($MATRIZ[$i][4]==2)
    {
        $INICI0_PEON[1]=49;
        $INICI0_PEON[2]=50;
        $INICI0_PEON[3]=51;
        $INICI0_PEON[4]=52;
        $INICI0_PEON[5]=53;
        $INICI0_PEON[6]=54;
        $INICI0_PEON[7]=55;
        $INICI0_PEON[8]=56;


        do
        {
            for($j=1; $j <=32 ; $j++)
            {
                if($j!=$i)
                {
                   // echo "<br>";
                   // ECHO "COMPARANDO MATRIZ ".$i."2"."CON LA MATRIZ".$j."2";
                    $ILUSION=$MATRIZ[$i][2]-(8*$L1);
                    $OTRO= $MATRIZ[$j][2];
                    //echo "ES DECIR  " .$ILUSION." CON :".$OTRO;
                    if((($MATRIZ[$i][2]-(8*$L1))==$MATRIZ[$j][2]))
                    {
                        $AVANCE=0;                  
                    }
                }
            }
            if($AVANCE==1)
            {
                $L1++;
                $ILUSION=$MATRIZ[$i][2]-(8*$L1);

                if ($L1==2)
                 {
                    $AVANCE=0;
                        for ($K=1; $K <=8 ; $K++)
                         { 
                            $L1=1;
                          if ($MATRIZ[$i][2]==$INICI0_PEON[$K])
                           {
                            $L1=2;
                            $K=8;
                          }  
                            for($P=1; $P <=32 ; $P++)
                            {
                                if ($P!=$i) 
                                {
                                    if($MATRIZ[$i][2]-(8*$L1)==$MATRIZ[$P][2])
                                    {
                                        $L1=1;                  
                                    }
                                }
                            }
                        }
                }
            }

        }while(($AVANCE==1)&&($ILUSION>0));

        $MATRIZ[$i][8]=$L1;

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 2890=".$PAS0;
$ALFA++;
for ($M=1; $M <=32 ; $M++) 
{ 
    $ESCENA[$M][2][$PAS0]=$ESCENA[$M][2][$TEMPORAL];
}

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(8*$ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */



        $L1=0;

        for($j=1; $j <=32 ; $j++)
        {
            if($j!=$i)
            {
                if(($MATRIZ[$i][2]-9)==$MATRIZ[$j][2])
                {
                    if($MATRIZ[$j][4]==1)
                        {
                            $L1=1;
                            for ($K=1; $K <=7 ; $K++) 
                            { 
                                if ($MATRIZ[$i][2]==($LIMITE_IZQUIERDO[$K])) 
                                {
                                  $L1=0;
                                  $K=7;  
                                }
                            }
                        }
                }
            }
        }


        $MATRIZ[$i][12]=$L1;

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 2938=".$PAS0;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(9*$ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */


        $L1=0;

        for($j=1; $j <=32 ; $j++)
        {
            if($j!=$i)
            {
                if(($MATRIZ[$i][2]-7)==$MATRIZ[$j][2])
                {
                    if($MATRIZ[$j][4]==1)
                        {
                            $L1=1;
                            for ($K=1; $K <=7 ; $K++) 
                            { 
                                if ($MATRIZ[$i][2]==($LIMITE_DERECHO[$K])) 
                                {
                                  $L1=0;
                                  $K=7;  
                                }
                            }
                        }
                }
            }
        }


        $MATRIZ[$i][14]=$L1;
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
//ECHO "<BR>";
//ECHO "PASO LINEA 2978=".$PAS0;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(7*$ALFA);
HISTORIAL();
for ($G=1; $G <$COLUMNA ; $G++) 
{ 
    //$HISTORIA[$PAS0+$FIN][$G]=$PREFIJO[$G];
    $HISTORIA[$TABULADOR][$G]=$PREFIJO[$G];
    ECHO $PREFIJO[$G]."-";
}
$HISTORIA[$TABULADOR][$COLUMNA]=$PAS0;
$TABULADOR++;
ECHO $PAS0;
} 
/********************************************************************************************************************************************* */



    }    
}

/*************************MUESTRA DE RESULTADOS*********************************************************/
echo "<br>"; 

if ($i==1) {
    # code...
    ECHO "TORRE BANDO:".$TURNO;
}

if ($i==2) {
    # code...
    ECHO "CABALLO BANDO:".$TURNO;
}

if ($i==3) {
    # code...
    ECHO "ALFIL BANDO:".$TURNO;
}

if ($i==4) {
    # code...
    ECHO "REY BANDO:".$TURNO;
}

if ($i==5) {
    # code...
    ECHO "REINA BANDO:".$TURNO;
}

if ($i==6) {
    # code...
    ECHO "ALFIL BANDO:".$TURNO;
}

if ($i==7) {
    # code...
    ECHO "CABALLO BANDO:".$TURNO;
}

if ($i==8) {
    # code...
    ECHO "TORRE BANDO:".$TURNO;
}

if ($i==9) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==10) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==11) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==12) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==13) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==14) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==15) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==16) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}


if ($i==17) {
    # code...
    ECHO "TORRE BANDO:".$TURNO;
}

if ($i==18) {
    # code...
    ECHO "CABALLO BANDO:".$TURNO;
}

if ($i==19) {
    # code...
    ECHO "ALFIL BANDO:".$TURNO;
}

if ($i==20) {
    # code...
    ECHO "REY BANDO:".$TURNO;
}

if ($i==21) {
    # code...
    ECHO "REINA BANDO:".$TURNO;
}

if ($i==22) {
    # code...
    ECHO "ALFIL BANDO:".$TURNO;
}

if ($i==23) {
    # code...
    ECHO "CABALLO BANDO:".$TURNO;
}

if ($i==24) {
    # code...
    ECHO "TORRE BANDO:".$TURNO;
}

if ($i==25) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==26) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==27) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==28) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==29) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==30) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==31) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

if ($i==32) {
    # code...
    ECHO "PEON BANDO:".$TURNO;
}

//echo " LINEA=";
//echo $i;

for ($k=7; $k <=22 ; $k++)
 { 
    echo " =>";
    echo "L".($k-6)."=";
    echo $MATRIZ[$i][$k];
   // echo "grabar";
   $TOTAL=$TOTAL+$MATRIZ[$i][$k];
}

ECHO "<BR>";
echo "_________________________________________________________________________________________________________________________________________________________";
echo $TOTAL;
//echo "grabar";


/*
echo " =>";
echo "L1=";
echo $MATRIZ[$i][7];
echo "--Y  a L2=";
echo $MATRIZ[$i][8];
echo "--Y  a L3=";
echo $MATRIZ[$i][9];
echo "--Y  a L4=";
echo $MATRIZ[$i][10];
echo "--Y  a L5=";
echo $MATRIZ[$i][11];
echo "--Y  a L6=";
echo $MATRIZ[$i][12];
echo "--Y  a L7=";
echo $MATRIZ[$i][13];
echo "--Y  a L8=";
echo $MATRIZ[$i][14];

echo "--Y  a L9=";
echo $MATRIZ[$i][15];

echo "--Y  a L10=";
echo $MATRIZ[$i][16];

echo "--Y  a L11=";
echo $MATRIZ[$i][17];


echo "--Y  a L12=";
echo $MATRIZ[$i][18];

echo "--Y  a L13=";
echo $MATRIZ[$i][19];

echo "--Y  a L14=";
echo $MATRIZ[$i][20];

echo "--Y  a L15=";
echo $MATRIZ[$i][21];

echo "--Y  a L16=";
echo $MATRIZ[$i][22];
ECHO "<BR>";
echo "_________________________________________________________________________________________________________________________________________________________";
/***************************************************************************************************************************************************************/
}
/*************************************************************************** */
/**************************************************************************** */
}//FIN DEL FOR

ECHO "<BR>";
ECHO "TOTAL POSIBLES MOVIMIENTOS=".$TOTAL;
ECHO "<BR>";
ECHO "SE TIENEN ESTUDIADAS=".$PAS0;

echo "________________________________________________________________";
ECHO "<br>";
echo "nueva iteraccion ";
/*$TURNO++;

if ($TURNO==3) 
{
    $TURNO=1; 
}

/*
$FISICA++;
if ($FISICA<2) 
{ 
    $PISO++;
    goto INICIO;
}

*/

/*FINAL PROCESO CALCULO DE MATRIZ********************************************************* */

/*AJUSTE DE LA MATRIZ HISTORIA*/
$HISTORIA[$INICIO-1][1]=16;
$HISTORIA[$FIN+1][1]=4;

$HISTORIA[$TABULADOR][1]=8;
//$TABULADOR++;
/***************SE MUESTRA LA MATRIZ HISTORIA****************************** */
//echo "<br>";
$BIN=1;
while ($HISTORIA[$BIN][1]!=8) 
{
    $C=1;
    while ($HISTORIA[$BIN][$C]!=0) 
    {
        //ECHO "-".$HISTORIA[$BIN][$C];   
        $C++; 
    }
    //echo "<br>";
$BIN++;
}

$C=1;
while ($HISTORIA[$BIN][$C]!=0) 
{
    //ECHO "-".$HISTORIA[$BIN][$C];   
    $C++; 
}

/************************************************** */
$LECTURA++;
$TEMPORAL=$INICIO+$LECTURA;
}

$SEGUIR++;

$TURNO++;

if ($TURNO==3) 
{
    $TURNO=1; 
}





if ($SEGUIR<=2)
 {
    $TABULADOR++;
    
    GOTO INICIO;
}

/*
for ($R=1; $R <=$PAS0 ; $R++)
 { 
    ECHO "<BR>";
    ECHO $R;
    ECHO "________________________________________________________________________________________________________________________________________________";
    ECHO "<BR>";

for ($S=1; $S <=32 ; $S++)
 { 
    ECHO "<BR>";
    echo " =>";    
    echo $ESCENA[$S][2][$R];
  
    if ($S==1) {
        # code...
        ECHO "TORRE";
    }
    
    if ($S==2) {
        # code...
        ECHO "CABALLO";
    }
    
    if ($S==3) {
        # code...
        ECHO "ALFIL";
    }
    
    if ($S==4) {
        # code...
        ECHO "REY";
    }
    
    if ($S==5) {
        # code...
        ECHO "REINA";
    }
    
    if ($S==6) {
        # code...
        ECHO "ALFIL";
    }
    
    if ($S==7) {
        # code...
        ECHO "CABALLO";
    }
    
    if ($S==8) {
        # code...
        ECHO "TORRE";
    }
    
    if ($S==9) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==10) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==11) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==12) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==13) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==14) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==15) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==16) {
        # code...
        ECHO "PEON";
    }
    
    
    if ($S==17) {
        # code...
        ECHO "TORRE";
    }
    
    if ($S==18) {
        # code...
        ECHO "CABALLO";
    }
    
    if ($S==19) {
        # code...
        ECHO "ALFIL";
    }
    
    if ($S==20) {
        # code...
        ECHO "REY";
    }
    
    if ($S==21) {
        # code...
        ECHO "REINA";
    }
    
    if ($S==22) {
        # code...
        ECHO "ALFIL";
    }
    
    if ($S==23) {
        # code...
        ECHO "CABALLO";
    }
    
    if ($S==24) {
        # code...
        ECHO "TORRE";
    }
    
    if ($S==25) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==26) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==27) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==28) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==29) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==30) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==31) {
        # code...
        ECHO "PEON";
    }
    
    if ($S==32) {
        # code...
        ECHO "PEON";
    }
    
}

}

*/
function HISTORIAL()
{
ECHO "<BR>";
//ECHO "HOLA PREFIJO =";
}

?>