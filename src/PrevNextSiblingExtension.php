<?php

declare(strict_types = 1);

namespace WebOfTalent\PrevNextSibling;

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Core\Extension;
use SilverStripe\ORM\DataObject;

// @phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps

/**
 * @property int $ParentID database ID of the parent object
 * @property int $Sort a number to indicate the sort order, which should be unique
 */
class PrevNextSiblingExtension extends Extension
{
    // @phpstan-ignore-next-line
    public function NextSibling(): ?DataObject
    {
        // @phpstan-ignore-next-line
        $where = "\"ParentID\" = {$this->getOwner()->ParentID} AND \"Sort\" > {$this->getOwner()->Sort}";

        return SiteTree::get()->where($where)->sort('"Sort"')->first();
    }

    // @phpstan-ignore-next-line
    public function PreviousSibling(): ?DataObject
    {
        // @phpstan-ignore-next-line
        $where = "\"ParentID\" = {$this->getOwner()->ParentID} AND \"Sort\" < {$this->getOwner()->Sort}";

        return SiteTree::get()->where($where)->sort('"Sort" DESC')->first();
    }
}
