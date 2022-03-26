<?php

namespace IgnisWeb\ViewaLasVegas;

class Hotel
{
    private string $name;
    private int $stars;
    private Location $location;
    private string $description;

    /**
     * @param string $name
     * @param int $stars
     * @param Location $location
     * @param string $description
     */
    public function __construct(string $name, int $stars, Location $location, string $description)
    {
        $this->name = $name;
        $this->stars = $stars;
        $this->location = $location;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getStars(): int
    {
        return $this->stars;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    public function getKeyValuePairs(): array
    {
        return array_merge([
            'NAME' => $this->getName(),
            'STARS' => $this->getStars(),
            'DESCRIPTION' => $this->getDescription()
        ], $this->getLocation()->getKeyValuePairs());
    }
}