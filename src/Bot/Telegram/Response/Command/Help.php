<?php

namespace Bot\Telegram\Response\Command;

use Telegram as B;
use Bot\Telegram\Lang;
use Bot\Telegram\Contracts\EventContract;
use Bot\Telegram\Events\EventRecognition as Event;
use Bot\Telegram\Abstraction\Command as CommandAbstraction;

/**
 * @author Ammar Faizi <ammarfaizi2@gmail.com> https://www.facebook.com/ammarfaizi2
 * @license MIT
 */
class Help extends CommandAbstraction implements EventContract
{

    /**
     * "/help" command.
     *
     */
    public function help()
    {
        return B::bg()::sendMessage(
            [
                "chat_id"               => $this->e['chat_id'],
                "text"                  => Lang::get("help"),
                "reply_to_message_id"   => $this->e['msg_id'],
                "parse_mode"            => "HTML"
            ]
        );
    }
}
