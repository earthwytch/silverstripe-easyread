<?php

namespace Earthwytch\SilverStripeEasyRead;

use Page;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;

class EasyReadLine extends DataObject
{
    private static $table_name = 'EasyReadLines';

    private static $db = [
        'Content' => 'HTMLText',
        'SortOrder' => 'Int',
        'Class' => 'Text',
    ];

    private static $has_one = [
        "Document" => EasyReadDocument::class,
    ];

    private static $summary_fields = [
        'Content.Summary' => 'Content',
        'Class' => 'Type',
    ];

    public function getCMSFields()
    {
        $fields = FieldList::create(
            HTMLEditorField::create("Content", "Add the content for this line")->setRows(5),
        );
        return $fields;
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
