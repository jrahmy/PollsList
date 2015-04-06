<?php

/*
 * This file is part of a XenForo add-on.
 *
 * (c) Jeremy P <http://xenforo.com/community/members/jeremy-p.450/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jrahmy\PollsList;

/**
 * Filesums for XenForo File Health Check.
 *
 * @author Jeremy P <http://xenforo.com/community/members/jeremy-p.450/>
 */
class FileSums
{
    /**
     * Provides an associative array of filenames to hashes.
     *
     * @return array An associative array of filesums
     */
    public static function getHashes()
    {
        return [
                'library/Jrahmy/PollsList/ControllerPublic/Polls.php' => 'ae556ff88221c950b065179a7488c4a0',
                'library/Jrahmy/PollsList/Listener.php' => '068dabd09829bbafd7df2918a73866b8',
                'library/Jrahmy/PollsList/Route/Prefix/Polls.php' => 'e92a03f7229147b72b6bff9cbcb96bd8',
                'library/Jrahmy/PollsList/Model/Poll.php' => 'f642073ba5e6f5a148af2befaa6f724a',

        ];
    }
}
