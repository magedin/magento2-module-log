<?php
/**
 * MagedIn Technology
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  MagedIn
 * @copyright Copyright (c) 2022 MagedIn Technology.
 *
 * @author    MagedIn Support <support@magedin.com>
 */

namespace MagedIn\Log;

interface LoggerInterface
{
    /**
     * @param $level
     * @param $message
     * @param array $context
     * @param string|null $file
     * @return bool
     */
    public function log($level, $message, array $context = [], string $file = null);

    /**
     * @param $message
     * @param array $context
     * @param string|null $file
     * @return bool
     */
    public function debug($message, array $context = [], string $file = null);

    /**
     * @param $message
     * @param array $context
     * @param string|null $file
     * @return bool
     */
    public function info($message, array $context = [], string $file = null);

    /**
     * @param $message
     * @param array $context
     * @param string|null $file
     * @return bool
     */
    public function warn($message, array $context = [], string $file = null);

    /**
     * @param string $message
     * @param array $context
     * @param string|null $file
     * @return bool
     */
    public function warning(string $message, array $context = [], string $file = null);

    /**
     * @param $message
     * @param array $context
     * @param string|null $file
     * @return bool
     */
    public function err($message, array $context = [], string $file = null);

    /**
     * @param $message
     * @param array $context
     * @param string|null $file
     * @return bool
     */
    public function error($message, array $context = [], string $file = null);

    /**
     * @param $message
     * @param array $context
     * @param string|null $file
     * @return bool
     */
    public function crit($message, array $context = [], string $file = null);

    /**
     * @param $message
     * @param array $context
     * @param string|null $file
     * @return bool
     */
    public function critical($message, array $context = [], string $file = null);

    /**
     * @param $message
     * @param array $context
     * @param string|null $file
     * @return bool
     */
    public function alert($message, array $context = [], string $file = null);

    /**
     * @param $message
     * @param array $context
     * @param string|null $file
     * @return bool
     */
    public function emerg($message, array $context = [], string $file = null);

    /**
     * @param $message
     * @param array $context
     * @param string|null $file
     * @return bool
     */
    public function emergency($message, array $context = [], string $file = null);
}
