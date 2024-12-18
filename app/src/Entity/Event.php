<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[Groups("eventDetail")]
#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["userDetail", "invitation"])]
    private ?int $id = null;

    #[Assert\NotBlank(message: "Le nom de l'évènement est obligatoire")]
    #[ORM\Column(length: 255)]
    #[Groups("userDetail")]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'events')]
    private Collection $users;

    #[ORM\ManyToOne(inversedBy: 'eventsOrganize')]
    private ?User $organizer = null;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: GiftList::class)]
    private Collection $giftList;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: Santa::class)]
    private Collection $santas;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: Invitation::class)]
    private Collection $invitations;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->giftList = new ArrayCollection();
        $this->santas = new ArrayCollection();
        $this->invitations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        $this->users->removeElement($user);

        return $this;
    }

    public function getOrganizer(): ?User
    {
        return $this->organizer;
    }

    public function setOrganizer(?User $organizer): static
    {
        $this->organizer = $organizer;

        return $this;
    }

    /**
     * @return Collection<int, GiftList>
     */
    public function getGiftList(): Collection
    {
        return $this->giftList;
    }

    public function addGiftList(GiftList $giftList): static
    {
        if (!$this->giftList->contains($giftList)) {
            $this->giftList->add($giftList);
            $giftList->setEvent($this);
        }

        return $this;
    }

    public function removeGiftList(GiftList $giftList): static
    {
        if ($this->giftList->removeElement($giftList)) {
            // set the owning side to null (unless already changed)
            if ($giftList->getEvent() === $this) {
                $giftList->setEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Santa>
     */
    public function getSantas(): Collection
    {
        return $this->santas;
    }

    public function addSanta(Santa $santa): static
    {
        if (!$this->santas->contains($santa)) {
            $this->santas->add($santa);
            $santa->setEvent($this);
        }

        return $this;
    }

    public function removeSanta(Santa $santa): static
    {
        if ($this->santas->removeElement($santa)) {
            // set the owning side to null (unless already changed)
            if ($santa->getEvent() === $this) {
                $santa->setEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Invitation>
     */
    public function getInvitations(): Collection
    {
        return $this->invitations;
    }

    public function addInvitation(Invitation $invitation): static
    {
        if (!$this->invitations->contains($invitation)) {
            $this->invitations->add($invitation);
            $invitation->setEvent($this);
        }

        return $this;
    }

    public function removeInvitation(Invitation $invitation): static
    {
        if ($this->invitations->removeElement($invitation)) {
            // set the owning side to null (unless already changed)
            if ($invitation->getEvent() === $this) {
                $invitation->setEvent(null);
            }
        }

        return $this;
    }
}
