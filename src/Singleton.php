<?php

declare(strict_types=1);

namespace Smysloff\Traits;

/**
 * Singleton Trait
 *
 * @author Alexander Smyslov <smyslov@selby.su>
 * @package Smysloff\Traits
 */
trait Singleton
{
    /**
     * Singleton instance
     */
    private static $instance = null;

    /**
     * Creates an instance of Singleton
     * and always returns same instance
     *
     * @return Singleton
     */
    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Singleton constructor needs to be private
     */
    private function __construct()
    {
    }

    /**
     * Singleton can't be cloned
     * @throws SingletonException
     */
    final public function __clone()
    {
        throw new SingletonException("Singleton can't be cloned");
    }

    /**
     * Singleton can't be serialized
     * @throws SingletonException
     */
    final public function __sleep()
    {
        throw new SingletonException("Singleton can't be serialized");
    }

    /**
     * Singleton can't be deserialized
     * @throws SingletonException
     */
    final public function __wakeup()
    {
        throw new SingletonException("Singleton can't be deserialized");
    }
}
