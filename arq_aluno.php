<?php

    /* MARCO ANTONIO RIBEIRO GAMA
        MAT. 1810478300006
	*/
			
    $servername="localhost";
    $username="3daw";
    $password="12341234";
    $dbname="SCHULE";

    //Estabelecendo conexão

    $conn= new mysqli($servername,$username,$password,$dbname);

    //Verificando conexão

    if(conn->connect_error){
                          die("Falha na conexao:".$conn->connect_error);
    }
	if($_SERVER["REQUEST METHOD"]=="POST"){
                                        $aluno=array["","","","",""];
	                                    $arq=fopen("$arq=$_POST["arquivo"]","r")or die("Nao foi possivel abrir o arquivo!");
	                                    fgets($arq);
	                                    while(!feof(arq)){
		                                                $arq_aux=fgets($arq);
				                                        $conta=strlen($arq_aux);
				                                        $i=0;
				                                        $j=0;
	                                                    while($i<$conta){
								                                       $c[i]=$arq_aux[i];
								                                       if($c[i+1]==";"){
								                                                      $aluno[j]=$c;
								                                                      i++;
								                                                      j++;
								                                                      $c="";
								                                       }
								                                       if($i+1==$conta){
								                                                      $aluno[j]=$c;
								                                       }
								                                       i++;
	                                                    }
				                                        $MAT=$aluno[0];
				                                        $NOME=$aluno[1];
				                                        $E_MAIL=$aluno[2];
				                                        $CPF=$aluno[3];
				                                        $DT_NASC=$aluno[4];
				                                        $sql="INSERT INTO SCHULE(MAT,NOME,EMAIL,CPF,DATA_NASC)
                                                             VALUES($MAT.",".$NOME.",".$E_MAIL.",".$CPF.",".$DT_NASC.)";
                                                        if(conn->query(sql)===TRUE){
                                                                                  echo "Registro inserido com sucesso";
                                                        }else{
                                                             echo "Erro de registro";
                                                        }
				                                        $arq_aux="";
	                                    }
	                                    fclose($arq);
	}
	conn->close;
?>