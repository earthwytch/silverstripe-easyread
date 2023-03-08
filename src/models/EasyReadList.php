<?php

namespace Earthwytch\SilverStripeEasyRead;

use SilverStripe\Security\Permission;

class EasyReadDefinition extends EasyReadLine
{
    private static $table_name = 'EasyReadHeading';
    private static $line_type = 'Paragraph';

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
