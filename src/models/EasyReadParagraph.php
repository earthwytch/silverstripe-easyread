<?php

namespace Earthwytch\SilverStripeEasyRead;

use SilverStripe\Security\Permission;

class EasyReadParagraph extends EasyReadLine
{
<<<<<<< HEAD
<<<<<<< HEAD
    private static $table_name = 'EasyReadHeading';
=======
    private static $table_name = 'EasyReadParagraph';
>>>>>>> 0e2e4d7... Adding tests and package requirements
=======
    private static $table_name = 'EasyReadParagraph';
>>>>>>> 4602a6002b68228e35437259a171126851c9ef4e
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
