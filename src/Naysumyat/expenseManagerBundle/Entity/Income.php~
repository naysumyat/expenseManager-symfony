<?php

namespace Naysumyat\expenseManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Income
 *
 * @ORM\Table(name="income")
 * @ORM\Entity(repositoryClass="Naysumyat\expenseManagerBundle\Entity\IncomeRepository")
 */
class Income
{
    /**
     * @var integer
     *
     * @ORM\Column(name="income_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="income_title", type="string", length=255)
     */
    private $incomeTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="income_amount", type="decimal")
     */
    private $incomeAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="income_date", type="date")
     */
    private $incomeDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="income_created_date", type="datetimetz")
     */
    private $incomeCreatedDate;


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
     * Set incomeTitle
     *
     * @param string $incomeTitle
     * @return Income
     */
    public function setIncomeTitle($incomeTitle)
    {
        $this->incomeTitle = $incomeTitle;

        return $this;
    }

    /**
     * Get incomeTitle
     *
     * @return string 
     */
    public function getIncomeTitle()
    {
        return $this->incomeTitle;
    }

    /**
     * Set incomeAmount
     *
     * @param string $incomeAmount
     * @return Income
     */
    public function setIncomeAmount($incomeAmount)
    {
        $this->incomeAmount = $incomeAmount;

        return $this;
    }

    /**
     * Get incomeAmount
     *
     * @return string 
     */
    public function getIncomeAmount()
    {
        return $this->incomeAmount;
    }

    /**
     * Set incomeDate
     *
     * @param \DateTime $incomeDate
     * @return Income
     */
    public function setIncomeDate($incomeDate)
    {
        $this->incomeDate = $incomeDate;

        return $this;
    }

    /**
     * Get incomeDate
     *
     * @return \DateTime 
     */
    public function getIncomeDate()
    {
        return $this->incomeDate;
    }

    /**
     * Set incomeCreatedDate
     *
     * @param \DateTime $incomeCreatedDate
     * @return Income
     */
    public function setIncomeCreatedDate($incomeCreatedDate)
    {
        $this->incomeCreatedDate = $incomeCreatedDate;

        return $this;
    }

    /**
     * Get incomeCreatedDate
     *
     * @return \DateTime 
     */
    public function getIncomeCreatedDate()
    {
        return $this->incomeCreatedDate;
    }
}
