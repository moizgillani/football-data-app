<?php

declare(strict_types=1);

/*
 * SoccerV3ScoresLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SoccerV3ScoresLib\Models;

use stdClass;

class TeamDetail implements \JsonSerializable
{
    /**
     * @var Player[]|null
     */
    private $players;

    /**
     * @var int|null
     */
    private $teamId;

    /**
     * @var int|null
     */
    private $areaId;

    /**
     * @var int|null
     */
    private $venueId;

    /**
     * @var string|null
     */
    private $key;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $fullName;

    /**
     * @var bool|null
     */
    private $active;

    /**
     * @var string|null
     */
    private $areaName;

    /**
     * @var string|null
     */
    private $venueName;

    /**
     * @var string|null
     */
    private $gender;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $zip;

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var string|null
     */
    private $fax;

    /**
     * @var string|null
     */
    private $website;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var int|null
     */
    private $founded;

    /**
     * @var string|null
     */
    private $clubColor1;

    /**
     * @var string|null
     */
    private $clubColor2;

    /**
     * @var string|null
     */
    private $clubColor3;

    /**
     * @var string|null
     */
    private $nickname1;

    /**
     * @var string|null
     */
    private $nickname2;

    /**
     * @var string|null
     */
    private $nickname3;

    /**
     * @var string|null
     */
    private $wikipediaLogoUrl;

    /**
     * @var string|null
     */
    private $wikipediaWordMarkUrl;

    /**
     * @var int|null
     */
    private $globalTeamId;

    /**
     * Returns Players.
     *
     * @return Player[]|null
     */
    public function getPlayers(): ?array
    {
        return $this->players;
    }

    /**
     * Sets Players.
     *
     * @maps Players
     *
     * @param Player[]|null $players
     */
    public function setPlayers(?array $players): void
    {
        $this->players = $players;
    }

    /**
     * Returns Team Id.
     */
    public function getTeamId(): ?int
    {
        return $this->teamId;
    }

    /**
     * Sets Team Id.
     *
     * @maps TeamId
     */
    public function setTeamId(?int $teamId): void
    {
        $this->teamId = $teamId;
    }

    /**
     * Returns Area Id.
     */
    public function getAreaId(): ?int
    {
        return $this->areaId;
    }

    /**
     * Sets Area Id.
     *
     * @maps AreaId
     */
    public function setAreaId(?int $areaId): void
    {
        $this->areaId = $areaId;
    }

    /**
     * Returns Venue Id.
     */
    public function getVenueId(): ?int
    {
        return $this->venueId;
    }

    /**
     * Sets Venue Id.
     *
     * @maps VenueId
     */
    public function setVenueId(?int $venueId): void
    {
        $this->venueId = $venueId;
    }

    /**
     * Returns Key.
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * Sets Key.
     *
     * @maps Key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps Name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Full Name.
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * Sets Full Name.
     *
     * @maps FullName
     */
    public function setFullName(?string $fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * Returns Active.
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Sets Active.
     *
     * @maps Active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * Returns Area Name.
     */
    public function getAreaName(): ?string
    {
        return $this->areaName;
    }

    /**
     * Sets Area Name.
     *
     * @maps AreaName
     */
    public function setAreaName(?string $areaName): void
    {
        $this->areaName = $areaName;
    }

    /**
     * Returns Venue Name.
     */
    public function getVenueName(): ?string
    {
        return $this->venueName;
    }

    /**
     * Sets Venue Name.
     *
     * @maps VenueName
     */
    public function setVenueName(?string $venueName): void
    {
        $this->venueName = $venueName;
    }

    /**
     * Returns Gender.
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * Sets Gender.
     *
     * @maps Gender
     */
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * Returns Type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @maps Type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Address.
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Sets Address.
     *
     * @maps Address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns City.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @maps City
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Zip.
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * Sets Zip.
     *
     * @maps Zip
     */
    public function setZip(?string $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * Returns Phone.
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Sets Phone.
     *
     * @maps Phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * Returns Fax.
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * Sets Fax.
     *
     * @maps Fax
     */
    public function setFax(?string $fax): void
    {
        $this->fax = $fax;
    }

    /**
     * Returns Website.
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * Sets Website.
     *
     * @maps Website
     */
    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

    /**
     * Returns Email.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     *
     * @maps Email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Founded.
     */
    public function getFounded(): ?int
    {
        return $this->founded;
    }

    /**
     * Sets Founded.
     *
     * @maps Founded
     */
    public function setFounded(?int $founded): void
    {
        $this->founded = $founded;
    }

    /**
     * Returns Club Color 1.
     */
    public function getClubColor1(): ?string
    {
        return $this->clubColor1;
    }

    /**
     * Sets Club Color 1.
     *
     * @maps ClubColor1
     */
    public function setClubColor1(?string $clubColor1): void
    {
        $this->clubColor1 = $clubColor1;
    }

    /**
     * Returns Club Color 2.
     */
    public function getClubColor2(): ?string
    {
        return $this->clubColor2;
    }

    /**
     * Sets Club Color 2.
     *
     * @maps ClubColor2
     */
    public function setClubColor2(?string $clubColor2): void
    {
        $this->clubColor2 = $clubColor2;
    }

    /**
     * Returns Club Color 3.
     */
    public function getClubColor3(): ?string
    {
        return $this->clubColor3;
    }

    /**
     * Sets Club Color 3.
     *
     * @maps ClubColor3
     */
    public function setClubColor3(?string $clubColor3): void
    {
        $this->clubColor3 = $clubColor3;
    }

    /**
     * Returns Nickname 1.
     */
    public function getNickname1(): ?string
    {
        return $this->nickname1;
    }

    /**
     * Sets Nickname 1.
     *
     * @maps Nickname1
     */
    public function setNickname1(?string $nickname1): void
    {
        $this->nickname1 = $nickname1;
    }

    /**
     * Returns Nickname 2.
     */
    public function getNickname2(): ?string
    {
        return $this->nickname2;
    }

    /**
     * Sets Nickname 2.
     *
     * @maps Nickname2
     */
    public function setNickname2(?string $nickname2): void
    {
        $this->nickname2 = $nickname2;
    }

    /**
     * Returns Nickname 3.
     */
    public function getNickname3(): ?string
    {
        return $this->nickname3;
    }

    /**
     * Sets Nickname 3.
     *
     * @maps Nickname3
     */
    public function setNickname3(?string $nickname3): void
    {
        $this->nickname3 = $nickname3;
    }

    /**
     * Returns Wikipedia Logo Url.
     */
    public function getWikipediaLogoUrl(): ?string
    {
        return $this->wikipediaLogoUrl;
    }

    /**
     * Sets Wikipedia Logo Url.
     *
     * @maps WikipediaLogoUrl
     */
    public function setWikipediaLogoUrl(?string $wikipediaLogoUrl): void
    {
        $this->wikipediaLogoUrl = $wikipediaLogoUrl;
    }

    /**
     * Returns Wikipedia Word Mark Url.
     */
    public function getWikipediaWordMarkUrl(): ?string
    {
        return $this->wikipediaWordMarkUrl;
    }

    /**
     * Sets Wikipedia Word Mark Url.
     *
     * @maps WikipediaWordMarkUrl
     */
    public function setWikipediaWordMarkUrl(?string $wikipediaWordMarkUrl): void
    {
        $this->wikipediaWordMarkUrl = $wikipediaWordMarkUrl;
    }

    /**
     * Returns Global Team Id.
     */
    public function getGlobalTeamId(): ?int
    {
        return $this->globalTeamId;
    }

    /**
     * Sets Global Team Id.
     *
     * @maps GlobalTeamId
     */
    public function setGlobalTeamId(?int $globalTeamId): void
    {
        $this->globalTeamId = $globalTeamId;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->players)) {
            $json['Players']              = $this->players;
        }
        if (isset($this->teamId)) {
            $json['TeamId']               = $this->teamId;
        }
        if (isset($this->areaId)) {
            $json['AreaId']               = $this->areaId;
        }
        if (isset($this->venueId)) {
            $json['VenueId']              = $this->venueId;
        }
        if (isset($this->key)) {
            $json['Key']                  = $this->key;
        }
        if (isset($this->name)) {
            $json['Name']                 = $this->name;
        }
        if (isset($this->fullName)) {
            $json['FullName']             = $this->fullName;
        }
        if (isset($this->active)) {
            $json['Active']               = $this->active;
        }
        if (isset($this->areaName)) {
            $json['AreaName']             = $this->areaName;
        }
        if (isset($this->venueName)) {
            $json['VenueName']            = $this->venueName;
        }
        if (isset($this->gender)) {
            $json['Gender']               = $this->gender;
        }
        if (isset($this->type)) {
            $json['Type']                 = $this->type;
        }
        if (isset($this->address)) {
            $json['Address']              = $this->address;
        }
        if (isset($this->city)) {
            $json['City']                 = $this->city;
        }
        if (isset($this->zip)) {
            $json['Zip']                  = $this->zip;
        }
        if (isset($this->phone)) {
            $json['Phone']                = $this->phone;
        }
        if (isset($this->fax)) {
            $json['Fax']                  = $this->fax;
        }
        if (isset($this->website)) {
            $json['Website']              = $this->website;
        }
        if (isset($this->email)) {
            $json['Email']                = $this->email;
        }
        if (isset($this->founded)) {
            $json['Founded']              = $this->founded;
        }
        if (isset($this->clubColor1)) {
            $json['ClubColor1']           = $this->clubColor1;
        }
        if (isset($this->clubColor2)) {
            $json['ClubColor2']           = $this->clubColor2;
        }
        if (isset($this->clubColor3)) {
            $json['ClubColor3']           = $this->clubColor3;
        }
        if (isset($this->nickname1)) {
            $json['Nickname1']            = $this->nickname1;
        }
        if (isset($this->nickname2)) {
            $json['Nickname2']            = $this->nickname2;
        }
        if (isset($this->nickname3)) {
            $json['Nickname3']            = $this->nickname3;
        }
        if (isset($this->wikipediaLogoUrl)) {
            $json['WikipediaLogoUrl']     = $this->wikipediaLogoUrl;
        }
        if (isset($this->wikipediaWordMarkUrl)) {
            $json['WikipediaWordMarkUrl'] = $this->wikipediaWordMarkUrl;
        }
        if (isset($this->globalTeamId)) {
            $json['GlobalTeamId']         = $this->globalTeamId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
