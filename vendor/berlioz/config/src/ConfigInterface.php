<?php
/**
 * This file is part of Berlioz framework.
 *
 * @license   https://opensource.org/licenses/MIT MIT License
 * @copyright 2017 Ronan GIRON
 * @author    Ronan GIRON <https://github.com/ElGigi>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code, to the root.
 */

declare(strict_types=1);

namespace Berlioz\Config;

interface ConfigInterface
{
    /////////////
    /// MERGE ///
    /////////////

    /**
     * Merge with another configuration.
     *
     * @param \Berlioz\Config\ConfigInterface ...$config
     *
     * @return static
     */
    public function merge(ConfigInterface ...$config);

    //////////////
    /// GETTER ///
    //////////////

    /**
     * Get original configuration.
     *
     * Returns original configuration without treatments of variables.
     *
     * @return array
     */
    public function original(): array;

    /**
     * Get value.
     *
     * Key given in parameter must be in format: key.key2.key3
     * If key NULL given, full configuration given.
     *
     * @param string $key Key
     * @param mixed $default Default value to return if the key does not exist.
     *
     * @return mixed
     * @throws \Berlioz\Config\Exception\ConfigException
     */
    public function get(string $key = null, $default = null);

    /**
     * Key exists ?
     *
     * Key given in parameter must be in format: key.key2.key3
     * Must return boolean value if key not found.
     *
     * @param string $key Key
     *
     * @return bool
     */
    public function has(string $key = null): bool;

    /////////////////
    /// VARIABLES ///
    /////////////////

    /**
     * Set user defined variables.
     *
     * @param array $variables
     *
     * @return static
     */
    public function setVariables(array $variables);

    /**
     * Set user defined variable.
     *
     * @param string $name
     * @param mixed $value
     *
     * @return static
     */
    public function setVariable(string $name, $value);

    /**
     * Get user defined variable.
     *
     * @return array
     */
    public function getVariables(): array;

    /**
     * Get user defined variable.
     *
     * @param string $name
     * @param mixed $default Default value to return if the key does not exist.
     *
     * @return mixed
     */
    public function getVariable(string $name, $default = null);
}