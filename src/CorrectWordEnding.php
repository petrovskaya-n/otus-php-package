<?php declare(strict_types=1);

namespace Petrovskaya\OtusComposer;

class CorrectWordEnding
{
    /**
     * Склонение существительных после числительного
     *
     * @param int $count Количество
     * @param array $wordForms Массив вариантов, например: array('штука', 'штуки', 'штук')
     * @return string
     */
    public static function getCorrectEnding(int $count, array $wordForms = ['штука', 'штуки', 'штук']): string
    {
        $num = $count % 100;

        if ($num > 19) {
            $num = $num % 10;
        }

        $out = match ($num) {
            1 => $wordForms[0],
            4 => $wordForms[1],
            default => $wordForms[2],
        };

        return $count . ' ' . $out;
    }
}