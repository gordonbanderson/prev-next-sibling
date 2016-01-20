<?php
/**
 * Previous and next sibling helper methods.
 */
class PrevNextSiblingExtension extends DataExtension
{
    public function NextSibling()
    {
        $where = "ParentID = {$this->owner->ParentID} AND Sort > {$this->owner->Sort}";
        $result = SiteTree::get()->where($where)->sort('Sort')->First();
        return $result;
    }

    public function PreviousSibling()
    {
        $where = "ParentID = {$this->owner->ParentID} AND Sort < {$this->owner->Sort}";
        return SiteTree::get()->where($where)->sort('Sort DESC')->First();
    }
}
