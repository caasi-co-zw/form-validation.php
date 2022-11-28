<?php

/**
 * Default validation methods
 * @author Isaac Machakata <isaac@caasi.co.zw>
 * @link https://github.com/caasi-co-zw/form-validation.php
 */

class Validations {
    public function required($value) {
        return !$value && $value !== false;
    }
    public function min($value, $min) {
        if (is_int($value)) {
            return $value >= $min;
        }
        if (is_string($value)) {
            return strlen($value) >= $min;
        }
        if (is_array($value)) {
            return count($value) >= $min;
        }
        return $value >= $min;
    }
    public function max($value, $min) {
        if (is_int($value)) {
            return $value < $min;
        }
        if (is_string($value)) {
            return strlen($value) < $min;
        }
        if (is_array($value)) {
            return count($value) < $min;
        }
        return $value < $min;
    }
}
