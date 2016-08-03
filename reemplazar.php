<?php
/**
 * Reemplaza todos los acentos por sus equivalentes sin ellos
 *
 * @param $string
 *  string la cadena a sanear
 *
 * @return $string
 *  string saneada
 */
function sanear_string($string)
{
 
    $string = trim($string);
 
    $string = str_replace(
        array('�', '�', '�', '�', '�', '�', '�', '�', '�'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );
 
    $string = str_replace(
        array("�", "�", "�", "�"),
        "e",
        $string
    );
 
    $string = str_replace(
        array("�", "�", "�", "�"),
        "E",
        $string
    );

    $string = str_replace(
        array('�', '�', '�', '�', '�', '�', '�', '�'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );
 
    $string = str_replace(
        array('�', '�', '�', '�', '�', '�', '�', '�'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );
 
    $string = str_replace(
        array('�', '�', '�', '�', '�', '�', '�', '�'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );
 
    $string = str_replace(
        array('�', '�', '�', '�'),
        array('n', 'N', 'c', 'C',),
        $string
    );
 
    //Esta parte se encarga de eliminar cualquier caracter extra�o
    //simbolos de teclado
    $string = str_replace(
        array(",", ".", ";", ":"),
        "",
        $string);
    //simbolos con comilla simple
    $string = str_replace(
      array('"'),
      "", 
      $string);
    //simbolos de pagina (enter, tab, etc)
    $string = str_replace(
        array("\t", "\n"),
        "",
        $string);
    //simbolos adicionales
    $string = str_replace(
        array("�"),
        "",
        $string);
    //representacion de simbolos especiales
    $string = str_replace(
      array(PHP_EOL), 
      "", 
      $string);
  
    return $string;
}
?>
