<?php

namespace Stratadox\Deserializer;

use Throwable;

/**
 * Notifies the client the input cannot be deserialized.
 *
 * @author Stratadox
 */
interface CannotDeserialize extends Throwable
{
}
