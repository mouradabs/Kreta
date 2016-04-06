<?php

/*
 * This file is part of the Kreta package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kreta\Component\Notification\Model;

use Kreta\Component\Core\Model\Abstracts\AbstractModel;
use Kreta\Component\Notification\Model\Interfaces\NotificationInterface;
use Kreta\Component\Project\Model\Interfaces\ProjectInterface;
use Kreta\Component\User\Model\Interfaces\UserInterface;

/**
 * Class Notification.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class Notification extends AbstractModel implements NotificationInterface
{
    /**
     * The date.
     *
     * @var \DateTime
     */
    protected $date;

    /**
     * The description.
     *
     * @var string
     */
    protected $description;

    /**
     * The project.
     *
     * @var \Kreta\Component\Project\Model\Interfaces\ProjectInterface
     */
    protected $project;

    /**
     * Boolean that checks if the notification has been read or not.
     *
     * @var bool
     */
    protected $read;

    /**
     * The resource url.
     *
     * @var string
     */
    protected $resourceUrl;

    /**
     * The title.
     *
     * @var string
     */
    protected $title;

    /**
     *  The type of notification.
     *
     * @var string
     */
    protected $type;

    /**
     * The web url.
     *
     * @var string
     */
    protected $webUrl;

    /**
     * The user.
     *
     * @var \Kreta\Component\User\Model\Interfaces\UserInterface
     */
    protected $user;

    /**
     * {@inheritdoc}
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * {@inheritdoc}
     */
    public function setDate(\Datetime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * {@inheritdoc}
     */
    public function setProject(ProjectInterface $project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isRead()
    {
        return $this->read;
    }

    /**
     * {@inheritdoc}
     */
    public function setRead($read)
    {
        $this->read = $read;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceUrl()
    {
        return $this->resourceUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function setResourceUrl($url)
    {
        $this->resourceUrl = $url;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * {@inheritdoc}
     */
    public function setUser(UserInterface $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getWebUrl()
    {
        return $this->webUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function setWebUrl($url)
    {
        $this->webUrl = $url;

        return $this;
    }
}
