<?php

namespace Earthwytch\SilverStripeEasyRead;

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
        $fields->addFieldsToTab('Root.EasyRead', [
            $easyReadTitle = TextField::create("EasyReadDocument.Title", "EasyRead title"),

        ]);
    }
}
