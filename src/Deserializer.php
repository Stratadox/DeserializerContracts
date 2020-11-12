<?php

namespace Stratadox\Deserializer;

/**
 * Deserializes an associative array.
 *
 * @author Stratadox
 */
interface Deserializer
{
    /**
     * Deserializes the input data.
     *
     * @param array $input The input data.
     * @return mixed       The deserialized output.
     * @throws DeserializationFailure
     */
    public function from(array $input);

    /**
     * Retrieves the type that would be used for deserializing the array.
     *
     * The type can either be an internal type, e.g. array or boolean, or a
     * fully qualified class name.
     *
     * @param array $input The input data.
     * @return string      The type of output that would be made from this data.
     * @throws DeserializationFailure
     */
    public function typeFor(array $input): string;
}
