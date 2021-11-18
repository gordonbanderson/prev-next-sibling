<?php

declare(strict_types = 1);

namespace WebOfTalent\PrevNextSibling;

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Core\Extension;
use SilverStripe\ORM\DataObject;

// @phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
class PrevNextSiblingExtension extends Extension
{
    public function NextSibling(): DataObject
    {
        $where = "\"ParentID\" = {$this->owner->ParentID} AND \"Sort\" > {$this->owner->Sort}";

        return SiteTree::get()->where($where)->sort('"Sort"')->First();
    }


    public function PreviousSibling(): DataObject
    {
        $where = "\"ParentID\" = {$this->owner->ParentID} AND \"Sort\" < {$this->owner->Sort}";

        return SiteTree::get()->where($where)->sort('"Sort" DESC')->First();
    }
}
