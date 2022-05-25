<?php
class Task 
{
    private string $description;  // описание
    private DateTime $dateCreated; // дата создания
    private DateTime $dateUpdated; // дата обновления
    private DateTime $dateDone; // дата выполнения
    private int $priorite = 1;  // приоритет
    private bool $isDone = true; //завершено
    private User $user;
    private Array $comments = [];

    public function __construct(User $user, $description)
    {
        $this->user = $user;
        $this->description = $description;
        $this->dateCreated = new DateTime();

    }
    public function setDescription($description):void 
    {
        $this->description = $description;
        $this->setDateUpdated(new DateTime);
    }
    public function setDateCreated($dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }
    public function setDateUpdated($dateUpdated): void
    {
        $ $this->dateUpdated = $dateUpdated;
    }
    public function setDateDone($dateDone): void
    {
        $this->dateDone = $dateDone;
    }
    public function setPriorite($priorite): void
    {
        $this->priorite = $priorite;
    }
    public function setIsDone($isDone): void
    {
        $this->isDone = $isDone;
    }
    public function setUser($user): void
    {
        $this->user = $user;
    }
    public function setComment(Comment $comment): void
    {
        $this->comments[] = $comment;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
   
    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }
    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }
    public function getPriorite(): int
    {
        return $this->priorite;
    }
    public function getisDone(): bool
    {
        return $this->isDone;
    }
    public function getUser(): User
    {
        return $this->user;
    }
    public function getComments(): array
    {
        return $this->comments;
    }
    public function markAsDone(): void
    {
        $this->setIsDone(true);
        $this->setDateDone(new DateTime);
        $this->setDateUpdated(new DateTime);
    }
}

