<?php

if (!defined('CUSTOM_VALIDATIONS')) {
    /**
     * Custom validation folder.
     * @var string|bool
     */
    define('CUSTOM_VALIDATIONS', false);
}
/**
 * Validates your html forms
 * @author Isaac Machakata <isaac@caasi.co.zw>
 * @link https://github.com/caasi-co-zw/form-validation.php
 * @version 1.0.0
 * @license MIT
 */

class Validation {
    const DEFAULTS = [
        Validations::class
    ];
    private $errors = [];
    private $error_msgs = [];

    public function __construct() {
        $this->loadValidations();
    }
    public function hasErrors(): bool {
        return true;
    }
    public function isValid(): bool {
        return true;
    }
    public function getErrors($limit = false) {
        if ($limit === false) {
        }
    }
    public function validate(): bool {
        return true;
    }
    private function loadValidations() {
    }
    private function addError($attribute, $msg = null) {
    }
}
