<?php

/*
 * This file is part of a XenForo add-on.
 *
 * (c) Jeremy P <http://xenforo.com/community/members/jeremy-p.450/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jrahmy\PollsList\Model;

/**
 * Extends \XenForo_Model_Poll with custom methods.
 *
 * @author Jeremy P <http://xenforo.com/community/members/jeremy-p.450/>
 */
class Poll extends XFCP_Poll
{
    /**
     * Grabs most recent polls.
     *
     * @param string $max The maximum number of polls to fetch
     *
     * @return array An array of recent polls
     */
    public function getRecentPolls($max = 10)
    {
        return $this->_getDb()->fetchAll(
            "SELECT *
                FROM xf_poll
                ORDER BY poll_id DESC
                LIMIT {$max}"
        );
    }
}
