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
     * @return array An associative array of filesums.
     */
    public static function getHashes()
    {
        return [
                'library/Jrahmy/PollsList/ControllerPublic/Polls.php' => 'e97698f8b97982c87a35ca2f48b42d34',
                'library/Jrahmy/PollsList/Listener.php' => '8625687a252220d5d33b0d4f55c321d0',
                'library/Jrahmy/PollsList/Route/Prefix/Polls.php' => '2f92ee1b34e42ca0543ee6f2fe928afd',
                'library/Jrahmy/PollsList/Model/Poll.php' => 'f642073ba5e6f5a148af2befaa6f724a',

        ];
    }
}
