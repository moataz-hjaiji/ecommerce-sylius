<?php


namespace App\EventListener;

use App\Entity\ImageInterface;
use Sylius\Component\Core\Model\ImageAwareInterface;
use Sylius\Component\Core\Uploader\ImageUploaderInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Webmozart\Assert\Assert;

class ImageUploader
{
    private ImageUploaderInterface $uploader;

    public function __construct(ImageUploaderInterface $uploader)
    {
        $this->uploader = $uploader;
    }
    public function upload(GenericEvent $event): void
    {
        $subject = $event->getSubject();
        Assert::isInstanceOf($subject,ImageInterface::class);
        if($subject->hasFile()){
            $this->uploader->upload($subject);
        }
    }
    public function edit(GenericEvent $event): void
    {
        $subject = $event->getSubject();
        if($subject->hasFile())
        {
            $this->uploader->remove($subject->getPath());
            Assert::isInstanceOf($subject,ImageInterface::class);
            $this->uploader->upload($subject);
        }
    }
    public function delete(GenericEvent $event): void
    {
        $subject = $event->getSubject();
        if($subject->hasFile()){
            $this->uploader->remove($subject->getPath());
        }
    }
}
