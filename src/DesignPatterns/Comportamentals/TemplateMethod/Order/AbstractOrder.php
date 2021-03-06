<?php

namespace App\DesignPatterns\Comportamentals\TemplateMethod\Order;

abstract class AbstractOrder
{
    public function finalValue($value, $size, $changeValue)
    {
        $value += $this->freight($size);
        $value += $this->changeValue($changeValue);

        return number_format($value, 2, ',', '.');
    }

    protected abstract function changeValue(int $value): int;

    protected function freight(int $size): int
    {
        return 10;
    }
}
