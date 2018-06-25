<?php

namespace Stratadox\Deserializer;

/**
 * Deserializes the input array into objects.
 *
 * @author Stratadox
 */
interface DeserializesObjects extends Deserializes
{
    /**
     * Deserializes the input data into an object.
     *
     * @param array $input       The input data.
     * @return object            The deserialized object.
     * @throws CannotDeserialize When the input data could not be deserialized.
     */
    public function from(array $input): object;

    /**
     * Retrieves the class that will be instantiated when deserializing the input.
     *
     * @param array $input       The input data.
     * @return string            The fully qualified class that would be produced.
     * @throws CannotDeserialize When the data cannot be deserialized.
     */
    public function typeFor(array $input): string;
}
