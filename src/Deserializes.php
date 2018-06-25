<?php

namespace Stratadox\Deserializer;

/**
 * Deserializes the input array.
 *
 * @author Stratadox
 */
interface Deserializes
{
    /**
     * Deserializes the input data.
     *
     * @param array $input       The input data.
     * @return mixed             The deserialized output.
     * @throws CannotDeserialize When the input data could not be deserialized.
     */
    public function from(array $input);

    /**
     * Retrieves the type that would be used for deserializing the array.
     *
     * The type can either be an internal type, e.g. array or boolean, or a
     * fully qualified class name.
     *
     * @param array $input       The input data.
     * @return string            The type that would be produced.
     * @throws CannotDeserialize When the data cannot be deserialized.
     */
    public function typeFor(array $input): string;
}
