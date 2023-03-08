<?php

namespace Earthwytch\SilverStripeEasyRead;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;
use Symbiote\GridFieldExtensions\GridFieldAddNewMultiClass;

class EasyReadExtension extends DataExtension
{

    private static $has_one = [
        'EasyReadDocument' => EasyReadDocument::class,
    ];

    public function updateCMSFields(FieldList $fields)
    {

        $fields = FieldList::create(
            $easyReadTitle = TextField::create("EasyReadDocument.Title", "Easy Read title"),
            $coverImage = UploadField::create("EasyReadDocument.CoverImage", "Cover image")
                ->setAllowedMaxFileNumber(1)
                ->setAllowedFileCategories("image")
        );

        if(isset(EasyReadDocument::config()->image_folder)) {
            $coverImage->setFolderName(EasyReadDocument::config()->image_folder);
        }

    }
}
