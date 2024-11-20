<?php
namespace App\Traits;

trait CanRun {
    public function run() {
        return "{$this->name} is running!";
    }
}
