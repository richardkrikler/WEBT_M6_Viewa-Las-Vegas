<?php

namespace IgnisWeb\ViewaLasVegas;

class Hotel
{
    private string $name;
    private int $stars;
    private Location $location;
    private string $description;
    private string $imgUrl;

    /**
     * @param string $name
     * @param int $stars
     * @param Location $location
     * @param string $description
     * @param string $imgUrl
     */
    public function __construct(string $name, int $stars, Location $location, string $description, string $imgUrl)
    {
        $this->name = $name;
        $this->stars = $stars;
        $this->location = $location;
        $this->description = $description;
        $this->imgUrl = $imgUrl;
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

    /**
     * @return string
     */
    public function getImgUrl(): string
    {
        return $this->imgUrl;
    }

    public function getKeyValuePairs(): array
    {
        return array_merge([
            'NAME' => $this->getName(),
            'STARS' => $this->getStars(),
            'DESCRIPTION' => $this->getDescription(),
            'IMG_URL' => $this->getImgUrl()
        ], $this->getLocation()->getKeyValuePairs());
    }
}