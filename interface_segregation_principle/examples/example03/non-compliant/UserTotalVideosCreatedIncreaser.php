<?php

class UserTotalVideosCreatedIncreaser 
{
    // ...
    public function __invoke(UserId $id)
    {
        $user = $this->finder->__invoke($id);
           
        $user->increaseTotalVideosCreated();
           
        $this->repository->save($user);
        $this->repository->flush($user);
    }
}
