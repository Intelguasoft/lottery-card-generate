<?php

/**
 * Clase para la generación de números aleatorios de manera
 * personalizada por medio de argumentos.
 *
 * @package    IntelGUA
 * @subpackage Generators
 * @author     Henry Díaz <hnrdiaz@gmail.com>
 */

namespace IntelGUA\Library;

class Generate
{

    protected $currentNumber = "";

    protected $listNumbers = [];
    /**
     * Permite obtener una determinada cantidad de números aleatorios
     * indicada en el argumento $quantity, ya sea que los números sean
     * únicos o se puedan repetir indicándolo en el argumento $unique.
     *
     * El resultado devuelto por el método es un array conteniendo la
     * cantidad de números generados.
     *
     * @param int $quantity
     * @param boolean $unique
     * @return array
     */
    public function getNumbersGenerated($quantity = 10, $unique = true, $length = 4)
    {
        //dd($this->generateNumber(2));

        /* $this->currentNumber = $this->generateNumber($length);
        for ($i=1; $i <= $quantity; $i++) {
            if (in_array((string)$this->currentNumber, $this->listNumbers)) {
                $this->currentNumber = $this->generateNumber($length);
            }
        } */

        $this->listNumbers[] = $this->generateNumber($length);

        while (count($this->listNumbers) <= ($quantity - 1)) {
            $this->currentNumber = $this->generateNumber($length);
            if (in_array((string)$this->currentNumber, $this->listNumbers)) {
                continue;
            } else {
                $this->listNumbers[] = $this->currentNumber;
            }

        }
        return $this->listNumbers;

    }

    /**
     * Genera un numero de manera aleatoria.
     *
     * El número generado es formado por la cantidad
     * de dígitos que se indica en el parámetro $length.
     *
     * @param int $length
     * @return string
     */
    public function generateNumber($length = 4)
    {

        $chars = '1234567890';
        /** Caracteres permitidos para formar la cantidad */
        $chars_length = (strlen($chars) - 1);
        /** Designamos el largo de la cadena */
        $string = $chars {
            rand(0, $chars_length)};

        for ($i = 1; $i < $length; $i = strlen($string)) {
            $r = $chars {
                rand(0, $chars_length)};
            if ($r != $string {
                $i - 1}) $string .= $r;
        }

        return $string;
        /** Devolvemos la cantidad formada como cadena */
    }

    public function getFourDigits()
    {
        $numbers = array();

        // Loop while there aren't enough numbers
        while (count($numbers) < 8000) {

            $random_number = rand(1, 9999);

            if (!in_array($random_number, $numbers)) {
                // This adds the number to the array
                $numbers[] = $random_number;
            }

        }
        return $numbers;
    }

}
