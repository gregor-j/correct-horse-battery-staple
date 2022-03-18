<?php

namespace GregorJ\CorrectHorse\Generators;

use GregorJ\CorrectHorse\DictionaryInterface;
use GregorJ\CorrectHorse\RandomGeneratorInterface;

use function in_array;

/**
 * Class RandomWord
 */
final class RandomWord implements RandomGeneratorInterface
{
    use ManageRandomItemsTrait;
    use DictionaryWordTrait;

    /**
     * @return string
     */
    private function getRandomWord(): string
    {
        return $this->dictionary->getRandomWord();
    }
}
