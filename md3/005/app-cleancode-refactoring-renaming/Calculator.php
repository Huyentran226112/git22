<?php


class Calculator
{
    public function calculate($so_thu_nhat, $so_thu_hai,$toan_tu)
    {
        switch ($toan_tu) {
            case 'CONG':
                return $so_thu_nhat + $so_thu_hai;
            case 'TRU':
                return $so_thu_nhat - $so_thu_hai;
            case 'NHAN':
                return $so_thu_nhat * $so_thu_hai;
            case 'CHIA':
                if ($so_thu_hai != 0) {
                    return $so_thu_nhat / $so_thu_hai;
                } else {
                    return "Can not divide by ";
                }
            default:
                return "Unsupported operation";
        }
    }
}