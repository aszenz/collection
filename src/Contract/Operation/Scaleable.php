<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace loophp\collection\Contract\Operation;

use loophp\collection\Contract\Collection;

/**
 * @psalm-template TKey
 * @psalm-template TKey of array-key
 * @psalm-template T
 */
interface Scaleable
{
    /**
     * Scale/normalize values.
     *
     * @psalm-return \loophp\collection\Collection<TKey, T>
     */
    public function scale(
        float $lowerBound,
        float $upperBound,
        float $wantedLowerBound = 0.0,
        float $wantedUpperBound = 1.0,
        float $base = 0.0
    ): Collection;
}
