<?php 
ECHO "ANALISIS DE DATOS ";

for ($I=1; $I <=32 ; $I++) { 
    
    for ($J=1; $J <=5 ; $J++) { 
        # code...
        for ($K=1; $K<=500 ; $K++) { 
            # code...
            $ESCENA[$I][$J][$K]=0;
        }
    }
}



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
$MATRIZ[1][2]=1;//ORIGINALMENTE 1  //TORRE
$MATRIZ[2][2]=2;//ORIGINALMENTE 2  //CABALLO
$MATRIZ[3][2]=3;//ORIGINALMENTE 3 //ALFIL
$MATRIZ[4][2]=4;//ORIGINALMENTE 4//REY
$MATRIZ[5][2]=5;//ORIGINALMENTE 5//REINA
$MATRIZ[6][2]=6;//ORIGINALMENTE 6//ALFIL
$MATRIZ[7][2]=7;//ORIGINALMENTE 7//CABALLO
$MATRIZ[8][2]=8;//ORIGINALMENTE 8//TORRE
$MATRIZ[9][2]=9; //originalmente era 9 //PEON
$MATRIZ[10][2]=10;//ORIGINALMENTE10   //PEON
$MATRIZ[11][2]=11;//ORIGINALMENTE 11   //PEON
$MATRIZ[12][2]=12;//ORIGINALMENTE 12   //PEON
$MATRIZ[13][2]=13;//ORIGINALMENTE 13  //PEON
$MATRIZ[14][2]=14;//ORIGINALMENTE 14  //PEON
$MATRIZ[15][2]=15;//ORIGINALMENTE 15 //PEON
$MATRIZ[16][2]=16;//ORIGINALMENTE 16 //PEON
$MATRIZ[17][2]=57;////ORIGINALMENTE 57//TORRE
$MATRIZ[18][2]=58;//ORIGINALMENTE 58 //CABALLO
$MATRIZ[19][2]=59;//ORIGINALMENTE 59 //ALFIL
$MATRIZ[20][2]=60;//ORIGINALMENTE 60//REY
$MATRIZ[21][2]=61;//ORIGINALMENTE 61 //REINA
$MATRIZ[22][2]=62;//ORIGINALMENTE 62 //ALFIL
$MATRIZ[23][2]=63;////ORIGINALMENTE 63//CABALLO
$MATRIZ[24][2]=64;//ORIGINALMENTE 64//TORRE
$MATRIZ[25][2]=49;//ORIGINALMENTE 49 //PEON
$MATRIZ[26][2]=50;//ORIGINALMENTE 50 //PEON
$MATRIZ[27][2]=51;//ORIGINALMENTE 51 //PEON
$MATRIZ[28][2]=52;//ORIGINALMENTE 52 //PEON 
$MATRIZ[29][2]=53;//ORIGINALMENTE 53//PEON
$MATRIZ[30][2]=54;//ORIGINALMENTE 54//PEON
$MATRIZ[31][2]=55;//ORIGINALMENTE 55//PEON
$MATRIZ[32][2]=56;//ORIGINALMENTE 56//PEON
/*****************************************************************************************/
$ESCENA[1][2][1]=1;
$ESCENA[2][2][1]=2;
$ESCENA[3][2][1]=3;
$ESCENA[4][2][1]=4;
$ESCENA[5][2][1]=5;
$ESCENA[6][2][1]=6;
$ESCENA[7][2][1]=7;
$ESCENA[8][2][1]=8;
$ESCENA[9][2][1]=9;
$ESCENA[10][2][1]=10;
$ESCENA[11][2][1]=11;
$ESCENA[12][2][1]=12;
$ESCENA[13][2][1]=13;
$ESCENA[14][2][1]=14;
$ESCENA[15][2][1]=15;
$ESCENA[16][2][1]=16;
$ESCENA[17][2][1]=57;
$ESCENA[18][2][1]=58;
$ESCENA[19][2][1]=59;
$ESCENA[20][2][1]=60;
$ESCENA[21][2][1]=61;
$ESCENA[22][2][1]=62;
$ESCENA[23][2][1]=63;
$ESCENA[24][2][1]=64;
$ESCENA[25][2][1]=49;
$ESCENA[26][2][1]=50;
$ESCENA[27][2][1]=51;
$ESCENA[28][2][1]=52;
$ESCENA[29][2][1]=53;
$ESCENA[30][2][1]=54;
$ESCENA[31][2][1]=55;
$ESCENA[32][2][1]=56;
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
/************************************************************************************** */

$PAS0=1;
$TEMPORAL=1;

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

