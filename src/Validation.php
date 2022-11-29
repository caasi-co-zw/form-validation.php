<?php

if (!defined('CFV_FOLDER')) {
    /**
     * Custom validation folder.
     * @var string|null
     */
    define('CFV_FOLDER', null);
}
/**
 * Validates your html forms
 *
 * Validate your requests parameters with easy to understand code and less code.
 * @author Isaac Machakata <isaac@caasi.co.zw>
 * @link https://github.com/caasi-co-zw/form-validation.php
 * @version 1.0.0
 * @license MIT
 * @method bool hasErrors()
 * @method bool isValid()
 * @method bool validate()
 */

class Validation {
    private $validations = [
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
    private function addValidation($class) {
        $this->validations[] = $class;
    }
    private function loadValidations() {
        if (CFV_FOLDER) {
            // get files
        }
    }
    private function getCustomValidations() {
        $directory = CFV_FOLDER;

        if (!$directory) {
            return false;
        }

        if (is_dir($directory)) {
            foreach (scandir($directory) as $file) {
            }
        }
    }
    private function addError($attribute, $msg = null) {
        $this->errors[] = [
            'attribute' => $attribute,
            'message' => $msg ?? $this->getErrorMsg($attribute)
        ];
    }
    private function getErrorMsg($attribute) {
        return $this->error_msgs[$attribute] ?? null;
    }
}
