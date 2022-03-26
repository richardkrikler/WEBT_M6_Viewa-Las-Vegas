<?php

namespace IgnisWeb\ViewaLasVegas;

class Location
{
    private string $country;
    private string $countryId;
    private string $postalCode;
    private string $city;
    private string $street;
    private string $houseNumber;

    /**
     * @param string $country
     * @param string $countryId
     * @param string $postalCode
     * @param string $city
     * @param string $street
     * @param string $houseNumber
     */
    public function __construct(string $country, string $countryId, string $postalCode, string $city, string $street, string $houseNumber)
    {
        $this->country = $country;
        $this->countryId = $countryId;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->street = $street;
        $this->houseNumber = $houseNumber;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getCountryId(): string
    {
        return $this->countryId;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    public function getKeyValuePairs(): array
    {
        return [
            'COUNTRY' => $this->getCountry(),
            'COUNTRY_ID' => $this->getCountryId(),
            'POSTAL_CODE' => $this->getPostalCode(),
            'CITY' => $this->getCity(),
            'STREET' => $this->getStreet(),
            'HOUSE_NUMBER' => $this->getHouseNumber()
        ];
    }
}