if (($MATRIZ[$i][2]>0)&&($MATRIZ[$i][6]==1)) {
    
$AVANCE=1;
$L1=0;
/*************AVANCE FRONTAL PARA TORRE Y DAMA******************************************************************************************************* */
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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;

 
while ($L1 > $ALFA) {
   
$PAS0++;
$ALFA++;



$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(8*$ALFA);

} 
/********************************************************************************************************************************************* */




$AVANCE=1;
$L1=0;
/*************RETROCESO PARA TORRE Y DAMA******************************************************************************************************* */
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

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;


$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(8*$ALFA);

} 
/********************************************************************************************************************************************* */


/***********************INICIO ESTUDIO PIEZA EN EL EJE X****************************************************************** */
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


/*************AVANCE EJE X  PARA TORRE Y DAMA******************************************************************************************************* */

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

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;


$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+($ALFA);

} 
/********************************************************************************************************************************************* */


/*************RETROCESO EJE X  PARA TORRE Y DAMA******************************************************************************************************* */

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

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;


$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-($ALFA);

} 
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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;


$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(9*$ALFA);

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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;


$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(9*$ALFA);

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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;


$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(7*$ALFA);

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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;


$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(7*$ALFA);

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
    }

/*****************************FIN L1 *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;
echo "<br>";
echo "caballo en nueva posicion".$MATRIZ[$i][2]+(17);
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(17);

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
    }

/*****************************FIN L2 *********************************************************************/
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

echo "caballo en nueva posicion".$MATRIZ[$i][2]+(10);
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(10);

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
    }

/*****************************FIN L3 *********************************************************************/

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;


echo "caballo en nueva posicion".$MATRIZ[$i][2]+(15);
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(15);

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
$ALFA++;

echo "caballo en nueva posicion".$MATRIZ[$i][2]+(6);
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(6);

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
$ALFA++;

echo "caballo en nueva posicion".$MATRIZ[$i][2]-(17);
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(17);

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
$ALFA++;
echo "caballo en nueva posicion".$MATRIZ[$i][2]-(10);
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(10);

} 
/********************************************************************************************************************************************* */



/***********************************INICIO L3-B********************************************** */
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
$ALFA++;
echo "caballo en nueva posicion".$MATRIZ[$i][2]-(15);
$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(15);

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

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(6*$ALFA);

} 
/********************************************************************************************************************************************* */


/***********************ANALISIS DEL REY 1************************************* */
$AVANCE=1;
$L1=1;
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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(8*$ALFA);

} 
/********************************************************************************************************************************************* */

$AVANCE=1;
$L1=1;
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
                            if((($MATRIZ[$i][2]+(8-$L1))==$MATRIZ[$j][2]))
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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(8*$ALFA);

} 
/********************************************************************************************************************************************* */


$AVANCE=1;
$L1=1;
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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+($ALFA);

} 
/********************************************************************************************************************************************* */

$AVANCE=1;
$L1=1;
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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-($ALFA);

} 
/********************************************************************************************************************************************* */


$AVANCE=1;
$L1=1;
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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(9*$ALFA);

} 
/********************************************************************************************************************************************* */

$AVANCE=1;
$L1=1;
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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(9*$ALFA);

} 
/********************************************************************************************************************************************* */

$AVANCE=1;
$L1=1;
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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(7*$ALFA);

} 
/********************************************************************************************************************************************* */


$AVANCE=1;
$L1=1;
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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(7*$ALFA);

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
        ECHO "<BR>";
        ECHO "ANALISIS PEON";
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
        ECHO "PUEDE AVANZAR ".$L1."HASTA ".$ILUSION;

/**********************************************FIN ANALISIS MOVIMIENTO********************************** */
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** */

$ALFA=0;
while ($L1 > $ALFA) {
ECHO "MODIFICANDO peon".$i;
    
$PAS0=$PAS0+1;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(8*$ALFA);
ECHO "a la posicion".$MATRIZ[$i][2]+(8*$ALFA);
echo "paso=".$PAS0;

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

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]+(9*$ALFA);

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

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(8*$ALFA);

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

/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(9*$ALFA);

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
/******************************************PLANTEA LOS POSIBLES ESCENARIOS PARA LOS MOVIMIENTOS*********************************************** *

$ALFA=0;
while ($L1 > $ALFA) {
    
$PAS0++;
$ALFA++;

$ESCENA[$i][2][$PAS0]=$MATRIZ[$i][2]-(7*$ALFA);

} 
/********************************************************************************************************************************************* */



    }    
}

/*************************MUESTRA DE RESULTADOS*********************************************************/
echo "<br>"; 

if ($i==1) {
    # code...
    ECHO "TORRE";
}

if ($i==2) {
    # code...
    ECHO "CABALLO";
}

