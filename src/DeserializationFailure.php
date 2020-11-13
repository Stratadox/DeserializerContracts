<?php

namespace Stratadox\Deserializer;

use Throwable;

/**
 * Notifies the client the input could not be deserialized.
 *
 * @author Stratadox
 */
interface DeserializationFailure extends Throwable
{
    /**
     * The data that was used as input for the (failed) deserialization.
     *
     * @return mixed[]
     */
    public function inputData(): array;
}
