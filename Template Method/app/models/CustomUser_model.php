<?php

class CustomUser_model extends AbstractUser {
    private $nama = 'Jane Doe';

    protected function getUserName() {
        return $this->nama;
    }

    // Override formatUserData untuk custom formatting
    protected function formatUserData($data) {
        return strtolower($data); // Custom format
    }
}
