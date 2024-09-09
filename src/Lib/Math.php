<?php

namespace Sxin\TAL\Lib;

class Math
{
    public static function bcmul($left_operand, $right_operand, $scale = 0): string
    {
        return bcadd(round(bcmul($left_operand, $right_operand, $scale + 1), $scale), 0, $scale);
    }


    public static function bcdiv($dividend, $divisor, $scale = 0): string
    {
        return bcadd(round(bcdiv($dividend, $divisor, $scale + 1), $scale), 0, $scale);
    }


    public static function bcsub($left_operand, $right_operand, $scale = 0): string
    {
        return bcadd(round(bcsub($left_operand, $right_operand, $scale + 1), $scale), 0, $scale);
    }


    public static function bcadd($left_operand, $right_operand, $scale = 0): string
    {
        return bcadd(round(bcadd($left_operand, $right_operand, $scale + 1), $scale), 0, $scale);
    }


    public static function round($val, $precision = 0): string
    {
        return bcadd(round($val, $precision), 0, $precision);
    }

    public static function mul($left_operand, $right_operand)
    {
        return $left_operand * $right_operand;
    }
}