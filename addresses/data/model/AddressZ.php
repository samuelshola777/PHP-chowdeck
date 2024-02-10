<?php

use Illuminate\Database\Eloquent\Model;

class AddressZ extends Model
{
    private string $streetAddress;
    private string $houseNumber;
    private string $localGovernmentArea;
    private string $currentState;
    private AddressType $addressType;
    private AppUser $appUser;

    // Setter for $appUser
    public function setAppUser(AppUser $appUser): void
    {
        $this->appUser = $appUser;
    }

    // Getter for $appUser
    public function getAppUser(): AppUser
    {
        return $this->appUser;
    }

    // Setter for $currentState
    public function setCurrentState(string $currentState): void
    {
        $this->currentState = $currentState;
    }

    // Getter for $currentState
    public function getCurrentState(): string
    {
        return $this->currentState;
    }

    // Setter for $streetAddress
    public function setStreetAddress(string $streetAddress): void
    {
        $this->streetAddress = $streetAddress;
    }

    // Getter for $streetAddress
    public function getStreetAddress(): string
    {
        return $this->streetAddress;
    }

    // Setter for $houseNumber
    public function setHouseNumber(string $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    // Getter for $houseNumber
    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    // Setter for $localGovernmentArea
    public function setLocalGovernmentArea(string $localGovernmentArea): void
    {
        $this->localGovernmentArea = $localGovernmentArea;
    }

    // Getter for $localGovernmentArea
    public function getLocalGovernmentArea(): string
    {
        return $this->localGovernmentArea;
    }
}
