<?php

declare(strict_types=1);

namespace Oqq\Broetchen\Service;

use Oqq\Broetchen\Domain\User\{Credentials, User, UserId};
use Oqq\Broetchen\Command\{CreateUser, SetPassword};

interface UserServiceInterface
{
    public function getUserWithId(UserId $userId): User;

    public function getUserForCredentials(Credentials $credentials): User;

    public function AddUser(CreateUser $user) : bool;
    
    public function SetPassword(SetPassword $setPw) : bool;
}
