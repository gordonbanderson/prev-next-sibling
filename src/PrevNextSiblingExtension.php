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
    /** @phpstan-ignore-next-line */
    public function NextSibling(): ?\SilverStripe\ORM\DataObject
    {
        $where = "\"ParentID\" = {$this->owner->ParentID} AND \"Sort\" > {$this->owner->Sort}";

        return SiteTree::get()->where($where)->sort('"Sort"')->first();
    }


    /** @phpstan-ignore-next-line */
    public function PreviousSibling(): ?\SilverStripe\ORM\DataObject
    {
        $where = "\"ParentID\" = {$this->owner->ParentID} AND \"Sort\" < {$this->owner->Sort}";

        return SiteTree::get()->where($where)->sort('"Sort" DESC')->first();
    }
}
