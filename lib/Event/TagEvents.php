<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Event;

final class TagEvents
{
    /**
     * @Event("Pimcore\Event\Model\TagEvent")
     *
     * @var string
     */
    const PRE_ADD_TO_ELEMENT = 'pimcore.tag.preAddToElement';

    /**
     * @Event("Pimcore\Event\Model\TagEvent")
     *
     * @var string
     */
    const POST_ADD_TO_ELEMENT = 'pimcore.tag.postAddToElement';

    /**
     * @Event("Pimcore\Event\Model\TagEvent")
     *
     * @var string
     */
    const PRE_REMOVE_FROM_ELEMENT = 'pimcore.tag.preRemoveFromElement';

    /**
     * @Event("Pimcore\Event\Model\TagEvent")
     *
     * @var string
     */
    const POST_REMOVE_FROM_ELEMENT = 'pimcore.tag.postRemoveFromElement';

    /**
     * @Event("Pimcore\Event\Model\TagEvent")
     *
     * @var string
     */
    const PRE_ADD = 'pimcore.tag.preAdd';

    /**
     * @Event("Pimcore\Event\Model\TagEvent")
     *
     * @var string
     */
    const POST_ADD = 'pimcore.tag.postAdd';

    /**
     * @Event("Pimcore\Event\Model\TagEvent")
     *
     * @var string
     */
    const POST_ADD_FAILURE = 'pimcore.tag.postAddFailure';

    /**
     * @Event("Pimcore\Event\Model\TagEvent")
     *
     * @var string
     */
    const PRE_UPDATE = 'pimcore.tag.preUpdate';

    /**
     * @Event("Pimcore\Event\Model\TagEvent")
     *
     * @var string
     */
    const POST_UPDATE = 'pimcore.tag.postUpdate';

    /**
     * @Event("Pimcore\Event\Model\TagEvent")
     *
     * @var string
     */
    const POST_UPDATE_FAILURE = 'pimcore.tag.postUpdateFailure';


    /**
     * @Event("Pimcore\Event\Model\TagEvent")
     *
     * @var string
     */
    const PRE_DELETE = 'pimcore.tag.preDelete';

    /**
     * @Event("Pimcore\Event\Model\TagEvent")
     *
     * @var string
     */
    const POST_DELETE = 'pimcore.tag.postDelete';

    /**
     * @Event("Pimcore\Event\Model\TagEvent")
     *
     * @var string
     */
    const POST_DELETE_FAILURE = 'pimcore.tag.postDeleteFailure';


}
