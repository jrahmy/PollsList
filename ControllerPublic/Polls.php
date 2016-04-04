<?php

/*
* This file is part of a XenForo add-on.
*
* (c) Jeremy P <http://xenforo.com/community/members/jeremy-p.450/>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Jrahmy\PollsList\ControllerPublic;

/**
* A controller for polls.
*
* @author Jeremy P <http://xenforo.com/community/members/jeremy-p.450/>
*/
class Polls extends \XenForo_ControllerPublic_Abstract
{
    /**
     * Displays a list of recent polls.
     *
     * @return \XenForo_ControllerResponse_Abstract
     */
    public function actionIndex()
    {
        $this->canonicalizeRequestUrl(\XenForo_Link::buildPublicLink('polls'));

        // grab options
        $max    = \XenForo_Application::getOptions()->jrahmy_pollsList_max;
        // grab polls, with some extra to cushion any hidden ones
        $polls  = $this->getPollModel()->getRecentPolls($max * 2);

        // permissions stuff
        $ftpHelper          = $this->getHelper('ForumThreadPost');
        $visitor            = \XenForo_Visitor::getInstance();
        $threadFetchOptions = [
            'readUserId' => $visitor['user_id'],
            'watchUserId' => $visitor['user_id']
        ];
        $forumFetchOptions  = ['readUserId' => $visitor['user_id']];

        $finals = [];
        foreach ($polls as $poll) {
            if (count($finals) >= $max) {
                break;
            }

            try {
                // get thread data for poll
                // throws exception if the user can't view the thread
                list($thread, $forum) = $ftpHelper->assertThreadValidAndViewable(
                    $poll['content_id'],
                    $threadFetchOptions,
                    $forumFetchOptions
                );

                // get user data for thread
                $poll['userInfo'] = $this->getUserModel()
                    ->getUserById($thread['user_id']);

                // put the lime in the coconut
                $finals[] = array_merge_recursive($poll, $thread);
            } catch (\XenForo_ControllerResponse_Exception $e) {
                // no johnny! don't do it!
            };
        }

        $viewParams = [
            'polls'      => $finals,
            'pollsTotal' => count($finals)
        ];

        return $this->responseView(
            'Jrahmy\PollsList\ViewPublic\Polls',
            'jrahmy_pollsList_list',
            $viewParams
        );
    }

    /**
     * Defines session activity details for this controller.
     *
     * @param array $activities The activity information
     *
     * @return \XenForo_Phrase The session activity details
     */
    public static function getSessionActivityDetailsForList(array $activities)
    {
        return new \XenForo_Phrase('jrahmy_pollsList_viewing_recent_polls');
    }

    /**
     * @return \XenForo_Model_Poll
     */
    protected function getPollModel()
    {
        return $this->getModelFromCache('XenForo_Model_Poll');
    }

    /**
     * @return \XenForo_Model_Thread
     */
    protected function getThreadModel()
    {
        return $this->getModelFromCache('XenForo_Model_Thread');
    }

    /**
     * @return \XenForo_Model_User
     */
    protected function getUserModel()
    {
        return $this->getModelFromCache('XenForo_Model_User');
    }
}
