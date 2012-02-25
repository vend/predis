<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predis\Cluster;

use Predis\Command\CommandInterface;
use Predis\Distribution\HashGeneratorInterface;

/**
 * Interface for classes defining which features a Redis cluster (client or server side) provides.
 *
 * @author Daniele Alessandri <suppakilla@gmail.com>
 */
interface ClusterSupportInterface
{
    /**
     * Returns the hash for the given command using the specified algorithm, or null
     * if the command cannot be hashed.
     *
     * @param HashGeneratorInterface $hasher Hash algorithm.
     * @param CommandInterface $command Command to be hashed.
     * @return int
     */
    public function getHash(HashGeneratorInterface $hasher, CommandInterface $command);

    /**
     * Returns the hash for the given key using the specified algorithm.
     *
     * @param HashGeneratorInterface $hasher Hash algorithm.
     * @param string $key Key to be hashed.
     * @return string
     */
    public function getKeyHash(HashGeneratorInterface $hasher, $key);
}
