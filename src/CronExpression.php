<?php namespace Talonon\Cron;
use Carbon\Carbon;
use Cron\CronExpression as CronExpressionBase;

/**
 * @author Andy Muth <andy@griffonco.com>
 * @method array|Carbon[] getMultipleRunDates( $total,  $currentTime = 'now',  $invert = false,  $allowCurrentDate = false)
 */
class CronExpression extends CronExpressionBase {
  /**
   * @param string $currentTime
   * @param int $nth
   * @param bool|false $allowCurrentDate
   * @return Carbon
   */
  public function getNextRunDate($currentTime = 'now', $nth = 0, $allowCurrentDate = false) {
    return Carbon::instance(parent::getNextRunDate($currentTime, $nth, $allowCurrentDate));
  }

  /**
   * @param string $currentTime
   * @param int $nth
   * @param bool|false $allowCurrentDate
   * @return Carbon
   */
  public function getPreviousRunDate($currentTime = 'now', $nth = 0, $allowCurrentDate = false) {
    return Carbon::instance(parent::getPreviousRunDate($currentTime, $nth, $allowCurrentDate));
  }

  /**
   * @param null $currentTime
   * @param int $nth
   * @param bool|false $invert
   * @param bool|false $allowCurrentDate
   * @return Carbon
   */
  protected function getRunDate($currentTime = null, $nth = 0, $invert = false, $allowCurrentDate = false) {
    return Carbon::instance(parent::getRunDate($currentTime, $nth, $invert, $allowCurrentDate));
  }
}
