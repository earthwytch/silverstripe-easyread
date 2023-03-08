<?php

namespace Earthwytch\SilverStripeEasyRead;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Core\ClassInfo;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;

class EasyReadDocument extends DataObject
{
    private static $table_name = 'EasyReadDocument';

    private static $db = [
        "Title" => "Text",
    ];

    private static $has_one = [
        "CoverImage" => Image::class,
        "Page" => Page::class,
    ];

    private static $owns = [
        "CoverImage"
    ];

    private static $summary_fields = [
        'Title' => 'Title',
        'CoverImage.CMSThumbnail' => 'CoverImage',
    ];

    public static function lineTypeMap()
    {
        $lineTypes = [];

        // get all the subclasses of EasyReadLine
        $classes = ClassInfo::subclassesFor(EasyReadLine::class);
        $baseClassIndex = array_search(EasyReadLine::class, $classes);
        if ($baseClassIndex !== false) {
            unset($classes[$baseClassIndex]);
        }

        // add them all to the array with friendly names to display in drop-dwon
        foreach ($classes as $class)
        {
            $lineTypes[$class] = EasyReadLine::singleton($class)->line_type;
        }
        return $lineTypes;
    }

    public function canView($member = null)
    {
        return Permission::check('CMS_ACCESS', 'any', $member);
    }

    public function canEdit($member = null)
    {
        return Permission::check('CMS_ACCESS', 'any', $member);
    }

    public function canDelete($member = null)
    {
        return Permission::check('CMS_ACCESS', 'any', $member);
    }

    public function canCreate($member = null, $context = [])
    {
        return Permission::check('CMS_ACCESS', 'any', $member);
    }
}
