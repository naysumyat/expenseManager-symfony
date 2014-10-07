<?php

namespace Naysumyat\expenseManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Setting
 *
 * @ORM\Table(name="settings")
 * @ORM\Entity(repositoryClass="Naysumyat\expenseManagerBundle\Entity\SettingRepository")
 */
class Setting
{
    /**
     * @var integer
     *
     * @ORM\Column(name="setting_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="setting_name", type="string", length=255)
     */
    private $settingName;

    /**
     * @var string
     *
     * @ORM\Column(name="setting_value", type="text")
     */
    private $settingValue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="setting_created_date", type="datetimetz")
     */
    private $settingCreatedDate;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set settingName
     *
     * @param string $settingName
     * @return Setting
     */
    public function setSettingName($settingName)
    {
        $this->settingName = $settingName;

        return $this;
    }

    /**
     * Get settingName
     *
     * @return string 
     */
    public function getSettingName()
    {
        return $this->settingName;
    }

    /**
     * Set settingValue
     *
     * @param string $settingValue
     * @return Setting
     */
    public function setSettingValue($settingValue)
    {
        $this->settingValue = $settingValue;

        return $this;
    }

    /**
     * Get settingValue
     *
     * @return string 
     */
    public function getSettingValue()
    {
        return $this->settingValue;
    }

    /**
     * Set settingCreatedDate
     *
     * @param \DateTime $settingCreatedDate
     * @return Setting
     */
    public function setSettingCreatedDate($settingCreatedDate)
    {
        $this->settingCreatedDate = $settingCreatedDate;

        return $this;
    }

    /**
     * Get settingCreatedDate
     *
     * @return \DateTime 
     */
    public function getSettingCreatedDate()
    {
        return $this->settingCreatedDate;
    }
}
