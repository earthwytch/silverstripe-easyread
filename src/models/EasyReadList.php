<?php

namespace Earthwytch\SilverStripeEasyRead;

use SilverStripe\Security\Permission;

<<<<<<< HEAD
class EasyReadDefinition extends EasyReadLine
{
    private static $table_name = 'EasyReadHeading';
    private static $line_type = 'Paragraph';
=======
class EasyReadList extends EasyReadLine
{
    private static $table_name = 'EasyReadList';
    private static $line_type = 'List';
>>>>>>> 0e2e4d7... Adding tests and package requirements

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
