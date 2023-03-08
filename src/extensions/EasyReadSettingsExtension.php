<?php

namespace Earthwytch\SilverStripeEasyRead;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\LiteralField;
use SilverStripe\ORM\DataExtension;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class EasyReadSettingsExtension extends DataExtension
{

    private static $db = [
        "EasyReadTitle" => "Varchar(100)",
    ];

    private static $has_many = [
        'EasyReadLines' => EasyReadLine::class,
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.EasyRead', [
            $easyReadTitle = LiteralField::create("SettingsHeading", "Easy Read settings"),
        ]);

    }
}
