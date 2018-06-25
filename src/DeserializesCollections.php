<?php

namespace Stratadox\Deserializer;

/**
 * Deserializes the input array into collections.
 *
 * @author Stratadox
 */
interface DeserializesCollections extends Deserializes
{
    /**
     * Deserializes the input data into a collection.
     *
     * @param array $input       The input data.
     * @return iterable          The deserialized collection.
     * @throws CannotDeserialize When the input data could not be deserialized.
     */
    public function from(array $input): iterable;
}
