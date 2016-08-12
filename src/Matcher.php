<?php

namespace Mark\PatternMatcher\Pattern;

interface Matcher
{
    /**
     *
     * @param string $text
     *
     * @return boolean
     */
    public function matches($text);

    /**
     *
     * @param string $text
     *
     * @throws \Mark\PatternMatcher\Exception\NoMatch
     *
     * @return Result
     */
    public function first($text);

    /**
     *
     * @param string $text
     *
     * @throws \Mark\PatternMatcher\Exception\NoMatch
     *
     * @return Results
     */
    public function all($text);

    /**
     *
     * @return string A representation of the pattern
     */
    public function __toString();
}
