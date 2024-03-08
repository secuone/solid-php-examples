<?php

final class UserRepositoryMySql extends Repository implements UserRepository
{
    public function save(User $user): void
    {
        $this->entityManager()->persist($user);    
        $this->entityManager()->flush($user);
    }

    public function saveAll(Users $users)
    {
        each($this->persister(),$users);
    }
}
