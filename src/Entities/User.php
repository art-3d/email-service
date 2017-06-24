<?php
namespace Scutum\Entities;

use Symfony\Component\Validator\Constraint as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Scutum\Repositories\UserRepository")
 * @ORM\Table(
 *     options={
 *          "charset": "utf8",
 *          "collate": "utf8_unicode_ci",
 *          "temporary": false,
 *          "engine": "InnoDB"
 *     },
 *     name="users"
 * )
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_partner", type="string", nullable=true)
     */
    private $idPartner;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=100)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=54)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=54)
     */
    private $email_address;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100)
     */
    private $token;

    /**
     * @var int
     *
     * @ORM\Column(name="id_role", type="int", nullable=true)
     */
    private $idRole;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=100, nullable=true)
     */
    private $lastname;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_Deleted", type="bool", default=false)
     */
    private $isDeleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_birth", type="datetime", nullable=true)
     */
    private $dateBirth;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime")
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_updated", type="datetime", nullable=true)
     */
    private $dateUpdated;
}
