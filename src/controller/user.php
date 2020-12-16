<?php
namespace Viblo\controller;
use student;

class user
{
    public function xinchao() {
        $student = new student();
        $student->hello();
        echo "xin chao";
    }
}
