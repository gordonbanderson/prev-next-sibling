<?php declare(strict_types = 1);

namespace WebOfTalent\PrevNextSibling;

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Core\Extension;

/**
 * Class PrevNextSiblingExtension
 *
 * @package WebOfTalent\PrevNextSibling
 * @phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
 */
class PrevNextSiblingExtension extends Extension
{
    public function NextSibling(): ?\SilverStripe\ORM\DataObject
    {
        $where = "\"ParentID\" = {$this->owner->ParentID} AND \"Sort\" > {$this->owner->Sort}";

        return SiteTree::get()->where($where)->sort('"Sort"')->First();
    }

    
    public function PreviousSibling(): ?\SilverStripe\ORM\DataObject
    {
        $where = "\"ParentID\" = {$this->owner->ParentID} AND \"Sort\" < {$this->owner->Sort}";

        return SiteTree::get()->where($where)->sort('"Sort" DESC')->First();
    }
}
