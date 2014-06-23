<div class="panel" id="prevNextPanel">
<div class="row" id="prevNextSiblingNav">
<div class="small-6 columns prev"><% if $PreviousSibling %><a href="$PreviousSibling.Link"><i class="fi-arrow-left"></i>$PreviousSibling.Title</a><% else %>&nbsp;<% end_if %></div>
<div class="small-6 columns next"><% if $NextSibling %><a class="fright" href="$NextSibling.Link">$NextSibling.Title<i class="fi-arrow-right"></i></a><% end_if %></div>
</div>
</div>