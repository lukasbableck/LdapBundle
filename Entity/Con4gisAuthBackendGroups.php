<?php
/**
 * Created by PhpStorm.
 * User: mdv
 * Date: 11.05.20
 * Time: 11:09
 */

namespace con4gis\AuthBundle\Entity;

use \Doctrine\ORM\Mapping as ORM;

/**
 * Class Service
 *
 * @ORM\Entity
 * @ORM\Table(name="tl_c4g_auth_be_groups")
 * @package con4gis\AuthBundle\Entity
 */
class Con4gisAuthBackendGroups
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id", type="integer")
     */
    protected $id = 0;

    /**
     * @var int
     * @ORM\Column(name="tstamp", type="integer")
     */
    protected $tstamp = '';

    /**
     * @var string
     * @ORM\Column(name="bindDn", type="string")
     */
    protected $bindDn = '';

    /**
     * @var string
     * @ORM\Column(name="baseDn", type="string")
     */
    protected $baseDn = '';

    /**
     * @var string
     * @ORM\Column(name="password", type="string")
     */
    protected $password = '';

    /**
     * @var string
     * @ORM\Column(name="filter", type="string")
     */
    protected $filter = '';

    /**
     * @var string
     * @ORM\Column(name="encryption", type="string")
     */
    protected $encryption = '';

    /**
     * @var string
     * @ORM\Column(name="server", type="string")
     */
    protected $server = '';

    /**
     * @var string
     * @ORM\Column(name="port", type="string")
     */
    protected $port = '';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getBindDn(): string
    {
        return $this->bindDn ? $this->bindDn : '';
    }

    /**
     * @param string $bindDn
     */
    public function setBindDn(string $bind_dn)
    {
        $this->bindDn = $bindDn;
    }

    /**
     * @return string
     */
    public function getBaseDn(): string
    {
        return $this->baseDn ? $this->baseDn : '';
    }

    /**
     * @param string $baseDn
     */
    public function setBaseDn(string $baseDn)
    {
        $this->baseDn = $baseDn;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password ? $this->password : '';
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getFilter(): string
    {
        return $this->filter ? $this->filter : '';
    }

    /**
     * @param int $filter
     */
    public function setFilter(int $filter)
    {
        $this->filter = $filter;
    }

    /**
     * @return string
     */
    public function getTstamp(): int
    {
        return $this->tstamp ? $this->tstamp : '';
    }

    /**
     * @param int $tstamp
     */
    public function setTstamp(int $tstamp)
    {
        $this->tstamp = $tstamp;
    }

    /**
     * @return string
     */
    public function getEncryption(): string
    {
        return $this->encryption ? $this->encryption : '';
    }

    /**
     * @param string $Encryption
     */
    public function setEncryption(int $encryption)
    {
        $this->encryption = $encryption;
    }

    /**
     * @return string
     */
    public function getServer(): string
    {
        return $this->server ? $this->server : '';
    }

    /**
     * @param int $server
     */
    public function setServer(int $server)
    {
        $this->server = $server;
    }

    /**
     * @return string
     */
    public function getPort(): string
    {
        return $this->port ? $this->port : '';
    }

    /**
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->port = $port;
    }
}