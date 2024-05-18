
<?php
class Helper
{
  static function currency_format($number, $suffix = '₫') {
    if (!empty($number)) {
        return number_format($number, 0, ',', '.') . " {$suffix}";
    }
  }
}
