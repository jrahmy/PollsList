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
                'library/Jrahmy/PollsList/ControllerPublic/Polls.php' => '221c26b6ff07b830a95f7f3648915469',
                'library/Jrahmy/PollsList/Listener.php' => '2368c8d509ca1dc5c90be12e4b5bcc11',
                'library/Jrahmy/PollsList/Route/Prefix/Polls.php' => '16fcef73567011be5e638d0c39326930',
                'library/Jrahmy/PollsList/Model/Poll.php' => 'b33a8016ef46db260e3e92ca989b42e2',

        ];
    }
}
