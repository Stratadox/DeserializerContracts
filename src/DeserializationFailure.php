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
}
