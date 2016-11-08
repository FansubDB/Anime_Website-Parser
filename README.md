# FansubDB.com-Parser
Parse the FansubDB.com website

Based on [SimpleHTMLDom](https://sourceforge.net/projects/simplehtmldom/). Thanks for this project.

## How to use it?

Visit an page on [https://fansubdb.com](https://fansubdb.com). Choose a wiki page and show the source code of the page.
Copy the table content from the line `<table class="wikitable" style="width:100%">` to `</td></tr></table>` included.
Paste that on the file `fansubdb.html` present on this repo.

Visit the php page on your php server (the php server can be localhost or not!).
