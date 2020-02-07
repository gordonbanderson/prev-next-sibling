<?php

namespace WebOfTalent\PrevNextSibling;

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Core\Extension;

class PrevNextSiblingExtension extends Extension
{
    public function NextSibling()
    {
        $where = "\"ParentID\" = {$this->owner->ParentID} AND \"Sort\" > {$this->owner->Sort}";
        $result = SiteTree::get()->where($where)->sort('"Sort"')->First();
        return $result;
    }

    public function PreviousSibling()
    {
        $where = "\"ParentID\" = {$this->owner->ParentID} AND \"Sort\" < {$this->owner->Sort}";
        return SiteTree::get()->where($where)->sort('"Sort" DESC')->First();
    }
}
