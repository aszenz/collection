<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace loophp\collection\Contract\Operation;

use Iterator;
use loophp\collection\Contract\Collection;

/**
 * @psalm-template TKey
 * @psalm-template TKey of array-key
 * @psalm-template T
 */
interface FoldRightable
{
    /**
     * Fold the collection from the right to the left.
     *
     * @psalm-param callable(T, T, TKey, Iterator<TKey, T>): T $callback
     *
     * @param mixed $initial
     * @psalm-param T|null $initial
     *
     * @return mixed
     * @psalm-return \loophp\collection\Collection<TKey, T|null>
     */
    public function foldRight(callable $callback, $initial = null): Collection;
}