if ($i==3) {
    # code...
    ECHO "ALFIL";
}

if ($i==4) {
    # code...
    ECHO "REY";
}

if ($i==5) {
    # code...
    ECHO "REINA";
}

if ($i==6) {
    # code...
    ECHO "ALFIL";
}

if ($i==7) {
    # code...
    ECHO "CABALLO";
}

if ($i==8) {
    # code...
    ECHO "TORRE";
}

if ($i==9) {
    # code...
    ECHO "PEON";
}

if ($i==10) {
    # code...
    ECHO "PEON";
}

if ($i==11) {
    # code...
    ECHO "PEON";
}

if ($i==12) {
    # code...
    ECHO "PEON";
}

if ($i==13) {
    # code...
    ECHO "PEON";
}

if ($i==14) {
    # code...
    ECHO "PEON";
}

if ($i==15) {
    # code...
    ECHO "PEON";
}

if ($i==16) {
    # code...
    ECHO "PEON";
}


if ($i==17) {
    # code...
    ECHO "TORRE";
}

if ($i==18) {
    # code...
    ECHO "CABALLO";
}

if ($i==19) {
    # code...
    ECHO "ALFIL";
}

if ($i==20) {
    # code...
    ECHO "REY";
}

if ($i==21) {
    # code...
    ECHO "REINA";
}

if ($i==22) {
    # code...
    ECHO "ALFIL";
}

if ($i==23) {
    # code...
    ECHO "CABALLO";
}

if ($i==24) {
    # code...
    ECHO "TORRE";
}

if ($i==25) {
    # code...
    ECHO "PEON";
}

if ($i==26) {
    # code...
    ECHO "PEON";
}

if ($i==27) {
    # code...
    ECHO "PEON";
}

if ($i==28) {
    # code...
    ECHO "PEON";
}

if ($i==29) {
    # code...
    ECHO "PEON";
}

if ($i==30) {
    # code...
    ECHO "PEON";
}

if ($i==31) {
    # code...
    ECHO "PEON";
}

if ($i==32) {
    # code...
    ECHO "PEON";
}

//echo " LINEA=";
//echo $i;

for ($k=7; $k <=22 ; $k++)
 { 
    echo " =>";
    echo "L".($k-6)."=";
    echo $MATRIZ[$i][$k];
   $TOTAL=$TOTAL+$MATRIZ[$i][$k];

}

ECHO "<BR>";
echo "_________________________________________________________________________________________________________________________________________________________";
echo $TOTAL;

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

}//FIN DEL FOR

ECHO "<BR>";
ECHO "TOTAL POSIBLES MOVIMIENTOS=".$TOTAL;


for ($J=1; $J <=$TOTAL+1 ; $J++)
 { 
    ECHO "<BR>";
    ECHO $J;
    ECHO "________________________________________________________________________________________________________________________________________________";
    ECHO "<BR>";


for ($i=1; $i <=32 ; $i++)
 { 
    ECHO "<BR>";
    echo " =>";
    
    echo $ESCENA[$i][2][$J];
  
    if ($i==1) {
        # code...
        ECHO "TORRE";
    }
    
    if ($i==2) {
        # code...
        ECHO "CABALLO";
    }
    
    if ($i==3) {
        # code...
        ECHO "ALFIL";
    }
    
    if ($i==4) {
        # code...
        ECHO "REY";
    }
    
    if ($i==5) {
        # code...
        ECHO "REINA";
    }
    
    if ($i==6) {
        # code...
        ECHO "ALFIL";
    }
    
    if ($i==7) {
        # code...
        ECHO "CABALLO";
    }
    
    if ($i==8) {
        # code...
        ECHO "TORRE";
    }
    
    if ($i==9) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==10) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==11) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==12) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==13) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==14) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==15) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==16) {
        # code...
        ECHO "PEON";
    }
    
    
    if ($i==17) {
        # code...
        ECHO "TORRE";
    }
    
    if ($i==18) {
        # code...
        ECHO "CABALLO";
    }
    
    if ($i==19) {
        # code...
        ECHO "ALFIL";
    }
    
    if ($i==20) {
        # code...
        ECHO "REY";
    }
    
    if ($i==21) {
        # code...
        ECHO "REINA";
    }
    
    if ($i==22) {
        # code...
        ECHO "ALFIL";
    }
    
    if ($i==23) {
        # code...
        ECHO "CABALLO";
    }
    
    if ($i==24) {
        # code...
        ECHO "TORRE";
    }
    
    if ($i==25) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==26) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==27) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==28) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==29) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==30) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==31) {
        # code...
        ECHO "PEON";
    }
    
    if ($i==32) {
        # code...
        ECHO "PEON";
    }
    






}

}

?>